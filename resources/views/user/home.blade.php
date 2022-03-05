<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="template/css/app.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
   <title>Document</title>
</head>
@include('lock.header')

<main>
    <section class="hero">
       <img src="template/images/feature2.jpg" alt="">
       <div class="container">
          <div class="hero-container">
             <div class="hero-content">
                <p>Book With Us
                   And Enjoy your
                   Journey !</p>
             </div>
             <div class="hero-search">
                <div class="search-content">
                   <div class="search-content-top">
                      <div class="search-service">
                         <div class="search-room">
                            <i class="fas fa-bed"></i>
                            <span>Hotel</span>
                         </div>
                         <div class="search-fly">
                            <i class="fas fa-plane-departure"></i>
                            <span>Flight</span>
                         </div>
                         <div class="search-car">
                            <i class="fas fa-car-alt"></i>
                            <span>Car Rental</span>
                         </div>
                      </div>
                      <div class="search-passenger">
                         <div class="search-trip">
                            <span>Round trip</span>
                            <i class="fas fa-chevron-down"></i>
                         </div>
                         <div class="search-pass">
                            <span>1 passenger</span>
                            <i class="passengerIcon fas fa-chevron-down"></i>
                         </div>
                      </div>
                      <div class="passenger-model">
                         <div class="adults">
                            <div class="adults-info">
                               <p class="adults-info-name">Adults</p>
                               <p class="adults-info-subname">Ages 13 or above</p>
                            </div>
                            <div class="adults-btn">
                               <button onclick="dec('qty1')">-</button>
                               <input name="qty1" type="text" readonly value="0">
                               <button onclick="inc('qty1')">+</button>
                            </div>
                         </div>
                         <div class="adults">
                            <div class="adults-info">
                               <p class="adults-info-name">Children</p>
                               <p class="adults-info-subname">Ages 2-12 </p>
                            </div>
                            <div class="adults-btn">
                               <button onclick="dec('qty2')">-</button>
                               <input name="qty2" type="text" readonly value="0">
                               <button onclick="inc('qty2')">+</button>
                            </div>
                         </div>
                         <div class="adults">
                            <div class="adults-info">
                               <p class="adults-info-name">Infants</p>
                               <p class="adults-info-subname">Under 2</p>
                            </div>
                            <div class="adults-btn">
                               <button onclick="dec('qty3')">-</button>
                               <input name="qty3" type="text" readonly value="0">
                               <button onclick="inc('qty3')">+</button>
                            </div>
                         </div>
                      </div>
                   </div>

                   <div class="search-content-footer">
                      <div class="search-info">
                         <div class="search-location">
                            <label for="">Location<input id="local" type="text"
                                  placeholder="Where are you from?"></label>
                            <i class="fas fa-exchange-alt loca-item"></i>
                            <div class="location-model">
                               <div class="location-item">
                                  <i class="fas fa-map-marker-alt"></i>
                                  <div class="item-detail">
                                     <p class="item-detail-name">Dubai</p>
                                     <p class="item-detail-subname">Dubai Emirate, United Arab Emirates</p>
                                  </div>
                               </div>
                               <div class="location-item">
                                  <i class="fas fa-map-marker-alt"></i>
                                  <div class="item-detail">
                                     <p class="item-detail-name">Dubai</p>
                                     <p class="item-detail-subname">Qatar</p>
                                  </div>
                               </div>
                               <div class="location-item">
                                  <i class="fas fa-map-marker-alt"></i>
                                  <div class="item-detail">
                                     <p class="item-detail-name">Darling Harbour</p>
                                     <p class="item-detail-subname">Sydney, New South Wales, Australia</p>
                                  </div>
                               </div>
                               <div class="location-item">
                                  <i class="fas fa-map-marker-alt"></i>
                                  <div class="item-detail">
                                     <p class="item-detail-name">Dhaka</p>
                                     <p class="item-detail-subname">Bangladesh</p>
                                  </div>
                               </div>
                               <div class="location-item">
                                  <i class="fas fa-map-marker-alt"></i>
                                  <div class="item-detail">
                                     <p class="item-detail-name">Dubai International Airport</p>
                                     <p class="item-detail-subname">Dubai, Dubai Emirate, United Arab Emirates</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="search-checkin">
                            <label for="from">Check in<input type="text" id="from" name="checkin"
                                  placeholder="Add Date"></label>
                            <i class="fas fa-exchange-alt loca-item"></i>
                         </div>
                         <div class="search-checkout">
                            <label for="to">Check out<input type="text" id="to" name="checkout"
                                  placeholder="Add Date"></label>
                         </div>
                         <div class="search-passenger-mobile">
                            <label for="from">Passenger<input type="text" placeholder="Add passenger"></label>
                         </div>
                      </div>
                      <button class="search-btn">Search</button>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>

    <div class="place">
       <div class="container">
          <div class="place-intro">
             <h2 class="text-heading">Search a best place in the world</h2>
             <p class="text-sub-heading">Whether you’re looking for places for a vacation. We are here to Guide you
                about the details you need to check in and ease your trips in advance</p>
          </div>
          <div class="place-list">


             <div class="place-item">
                <div class="place-item-content">
                   <img src="template/images/feature3.jpg" alt="">
                   <p class="place-item-name">Batu, East Java</p>
                   <p class="place-item-des">86 Destinations</p>
                </div>
             </div>

             
          </div>
       </div>
    </div>

    <div class="feature">
       <div class="container">
          <div class="feature-intro">
             <h2 class="text-heading">Featured Destinations</h2>
             <p class="text-sub-heading">Popular destinations open to visitors from Indonesia</p>
          </div>
          <div class="feature-content">
             <div class="feature-list">
                <div class="feature-item">
                   <img src="template/images/feature1.jpg" alt="">
                   <div class="feature-item-detail">
                      <span class="feature-item-point">3.5</span>
                      <div class="feature-item-info">
                         <p class="feature-item-name">Barcelona Tour</p>
                         <div class="feature-item-activity">
                            <img srcset="template/images/activity.png 3x" alt="">
                            <p>196 Activities</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="feature-item">
                   <img src="template/images/feature2.jpg" alt="">
                   <div class="feature-item-detail">
                      <span class="feature-item-point">3.5</span>
                      <div class="feature-item-info">
                         <p class="feature-item-name" style="font-size: 18px;">Barcelona Tour</p>
                         <div class="feature-item-activity">
                            <img srcset="template/images/activity.png 3x" style="width: 14px; height: 14px;" alt="">
                            <p style="font-size: 10px;">196 Activities</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="feature-item">
                   <img src="template/images/feature3.jpg" alt="">
                   <div class="feature-item-detail">
                      <span class="feature-item-point">3.5</span>
                      <div class="feature-item-info">
                         <p class="feature-item-name" style="font-size: 18px;">Barcelona Tour</p>
                         <div class="feature-item-activity">
                            <img srcset="template/images/activity.png 3x" style="width: 14px; height: 14px;" alt="">
                            <p style="font-size: 10px;">196 Activities</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="feature-item">
                   <img src="template/images/feature4.jpg" alt="">
                   <div class="feature-item-detail">
                      <span class="feature-item-point">3.5</span>
                      <div class="feature-item-info">
                         <p class="feature-item-name" style="font-size: 24px;">Barcelona Tour</p>
                         <div class="feature-item-activity">
                            <img srcset="template/images/activity.png 3x" style="width: 20px;height: 20px;" alt="">
                            <p style="font-size: 14px;">196 Activities</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="feature-item">
                   <img src="template/images/feature3.jpg" alt="">
                   <div class="feature-item-detail">
                      <span class="feature-item-point">3.5</span>
                      <div class="feature-item-info">
                         <p class="feature-item-name" style="font-size: 24px;">Barcelona Tour</p>
                         <div class="feature-item-activity">
                            <img srcset="template/images/activity.png 3x" style="width: 20px;height: 20px;" alt="">
                            <p style="font-size: 14px;">196 Activities</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="feature-item">
                   <img src="template/images/feature2.jpg" alt="">
                   <div class="feature-item-detail">
                      <span class="feature-item-point">3.5</span>
                      <div class="feature-item-info">
                         <p class="feature-item-name" style="font-size: 18px;">Barcelona Tour</p>
                         <div class="feature-item-activity">
                            <img srcset="template/images/activity.png 3x" style="width: 14px;height: 14px;" alt="">
                            <p style="font-size: 10px;">196 Activities</p>
                         </div>
                      </div>
                   </div>
                </div>

              
             </div>
          </div>
       </div>
    </div>

    <div class="tour">
       <div class="container">
          <div class="tour-intro">
             <h2 class="text-heading">Top Tour</h2>
             <p class="text-sub-heading">Keep calm & travel on</p>
          </div>
          <div class="tour-content">
             <div class="tour-list">

                <div class="tour-item">
                   <img src="template/images/feature3.jpg" alt="">
                   <div class="tour-info">
                      <button>Japan</button>
                      <div class="tour-info-footer">
                         <h4 class="tour-name">Japan</h4>
                         <p class="tour-amount">10 Popular Places</p>
                      </div>
                   </div>
                </div>
                
             </div>
          </div>
       </div>
    </div>

    <div class="explore">
       <div class="container">
          <div class="explore-intro">
             <h2 class="text-heading">Explore The World</h2>
             <p class="text-sub-heading">10,788 beautiful places to go</p>
          </div>
          <div class="explore-content">
             <div class="explore-list">

                <div class="explore-item">
                   <img src="template/images/feature4.jpg" alt="">
                   <div class="item-info">
                      <div class="item-point"><i class="fas fa-star"></i>
                         <span>4.91</span>(147)</div>
                      <div class="item-name">Comfort Space <span>$210</span>
                      </div>
                      <div class="item-distance">
                         1.2 km to Town Center
                      </div>
                      <div class="item-location">
                         <i class="fas fa-map-marker-alt"></i>Turkey, Mamaris
                      </div>
                      <div class="item-room"><i class="far fa-hospital"></i>Rooms available: 375</div>
                   </div>
                </div>

             </div>
          </div>
       </div>
    </div>

    <div class="trending">
       <div class="container">
          <div class="trending-intro">
             <h2 class="text-heading">Trending cites</h2>
             <p class="text-sub-heading">The most searched for cities on TripGuide</p>
          </div>
          <div class="trending-content">
             <div class="trending-list">

                <div class="trending-item-list">

                   <div class="trending-item-info">
                      <img src="template/images/feature2.jpg" alt="">
                      <div class="trending-item-detail">
                         <p class="item-name">Manila</p>
                         <div class="item-point"><i class="fas fa-star"></i>
                            <span>4.91</span>(147)</div>
                         <p class="item-price">$250.00<span>/night</span></p>
                         <button class="item-book">Book Now</button>
                      </div>
                   </div>

                </div>
             </div>
          </div>
       </div>
    </div>

    <div class="travel">
       <div class="container">
          <div class="travel-intro">
             <h2 class="text-heading">Travel Your Passion</h2>
             <p class="text-sub-heading">Most Brilliant reasons Entrada should be your one-stop-shop!</p>
          </div>
          <div class="travel-content">
             <div class="travel-list">
                
                <div class="travel-item">
                   <img src="template/images/feature4.jpg" alt="">
                   <div class="travel-info">
                      <h4 class="travel-name">Beach Hobby</h4>
                      <div class="travel-point"><i class="fas fa-star"></i>
                         4.8 (122 reviews)</div>
                   </div>
                </div>

             </div>
          </div>
       </div>
    </div>
 </main>
 @include('lock.footer')
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
 <script src="template/js/app.js"></script>
 <script src="template/js/calendar.js"></script>
</body>
