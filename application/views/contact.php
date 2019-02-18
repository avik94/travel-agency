<div id="google_map_wrapper"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48378.942093541875!2d-74.02680463316234!3d40.724975032709295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1550477012499" width="1399" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
<div class="breadcrumbs1_wrapper">
  <div class="container">
    <div class="breadcrumbs1"><a href="<?= base_url(); ?>">Home</a><span>/</span>Contacts</div>
  </div>
</div>
<div id="content">
  <div class="container">

    <div class="row">
      <div class="col-sm-6">
        <h3>CONTACT INFO</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
  tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
        <br>
        <h4>ADDRESS</h4>
        <p>
          <?php echo $siteAddress->address; ?>
          <a href="<?= base_url();?>">travel-agency.com</a>
        </p>

        <h4>PHONE</h4>

        <p>
          <?php echo $siteAddress->phone_no_1; ?><br>
          <?php echo $siteAddress->phone_no_2; ?>
        </p>

        <div class="social3_wrapper contactSocial">
          <ul class="social3 clearfix">
            <li><a href="<?= $navigationLink->facebook_link; ?>"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="<?= $navigationLink->twitter_link; ?>"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?= $navigationLink->google_link; ?>"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="<?= $navigationLink->pinterest_link; ?>"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="<?= $navigationLink->youtube_link; ?>"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6">
        <h3>CONTACT FORM</h3>
        <div id="note"></div>
        <div id="fields">
          <form id="contactForm">
            <div class="form-group">
                <label for="inputName">Your Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" name="email" required>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="inputMessage">Your Message</label>
                  <textarea class="form-control" rows="7" name="content">Message</textarea>
                </div>
              </div>
            </div>
            <button type="submit" class="btn-default btn-cf-submit">send message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $("#contactForm").submit(function(event){
    event.preventDefault();
    $.ajax({
      url:"<?= base_url();?>Main/contactFormSubmit",
      type:"post",
      data:$("#contactForm").serialize(),
      success:function(data){
        var returnMsg = data;
        if (returnMsg == "Submitted") {
          swal("Form Submited", "We Will Get Back To You Soon", "success");
        }
        if (returnMsg == "error") {
          alert("* Please Fill Up All The Fields");
        }
      }
    });
  })
});
</script>
