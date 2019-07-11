<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Boston2019 - 21st ENA Convention</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Efiks National Association, Boston 2019, Boston2019" name="keywords">
  <meta content="ENA 2019 Convention, Boston 2019" name="description">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/lib/venobox/venobox.css" rel="stylesheet">
  <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/css/style.css" rel="stylesheet">
  <style>
      .venue-gallery a img{height: 200px !important;}
      .event-countdown{ height: 50px; clear: both; margin-bottom: 20px;}
      .event-countdown {
        color: #fff;
        text-align: center;
      }
      
      .event-countdown li {
        display: inline-block;
        font-size: 1em;
        list-style-type: none;
        padding: 1em;
        text-transform: uppercase;
      }
      
      .event-countdown li span {
        display: block;
        font-size: 1.5rem;
      }
  </style>

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#speakers">Speakers</a></li>
          <li><a href="#schedule">Schedule</a></li>
          <li><a href="#venue">Venue</a></li>
          <li><a href="#hotels">Hotels</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#supporters">Sponsors</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
    @yield('content')
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo.png" alt="TheEvenet">
            <p>The Mission of Efik National Association is to empower the Efik people in the U.S.A. ENA has organized and implemented successful Community Outreach activities to Africa, Cross River State, Nigeria. One of the Association’s signature activity is the Medical Mission to Calabar, under the leadership of Dr. Asuquo Inyang. ENA invites health care volunteers to join its medical missions.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="https://efiks.org">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="https://efiks.org/about-us">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
                Efik National Association Inc, <br>USA 9755 South Kirkwood Rd, <br>Ste D Houston, TX 77099<br>
              United States <br>
              <strong>Phone:</strong> +1 770 374 1460<br>
              <strong>Email:</strong> info@efiks.org<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>ENA Inc, USA</strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="https://gintec.com.ng/">GINTEC</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/superfish/hoverIntent.js"></script>
  <script src="/lib/superfish/superfish.min.js"></script>
  <script src="/lib/wow/wow.min.js"></script>
  <script src="/lib/venobox/venobox.min.js"></script>
  <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="/contactform/contactform.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <!-- Template Main Javascript File -->
  <script src="/js/main.js"></script>
  <script>
    const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

    let countDown = new Date('July 25, 2019 10:00:00').getTime(),
    x = setInterval(function() {

        let now = new Date().getTime(),
            distance = countDown - now;

        document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
        
        //do something later when date is reached
        //if (distance < 0) {
        //  clearInterval(x);
        //  'IT'S MY BIRTHDAY!;
        //}

    }, second);

    $("#atickets, #ctickets, #rooms").on('input', function(){
      var apay = $("#atickets").val();
      var cpay = $("#ctickets").val();
      var rpay = $("#rooms").val();

      var tapay = apay*50;
      var tcpay = cpay*25;
      var trpay = rpay*129;

      var total_amount = tapay+tcpay+trpay;

      $("#camount").val(total_amount);
  });
  
  </script>
</body>

</html>
