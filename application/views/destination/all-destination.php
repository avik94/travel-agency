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
            <form action="Main/searchForm" method="post" class="form1">
                <div class="row">
                  <div class="col-sm-5">
                    <div class="select1_wrapper">
                      <label>Enter Destination Name</label>
                      <div class="select1_inner">
                        <select class="select2 select" name="des" style="width: 100%">
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
                        <!-- <input type="text" name="loc"> -->
                        <select class="select2 select" name="loc" style="width: 100%">
                          <?php foreach ($allLocations as $data):?>
                          <option value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
                        <?php endforeach; ?>
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
            <div class="row customRow">
                <div class="col-sm-12">
                  <?php $count=0;$numOfCol=3; ?>
                  <div class="row">
                    <?php foreach ($destinationDetails as $data):?>
                    <div class="col-sm-4">
                      <div class="thumb5">
                        <div class="thumbnail clearfix">
                          <figure>
                            <img src="<?php echo base_url(); ?>admin/assets/images/destinations/<?php echo $data->image; ?>" alt="" class="img-responsive">
                            <div class="over">
                              <div class="v1"><?php echo strtoupper($data->name); ?></div>
                              <!-- <div class="v2"></div> -->
                            </div>
                          </figure>
                          <div class="caption">
                            <div class="txt1 desHeadding"><?php echo strtoupper($data->name); ?></div>
                            <div class="txt2 desDescription"><?php echo $data->description; ?></div>
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
                              <div class="right_side"><a href="<?php echo base_url(); ?>all-location/?id=<?php echo $data->id;?>" class="btn-default btn1">See All</a></div>
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
                      <li class="li"><?php echo $this->pagination->create_links();?></li>
                      <!-- <li class="active"><a href="#">2</a></li>li class="next"><a href="#">Next</a></li> -->
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
