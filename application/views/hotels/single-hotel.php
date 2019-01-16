<div id="main">
    <div class="breadcrumbs1_wrapper">
        <div class="container">
            <div class="breadcrumbs1"><a href="https://demo.gridgum.com/templates/Travel-agency/index.html">Home</a><span>/</span>Pages<span>/</span>Hotels</div>
        </div>
    </div>


    <div id="content">
        <div class="container">
            <div class="row">
              <?php foreach ($hotelData as $data):?>
                <div class="col-sm-3">
                    <div class="sidebar-block">
                        <form action="https://demo.gridgum.com/templates/Travel-agency/javascript;">
                            <h3><?= $data->name; ?></h3>
                            <span class="star-rating-left">
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                            </span>
                            <div class="clearfix"></div>
                            <div style="margin-top:10px;"></div>

                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label>Check-In:</label>
                                    <div class="input1_inner">
                                        <input type="text" class="input" value="16/07/2014" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label>Check-Out:</label>
                                    <div class="input1_inner">
                                        <input type="text" class="input" value="26/07/2014" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <span class="nights">10-night stay</span>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label class="col-md-6" style="padding-left:0;padding-top:12px;">Rooms:</label>
                                    <div class="input2_inner col-md-6" style="padding-right:0;padding-left:0;">
                                        <input type="text" class="input" value="1" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input2_wrapper">
                                    <label class="col-md-6" style="padding-left:0;padding-top:12px;">Adults:</label>
                                    <div class="input2_inner col-md-6" style="padding-right:0;padding-left:0;">
                                        <input type="text" class="input" value="2" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label class="col-md-6" style="padding-left:0;padding-top:12px;">Children:</label>
                                    <div class="input2_inner col-md-6" style="padding-right:0;padding-left:0;">
                                        <input type="text" class="input" value="0" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label class="col-md-6" style="padding-left:0;padding-top:12px;font-weight:500;color:#464646;font-size:13px;">Price:</label>
                                    <div class="col-md-6 price-left" style="padding-right:0;padding-left:0;">
                                        <span class="red">$150</span>/<span class="blue">night</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label class="col-md-6" style="padding-left:0;padding-top:12px;font-weight:500;color:#464646;font-size:13px;">Total Booking:</label>
                                    <div class="col-md-6 price-total-left" style="padding-right:0;padding-left:0;">
                                        <span class="red">$1500</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="no-padding margin-top text-center" style="margin-top:30px;">
                                <a href="https://demo.gridgum.com/templates/Travel-agency/booking-hotel-page.html" class="btn btn-default btn-cf-submit3" style="width:100%;">RESERVE NOW</a>
                            </div>
                            <div class="clearfix"></div>

                        </form>

                    </div>
                </div>
              <?php endforeach; ?>
              <?php foreach ($hotelData as $data):?>
                <div class="col-sm-9">
                    <div class="blog_content">
                        <div class="post post-full">
                            <h3 class="hch hotelTittle"><?= $data->name;?></h3>
                            <span class="star-rating">
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                            </span>
                            <div class="clearfix"></div>
                            <div class="post-header">
                                <div class="post-slide">
                                    <div id="sl1">
                                        <a class="sl1_prev" href="#"></a>
                                        <a class="sl1_next" href="#"></a>
                                        <div class="sl1_pagination"></div>
                                        <div class="carousel-box">
                                            <div class="inner">
                                                <div class="carousel main">
                                                    <ul>
                                                      <?php $hotelImages = explode(",",$data->slider_image);
                                                      foreach($hotelImages as $singleImage):?>
                                                        <li>
                                                            <div class="sl1">
                                                              <div class="sl1_inner">
                                                                  <img src="<?= base_url(); ?>admin/assets/images/hotels/<?= $singleImage; ?>" alt="" class="img-responsive">
                                                              </div>
                                                            </div>
                                                        </li>
                                                        <?php endforeach;?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-story">
                                <div class="post-story-info margin-top">
                                    <div class="date12">Most Popular Facilities:</div>
                                    <div class="by">
                                        <span class="option-booking">
                                            <i class="free-wifi"></i> <span>Free WIFI</span>
                                            <i class="breakfast"></i> <span>Breakfast included</span>
                                            <i class="airport-shuttle"></i> <span>Airport shuttle</span>
                                            <i class="parking"></i> <span>Parking</span>
                                            <i class="no-smoking"></i> <span>No smoking room</span>
                                        </span>
                                    </div>
                                </div>

                                <div class="post-story-body clearfix">
                                    <p>
                                        <?= $data->short_description; ?>
                                    </p>
                                    <p>
                                        <?= $data->description; ?>
                                    </p>
                                </div>
                                <div class="post-story-tags clearfix">

                                    <div class="tags_wrapper"><b>Tags</b>: <a href="#">Travel</a>, <a href="#">Flights</a>, <a href="#">Early Booking</a>, <a href="#">Cruises</a> </div>

                                    <div class="share_post clearfix">
                                        <div class="txt1">Share Post:</div>
                                        <div class="social4_wrapper">
                                            <ul class="social4 clearfix">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                       </div>
                    </div>
                </div>
              <?php endforeach; ?>
            </div>
        </div>
    </div>

  </div>