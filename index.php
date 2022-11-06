<?php include 'header.php';?>

<body>
<?php include 'navbar.php';?>
<?php include 'menu-tab.php';?>
<div class = "content">
			<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class = "col-md-9 col-lg-9 image-content">
					<div class = "widget">
						<div class = "widget-content">
							<?php include 'slider.php';?>
						</div>						
					</div>				
				</div>
				<?php include('right-sidebar.php');?>		
			
			
		<div class = "content">
			<div class = "col-lg-12 col-md-12 col-xs-12 col-sm-12">
<div class  = "content">
			<div class = "col-lg-12 col-sm-12 col-md-12 col-xs-12 last-row">
			<div class = "class = "col-lg-12">
				<h1 class = "page-title center" style = "padding-top:50px;">Company Statement</h1>
			</div>
				<div class = "col-lg-4 col-md-4 thumb">
					<img src = "img/77.jpg">		
				</div>
				<div class = "col-sm-8 col-lg-6 col-md-6">
					<h2 class = "welcome">The food that makes you feel good</h2>
					<p class = "body-text">The Catering Services offers great satisfaction and awesome experience not only in food but in all of their services that guarantee the customers needs. 
					Through the great effort of their kitchen personnel and their catering crews they are successfully giving the services and a high quality value of foods that suites to all occasions and theme.
					</p>
					<br/>
					<p class = "body-text">
					Wanting to give their clients service and a catering experience like no other, Charie's Catering has always strived to provide something new to their patrons. This is evident in the constantly expanding menus and packages that they offer.
“We attend seminars and trainings in order to see the newest trends that we can use here in the country,”Charie Catering believes that we have to continuously learn new approaches in providing for the needs
					</p>
				</div>
			</div>
		</div>
		
<?php include 'header.php';?>

<body>


<!-- Main content starts -->

<div class="content">

  	
	    <!-- Matter -->

	    <div class="matter">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Menu</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
<?php
	include('includes/dbcon.php');
	$query=mysqli_query($con,"select * from subcategory")or die(mysqli_error($con));
		while ($row=mysqli_fetch_array($query)){
			$subcat_id=$row['subcat_id'];
			$subcat_name=$row['subcat_name'];
?>   

                <div class="widget-content">
                  <div class="padd">
                    <h3><?php echo $subcat_name;?></h3>
                    <div class="gallery">
                      <!-- Full size image link in anchor tag. Thumbnail link in image tag. -->
<?php
						
							$querym=mysqli_query($con,"select * from menu natural join subcategory where subcat_id='$subcat_id' order by menu_name")or die(mysqli_error($con));
							while ($rowm=mysqli_fetch_array($querym)){
								$mid=$rowm['menu_id'];
								$menu=$rowm['menu_name'];
								/* $cat=$rowm['cat_name']; */
								$subcat=$rowm['subcat_name'];
								$desc=$rowm['menu_desc'];
								$price=$rowm['menu_price'];
								$pic=$rowm['menu_pic'];
?>                        
                      <a href="images/<?php echo $pic;?>" class="prettyPhoto[pp_gal]" title="<?php echo $menu." - P".$price;?>" alt="<?php echo $menu." - P".$price;?>">
                      		<img src="images/<?php echo $pic;?>" alt="<?php echo $menu." - P".$price;?>">
                      		
                      </a>
                     <?php }?>
                    </div>

                  </div><!--pad-->
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div><!--widget-->
<?php }?>                
              </div>  
              
            </div>


            <div class="col-md-4">
              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Combo</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
<?php
	include('includes/dbcon.php');
	$query=mysqli_query($con,"select * from combo")or die(mysqli_error($con));
		while ($row=mysqli_fetch_array($query)){
			$combo_id=$row['combo_id'];
			$combo_name=$row['combo_name'];
			$price=$row['combo_price'];
?>   

                <div class="widget-content">
                  <div class="padd">
                    <h3><?php echo $combo_name." - <span class='label label-primary'>P".$price."</span>";?></h3>
                    
                      <!-- Full size image link in anchor tag. Thumbnail link in image tag. -->
<?php
						
							$querym=mysqli_query($con,"select * from combo_details natural join menu where combo_id='$combo_id' group by cat_id")or die(mysqli_error($con));
							while ($rowm=mysqli_fetch_array($querym)){
								
								$menu_name=$rowm['menu_name'];
?>                        
                    <!-- Widget content -->
                  <!-- activity starts -->
                  <ul class="activity">

                    <li>
                      <!-- Icon with avtivity  -->
                      <?php echo $menu_name;?>
                    </li>

                  </ul> 

                     <?php }?>
                    

                  </div><!--pad-->
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div><!--widget-->
<?php }?>                
              </div>  
            </div>


          </div>
        </div>
		 
		<!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->	    
   <div class="clearfix"></div>

</div>
<!-- Content ends -->

		
			
			
					</a>
				</div>	
			</div>
		</div>	

		
		
		
    <?php include 'footer.php';?> 
<?php include 'script.php';?>
 <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
        
    </script>
</body>
</html>



