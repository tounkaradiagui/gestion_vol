@extends('layouts.frontend')
@section('content')


<!-- Breadcrumb Area Start -->
<section class="peulis-breadcrumb-area">
         <div class="breadcrumb-top">
            <div class="container">
               <div class="col-lg-12">
                  <div class="breadcrumb-box">
                     <h2>Détails de réservation</h2>
                      <ul class="breadcrumb-inn">
                        <li><a href="index.html">Accueil</a></li>
                        <li class="active"><a href="#">Détails de réservation</a></li>
                      </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb Area End -->

 <!-- Tour Details Area Start -->
 <section class="peulis-tour-details-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="tour-details-left">
                     <div class="tour-details-head">
                        <h3>Super Maldives Trip <span> <span class="tour_price">$560</span> / per person </span></h3>
                        <div class="tour-rating">
                           <ul>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star-o"></i></li>
                           </ul>
                           <p>(2 Review) </p>
                        </div>
                     </div>
                     <div class="tour-details-image">
                        <img src="assets/img/popular-6.jpg" alt="Tour" />
                     </div>
                     <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.</p>
                     <ul class="tour-offer clearfix">
                        <li><span>Destination </span>Canada</li>
                        <li><span>Departure </span>Los Angeles International Airport</li>
                        <li><span>Departure Time </span>Sunday 14 of May, 20:30 hs</li>
                        <li><span>Accommodation </span>All Inclusive</li>
                        <li>
                           <span>What´s Included</span>
                           <ul>
                              <li><i class="fa fa-check-circle"></i> Travel Insurance</li>
                              <li><i class="fa fa-check-circle"></i> 5 Star Accommodation</li>
                              <li><i class="fa fa-check-circle"></i> Airport Transfer </li>
                              <li><i class="fa fa-check-circle"></i> Breakfast</li>
                              <li><i class="fa fa-check-circle"></i> Personal Guide </li>
                              <li><i class="fa fa-check-circle"></i> Two days long City tour </li>
                           </ul>
                        </li>
                        <li>
                           <span>Not Included</span>
                           <ul>
                              <li><i class="fa fa-times-circle"></i> Gallery Ticket </li>
                              <li><i class="fa fa-times-circle"></i> Non-stop flight to Amsterdam</li>
                           </ul>
                        </li>
                     </ul>
                     <div class="tour-gallery">
                        <h3>Gallery</h3>
                        <div class="tour-gallery-slider owl-carousel">
                           <div class="single-gallery-tour">
                              <img src="assets/img/gallery-2.jpg" alt="tour" />
                           </div>
                           <div class="single-gallery-tour">
                              <img src="assets/img/gallery-3.jpg" alt="tour" />
                           </div>
                           <div class="single-gallery-tour">
                              <img src="assets/img/gallery-4.jpg" alt="tour" />
                           </div>
                           <div class="single-gallery-tour">
                              <img src="assets/img/gallery-5.jpg" alt="tour" />
                           </div>
                           <div class="single-gallery-tour">
                              <img src="assets/img/gallery.jpg" alt="tour" />
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="sidebar-widget">
                     <div class="single-sidebar">
                        <div class="quick-contact">
                           <h3>Réserver un vol ici !</h3>
                           <form>
                              <div class="book-tour-field">
                                 <input type="text" placeholder="Your Name">
                              </div>
                              <div class="book-tour-field">
                                 <input type="email" placeholder="Email Address">
                              </div>
                              <div class="book-tour-field">
                                 <input type="tel" placeholder="Phone Number">
                              </div>
                              <div class="book-tour-field">
                                 <input id="reservation_date" name="reservation_date" placeholder="Departure Date" data-select="datepicker" type="text">
                              </div>
                              <div class="book-tour-field clearfix">
                                 <select class="wide">
                                    <option selected disabled>Number Of Person</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4+</option>
                                 </select>
                              </div>
                              <div class="book-tour-field">
                                 <button type="submit">Book Now</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="single-sidebar">
                        <h3>More Information</h3>
                        <ul class="more-info">
                           <li>
                              <span><i class="fa fa-phone"></i> Phone Number:</span>
                              1-567-124-44227
                           </li>
                           <li>
                              <span><i class="fa fa-clock-o"></i> Office Time:</span>
                              9am - 5pm
                           </li>
                           <li>
                              <span><i class="fa fa-map-marker"></i> Office Location:</span>
                              5520 Quebec Place
                           </li>
                        </ul>
                     </div>
                     <div class="single-sidebar">
                        <img src="assets/img/destination.jpg" alt="destination" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Tour Details Area End -->
@endsection