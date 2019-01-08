<div id="google_map2_wrapper"><div id="google_map2"><img src="<?= base_url('admin/assets/'); ?>images/google-image.jpg" alt="" class="img-responsive"></div></div>

<div class="breadcrumbs1_wrapper">
  <div class="container">
    <div class="breadcrumbs1"><a href="<?= base_url();?>">Home</a><span>/</span><a href="<?php echo base_url(); ?>destinations">Destinations</a><span>/</span></span>Search Result</div>
  </div>
</div>
<div id="content">
  <div class="container">

    <div class="tabs_wrapper tabs1_wrapper">
      <div class="tabs tabs2">
        <div class="tabs_tabs tabs1_tabs">
          <ul>
            <li class=" flights"><a href="#tabs-1">Location</a></li>
          </ul>
        </div>
        <div class="tabs_content tabs1_content">
          <div id="tabs-1">
            <div class="row customRow">
                <?php if($CountSearchResult == 0): ?>
                  <div class="col-sm-5">
                    <h4><span><p class="starNote">* Warning</p></span>Please Enter Proper Destination With Location</h4>
                  </div>
                <?php endif; ?>
               <?php foreach ($searchResult as $data):?>
                <div class="col-sm-5">
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
               <?php endforeach;?>
               <div class="col-sm-1 paddindOut">
                 <div class="borderRight">
                 </div>
               </div>
               <div class="col-sm-6">
                 <div class="row">
                   <div class="col-sm-6">
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
                           </div>
                         </a>
                       </div>
                     </div>
                   </div>
                   <div class="col-sm-6">
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
                           </div>
                         </a>
                       </div>
                     </div>
                   </div>
                   <div class="col-sm-6">
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
                           </div>
                         </a>
                       </div>
                     </div>
                   </div>
                   <div class="col-sm-6">
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
                           </div>
                         </a>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
