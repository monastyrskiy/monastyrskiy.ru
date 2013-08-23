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
        pause: 10000 // change slide interval speed here
    });
});
</script>
</head>
<body>
  
<?php require('header.html') ?>

<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
    <section id="featured_slide">
      <!-- ########################################################################################## -->
      <div id="slider">
        <ul>
          <li>
            <figure><img src="images/demo/demo1.jpg" alt="zzzzz" />
            </figure>
          </li>
          <li>
            <figure><img src="images/demo/demo2.jpg" alt="" />
             </figure>
          </li>
          <li>
            <figure><img src="images/demo/demo3.jpg" alt="" />
             </figure>
          </li>
          <li>
            <figure><img src="images/demo/demo4.jpg" alt="" />
             </figure>
          </li>
          <li>
            <figure><img src="images/demo/demo5.jpg" alt="" />
             </figure>
          </li>
          <li>
            <figure><img src="images/demo/demo6.jpg" alt="" />
             </figure>
          </li>
          <li>
            <figure><img src="images/demo/demo7.jpg" alt="" />
             </figure>
          </li>
          <li>
            <figure><img src="images/demo/demo8.jpg" alt="" />
             </figure>
          </li>
        </ul>
      </div>
      <!-- ########################################################################################## -->
    </section>
  
    <div id="homepage">
       <!-- / Introduction -->
      <!-- ########################################################################################## -->
      <!-- Services -->
      <section id="services" class="last clear">
        <article class="one_third">
          <figure><img src="images/tour.jpg" width="290" height="120" alt="">
            <figcaption>
              <h2>Сферические панорамы</h2>
              <p>Сферические панорамы объединенные в один 3D тур — замечательное реалистичное средство, в первую очередь нацеленное на то, чтобы получить полное представление о каком-то объекте съемки.</p>
              <footer class="more"><a href="spheres.php">Еще &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third">
          <figure><img src="images/arch.jpg" width="290" height="120" alt="">
            <figcaption>
              <h2>Архитектурная и интерьерная съемка</h2>
              <p>Одна из основных задач архитектурной и интерьерной съемки - качественно отобразить красоту промышленных и частных интерьеров помещений, домовладений, зданий, сооружений, и других конструкций. </p>
              <footer class="more"><a href="blog/?page_id=17">Еще &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third lastbox">
          <figure><img src="images/pano.jpg" width="290" height="120" alt="">
            <figcaption>
              <h2>Пейзажная съемка</h2>
              <p>Съемка дикой природы и, в том числе, пейзажная съемка интересные и сложные жанры фотографии позволяющие показать всю многогранность и красоту окружающего нас мира, его хрупкость с одной и мощь с другой стороны.</p>
              <footer class="more"><a href="blog/?page_id=17">Еще &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
      </section>
      <!-- / Services -->
    </div>
  </div>
</div>

<?php require('footer.html') ?>

</body>
</html>
