      <div id="main-stage">
        <div class="container">
          <div id="row">
            <div class="col-md-12">



<!-- Styles --> 
<style style="text/css">
.example1 {
 height: 50px;  
 overflow: hidden;
 position: relative;
}
.example1 p {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);  
 transform:translateX(100%);
 /* Apply animation to this element */  
 -moz-animation: example1 15s linear infinite;
 -webkit-animation: example1 15s linear infinite;
 animation: example1 15s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes example1 {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes example1 {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes example1 {
 0%   { 
 -moz-transform: translateX(100%); /* Firefox bug fix */
 -webkit-transform: translateX(100%); /* Firefox bug fix */
 transform: translateX(100%);     
 }
 100% { 
 -moz-transform: translateX(-100%); /* Firefox bug fix */
 -webkit-transform: translateX(-100%); /* Firefox bug fix */
 transform: translateX(-100%); 
 }
}
</style>

<!-- HTML --> 
<div class="col-md-2">
  <div style="top: 15px; position: relative; text-align: right;"><span class="go_smaller" style="color: #777;">LATEST ACTIVITY:</span></div>
</div>
<div class="example1 col-md-10">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eaque, vero ex ab doloribus, repudiandae, consequatur incidunt deserunt unde velit magnam. Perferendis ullam deserunt dolore quas soluta, suscipit nemo. Temporibus. </p>
</div>

            </div>
            <div class="col-md-8">


              <div style="clear: both; padding-top: 0px;">
                <div class="col-md-12">
                  <div id="tabbed-headline"><span class="headline">Latest Headlines</span></div>
                </div>

                <div class="col-md-6" style="padding-top: 24px;">
                  <img src="<?= base_url() ?>images/room.jpg" class="img img-responsive">

                  <h3><a href="#" class="dark_link">
                        All of the latest Inside Scoop stories to go here...
                      </a>
                  </h3>
                    <div class="go_smaller">David Connelly <span class="ghost">- 6th Feb 2017</span></div>
                    <div style="clear: both; text-align: right;"><span class="badge badge-default">12</span></div>

                    <p>
                      The model is talking about booking her latest gig, modeling WordPress underwear in the brand latest Perfectly Fit campaign, which was shot...
                    </p>

                </div>

                <div class="col-md-6" style="padding-top: 24px; color: cyan;">
                  <?php
                  for ($i=0; $i < 4; $i++) {
                  ?>
                  <div class="col-md-12" style="padding-top: 0px !important; margin-top: 0px !important; border-bottom: 1px #eee solid; padding-top: 24px; padding-bottom: 24px;">
                    <h4><a href="#" class="dark_link">Fashion Photography Helps Raising Funds</h4>
                      <div class="go_smaller">David Connelly <span class="ghost">- 6th Feb 2017</span></div>
                      <div style="clear: both; text-align: right;"><span class="badge badge-default">12</span></div>
                  </div><!-- end of md-12 div, a few lines above -->
                  <?php
                  }
                  ?>
                </div><!-- end of md-6 div -->
              </div><!-- end of clear both both; padding-top: 36px; div -->





















              <div style="clear: both;">
                <div class="col-md-6">
                  <img src="<?= base_url() ?>images/hptopleft1.jpg" class="img img-responsive">
                  <h3><a href="#" class="dark_link">
                        Top Ten Here Magazine Charts the Most Fashionable New York Couples in...
                      </a>
                  </h3>
                    <div class="go_smaller">David Connelly <span class="ghost">- 6th Feb 2017</span></div>
                    <div style="clear: both; text-align: right;"><span class="badge badge-default">12</span></div>
                </div>

                <div class="col-md-6">
                  <img src="<?= base_url() ?>images/hptopleft1.jpg" class="img img-responsive">
                  <h3><a href="#" class="dark_link">
                        TOP TEN The top picture needs to be a bit more shorter (not quite as high).
                      </a>
                  </h3>
                    <div class="go_smaller">David Connelly <span class="ghost">- 6th Feb 2017</span></div>
                    <div style="clear: both; text-align: right;"><span class="badge badge-default">12</span></div>
                </div>
              </div><!-- end of row -->


              <div style="clear: both; padding-top: 36px;">
                <div class="col-md-12">
                  <div id="tabbed-headline"><span class="headline">Fasion Week</span></div>
                </div>

                <?php
                for ($i=0; $i < 6; $i++) { 
                ?>
                <div class="col-md-6" style="border-bottom: 1px #eee solid; padding-top: 24px; padding-bottom: 24px;">
                  <h4><a href="#" class="dark_link">Fashion Photography Helps Raising Funds</h4>
                    <div class="go_smaller">David Connelly <span class="ghost">- 6th Feb 2017</span></div>
                    <div style="clear: both; text-align: right;"><span class="badge badge-default">12</span></div>
                </div>
                <?php
                }
                ?>
              </div>





<div style="padding-top: 36px; clear: both; margin-top: 36px;">
  <?php
  for ($i=0; $i < 2; $i++) { 
  ?>
  <div class="col-md-6" style="padding-top: 24px;">
    <div id="tabbed-headline"><span class="headline">Lifestyle</span></div>

  <?php
  for ($x=0; $x < 3; $x++) { 
  ?>
    <div style="border-bottom: 1px #eee solid;  padding-top: 24px; padding-bottom: 24px;">
      <div style="clear: both; text-align: center;"><span class="badge badge-default">12</span></div>
      <h4 style="text-align: center;"><a href="#" class="dark_link">Fashion Photography Helps Raising Funds</h4>
      <div class="go_smaller" style="text-align: center;">David Connelly <span class="ghost">- 6th Feb 2017</span></div>
    </div>
  <?php
  }
  ?>


  </div>
  <?php
  }
  ?>
</div>










              <div style="clear: both; padding-top: 36px;">
                <div class="col-md-12">
                  <div id="tabbed-headline"><span class="headline">Golden Nuggets</span></div>



                  <?php
                  for ($i=0; $i < 3; $i++) { 
                  ?>
                  <div style="clear: both; padding-top: 24px;">
                    <div class="col-md-3" style="padding-left: 0px; margin-left: 0px;">
                      <img src="<?= base_url() ?>images/hptopleft1.jpg" class="img img-responsive">
                    </div>
                    <div class="col-md-9">
                      <h3 style="clear: both; padding-top: 0px; margin-top: 0px; margin-bottom: 0px;"><a href="#" class="dark_link">
                        WordPress News Magazine Charts the Most Fashionable New York Couples in 2016
                      </a></h3>

                      <div class="go_smaller">David Connelly <span class="ghost">- 6th Feb 2017</span></div>
                      <div style="clear: both; text-align: right;"><span class="badge badge-default">12</span></div>

                      <p style="margin-top: 0px; padding-top: 0px;">
                        The model is talking about booking her latest gig, modeling WordPress underwear in the brand latest Perfectly Fit campaign, which was shot...
                      </p>
                    </div>
                  </div>
                  <?php
                  }
                  ?>


                </div>
              </div>

































</div><!-- end of entire left side -->




<?= Modules::run('templates/_draw_right_side') ?>
          </div><!-- end of row -->
        </div><!-- end of container -->
      </div><!-- end of stage -->