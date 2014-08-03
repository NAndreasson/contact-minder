var app = app || {};

var ContactList = Backbone.Collection.extend({

	model: app.Contact,
	url: '/contacts'

});

app.Contacts = new ContactList();
