<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Дмитрий Монастырский</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">

</head>
<body>

<?php require('header.html') ?>

<!-- content -->
<div class="wrapper row2">
<div id="container">
  <!-- content body -->
	<?php
		$G_TYPE = $_GET["type"];
		switch ($G_TYPE) {
			case 'spheres':
				require("spheres.html");
				break;
			case 'spheres_control':
				require("spheres_control.html");
				break;
		default:
			require("spheres.html"); 
		}
	?>
	
  <!-- right column -->
  <aside id="right_column">
    <h2 class="title">Виды услуг</h2>
    <nav>
      <ul>
        <li><a href="services.php?type=spheres">Сферические панорамы</a></li>
        <li><a href="#">Интерьеры помещений</a></li>
        <li><a href="#">Архитектурная съемка</a></li>
        <li><a href="#">Пейзажная съемка</a></li>
        <li class="last"><a href="#">Репортажная съемка</a></li>
      </ul>
    </nav>
    <h2 class="title">Примеры работ</h2>
    <nav>
      <ul>
        <li><a href="http://monastyrskiy.ru/blog/?p=874">Кофейня "Кофемолка"</a></li>
      	<li><a href="http://monastyrskiy.ru/blog/?p=860">Автосалоны ААА Моторс</a></li>
        <li><a href="http://monastyrskiy.ru/blog/?p=760">Физический факультет ЮФУ</a></li>
        <li><a href="http://monastyrskiy.ru/blog/?p=732">Путешествие по квартире</a></li>
        <li class="last"><a href="http://monastyrskiy.ru/blog/?p=695">Виртуальный тур по Абхазии</a></li>
      </ul>
    </nav>
	<h2 class="title">Разное</h2>
	<nav>
      <ul>
        <li class="last"><a href="services.php?type=spheres_control">Управление виртуальным туром</a></li>
        <li class="last"><a href="http://gurfoto.ru/?p=1220">Сферические панорамы взгляд изнутри</a></li>
	  </ul>
	</nav>	
  </aside>
  <!-- / content body -->
  <div class="clear"></div>
</div>
</div>

<!-- Footer -->

<?php require('footer.html') ?>

</body>
</html>
