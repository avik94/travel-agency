<div class="row">
  <?php foreach ($allLocationData as $data):?>
  <div class="col-sm-12">
    <?php echo $data->location_map;?>
  </div>
  <?php endforeach; ?>
</div>
<div id="content">
    <div class="container">
        <div class="row">
          <?php foreach ($allLocationData as $data):?>
            <div class="col-sm-12">
                <div class="blog_content">
                    <div class="post post-full">
                        <h3 class="hch"><?= $data->name;?></h3>
                        <span class="star-rating">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png">
                        </span>
                        <div class="clearfix"></div>
                        <p class="address">Na Strzi 32, Prague, 14000, Czech Republic</p>
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
                                                  <?php $str = $data->slider_images;
                                                    $separateSlider = explode(",",$str);
                                                    // print_r($separateSlider);
                                                  ?>
                                                  <?php foreach ($separateSlider as $value):?>
                                                    <li>
                                                        <div class="sl1">
                                                            <div class="sl1_inner">
                                                                <img src="<?php echo base_url();?>admin/assets/images/single-location-slider/<?php echo $value; ?>" alt="" class="img-responsive">
                                                            </div>
                                                        </div>
                                                    </li>
                                                  <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-story">
                            <!-- <div class="post-story-info margin-top">
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
                            </div> -->

                            <div class="post-story-body clearfix">

                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent.
                                </p>
                                <p>
                                    Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum.
                                </p>
                                <p>
                                    Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <h4>Available Hotel</h4>
                      </div>
                    </div>
                </div>
            </div>
          <?php endforeach; ?>
        </div>
    </div>
</div>
