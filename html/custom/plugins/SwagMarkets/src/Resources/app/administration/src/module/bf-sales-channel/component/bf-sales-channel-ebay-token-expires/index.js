import template from './bf-sales-channel-ebay-token-expires.html.twig';

const {Component} = Shopware;
Component.register('bf-sales-channel-ebay-token-expires', {
    template,
    inject: [
        'BfSalesChannelService',
        'BfConnectionAssistantService'
    ],
    props: {
        salesChannel: null,
        clientRdy: false
    },
    data() {
        return {
            showTokenCard: false,
            isLoading: true,
            oAuthTokenDate: '<span style="color: red">' + this.$tc('bf-sales-channel.detail.ebayExpireTokenOAuthNotAvailable') + '</span>',
            authTokenDate: '<span style="color: red">' + this.$tc('bf-sales-channel.detail.ebayExpireTokenAuthNotAvailable') + '</span>',
            errorLoadingTokens: false,
            tokenLink: '',
            oAuthTokenLink: '',
            errorAuthTokenLink: false,
            errorOAuthTokenLink: false
        }
    },
    watch: {
        salesChannel: function (salesChannel, oldSalesChannel) {
            if (oldSalesChannel === null && salesChannel !== null && this.$route.meta.$module.getSalesChannelByTypeId(salesChannel.typeId) === 'ebay') {
                this.showTokenCard = true;
                this.getEbayTokenLink();
                this.getEbayOAuthToken();
                this.loadData();
            }
        }
    },
    methods: {
        async loadData() {
            await this.BfSalesChannelService.getEbayTokenExpires().then((response) => {
                if (response.status === 200 && response.data.success === true) {
                    let data = response.data.data;
                    if (data.hasOwnProperty('oauthToken')) {
                        if (data.oauthToken.tokenExpired.length > 0){
                            this.oAuthTokenDate = '<span style="color: green">' + data.oauthToken.tokenExpired + data.oauthToken.error + '</span>';
                        }
                    }
                    if (data.hasOwnProperty('token')) {
                        if (data.token.tokenExpired.length > 0) {
                            this.authTokenDate = '<span style="color: green">' + data.token.tokenExpired + data.token.error + '</span>';
                        }
                    }
                }
            }).catch(() => {
                this.errorLoadingTokens = true;
            });
            this.isLoading = false;
        },
        async getEbayTokenLink() {
            await this.BfConnectionAssistantService.ebayConnectLink().then((response) => {
                if (response.data.success === true && response.status === 200) {
                    this.tokenLink = decodeURIComponent(response.data.data.irpLink);
                    this.tokenLink = this.tokenLink.replace('mand=', 'mand%3D')
                    this.tokenLink = this.tokenLink.replace('&sess=', '%26sess%3D')
                    this.tokenLink = this.tokenLink.replace('&shop=', '%26shop%3D')
                    this.tokenLink = this.tokenLink.replace('&apiKey=', '%26apiKey%3D')
                }
            }).catch(() =>{
                this.errorAuthTokenLink = true;
            });
        },
        authorizeAuthToken(){
            window.open(this.tokenLink, '_blank');
        },
        async getEbayOAuthToken(){
            await this.BfConnectionAssistantService.ebayOAuthTokenLink().then((response) => {
                if (response.data.success === true && response.status === 200) {
                    this.oAuthTokenLink = decodeURIComponent(response.data.data.irpLink);
                }
            }).catch(() =>{
                this.errorAuthTokenLink = true;
            });
        },
        authorizeOAuthToken(){
            window.open(this.oAuthTokenLink, '_blank');
        }
    },
    created() {
        if (this.salesChannel !== null && this.$route.meta.$module.getSalesChannelByTypeId(this.salesChannel.typeId) === 'ebay') {
            this.showTokenCard = true;
            this.getEbayTokenLink();
            this.getEbayOAuthToken();
            this.loadData();
        }
    }
});
