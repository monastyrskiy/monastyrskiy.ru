<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Дмитрий Монастырский</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="http://monastyrskiy.ru/styles/layout.css" type="text/css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="galleria/galleria-1.2.9.min.js"></script>
<script>
  Galleria.loadTheme('galleria/themes/galleria-classicmod/galleria.classicmod.js');
  Galleria.run('#galleria');
</script> 

<style>
    #galleria{ width: 960px; height: 700px; background: #000 }
</style>

</head>
<body>

<?php require('header.html') ?>

<div class="wrapper row2">
  <div id="container" class="clear">
    <div id="galleria">
	<?php
		$G_TYPE = $_GET["type"];
		switch ($G_TYPE) {
			case 'landscape':
				for ($i = 1; $i < 13; $i++)	echo "<img src=\"images/portfolio/landscape/demo$i.jpg\">";
				break;
			case 'nature':
				for ($i = 1; $i < 9; $i++)	echo "<img src=\"images/portfolio/nature/demo$i.jpg\">";
				break;
			case 'macro':
				for ($i = 1; $i < 26; $i++)	echo "<img src=\"images/portfolio/macro/demo$i.jpg\">";
				break;
			case 'report':
				for ($i = 1; $i < 17; $i++)	echo "<img src=\"images/portfolio/report/demo$i.jpg\">";
				break;				
			case 'arch':
				for ($i = 1; $i < 19; $i++)	echo "<img src=\"images/portfolio/arch/demo$i.jpg\">";
				break;	
			default:
				for ($i = 1; $i < 13; $i++)	echo "<img src=\"images/portfolio/landscape/demo$i.jpg\">";
	}
    ?>
	</div>
  </div>
</div>
</div>

<!-- Footer -->

<?php require('footer.html') ?>

</body>
</html>