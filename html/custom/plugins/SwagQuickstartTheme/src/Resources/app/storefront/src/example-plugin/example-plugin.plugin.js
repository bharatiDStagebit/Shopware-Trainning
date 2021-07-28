import HttpClient from 'src/service/http-client.service';
import Plugin from 'src/plugin-system/plugin.class';

export default class ExamplePlugin extends Plugin {

  init() {
    // initalize the HttpClient
    this._client = new HttpClient();

    // get refernces to the dom elements
    //this.button = this.el.children['ajax-button'];
    this.buttons = document.querySelectorAll('.ajax-button');
    this.textdiv = this.el.children['ajax-display'];
    this.textdiv.innerHTML = '';

    // register the events
    this._registerEvents();

  }


  _registerEvents() {
    var self = this;
    // fetch the products, when the button is clicked
    for (var i = 0; i < this.buttons.length; i++) {
      self.buttons[i].onclick = function () {

        let catId = this.getAttribute('data-id');
        //console.log(catId);

        let url = '/example-pagelet?catId='.concat(catId);
        //console.log(url);
        // make the network request and call the `_setContent` function as a callback
        // this._client.get(url, this._setContent.bind(this), 'application/json', true)
        self._client.get(url, function (data) {
          self.textdiv.innerHTML = data;
        });
      };
    }
  }


}
// _fetch(catId) {
  //   //let catId = document.querySelector('#ajax-button').dataset.id;
  //   //let catId = '98e8ddd056af4838a801519b70123e08';
  //   let url = '/example-pagelet?catId='.concat(catId);

  //   // make the network request and call the `_setContent` function as a callback
  //   // this._client.get(url, this._setContent.bind(this), 'application/json', true)
  //   this._client.get(url, this._setContent.bind(this));

  // }