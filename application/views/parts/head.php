<!DOCTYPE html>
<html>
<head>
  <title>My Art Asia Circle</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="build/css/bootstrap.min.css">
  <link rel="stylesheet" href="build/css/ionicons.min.css">
  <link rel="stylesheet" href="build/css/pace.css">
  <link rel="stylesheet" href="build/css/custom.css">
  <link rel="stylesheet" href="build/css/carousel.css">
  <link rel="stylesheet" href="build/css/slick.css">
  <link rel="stylesheet" href="build/css/slick-theme.css">

  <script src="build/js/jquery-2.1.3.min.js"></script>
  <script src="build/js/bootstrap.min.js"></script>
  <script src="build/js/pace.min.js"></script>
  <script src="build/js/modernizr.custom.js"></script>

  <link rel="stylesheet" href="build/css/pace.css">
  <link rel="stylesheet" href="build/css/custom.css">
  <script src="build/js/carousel.js"></script>
  <style type="text/css">
  .no-padding {
    padding-left: 0;
    padding-right: 0;
  }
</style>
</head>
<body>
  <div class="container"> 
    <header id="site-header">
      <div class="row">
        <div class="col-md-4 col-sm-5 col-xs-8">
          <div class="logo">
            <h1><a href=""><b>My Art Asia Circle</b></a></h1>
          </div>
        </div><!-- col-md-4 -->
        <div class="col-md-8 col-sm-7 col-xs-4">
          <nav class="main-nav" role="navigation">
            <div class="navbar-header">
              <button type="button" id="trigger-overlay" class="navbar-toggle">
                <span class="ion-navicon"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="cl-effect-11"><a href="index.php" data-hover="Home">Home</a></li>
                <li class="cl-effect-11"><a href="gallery" data-hover="Gallery">Gallery</a></li>
                <li class="cl-effect-11"><a href="blog" data-hover="Blog">Blog</a></li>
                <li class="cl-effect-11"><a href="events" data-hover="Events">Events</a></li>
                <li class="cl-effect-11"><a href="contacts" data-hover="Contact">Contact</a></li>
                <li class="cl-effect-11"><a href="about-us" data-hover="About us">About</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
          <div id="header-search-box">
            <?php if ((!$this->session->has_userdata('is_signed') && $this->session->is_signed != TRUE)): ?>
              <small class="text-danger">Anon</small>
             <?php else: ?>
              <small><?php echo $this->session->name?></small>
            <?php endif ?>
          </div>
        </div><!-- col-md-8 -->
      </div>
    </header>
  </div>