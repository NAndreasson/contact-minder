var app = app || {};

app.AppView = Backbone.View.extend({

	el: '#contactapp',

	initialize: function() {

		console.log('Add ');

		this.listenTo(app.Contacts, 'add', this.addOne);
		this.listenTo(app.Contacts, 'reset', this.addAll);

		this.listenTo(app.Contacts, 'all', this.render);

		app.Contacts.fetch();	
	},

	render: function() {
		console.log('Rende');

	},

	addOne: function(contact) {
		console.log('Add one');

		var view = new app.ContactView({ model: contact });
		$('#contacts').append( view.render().el );
	}, 

	addAll: function() {
		console.log('Add all');

		this.$('#contacts').html('');
		app.Contacts.each(this.addOne, this);
	}

});