var app = app || {};

app.AppView = Backbone.View.extend({

	el: '#contactapp',

	events: {
		'input #search': 'search'
	},

	initialize: function() {
		this.listenTo(app.Contacts, 'add', this.addOne);
		this.listenTo(app.Contacts, 'reset', this.addAll);

		this.listenTo(app.Contacts, 'all', this.render);

		app.Contacts.fetch();	
	},

	render: function() {
	},

	addOne: function(contact) {
		var view = new app.ContactView({ model: contact });
		$('#contacts').append( view.render().el );
	}, 

	addAll: function() {
		console.log('Add all');

		this.$('#contacts').html('');
		app.Contacts.each(this.addOne, this);
	},

	search: function() {
		var query = $('#search').val();

		if ( this.timeoutID ) {
			clearTimeout(this.timeoutID);
		}

		// avoid triggering a query for every input 
		this.timeoutID = setTimeout(function() {
			app.Contacts.findByName( query );	
		}, 50);
	}

});