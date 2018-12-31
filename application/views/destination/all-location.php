<div id="google_map2_wrapper"><div id="google_map2"><img src="<?= base_url('admin/assets/'); ?>images/google-image.jpg" alt="" class="img-responsive"></div></div>

<div class="breadcrumbs1_wrapper">
  <div class="container">
    <div class="breadcrumbs1"><a href="<?= base_url();?>">Home</a><span>/</span></span>Destinations</div>
  </div>
</div>
<div id="content">
  <div class="container">

    <div class="tabs_wrapper tabs1_wrapper">
      <div class="tabs tabs2">
        <div class="tabs_tabs tabs1_tabs">
          <ul>
            <li class=" flights"><a href="#tabs-1">Destination</a></li>
          </ul>
        </div>
        <div class="tabs_content tabs1_content">
          <div id="tabs-1">
            <form action="javascript:;" class="form1">
                <div class="row">
                  <div class="col-sm-4 col-md-4">
                    <div class="select1_wrapper">
                      <label>City or Hotel Name:</label>
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">Enter a destination or hotel name</option>
                          <option value="2">Lorem ipsum dolor sit amet</option>
                          <option value="3">Duis autem vel eum</option>
                          <option value="4">Ut wisi enim ad minim veniam</option>
                          <option value="5">Nam liber tempor cum</option>
                          <option value="6">At vero eos et accusam et</option>
                          <option value="7">Consetetur sadipscing elitr</option>
                          <option value="8">Sed diam nonumy</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-2">
                    <div class="input1_wrapper">
                      <label>Check-In:</label>
                      <div class="input1_inner">
                        <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-2">
                    <div class="input1_wrapper">
                      <label>Check-Out:</label>
                      <div class="input1_inner">
                        <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-2">
                    <div class="select1_wrapper">
                      <label>Adult:</label>
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%">
                          <option value="1">Room  for  1  adult</option>
                          <option value="2">Room  for  2  adult</option>
                          <option value="3">Room  for  3  adult</option>
                          <option value="4">Room  for  4  adult</option>
                          <option value="5">Room  for  5  adult</option>
                          <option value="6">Room  for  6  adult</option>
                          <option value="7">Room  for  7  adult</option>
                          <option value="8">Room  for  8  adult</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-2">
                    <div class="button1_wrapper">
                      <button type="submit" class="btn-default btn-form1-submit">Search</button>
                    </div>
                  </div>
                </div>
              </form>
            <div class="row customRow">
                <div class="col-sm-12">
                  <?php $count=0;$numOfCol=3; ?>
                  <div class="row">
                    <?php foreach ($destinationLocation as $data):?>
                    <div class="col-sm-4">
                      <div class="thumb5">
                        <div class="thumbnail clearfix">
                          <figure>
                            <img src="<?php echo base_url(); ?>admin/assets/images/locations/<?php echo $data->image; ?>" alt="" class="img-responsive">
                            <div class="over">
                              <div class="v1"><?php echo strtoupper($data->name); ?></div>
                              <!-- <div class="v2"></div> -->
                            </div>
                          </figure>
                          <div class="caption">
                            <div class="txt1 desHeadding"><?php echo strtoupper($data->name); ?></div>
                            <div class="txt2 desDescription"><?php echo $data->short_desciption; ?></div>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price">$250.00</div>
                                <div class="stars2">
                                  <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                  <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                  <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                  <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                  <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                                </div>
                              </div>
                              <div class="right_side"><a href="<?php echo base_url(); ?>single-location/?id=<?php echo $data->id;?>" class="btn-default btn1">View Package</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <?php
                      $count++;
                      if($count%$numOfCol == 0){
                        echo '</div><div class="hl1"></div><div class="row">';
                      }
                      endforeach;
                      ?>
                  </div>

                  <div class="pager_wrapper">
                    <ul class="pager clearfix">
                      <li class="prev"><a href="#">Previous</a></li>
                      <li class="li"><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li class="li"><a href="#">3</a></li>
                      <li class="li"><a href="#">4</a></li>
                      <li class="li"><a href="#">5</a></li>
                      <li class="li"><a href="#">6</a></li>
                      <li class="li"><a href="#">7</a></li>
                      <li class="li"><a href="#">8</a></li>
                      <li class="li"><a href="#">9</a></li>
                      <li class="li"><a href="#">10</a></li>
                      <li class="next"><a href="#">Next</a></li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
