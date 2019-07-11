@extends('master')
@section('content')
    
<section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">Boston 2019<br><span>ENA INC, USA</span> 21st Convention</h1>
      <p class="mb-4 pb-0">25-27 July, 2019, Boston Massachusetts, USA</p>
      
      <div class="event-countdown">
        <ul>
          <li><span id="days"></span>days</li>
          <li><span id="hours"></span>Hours</li>
          <li><span id="minutes"></span>Minutes</li>
          <li><span id="seconds"></span>Seconds</li>
        </ul>
      </div>
      
      <a href="https://www.youtube.com/watch?v=bvEsI0sQtaU" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">About The Event</a>
    </div>
    
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <h2>About The Event</h2>
            <p style="text-align:justify;">The president and executive members of The EFIK National Association Inc. cordially invite you to their National EFIK Convention and Gala scheduled to be held in Boston, Massachusetts, USA Saturday July 27th, 2019.
              We are inviting you to join us in celebrating the rich and unique EFIK culture and traditions. You will have the opportunity to be part of our cultural celebrations and also to showcase your own culture and pride in the Nigerian community here. The CALABAR people are coming to Boston from all over the United States and diaspora to present Boston with a very rich African culture through displays of traditional dances, songs, food and art.
              <br>
              Our Theme for the convention is: <strong>“Impacting today’s Community for Tomorrow’s Generation”.</strong><br>
              You and your family will have the opportunity to learn the ancient history of “The EKPE Society” with hieroglyphic display of “NSIBIDI” which was recently featured in the movie, The Black Panthers. We are inviting all of our different tribal local associations and chapters to showcase their traditional print in this event. Come celebrate with us as we seek to be a part of the Nigerian community in greater Boston. It will be a CARNIVAL.
              <br>
              PLEASE COME ONE, COME ALL<br>
              (Please stay tuned for more information during the coming weeks and months and watch out for our fliers so you can forward to friends and associates to invite them to this epic occasion.</p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>BOSTON Massachusetts, USA, <br>
              Marriott Quincy, <br>1000 Marriott Drive Quincy MA 02169</p>
              <hr>
            <h3>When</h3>
            <p>25th - 27th JULY, 2019<br>
              Starting at : 10:00am - 9:00pm Daily</p>
          </div>
          
        </div>
      </div>
    </section>

    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Event Speakers</h2>
          <p>Here are some of our speakers</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/66.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Jacob Oroks</a></h3>
                <p>Member</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>

    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Event Schedule</h2>
          <p>Here is our event schedule</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Day 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Day 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Day 3</a>
          </li>
        </ul>

        <h3 class="sub-heading">These are the activities of various days</h3>

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2"><time>09:30 AM</time></div>
              <div class="col-md-10">
                <h4>Registration</h4>
                <p>Registration, issuing of tickets and organizing of participants.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>Keynote <span>....</span></h4>
                <p>comming soon...</p>
              </div>
            </div>

            

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>coming soon... <span>Brenden Legros</span></h4>
                <p>information coming soon</p>
              </div>
            </div>

            

          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>coming soon... <span>Hubert Hirthe</span></h4>
                <p>More info coming soon.</p>
              </div>
            </div>

            

          </div>
          <!-- End Schdule Day 2 -->

        </div>

      </div>

    </section>

    <!--==========================
      Venue Section
    ============================-->
    <section id="venue" class="wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>Event Venue</h2>
          <p>Event venue location info and gallery</p>
        </div>

        <div class="row no-gutters">
          <div class="col-lg-6 venue-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2954.305201911136!2d-71.02051508504394!3d42.22929225134316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37d271c2d4aef%3A0xd985e21b0e6c8d5d!2sBoston+Marriott+Quincy!5e0!3m2!1sen!2sng!4v1561022594355!5m2!1sen!2sng" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3>BOSTON Massachusetts, USA</h3>
                <p>Marriott Quincy, 1000 Marriott Drive Quincy MA 02169</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>
      </div>

    </section>

    <!--==========================
      Hotels Section
    ============================-->
    <section id="hotels" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Hotels</h2>
          <p>Her are some nearby hotels</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
              </div>
              <h3><a href="#">Boston Marriott Quincy</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>The Venue. Room rates $129 (King/Double) </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">
              </div>
              <h3><a href="#">Omni Parker House in Boston</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p>0.5 Mile from the Venue</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/3.jpg" alt="Hotel 3" class="img-fluid">
              </div>
              <h3><a href="#">Intercontinental Boston</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Luxury Boston Hotel with Pool & Concierge</p>
            </div>
          </div>

        </div>
      </div>

    </section>

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
        <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
        <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
        <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
        <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
        <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
        <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
        <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
        <a href="img/gallery/9.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
        <a href="img/gallery/10.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
      </div>

    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    <section id="supporters" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/1.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/2.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/3.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/4.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/5.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/6.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/7.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>

    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-6">
              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">Is the event exclusive to members of the Efik National Association USA? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                      No, anyone can participate.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">How much is the ticket? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                      Tickets are $50 (Adults) and $25 (Children)
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">Can I make my hotel booking myself? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                      Yes, you can go ahead and book any hotel of your choice.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">What is the dress code? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                      Any traditional attire.
                    </p>
                  </div>
                </li>
      
                
      
              </ul>
          </div>
          <div class="col-lg-6">
            <h3>ENA on Facebook </h3>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEfikNationalUSA&tabs=timeline&width=500&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>


      </div>

    </section>

    <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Newsletter</h2>
          <p>Enter your email to recieve updates about the event and the ENA developments.</p>
        </div>

        <form method="POST" action="#">
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Enter your Email">
            </div>
            <div class="col-auto">
              <button type="submit">Subscribe</button>
            </div>
          </div>
        </form>

      </div>
    </section>

    <!--==========================
      Buy Ticket Section
    ============================-->
    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>Buy Tickets</h2>
          <p>You can buy multiple tickets and as well indicate that you want to be member of the ENA. <br> Payment is through credit card.</p>
        </div>

        <div class="row">
          <div class="col-lg-8">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Ticket Booking Form</h5>                
                <hr>

                <form class="" action="{{ url('/checkout') }}" method="post">
                  {{ csrf_field() }}
                <div class="row">
                  <div class="form-group col-md-6">
                      <label for="name">Full Name</label>
                      <input id="name" class="form-control" type="text" name="name">
                  </div>

                  <div class="form-group col-md-6">
                      <label for="email">E-mail Address</label>
                      <input id="email" class="form-control" type="email" name="email" required>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                      <label for="phoneno">Telephone Number</label>
                      <input id="phoneno" class="form-control" type="text" name="phoneno" required>
                  </div>

                  <div class="form-group col-md-6">
                      <label for="address">Postal Address</label>
                      <input id="address" class="form-control" type="text" name="address">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                      <label for="password">Password</label>
                      <input id="password" class="form-control" type="password" name="password">
                  </div>

                  <div class="form-group col-md-6">
                      <label for="membership">Interested in ENA membership?</label>
                      <select name="membership" class="form-control" id="membership">
                          <option value="Yes">Yes</option>
                          <option value="No" selected>No</option>
                      </select>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-4">
                      <label for="atickets">No of Tickets (Adults)</label>
                      <input id="atickets" class="form-control" type="number" name="atickets" value="1" min="0">
                  </div>

                  <div class="form-group col-md-4">
                      <label for="ctickets">No of Tickets (Children)</label>
                      <input id="ctickets" class="form-control" type="number" name="ctickets" value="0"  min="0">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="rooms">No of Rooms (Optional)</label>
                    <input id="rooms" class="form-control" type="number" name="rooms" value="0"  min="0">
                </div>
                </div>

                <hr>
                <h4>Payment Information</h4>
                <hr>

                <div class="form-group col-md-12">
                    <label for="cnumber">Card Number</label>
                    <input type="text" class="form-control" id="cnumber" name="cnumber" placeholder="Enter Card Number"  required>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    <label for="card-expiry-month">Expiration Month</label>
                    {{ Form::selectMonth(null, null, ['name' => 'card_expiry_month', 'class' => 'form-control', 'required']) }}
                  </div>
                  <div class="form-group col-md-3">
                    <label for="card-expiry-year">Expiration Year</label>
                    {{ Form::selectYear(null, date('Y'), date('Y') + 10, null, ['name' => 'card_expiry_year', 'class' => 'form-control', 'required']) }}
                  </div>
                  <div class="form-group col-md-3">
                      <label for="ccode">Card Code</label>
                      <input type="text" class="form-control" id="ccode" name="ccode" placeholder="Enter Card Code" required>
                  </div>
                  <div class="form-group col-md-3">
                      <label for="camount">Amount</label>
                      <input type="text" class="form-control" id="camount" name="camount" value="50" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="my-input">Verify You are a Human? </label>
                    <div class="g-recaptcha" data-sitekey="6LffXJQUAAAAAAaaKdHm6S-6Jg97zjpOY36VYwMo"></div>
                  </div>
                  <div class="text-center form-group col-md-6">
                    <button type="submit" class="btn" style="position:absolute; bottom: 0px;">Buy Tickets(s)</button>
                  </div>
                </div>

              </form>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Information</h5>
                
                <hr>
                <form action="/ticket" method="post">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-sm-6">
                        
                      <div class="form-group">                        
                        <input id="ticketno" class="form-control" type="text" name="ticketno" placeholder="Ticket No">
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <button type="submit" class="btn">Reprint</button>
                        </div>
                    </div>
                  </div>
                </form>
                <ul class="fa-ul">
                  
                <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>Convention Venue:</strong> Marriott Quincy, 1000 Marriott Drive Quincy MA 02169.</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>Convention Rate:</strong> $50.00 per person/$25 per child under the age of 12</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>Convention Date:</strong> July 25th to 27th, 2019.</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>Gala Night Event:</strong> Saturday July 27th from 6:00pm to 12:00am</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>Phone Number:</strong> (617) 472-1000 (Direct Line)</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>Reservation line</strong> (800)228-9290</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>Reservation Code:</strong> EFIK Association Gala.</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>Room rates</strong> are (King or Double) $129.00 excluding taxes.</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>Cutoff date</strong> for reservation: Sunday, June 30, 2019</li>
                <li><span class="fa-li"><i class="fa fa-phone"></i></span>
                  Booking Problems? Contact +1 770 374 1460 or info@efiks.org
                </li>

                </ul>
                
              </div>
            </div>
          </div>
          
        </div>

      </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>For enquiries and general feedback</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Efik National Association Inc, USA 9755 South Kirkwood Rd, Ste D Houston, TX 77099</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 770 374 1460</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@efiks.org">info@efiks.org</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
  @endsection