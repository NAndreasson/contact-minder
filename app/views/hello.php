<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact minder</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="contactapp" class="welcome">
		<div id="contacts"></div>
	</div>

	<script type="text/template" id="contact-template">
		<img class="profile-picture" src="me.jpeg">
		<div class="name">
			<h2 class="lastname"><%= lastname %></h2>
			<h2 class="firstname"><%= firstname %></h2>
		</div>
	</script>

	<script src="js/libs/jquery-2.1.1.js"></script>
	<script src="js/libs/underscore.js"></script>
	<script src="js/libs/mustache.js"></script>
	<script src="js/libs/backbone.js"></script>


	<script src="js/models/contact.js"></script>
	<script src="js/collections/contacts.js"></script>
	<script src="js/views/contacts.js"></script>
	<script src="js/views/app.js"></script>
	<script src="js/app.js"></script>
</body>
</html>
