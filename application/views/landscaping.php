<?php include('header.php'); ?>
<header class="landscaping">
  <div class="video-background">
    <video class="bokeh-video" src="<?php echo BASE_URL; ?>static/images/grass.mp4" autoplay loop></video>
    <p class="text-over-video text-center">Bring your garden to life this summer<br />
      <i>Visit us at rope garden nursery</i>
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></p>
  </div>
</header>
<div class="container landscaping">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <h1 class="text-center">Welcome to your total home and garden resource</h1>
      <figure class="break"><img src="<?php echo BASE_URL; ?>static/images/break.png" /></figure>
    </div>
    <div class="col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 text-center draw-line">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    </div>
    <div class="col-lg-3"></div>
  </div>
  <div class="row image-background">
    <div id="myCarousel" class="carousel slide mb24" data-ride="carousel"> 
      <!-- Carousel indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="item active"> <img src="<?php echo BASE_URL; ?>static/images/home_1.jpg" />
          <p class="text-over-image text-center">A view of a landscape project completed recently</p>
        </div>
        <div class="item"> <img src="<?php echo BASE_URL; ?>static/images/home_2.jpg" />
          <p class="text-over-image text-center">A view of a landscape project completed recently</p>
        </div>
        <div class="item"> <img src="<?php echo BASE_URL; ?>static/images/home_3.jpg" />
          <p class="text-over-image text-center">A view of a landscape project completed recently</p>
        </div>
      </div>
      <!-- Carousel nav --> 
      <a class="carousel-control left" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="carousel-control right" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
  </div>
  <div class="row options">
    <div class="col-lg-6 col-md-6">
      <figure class="smooth"><img class="smooth" src="<?php echo BASE_URL; ?>static/images/home_n.jpg" /></figure>
      <p>Nurseries<i class="fa fa-chevron-circle-right fa-2x"></i></p>
    </div>
    <div class="col-lg-6 col-md-6">
      <figure class="smooth"><img class="smooth" src="<?php echo BASE_URL; ?>static/images/home_o.jpg" /></figure>
      <p>Orangeries<i class="fa fa-chevron-circle-right fa-2x"></i></p>
    </div>
    <div class="col-lg-6 col-md-6">
      <figure class="smooth"><img class="smooth" src="<?php echo BASE_URL; ?>static/images/home_l.jpg" /></figure>
      <p>Landscapes<i class="fa fa-chevron-circle-right fa-2x"></i></p>
    </div>
    <div class="col-lg-6 col-md-6">
      <figure class="smooth"><img class="smooth" src="<?php echo BASE_URL; ?>static/images/home_d.jpg" /></figure>
      <p>Driveways<i class="fa fa-chevron-circle-right fa-2x"></i></p>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>