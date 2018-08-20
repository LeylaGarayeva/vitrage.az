<!DOCTYPE html>
<html>
<?php 
	include "head.php";
 ?>
<body>
	<!-- ================================== Start header ==================================== -->
		<?php include "header.php" ?>
	<!-- ================================== End header  ====================================== -->



	<!-- ==================================  Start content ==================================  -->
		<div class="content" >
			<!--  Menu -->
				<?php include"menu.php" ?>
			<!-- /Menu -->

			<!-- Center content -->
				<div class="center_content" style="padding: 30px;background-color: #b2907d;">
					<div class="row">
						<div class="col-md-offset-1 col-md-10">
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="center_img">
										<img src="img/Asset 2.png" style="width: 100%;height:auto;padding: 25px">
											<div class="overlow">
												<span>Happy 
													<p/>Mothers Day!
												</span>
												<p class="overlow_txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Duis neque turpis, fermentum volutpat dignissim eu,blandit sed dui. </p>
												<div class="overlow_bg">SHOP NOW</div>
											</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="center_img">
										<img src="img/Asset 3.png" style="width: 100%;padding: 25px">
										<div class="overlow2">
												<span>Liza
													<p/>Belotserkovskaya 
												</span>
												<p class="overlow_txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Duis neque turpis, fermentum volutpat dignissim eu,blandit sed dui. </p>
												<div class="overlow_bg">SHOP NOW</div>
											</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			<!-- /Center content -->

				<br><br>
			<!-- Center content 2 -->
				<div class="center_content2">
					<div class="row">
						<div class="col-md-offset-1 col-md-10">
							<div class="center_img">
										<img src="img/Asset 4.png" class="content2_img">
										<div class="mo">
											<div class="ovl">
												<span>Zinat-i-Zishan</span>
												<p class="exc_txt">
													Lorem ipsum dolor sit amet,consectetur adipiscing elit. Duisneque turpis, fermentum volutpatdignissim eu, blandit sed dui
												</p>
											</div>
											<div class="ovl2">
												<div class="ovl_button">SHOP NOW</div>
											</div>
										</div>
							</div>
						</div>
					</div>	
				 </div>
			<!-- /Center content 2 -->

		</div>
		<div class="clear"></div>

	<!-- ==================================  End content  ==================================  -->



		<div  class="margin_slider"></div>
		        <div id="owl-demo" class="owl-carousel">
		          
		          <div class="item">
			            <span>BRACELETS</span>
			          	<img src="img/Asset 7.png">
			          	<p>Nomination</p>
		          </div>
		           <div class="item">
			            <span>BRACELETS</span>
			          	<img src="img/Asset 8.png">
			          	<p>Nomination</p>
		          </div>
		           <div class="item">
			            <span>BRACELETS</span>
			          	<img src="img/Asset 9.png">
			          	<p>Nomination</p>
		          </div>
		           <div class="item">
			            <span>BRACELETS</span>
			          	<img src="img/Asset 11.png">
		          		<p>Nomination</p>
		          </div>
		           <div class="item">
			            <span>BRACELETS</span>
			          	<img src="img/Asset 8.png">
		          		<p>Nomination</p>
		          </div>
		           <div class="item">
			            <span>BRACELETS</span>
			          	<img src="img/Asset 9.png">
		          		<p>Nomination</p>
		          </div>
		           <div class="item">
			            <span>BRACELETS</span>
			          	<img src="img/Asset 7.png">
			          	<p>Nomination</p>
		          </div>
		           <div class="item">
			            <span>BRACELETS</span>
			          	<img src="img/Asset 8.png">
			          	<p>Nomination</p>
		          </div>
        </div>


    <!--  -->
    <div class="clear"></div>

    <div class="row">
    	<div class="col-md-offset-1 col-md-8">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="third">
    					<img src="img/Asset 14.png">
    					<div class="ovl_text">
    						<span>BRACELETS</span>
    						<p>Exclusive Capsule
							<br>Collection</p>
    					</div>
    				</div>   				
    			</div>
    			<div class="col-md-6">
    				<div class="third">
    					<img src="img/Asset 14.png">
    					<div class="ovl_text">
    						<span>BRACELETS</span>
    						<p>Exclusive Capsule
							<br>Collection</p>
    					</div>
    				</div>   				
    			</div>
    		</div>
    		<div class="col-md-12">
    				<div class="third th">
    					<img src="img/Asset 15.png">
    					<div class="ovl_text ">
    						<span>NEW ARRIVALS</span>
    						<p>Jewelry That
							<br>Conveys Feelings</p>
    					</div>
    				</div>   				
    			</div>
    	</div>
    	<div class="col-md-3">
    				<div class="third th">
    					<img src="img/Asset 12.png">
    					<div class="ovl_text">
    						<span>EARINGS</span>
    						<p>Jewelry That
							<br>Conveys Feelings</p>
    					</div>
    				</div>   				
    			</div>
  	</div>
		<!-- ==================================  Start footer ==================================  -->
		<?php include "footer.php" ?>
	    <!-- ==================================  End footer  ==================================  -->
</body>
</html>

 <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        navigation : true
      });
    });

</script>



