<div id="slider_wrapper">
  <div class="container">
    <div id="slider_inner">
      <div class="">
        <div id="slider">

          <div class="">
            <div class="carousel-box">
              <div class="inner">
                <div class="carousel main">
                  <ul>
                    <li>
                      <div class="slider">
                        <div class="slider_inner">
                          <div class="txt1"><span>Welcome To Our</span></div>
                          <div class="txt2"><span>TRAVEL AGENCY</span></div>
                          <div class="txt3"><span>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod.</span></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="slider">
                        <div class="slider_inner">
                          <div class="txt1"><span>7 - Day Tour</span></div>
                          <div class="txt2"><span>AMAZING CARIBBEAN</span></div>
                          <div class="txt3"><span>Lorem ipsum dolor eleifend option congue nihil imperdiet doming id quod.</span></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="slider">
                        <div class="slider_inner">
                          <div class="txt1"><span>5 Days In</span></div>
                          <div class="txt2"><span>PARIS (Capital Of World)</span></div>
                          <div class="txt3"><span>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod.</span></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="slider">
                        <div class="slider_inner">
                          <div class="txt1"><span>12 - Day Cruises</span></div>
                          <div class="txt2"><span>FROM GREECE TO SPAIN</span></div>
                          <div class="txt3"><span>MEDITERRANEAN - 12 - Day Cruises By "GRAND VICTORIA III" Cruise Liner.</span></div>

                        </div>
                      </div>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="slider_pagination"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="front_tabs">
  <div class="container">
    <div class="tabs_wrapper tabs1_wrapper">
      <div class="tabs tabs1">
        <div class="tabs_tabs tabs1_tabs">

            <ul>
              <li class="active flights"><a href="#tabs-1">Search Here</a></li>
            </ul>

        </div>
        <div class="tabs_content tabs1_content">

            <div id="tabs-1">
              <form action="search-result" method="post" class="form1">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="select1_wrapper">
                        <label>Enter Destination Name</label>

                        <div class="select1_inner">
                            <select class="select2 " name="des" style="width: 100%" id="destination">
                              <option value="">Select</option>
                              <?php foreach ($allDestinations as $data):?>
                                <option value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                              <?php endforeach; ?>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="select1_wrapper">
                        <label>Enter Location Name:</label>
                        <div class="select1_inner">
                          <select class="select2" name="loc" style="width: 100%" id="location">
                            <option value="">Select</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="button1_wrapper">
                        <button type="submit" class="btn-default btn-form1-submit">Search</button>
                      </div>
                    </div>
                  </div>
                </form>
            </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div id="why1">
  <div class="container">

    <h2 class="animated" data-animation="fadeInUp" data-animation-delay="100">WHY WE ARE THE BEST</h2>

    <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="200">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br>tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>

    <br><br>

    <div class="row">
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="200">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure class="">
                <img src="<?php echo base_url(); ?>admin/assets/images/why1.png" alt="" class="img1 img-responsive">
                <img src="<?php echo base_url(); ?>admin/assets/images/why1_hover.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Amazing Travel</div>
                <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</div>
                <div class="txt3">Read More</div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="300">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure class="">
                <img src="<?php echo base_url(); ?>admin/assets/images/why2.png" alt="" class="img1 img-responsive">
                <img src="<?php echo base_url(); ?>admin/assets/images/why2_hover.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Discover</div>
                <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</div>
                <div class="txt3">Read More</div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="400">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure class="">
                <img src="<?php echo base_url(); ?>admin/assets/images/why3.png" alt="" class="img1 img-responsive">
                <img src="<?php echo base_url(); ?>admin/assets/images/why3_hover.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Book Your Trip</div>
                <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</div>
                <div class="txt3">Read More</div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="500">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure class="">
                <img src="<?php echo base_url(); ?>admin/assets/images/why4.png" alt="" class="img1 img-responsive">
                <img src="<?php echo base_url(); ?>admin/assets/images/why4_hover.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Nice Support</div>
                <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</div>
                <div class="txt3">Read More</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="parallax1" class="parallax">
  <div class="bg1 parallax-bg"></div>
  <div class="overlay"></div>
  <div class="parallax-content">
    <div class="container">

      <div class="row">
        <div class="col-sm-10 animated" data-animation="fadeInLeft" data-animation-delay="100">
          <div class="txt1">Caucasus Vacation Packages</div>
          <div class="txt2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.</div>
          <div class="txt3">From: Khazbegi (Goergia) <strong>$159.00</strong><span>person</span></div>
        </div>
        <div class="col-sm-2 animated" data-animation="fadeInRight" data-animation-delay="200">
          <a href="#" class="btn-default btn0">Details</a>
        </div>
      </div>

    </div>
  </div>
</div>

<div id="popular_cruises1">
  <div class="container">

    <h2 class="animated" data-animation="fadeInUp" data-animation-delay="100">POPULAR CRUISES</h2>

    <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="200">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br>tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>

    <br><br>

    <div id="popular_wrapper" class="animated" data-animation="fadeIn" data-animation-delay="300">
      <div id="popular_inner">
        <div class="">
          <div id="popular">
            <div class="">
              <div class="carousel-box">
                <div class="inner">
                  <div class="carousel main">
                    <ul>
                      <li>
                        <div class="popular">
                          <div class="popular_inner">
                            <figure>
                              <img src="<?php echo base_url(); ?>admin/assets/images/popular01.jpg" alt="" class="img-responsive">
                              <div class="over">
                                <div class="v1">Bahamas <span>17 Deal Offers</span></div>
                                <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                              </div>
                            </figure>
                            <div class="caption">
                              <div class="txt1"><span>Bahamas</span> 7 Night Tour</div>
                              <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</div>
                              <div class="txt3 clearfix">
                                <div class="left_side">
                                  <div class="stars1">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star2.png" alt="">
                                  </div>
                                  <div class="nums">- 18 Reviews</div>
                                </div>
                                <div class="right_side"><a href="#" class="btn-default btn1">See All</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="popular">
                          <div class="popular_inner">
                            <figure>
                              <img src="<?php echo base_url(); ?>admin/assets/images/popular02.jpg" alt="" class="img-responsive">
                              <div class="over">
                                <div class="v1">Mediterranean <span>17 Deal Offers</span></div>
                                <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                              </div>
                            </figure>
                            <div class="caption">
                              <div class="txt1"><span>Mediterranean</span> 18 Night Tour</div>
                              <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</div>
                              <div class="txt3 clearfix">
                                <div class="left_side">
                                  <div class="stars1">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                  </div>
                                  <div class="nums">- 168 Reviews</div>
                                </div>
                                <div class="right_side"><a href="#" class="btn-default btn1">See All</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="popular">
                          <div class="popular_inner">
                            <figure>
                              <img src="<?php echo base_url(); ?>admin/assets/images/popular03.jpg" alt="" class="img-responsive">
                              <div class="over">
                                <div class="v1">Greece <span>17 Deal Offers</span></div>
                                <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                              </div>
                            </figure>
                            <div class="caption">
                              <div class="txt1"><span>Greece</span> 6 Night Tour</div>
                              <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</div>
                              <div class="txt3 clearfix">
                                <div class="left_side">
                                  <div class="stars1">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star2.png" alt="">
                                  </div>
                                  <div class="nums">- 16 Reviews</div>
                                </div>
                                <div class="right_side"><a href="#" class="btn-default btn1">See All</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="popular">
                          <div class="popular_inner">
                            <figure>
                              <img src="<?php echo base_url(); ?>admin/assets/images/popular01.jpg" alt="" class="img-responsive">
                              <div class="over">
                                <div class="v1">Bahamas <span>17 Deal Offers</span></div>
                                <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                              </div>
                            </figure>
                            <div class="caption">
                              <div class="txt1"><span>Bahamas</span> 7 Night Tour</div>
                              <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</div>
                              <div class="txt3 clearfix">
                                <div class="left_side">
                                  <div class="stars1">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star2.png" alt="">
                                  </div>
                                  <div class="nums">- 18 Reviews</div>
                                </div>
                                <div class="right_side"><a href="#" class="btn-default btn1">See All</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="popular">
                          <div class="popular_inner">
                            <figure>
                              <img src="<?php echo base_url(); ?>admin/assets/images/popular02.jpg" alt="" class="img-responsive">
                              <div class="over">
                                <div class="v1">Mediterranean <span>17 Deal Offers</span></div>
                                <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                              </div>
                            </figure>
                            <div class="caption">
                              <div class="txt1"><span>Mediterranean</span> 18 Night Tour</div>
                              <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</div>
                              <div class="txt3 clearfix">
                                <div class="left_side">
                                  <div class="stars1">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                  </div>
                                  <div class="nums">- 168 Reviews</div>
                                </div>
                                <div class="right_side"><a href="#" class="btn-default btn1">See All</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="popular">
                          <div class="popular_inner">
                            <figure>
                              <img src="<?php echo base_url(); ?>admin/assets/images/popular03.jpg" alt="" class="img-responsive">
                              <div class="over">
                                <div class="v1">Greece <span>17 Deal Offers</span></div>
                                <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                              </div>
                            </figure>
                            <div class="caption">
                              <div class="txt1"><span>Greece</span> 6 Night Tour</div>
                              <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</div>
                              <div class="txt3 clearfix">
                                <div class="left_side">
                                  <div class="stars1">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star1.png" alt="">
                                    <img src="<?php echo base_url(); ?>admin/assets/images/star2.png" alt="">
                                  </div>
                                  <div class="nums">- 16 Reviews</div>
                                </div>
                                <div class="right_side"><a href="#" class="btn-default btn1">See All</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="popular_pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="happy1">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-md-push-6">
        <div class="content">
          <div class="txt1 animated" data-animation="fadeIn" data-animation-delay="100">HAPPY CUSTOMERS</div>
          <div class="txt2 animated" data-animation="fadeIn" data-animation-delay="150">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, set amet. </div>
          <div class="txt3 animated" data-animation="fadeIn" data-animation-delay="200">
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh oui-
sod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit dolore magna aliquam erat voutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit..
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euisod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.
            </p>
          </div>

          <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="0">
            <div class="txt">Flights</div>
            <div class="bg">
              <div class="animated-distance" data-num="94" data-duration="1300" data-animation-delay="0"><span></span></div>
            </div>
          </div>

          <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="100">
            <div class="txt">Hotels</div>
            <div class="bg">
              <div class="animated-distance" data-num="87" data-duration="1300" data-animation-delay="100"><span></span></div>
            </div>
          </div>

          <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="200">
            <div class="txt">Cars</div>
            <div class="bg">
              <div class="animated-distance" data-num="48" data-duration="1300" data-animation-delay="200"><span></span></div>
            </div>
          </div>

          <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="300">
            <div class="txt">Cruises</div>
            <div class="bg">
              <div class="animated-distance" data-num="51" data-duration="1300" data-animation-delay="300"><span></span></div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-md-pull-6 animated" data-animation="fadeInLeft" data-animation-delay="200">
        <img src="<?php echo base_url(); ?>admin/assets/images/people.png" alt="" class="img1 img-responsive">
      </div>
    </div>
  </div>
</div>

<div id="partners">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-2 col-xs-6">
        <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="100">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure>
                <img src="<?php echo base_url(); ?>admin/assets/images/partner1.jpg" alt="" class="img1 img-responsive">
                <img src="<?php echo base_url(); ?>admin/assets/images/partner1_hover.jpg" alt="" class="img2 img-responsive">
              </figure>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 col-xs-6">
        <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="200">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure>
                <img src="<?php echo base_url(); ?>admin/assets/images/partner2.jpg" alt="" class="img1 img-responsive">
                <img src="<?php echo base_url(); ?>admin/assets/images/partner2_hover.jpg" alt="" class="img2 img-responsive">
              </figure>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 col-xs-6">
        <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="300">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure>
                <img src="<?php echo base_url(); ?>admin/assets/images/partner3.jpg" alt="" class="img1 img-responsive">
                <img src="<?php echo base_url(); ?>admin/assets/images/partner3_hover.jpg" alt="" class="img2 img-responsive">
              </figure>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 col-xs-6">
        <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="400">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure>
                <img src="<?php echo base_url(); ?>admin/assets/images/partner4.jpg" alt="" class="img1 img-responsive">
                <img src="<?php echo base_url(); ?>admin/assets/images/partner4_hover.jpg" alt="" class="img2 img-responsive">
              </figure>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 col-xs-6">
        <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="500">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure>
                <img src="<?php echo base_url(); ?>admin/assets/images/partner5.jpg" alt="" class="img1 img-responsive">
                <img src="<?php echo base_url(); ?>admin/assets/images/partner5_hover.jpg" alt="" class="img2 img-responsive">
              </figure>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 col-xs-6">
        <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="600">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure>
                <img src="<?php echo base_url(); ?>admin/assets/images/partner6.jpg" alt="" class="img1 img-responsive">
                <img src="<?php echo base_url(); ?>admin/assets/images/partner6_hover.jpg" alt="" class="img2 img-responsive">
              </figure>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<script>
  $(document).ready(function(){
    $("#destination").change(function(){
      var value = $(this).val();
      $.ajax({
        type:"POST",
        url:"<?php base_url(); ?>Main/onchangeDestination",
        data:{"id":value},
        success: function(data){
          $("#location").html(data);
        }
      });
    })
  });
</script>
