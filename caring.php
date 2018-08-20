<!DOCTYPE html>
<html>
<?php 
	include "head.php";
 ?>
 <link rel="stylesheet" type="text/css" href="css/style.css">
<body>
	<!-- ================================== Start header ==================================== -->
		<?php include "header.php" ?>
	<!-- ================================== End header  ====================================== -->



	<!-- ==================================  Start content ==================================  -->
		<div class="content">
			<!--  Menu -->
				<?php include"menu.php" ?>
			<!-- /Menu -->
			<!-- Center content -->
				<div class="arrivals_content">
					<div class="row">
						<div class="col-md-offset-4 col-md-4">
							<div class="menu_name">
								<p class="name"> <span class="sub_m_n">KIDS / </span>CARING</p>
								<p class="line"></p>
								<p class="menu_txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                <br>Duis neque turpis, fermentum volutpat dignissim eu, blandit sed dui. </p>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- Left side for categories -->
						<?php include "left_side.php" ?>
						<!-- / Left side for categories -->

						<div class="col-md-10">
								<div class="sale">
									<div class="row">
										<div class="col-md-3">
											<span class="sale_count">SHOWING 1 - 60 OF 1511 ITEMS</span>
										</div>
										<div class="col-md-offset-6 col-md-3">
											<select>
												<option>SORT BY FEATURED</option>
											</select>
										</div>
								</div>
						</div>
						
							<br><br>

							<!-- SHOP LIST -->

							<?php include "shop_list.php" ?>

							<!-- SHOP LIST -->

							<div class="row">
								<div class="col-md-offset-4 col-md-4 lead_more">LOAD MORE PRODUCTS</div>
							</div>
						</div>

					<!-- </div>	 -->

				</div>
			<!-- /Center content -->	
		</div>
		<!-- ==================================  Start footer ==================================  -->
		<?php include "footer.php" ?>
	    <!-- ==================================  End footer  ==================================  -->