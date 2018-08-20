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
			<div class="shopping_bag2">
							<div class="row">
								<div class="col-md-offset-4 col-md-4">
									<div class="menu_name">
										<p class="name">SHOPPING BAG</p>
										<p class="line"></p>
										<p class="menu_txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		                                <br>Duis neque turpis, fermentum volutpat dignissim eu, blandit sed dui. </p>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6" style="padding: 50px">
									<p class="shopping_bag2_name">CUSTOMER INFORMATION</p>
									<div class="border"><input type="text" name="" placeholder="Email" class="shop2_n"></div>
									<br><br><br>
									<p class="shopping_bag2_name">SHIPPING ADDRESS</p><br>
									<div class="border"><input type="text" name="" placeholder="First name" class="shop2_n"></div><br>
									<div class="border"><input type="text" name="" placeholder="Last name" class="shop2_n"></div><br>
									<div class="border"><input type="text" name="" placeholder="Phone" class="shop2_n"></div><br>
									<div class="border"><input type="text" name="" placeholder="Email" class="shop2_n"></div><br>
									<div class="border"><input type="text" name="" placeholder="Address" class="shop2_n"></div><br>
									<div class="bordr_cl">
										<div class="row">
											<div class="col-md-5">
												<span class="bordr_n">Delivery time</span>
											</div>
											<div class="col-md-4">
												<div class="row">
													<div class="col-md-2">
														<i class="fa fa-calendar" aria-hidden="true" class="in"></i>
													</div>
													<div class="col-md-10">
														<div class="in_p_b"><input type="text" name="">
													</div></div>
												</div>
											   	
											</div>
											<div class="col-md-3 ">
												<div class="row">
													<div class="col-md-2">
														<i class="fa fa-clock-o" aria-hidden="true"></i>
													</div>
													<div class="col-md-8">
														<div class="in_p_b"><input type="text" name="">
													</div></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="col-md-6" style="padding: 50px">
									<div class="shop_right">
										<p class="shopping_bag2_name">PAYMENT INFORMATION</p>
										<br>
									<p><label class="radio_label"><input type="radio"  value="oui"><span><img src="img/Visa-MasterCard-Paypal.png" style="width: 130px"></span></label>  </p>
									<p><label class="radio_label"><input type="radio"  value="oui"><span class="pay">Pay at the door</span></label>  </p>
									</div><br>

									<div class="order">
									</br>
										<p class="shopping_bag2_name">ORDER SUMMARY</p>
										<div class="or_tx">
											<div class="row">
												<div class="col-md-3 order_txt_l">SUBTOTAL</div>
												<div class="col-md-offset-7  col-md-2 order_txt_r">$ 45.00</div>
											</div>
											<div class="row">
												<div class="col-md-3 order_txt_l">SHIPPING</div>
												<div class="col-md-offset-7  col-md-2 order_txt_r">$ 0</div>
											</div>
											<div class="row">
												<div class="col-md-3 order_txt_l">TAXES</div>
												<div class="col-md-offset-7  col-md-2 order_txt_r">$ 0</div>
											</div>
											<hr><br>
											<div class="row">
												<div class="col-md-3 order_txt_l">TAXES</div>
												<div class="col-md-offset-7  col-md-2 order_txt_r">$ 0</div>
											</div><hr></br>
											<div class="row">
												<div class="col-md-5 order_txt_l2">GRAND TOTAL</div>
												<div class="col-md-offset-4  col-md-3 order_txt_r2">$ 45.00</div>
											</div>
											<br>
										</div>
									</div>
										<div class="ordr_button">PROCEED TO CHECKOUT</div>
								</div>
							</div>

			</div>
			<!-- /Center content -->
		</div>
	<!-- ==================================  Start footer ==================================  -->
		<?php include "footer.php" ?>
	    <!-- ==================================  End footer  ==================================  -->
</body>
</html>




