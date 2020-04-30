<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <meta name="description" content="Businnes, Portfolio, Corporate" />
    <meta name="Author" content="WebThemez" />
    <title>Face Recognition System</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="elegant_font/style.css" />
    <!--[if lte IE 7
      ]><script src="elegant_font/lte-ie7.js"></script
    ><![endif]-->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/slider-pro.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/owl.transitions.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="elegant_font/style.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/face-api.min.js"></script>
  </head>

  <body>
    <!-- Preloader -->
    <!-- <div class="preloader">
      <div class="status"></div>
    </div> -->

    <!-- Header End -->
    <header>
      <!-- Navigation Menu start-->
      <nav id="topNav" class="navbar navbar-default main-menu">
        <div class="container">
          <button
            class="navbar-toggler hidden-md-up pull-right"
            type="button"
            data-toggle="collapse"
            data-target="#collapsingNavbar"
          >
            ☰
          </button>
          <a class="navbar-brand page-scroll" href="#slider"
            ><img class="logo" id="logo" src="images/face5.jpg" alt="logo"
          /></a>
          <div class="collapse navbar-toggleable-sm" id="collapsingNavbar">
            <ul class="nav navbar-nav">
              <li class="active">
                <a href="#slider">HOME</a>
              </li>
              <li>
                <a href="#verification">VERIFICATION</a>
              </li>
              <li>
                <a href="#registration">REGISTRATION</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Header End -->

    <section class="slider-pro slider" id="slider">
      <div class="sp-slides">
        <!-- Slides -->
        <div class="sp-slide main-slides">
          <div class="img-overlay"></div>

          <img class="sp-image" src="images/slider/face1.jpg" alt="Slider 1" />

          <h1
            class="sp-layer slider-text-big"
            data-position="center"
            data-show-transition="left"
            data-hide-transition="right"
            data-show-delay="1500"
            data-hide-delay="200"
          >
            <span class="highlight-texts"
              >DESIGN AND IMPLEMENTATION OF FACE RECOGNITION SYSTEM FOR HOSTEL
              MANAGEMENT</span
            >
          </h1>

          <p
            class="sp-layer"
            data-position="center"
            data-vertical="15%"
            data-show-delay="2000"
            data-hide-delay="200"
            data-show-transition="left"
            data-hide-transition="right"
          >
            (A CASE STUDY OF UNIVERSITY OF ILORIN)
          </p>
        </div>
        <!-- Slides End -->

        <!-- Slides -->
        <div class="sp-slide main-slides">
          <div class="img-overlay"></div>
          <img class="sp-image" src="images/slider/face4.png" alt="Slider 2" />

          <h1
            class="sp-layer slider-text-big"
            data-position="center"
            data-show-transition="left"
            data-hide-transition="right"
            data-show-delay="1500"
            data-hide-delay="200"
          >
            <span class="highlight-texts">
              Develop by: IJAIYA, TESLEEMAT YEWANDE
            </span>
          </h1>
          <p
            class="sp-layer"
            data-position="center"
            data-vertical="15%"
            data-show-delay="2000"
            data-hide-delay="200"
            data-show-transition="left"
            data-hide-transition="right"
          >
            16/30GB070
          </p>
        </div>
        <!-- Slides End -->
      </div>
    </section>
    <!-- Main Slider End -->
    <div id="verifiedResult"><br /><br /><br /></div>
    <div id="verificationResult"></div>

    <section id="verification" class="about-sec section-wrapper description">
      <div class="container">
        <div class="row">
          <!-- Section Header -->
          <div
            class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown"
          >
            <h2><span class="highlight-text">Face Verification</span></h2>
            <p
              class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1"
            >
              Verify Student by Uploading his/her image.
            </p>
          </div>
          <!-- Section Header End -->

          <div
            class="col-md-6 col-sm-6 col-xs-12 custom-sec-img wow fadeInDown"
          >
            <img src="images/face3.png" alt="Custom Image" />
          </div>

          <div
            class="col-md-6 col-sm-6 col-xs-12 customized-text wow fadeInDown black-ed"
          >
            <div class="row">
              <div class="col-md-11">
                <div class="form-group">
                  <label for="imageUpload"><strong>Upload Image To Recognize</strong></label>
                  <input type="file" class="form-control" id="imageUpload" />
                </div>
              </div>
            </div>
            <?php
              $directories = glob("labeled_images" . '/*' , GLOB_ONLYDIR);
            ?>
            <script>
              var imageLabels = <?php echo(json_encode($directories)); ?>;
            </script>
            <script src="js/script.js"></script>
          </div>
        </div>
      </div>
    </section>

    <section id="registration" class="about-sec section-wrapper description">
      <div class="container">
        <div class="row">
          <!-- Section Header -->
          <div
            class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown"
          >
            <h2><span class="highlight-text">Face Registration</span></h2>

            <p
              class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1"
            >
              Register Student by Uploading his/her image.
            </p>
          </div>
          <!-- Section Header End -->

          <div
            class="col-md-6 col-sm-6 col-xs-12 customized-text wow fadeInDown black-ed"
          >
            <div class="row">
              <div class="col-md-11">
                <form
                  name="userReg"
                  id="faceRegistrationForm"
                  method="post"
                  action=""
                  enctype="multipart/form-data"
                >
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="IJAIYA TESLEEMAT " required
                    />
                  </div>
                  <div class="form-group">
                    <label for="image1">User Image 1 (.jpg only)</label>
                    <input
                      type="file"
                      class="form-control"
                      name="image1"
                      id="image1" required
                    />
                  </div>
                  <div class="form-group">
                    <label for="image2">User Image 2 (.jpg only)</label>
                    <input
                      type="file"
                      class="form-control"
                      name="image2"
                      id="image2" required
                    />
                  </div>
                  <div id="success"></div>
                  <button
                    type="submit"
                    class="btn btn-info"
                    id="faceRegistrationFormButton"
                  >
                    Submit
                  </button>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="reset" class="btn btn-danger">
                    Clear
                  </button>
                </form>
              </div>
            </div>
          </div>

          <div
            class="col-md-6 col-sm-6 col-xs-12 custom-sec-img wow fadeInDown"
          >
            <img src="images/face2.jpg" alt="Custom Image" />
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section End -->
    <section class="footer-container">
      <footer>
        <div class="container">
          <div class="row">
            <div class="footer-containertent">
              <p>
                Copyright © 2020.
                <a href="#"> Undergraduate Project </a> Developed by IJAIYA,
                TESLEEMAT YEWANDE
              </p>
            </div>
          </div>
        </div>
      </footer>
    </section>
    <!-- Footer End -->

    <!-- Modal -->
<div class="modal hide fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Processing...</h3>
        <button type="button" class="close"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center item-center">
       <div > <h5> <strong> PLEASE WAIT, SETTING UP ENVIRONMENT 82% .  . .  </strong></h5> </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary">Close</button>
      </div>
    </div>
  </div>
</div>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/tether.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.easypiechart.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.sliderPro.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/faceReg.js"></script>
  </body>
  <script type="text/javascript">
    $(window).on('load',function(){
        $('#exampleModalCenter').modal(
          {
            show : true,
            backdrop: 'static',
            keyboard: false
        }
        );
    });
</script>
</html>
