<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<title>Web Template Project</title>
</head>
<body>
	<?php include("inc_header.html"); ?>	
	<hr/>
	<div style="width:20%; text-align: center; float: left;">
		<?php include("inc_buttonnav.html"); ?>
	</div>

	<!-- start of dynamic content section -->
	<?php
		if(isset($_GET["content"])) {
			// button click 
			switch($_GET["content"]) {
				case "About Me":
					include("inc_about.html");
					break;
				case "Contact":
					include("inc_contact.html");
					break;
				case "Home":
					include("inc_home.html");
					break;
				default:
					include("inc_home.html");
					break;
			}
		} 
		else {
			// no button clicked on
			include("inc_home.html");
		}
	?>
	<!-- end of dynamic centent section -->
	<?php include("inc_footer.php"); ?>

</body>
</html>