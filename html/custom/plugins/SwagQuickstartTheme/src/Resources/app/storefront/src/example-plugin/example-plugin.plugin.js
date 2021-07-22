import HttpClient from 'src/service/http-client.service';
import Plugin from 'src/plugin-system/plugin.class';

export default class ExamplePlugin extends Plugin {

  init() {
    // initalize the HttpClient

    this._client = new HttpClient();

    // get refernces to the dom elements
    this.button = this.el.children['ajax-button'];
    this.textdiv = this.el.children['ajax-display'];
    this.textdiv.innerHTML = '';
    // register the events
    this._registerEvents();
  }

  _registerEvents() {

    // fetch the timestamp, when the button is clicked
    this.button.onclick = this._fetch.bind(this);

  }

  _fetch() {

    //let old_count = this.textdiv.innerHTML;
    let url = '/example-pagelet';

    // make the network request and call the `_setContent` function as a callback
    // this._client.get(url, this._setContent.bind(this), 'application/json', true)
    this._client.get(url, this._setContent.bind(this));

  }

  _setContent(data) {
    // parse the response and set the `textdiv.innerHTML` to the timestamp
    //this.textdiv.innerHTML = JSON.parse(data).timestamp;
    //var timestamp = JSON.parse(data).timestamp;
    this.textdiv.innerHTML = data;
  }
}