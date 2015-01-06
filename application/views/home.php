<?php include('header.php'); ?>
<header class="home">
  <div class="video-background">
    <video class="bokeh-video" src="<?php echo BASE_URL; ?>static/images/bokeh.mp4" autoplay loop></video>
    <img class="bokeh-image" src="<?php echo BASE_URL; ?>static/images/bokeh.jpg" />
    <p class="text-over-video text-center">Creators of your living space<br />
      <i>Welcome to rope garden nursery</i>
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></p>
  </div>
</header>
<div class="container home">
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
      <p>Rope Garden Nursery is a family run business, managed by Mark and Jane Hinkley. With a passion for their business and an ambition to provide customers with the very best, Rope Garden goes from strength to strength.</p>
	  <p>Whatever it is you need, simply contact the team who will be happy to assist, or why not visit the nursery and have a browse around all the plants and shrubs... the palms and ferns are a real treat!</p>
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
    <div class="col-lg-6 col-md-6"> <a href="<?php echo BASE_URL; ?>orangeries">
      <div class="row">
        <figure class="smooth"><img class="smooth" src="<?php echo BASE_URL; ?>static/images/home_o.jpg" /></figure>
        <p class="image-title">Orangeries<i class="fa fa-chevron-circle-right fa-2x"></i></p>
      </div>
      <div class="row">
        <h4 class="smooth">Orangeries create the perfect space</h4>
        <p>You cannot go wrong with an Orangery from us. Years of experience and extensive knowledge in the field provide the very basis for creating the most breathtaking Orangeries for your home.</p>
      </div>
    </a> </div>
    <div class="col-lg-6 col-md-6"> <a href="<?php echo BASE_URL; ?>nursery">
      <div class="row">
        <figure class="smooth"><img class="smooth" src="<?php echo BASE_URL; ?>static/images/home_n.jpg" /></figure>
        <p class="image-title">Nursery<i class="fa fa-chevron-circle-right fa-2x"></i></p>
      </div>
      <div class="row">
        <h4 class="smooth">Latest Offers at the Nursery</h4>
        <p>Take advantage of our the latest offers at our extensive Nursery. Gifts galore for Easter or fabulous hanging baskets to start adding colour to your garden.</p>
      </div>
    </a> </div>
    <div class="col-lg-6 col-md-6"> <a href="<?php echo BASE_URL; ?>landscaping">
      <div class="row">
        <figure class="smooth"><img class="smooth" src="<?php echo BASE_URL; ?>static/images/home_l.jpg" /></figure>
        <p class="image-title">Landscaping<i class="fa fa-chevron-circle-right fa-2x"></i></p>
      </div>
      <div class="row">
        <h4 class="smooth">Relax in a beautiful landscaped space</h4>
        <p>We all want that perfect outdoor space, which creates an addition to our home. Whether you have a small or large outdoor space to work with, our designers can create the perfect garden for you.</p>
      </div>
    </a> </div>
    <div class="col-lg-6 col-md-6"> <a href="<?php echo BASE_URL; ?>driveways">
      <div class="row">
        <figure class="smooth"><img class="smooth" src="<?php echo BASE_URL; ?>static/images/home_d.jpg" /></figure>
        <p class="image-title">Driveways<i class="fa fa-chevron-circle-right fa-2x"></i></p>
      </div>
      <div class="row">
        <h4 class="smooth">Driveways</h4>
        <p>We have a great range of driveways finishes available for you to choose from and a number of case studies for you to browse. Landscaping also available to complete the look!</p>
      </div>
    </a> </div>
  </div>
</div>
<?php include('footer.php'); ?>