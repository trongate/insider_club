            <div class="col-md-4">
              <div id="tabbed-headline"><span class="headline">Stay Connected</span></div>
              <?php
              //get font awesome icons here: http://fontawesome.io/icons/
              ?> 
              <table class="table" style="margin-top: 24px;">
                <tr class="go_smaller">
                  <td><a href="<?= base_url() ?>members/display"><img src="<?= base_url() ?>images/icon_mbrs.png"></a></td>
                  <td style="vertical-align: middle;"><span id="members_count">-</span> members</td>
                  <td style="text-align: right; vertical-align: middle;"><a href="#" class="dark_link">JOIN FOR FREE</a></td>
                </tr>
                <tr class="go_smaller">
                  <td><a href="#"><img src="<?= base_url() ?>images/icon_twtr.png"></a></td>
                  <td style="vertical-align: middle;"><span id="twitter_count">-</span> followers</td>
                  <td style="text-align: right; vertical-align: middle;"><a href="#" class="dark_link">FOLLOW</a></td>
                </tr>
                <tr class="go_smaller">
                  <td><a href="#"><img src="<?= base_url() ?>images/icon_ytub.png"></a></td>
                  <td style="vertical-align: middle;"><span id="youtube_count">-</span> youtube views</td>
                  <td style="text-align: right; vertical-align: middle;"><a href="#" class="dark_link">VIEW</a></td>
                </tr>
              </table>


              <div style="clear: both; margin-bottom: 36px; text-align: center;">
                <img src="<?= base_url() ?>images/adsample.jpg">
              </div>


              <div id="tabbed-headline"><span class="headline">Popular Articles</span></div>

              <?php
              for ($i=0; $i < 3; $i++) { 
              ?>
              <div id="row" style="padding-top: 24px; 24px; clear: both; padding-bottom: 24px;">
                <div class="col-md-4" style="padding-left: 0px; text-align: left;">
                  <img class="img img-responsive " src="<?= base_url() ?>images/sample150.jpg">
                </div>
                <div class="col-md-8" style="padding-left: 0px;">
                  <h5>WordPress News Magazine Charts the Most Fashionable New York Couples in 2016</h5>
                  <div class="go_smaller">David Connelly <span class="ghost">- 6th Feb 2017</span></div>
                  <div style="clear: both; text-align: right;"><span class="badge badge-default">12</span></div>
                </div>
              </div>
              <?php
              }
              ?>


              <div id="tabbed-headline" style="clear: both; padding-top: 36px !important;"><span class="headline">New Members</span></div>

<style>
ul.leaders {
    max-width: 40em;
    padding: 0;
    overflow-x: hidden;
    list-style: none}
ul.leaders li {
  padding-bottom: 12px;
}
ul.leaders li:before {
    float: left;
    width: 0;
    white-space: nowrap;
    content:
 ". . . . . . . . . . . . . . . . . . . . "
 ". . . . . . . . . . . . . . . . . . . . "
 ". . . . . . . . . . . . . . . . . . . . "
 ". . . . . . . . . . . . . . . . . . . . "}
ul.leaders span:first-child {
    padding-right: 0.33em;
    background: white}
ul.leaders span + span {
    float: right;
    padding-left: 0.33em;
    background: white}
</style>
<ul class="leaders" style="margin-top: 12px;">
<li><span>Salmon Ravioli</span>
 <span>7.95</span>
<li><span>Fried Calamari</span>
 <span>8.95</span>
<li><span>Almond Prawn Cocktail</span>
 <span>7.95</span>
<li><span>Bruschetta</span>
 <span>5.25</span>
<li><span>Margherita Pizza</span>
 <span>10.95</span>
</ul>



<div id="tabbed-headline" style="clear: both; padding-top: 36px !important;"><span class="headline">Today's Golden Nugget</span></div>

<div style="clear: both; margin-top: 24px; text-align: center;">
  <img src="<?= base_url() ?>images/andyc.jpg" class="img img-responsive">
</div>

<h3><a href="#" class="dark_link">Why tech accelerators may soon be as irrelevant as an MBA</a></h3>
<p>
  The model is talking about booking her latest gig, modeling WordPress underwear in the brand latest Perfectly Fit campaign, which was shot...
  <div style="clear: both; text-align: left;">
    <div class="go_smaller">David Connelly <span class="ghost">- 6th Feb 2017</span>
      <span class="badge badge-default" style="float: right; position: relative; top: -4px; position: relative;">12</span></div>
  </div>
</p>

<div id="tabbed-headline" style="clear: both; padding-top: 36px !important;"><span class="headline">Recommended Books</span></div>

              <?php
              for ($i=0; $i < 3; $i++) { 
              ?>
              <div id="row" style="padding-top: 24px; 24px; clear: both; padding-bottom: 24px;">
                <div class="col-md-4" style="padding-left: 0px; text-align: left;">
                  <img class="img img-responsive " src="<?= base_url() ?>images/small-landscape.jpg">
                </div>
                <div class="col-md-8" style="padding-left: 0px;">
                  <p style="font-size: 1.1em;">10 Upgrades under $1,000 that increase home values</p>
                  <div style="clear: both; text-align: center;">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> 
                  </div>
                </div>
              </div>
              <?php
              }
              ?>





<div id="tabbed-headline" style="clear: both; padding-top: 36px !important;"><span class="headline">Recent Comments</span></div>

<p style="padding-top: 12px !important;"><a href="#" class="dark_link"><i>Matt Cloey on Five reasons why in-form Leicester City will finish the job and stay up.</i></a></p>
<p style="padding-top: 12px !important;"><a href="#" class="dark_link"><i>Matt Cloey on Five reasons why in-form Leicester City will finish the job and stay up.</i></a></p>
<p style="padding-top: 12px !important;"><a href="#" class="dark_link"><i>Matt Cloey on Five reasons why in-form Leicester City will finish the job and stay up.</i></a></p>
<p style="padding-top: 12px !important;"><a href="#" class="dark_link"><i>Matt Cloey on Five reasons why in-form Leicester City will finish the job and stay up.</i></a></p>
<p style="padding-top: 12px !important;"><a href="#" class="dark_link"><i>Matt Cloey on Five reasons why in-form Leicester City will finish the job and stay up.</i></a></p>



















<script>
function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

animateValue("members_count", 3200, 2375, 2000);
animateValue("twitter_count", 3200, 3375, 2000);
animateValue("youtube_count", 3200, 4375, 2000);
</script>




              

            </div>