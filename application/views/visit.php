<?php include('header.php'); ?>
<header class="visit">
  <div class="video-background">
    <div class="map" id="map-canvas"></div>
  </div>
</header>
<div class="container visit">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <h1 class="text-center">Opening Hours</h1>
      <figure class="break"><img src="<?php echo BASE_URL; ?>static/images/break.png" /></figure>
    </div>
    <div class="col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 text-center draw-line">
      <p><strong>Monday - Friday</strong>: 9.00 am - 5.00pm</p>
      <p><strong>Saturday</strong>: 9.00am - 5.00pm</p>
      <p><strong>Sunday</strong>: 10.00am - 5.00pm</p>
      <p>&nbsp;</p>
      <p>In the winter, our opening hours are restricted, please call for details.</p>
    </div>
    <div class="col-lg-3"></div>
  </div>
  <div class="row contactform">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <h4 class="text-center">Leave us a message</h4>
      <div class="alert alert-success"><strong>We've received your contact request. We will get in touch with you soon!</strong></div>
      <div class="alert alert-danger"><strong>Something went wrong! Please refresh the page and try again.</strong></div>
      <form id="contact" role="form" action="<?php echo BASE_URL; ?>static/scripts/contact.php" class="form-horizontal" method="post" data-bv-feedbackicons-valid="glyphicon glyphicon-ok" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
        <div class="form-group">
          <label for="InputName">Name</label>
          <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
          <label for="InputEmail">Email</label>
          <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
        </div>
        <div class="form-group">
          <label for="InputNumber">Contact Number</label>
          <input type="text" class="form-control" name="InputNumber" id="InputNumber" placeholder="Enter Phone Number" required>
        </div>
        <div class="form-group">
          <label for="InputNature">Nature of your enquiry</label>
          <select class="form-control" name="InputNature" id="InputNature">
            <option>Orangery</option>
            <option>Landscaping</option>
            <option>Driveway</option>
            <option>Nursery</option>
            <option>Patio</option>
          </select>
        </div>
        <div class="form-group">
          <label for="InputMessage">Details of your Enquiry</label>
          <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group text-center">
          <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
        </div>
      </form>
    </div>
    <div class="col-lg-3"></div>
  </div>
  <div class="row options">
    <div class="col-lg-6 col-md-6"> <a href="<?php echo BASE_URL; ?>orangeries">
      <div class="row">
        <figure class="smooth"><img class="smooth" src="<?php echo BASE_URL; ?>static/images/home_o.jpg" /></figure>
        <p class="image-title">Orangeries<i class="fa fa-chevron-circle-right fa-2x"></i></p>
      </div>
      <div class="row">
        <h4>Orangeries create the perfect space</h4>
        <p>You cannot go wrong with an Orangery from us. Years of experience and extensive knowledge in the field provide the very basis for creating the most breathtaking Orangeries for your home.</p>
      </div>
    </a> </div>
    <div class="col-lg-6 col-md-6"> <a href="<?php echo BASE_URL; ?>nursery">
      <div class="row">
        <figure class="smooth"><img class="smooth" src="<?php echo BASE_URL; ?>static/images/home_n.jpg" /></figure>
        <p class="image-title">Nursery<i class="fa fa-chevron-circle-right fa-2x"></i></p>
      </div>
      <div class="row">
        <h4>Latest Offers at the Nursery</h4>
        <p>Take advantage of our the latest offers at our extensive Nursery. Gifts galore for Easter or fabulous hanging baskets to start adding colour to your garden.</p>
      </div>
    </a> </div>
    <div class="col-lg-6 col-md-6"> <a href="<?php echo BASE_URL; ?>landscaping">
      <div class="row">
        <figure class="smooth"><img class="smooth" src="<?php echo BASE_URL; ?>static/images/home_l.jpg" /></figure>
        <p class="image-title">Landscaping<i class="fa fa-chevron-circle-right fa-2x"></i></p>
      </div>
      <div class="row">
        <h4>Relax in a beautiful landscaped space</h4>
        <p>We all want that perfect outdoor space, which creates an addition to our home. Whether you have a small or large outdoor space to work with, our designers can create the perfect garden for you.</p>
      </div>
    </a> </div>
    <div class="col-lg-6 col-md-6"> <a href="<?php echo BASE_URL; ?>driveways">
      <div class="row">
        <figure class="smooth"><img class="smooth" src="<?php echo BASE_URL; ?>static/images/home_d.jpg" /></figure>
        <p class="image-title">Driveways<i class="fa fa-chevron-circle-right fa-2x"></i></p>
      </div>
      <div class="row">
        <h4>Driveways</h4>
        <p>We have a great range of driveways finishes available for you to choose from and a number of case studies for you to browse. Landscaping also available to complete the look!</p>
      </div>
    </a> </div>
  </div>
</div>
<?php include('footer.php'); ?>