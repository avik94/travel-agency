<div class="bot1_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="logo2_wrapper">
          <a href="<?= base_url(); ?>" class="logo2">
            <img src="<?php echo base_url(); ?>admin/assets/images/<?php echo $footerDetails->logo; ?>" alt="" class="img-responsive">
          </a>
        </div>
        <p>
          <?php echo $footerDetails->short_description; ?>
        </p>
        <div class="social2_wrapper">
          <ul class="social2 clearfix">
            <li class="nav1"><a href="<?php echo $navigationLink->facebook_link; ?>"></a></li>
            <li class="nav2"><a href="<?php echo $navigationLink->google_link; ?>"></a></li>
            <li class="nav3"><a href="<?php echo $navigationLink->linkedin_link; ?>"></a></li>
            <li class="nav4"><a href="<?php echo $navigationLink->pinterest_link; ?>"></a></li>
            <li class="nav5"><a href="<?php echo $navigationLink->twitter_link; ?>"></a></li>
            <li class="nav6"><a href="<?php echo $navigationLink->youtube_link; ?>"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="bot1_title">Quick Links</div>
        <ul class="footerNav">
          <li><a href="<?= base_url(); ?>">Home</a></li>
          <li><a href="<?= base_url(); ?>about">About Us</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="<?= base_url();?>destinations">Destinations</a></li>
          <li><a href="#">Hotels</a></li>
          <li><a href="#">Contacts</a></li>
        </ul>

      </div>
      <div class="col-sm-3">
        <div class="bot1_title">Our Twitter</div>
        <div class="twits1">
          <?php echo $footerDetails->twitter_feed_link; ?>
       </div>
     </div>
     <div class="col-sm-3">
      <div class="bot1_title">Newsletter</div>
      <div class="newsletter_block">
        <div class="txt1">Inspiration, ideas, news and your feedback.</div>
        <div class="newsletter-wrapper clearfix">
          <form class="newsletter" action="javascript:;">
            <input type="text" name="s" value='Email Address' onBlur="if(this.value=='') this.value='Email Address'" onFocus="if(this.value =='Email Address' ) this.value=''">
            <a href="#" class="btn-default btn3">SUBMIT</a>
          </form>
        </div>
      </div>
      <div class="phone2"><?php echo $siteAddress->phone_no_1; ?></div>
      <div class="support1"><a href="<?php echo $siteAddress->email; ?>"><?php echo $siteAddress->email; ?></a></div>
    </div>
  </div>
</div>
</div>

<div class="bot2_wrapper">
  <div class="container">
    <div class="left_side">
      Copyright © 2017 <a href="#" target="_blank"><strong>MECOVACHE</strong></a>   <span>|</span>   <a href="#">Privacy Policy</a>   <span>|</span>   <a href="#">About Us</a>   <span>|</span>   <a href="#">FAQ</a>   <span>|</span>   <a href="#">Contact Support</a>
    </div>
    <div class="right_side">Designed by <a href="#" target="_blank"><strong>MECOVACHE</strong></a></div>
  </div>
</div>

</div>
<script src="<?= base_url('admin/assets/'); ?>js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
