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
			<div class="shopping_bag">
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
								<div class="col-md-offset-1 col-md-10 ">
									<p class="shop_pg_nm">SHOPPING CART</p>
									<div class="row">
										<div class="col-md-2 col-xs-2 col-sm-2 tyt">Prodcut</div>
										<div class="col-md-2 col-xs-2  col-sm-2 tyt"></div>
										<div class="col-md-2 col-xs-2 col-sm-2 tyt">Price</div>
										<div class="col-md-2 col-xs-3 col-sm-3 tyt" >Quantity</div>
										<div class="col-md-2 col-xs-2 col-sm-2 tyt">Total</div>
										<div class="col-md-2 col-xs-2 col-sm-2 tyt"></div>
										<div class="clearfix"></div>
										<div class="hr"></div>
									</div>
										<div class="cart_list">
											<div class="row">
													<div class="col-md-4">
														<div class="row">
															<div class="col-md-5">
																<img src="img/Asset 8.png">
															</div>
															<div class="col-md-7 col-xs-12">
																<div class="cart_list_name">Zinat-i-Zishan</div><br>
																<div class="cart_list_txt">Marquetry Bird Oval Drop Earrings</div>
															</div>
														</div>
													</div>
													<div class="col-md-2 col-xs-2"><div class="shop_pr">$ 200</div></div>
													<div class="col-md-2 col-xs-5" >
														<div class="quantity">
  															<input type="number" min="1" max="9" step="1" value="1">
														</div>
													</div>
													<div class="col-md-2 col-xs-2"><div class="shop_pr">$ 200</div></div>
													<div class="col-md-2 col-xs-2">
														<div class="close_icon"><i class="fa fa-times" aria-hidden="true"></i></div>
													</div>
													<div class="clearfix"></div>
													<div class="hr"></div>
											</div>
										</div>
										<!--  -->
										<div class="cart_list">
											<div class="row">
													<div class="col-md-4">
														<div class="row">
															<div class="col-md-5">
																<img src="img/Asset 8.png">
															</div>
															<div class="col-md-7 col-xs-12">
																<div class="cart_list_name">Zinat-i-Zishan</div><br>
																<div class="cart_list_txt">Marquetry Bird Oval Drop Earrings</div>
															</div>
														</div>
													</div>
													<div class="col-md-2 col-xs-2"><div class="shop_pr">$ 200</div></div>
													<div class="col-md-2 col-xs-5" >
														<div class="quantity">
  															<input type="number" min="1" max="9" step="1" value="1">
														</div>
													</div>
													<div class="col-md-2 col-xs-2"><div class="shop_pr">$ 200</div></div>
													<div class="col-md-2 col-xs-2">
														<div class="close_icon"><i class="fa fa-times" aria-hidden="true"></i></div>
													</div>
													<div class="clearfix"></div>
													<div class="hr"></div>
											</div>
										</div>
									 <!--  -->
									 <div class="cart_list">
											<div class="row">
													<div class="col-md-4">
														<div class="row">
															<div class="col-md-5">
																<img src="img/Asset 8.png">
															</div>
															<div class="col-md-7 col-xs-12">
																<div class="cart_list_name">Zinat-i-Zishan</div><br>
																<div class="cart_list_txt">Marquetry Bird Oval Drop Earrings</div>
															</div>
														</div>
													</div>
													<div class="col-md-2 col-xs-2"><div class="shop_pr">$ 200</div></div>
													<div class="col-md-2 col-xs-5" >
														<div class="quantity">
  															<input type="number" min="1" max="9" step="1" value="1">
														</div>
													</div>
													<div class="col-md-2 col-xs-2"><div class="shop_pr">$ 200</div></div>
													<div class="col-md-2 col-xs-2">
														<div class="close_icon"><i class="fa fa-times" aria-hidden="true"></i></div>
													</div>
													<div class="clearfix"></div>
													<div class="hr"></div>
											</div>
										</div>
										<!--  -->
										
										</div>
								</div>
							</div>
							<!-- COUPON CODE  -->


							<div class="coupen_cod">
								<div class="row">
									<div class="col-md-offset-1 col-md-6 ">
										<p class="coupen_cod_name">COUPON CODE</p>
										<div class="for_code">
											<input type="text" name="" class="for_cd_in" placeholder="Enter you coupon code here">
											<input type="submit" name="" value="APPY COUPON">
										</div>
										<div class="apply">
											<input type="submit" name="" value="CONTINUE SHOPPING" class="appl_input">
											<input type="submit" name="" value="UPDATE CART">
										</div>
									</div>
									<div class="col-md-offset-1  col-md-3">
										<p class="coupen_cod_name">GRAND TOTAL</p>
										<div style="margin-top: 20px"></div>
										<div class="tot_general">
											<div class="total">
												<div class="tot_n">Subtotal </div>
												<div class="tot_pr">$ 450</div>
											</div>
											<div class="clearfix"></div>
											<div class="total_line"></div>
										</div>
										
										<div class="tot_general">
											<div class="total">
												<div class="tot_n">Shipping </div>
												<div class="tot_pr">$ 0,50</div>
											</div>
											<div class="clearfix"></div>
											<div class="total_line"></div>
										</div>
										<div class="tot_general">
											<div class="total">
												<div class="tot_n cost">TOTAL COST </div>
												<div class="tot_pr">$ 500</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="procedd">
											<input type="submit" name="" value="PROCEED TO CHECKOUT">
										</div>
									</div>
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
<style type="text/css">
	@media only screen and (max-width: 768px){
   .shop_pr,.close_icon{
	margin-top:115%;
	}
	.cart_list_name{
		margin-top: 18px;
	}

	.for_code input[type="text"]{
		width: 100%;
	}
	.for_code input[type="submit"]{
		width: 100%;
	}
	.apply input[type="submit"]{
		width: 100%;
	}
}
</style>

<script type="text/javascript">
	    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });
</script>