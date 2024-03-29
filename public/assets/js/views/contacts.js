var app = app || {};

app.ContactView = Backbone.View.extend({

	className: 'profile',
	
	template: _.template( $('#contact-template').html() ),

	render: function() {
      this.$el.html( this.template( this.model.attributes ) );
      return this;
    },

});