<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		.profile {
			position: relative;

			width: 250px;
			height: 400px;
			border-radius: 8px;
			/* Rectangle 1: */
			background: #FFFFFF;
			-moz-box-shadow:    0px 1px 3px 0px rgba(0,0,0,0.50);
			box-shadow:         0px 1px 3px 0px rgba(0,0,0,0.50);

		}

		.profile-picture {
			width: 130px;
			height: 130px;

			border-radius: 65px;

			display: block;
			margin: 0 auto;

			/* Oval 1: */
			/* Sketch doesnt export pattern fills at this point */
			-moz-box-shadow:    0px 1px 2px 0px rgba(0,0,0,0.50);
			box-shadow:         0px 1px 2px 0px rgba(0,0,0,0.50);	
		}

		.firstname, .lastname {
			margin: 0;
			font-family: Helvetica;
			font-size: 24px;
			color: #5D5D5D;
			line-height: 29px;

			text-align: center;
		}

	</style>
</head>
<body>
	<div class="welcome">

		<div class="profile">

			<img class="profile-picture">

			<h2 class="firstname">Andréasson</h2>
			<h2 class="lastname">Niklas</h2>

		</div>
	</div>
</body>
</html>
