<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Дмитрий Монастырский</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<script type="text/javascript" src="scripts/jquery-PseudoCSS.1.0.js"></script>
<script type="text/javascript" src="scripts/jquery-easySlider1.7.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#slider").easySlider({
        auto: true,
        continuous: true,
        numeric: true,
        speed: 1200,
        pause: 5000 // change slide interval speed here
    });
});
</script>
</head>
<body>

<?php require('header.html') ?>

<div class="wrapper row2">
  <div id="container" class="clear">
  <div>
    <h1>В процессе разработки...</h1>  
  </div>
</div>
</div>

<!-- Footer -->

<?php require('footer.html') ?>

</body>
</html>