var app = app || {};

var ContactList = Backbone.Collection.extend({

	model: app.Contact,
	url: '/contacts',

  findByName: function(query) {
    var url = (query === '') ? '/contacts' : '/contacts/search/' + query;
    var self = this;

    $.get(url, function(data) {
      self.reset(data);
    });
  }

});

app.Contacts = new ContactList();
