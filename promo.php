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
								<p class="name"> PROMO</p>
								<p class="line"></p>
								<p class="menu_txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                <br>Duis neque turpis, fermentum volutpat dignissim eu, blandit sed dui. </p>
							</div>
						</div>
					</div>
					
						
							<br><br>
							<div class="row">
								
										<div class="col-md-6">
											<div class="shop" style="height: 300px" >
				                                    <div class="img"><img src="img/Asset 26.png" style="height: 100%;"></div>
				                                    <i class="fa fa-heart-o heart" aria-hidden="true" ></i>
			                                    <i class="fa fa-eye eye" aria-hidden="true">
			                                    	<div class="tri_message">Qick view</div>
			                                    </i>
				                                    <div class="shop_icon_promo">ADD TO BAG</div>              
				  							</div>
										</div>
										<div class="col-md-6">
											<div class="shop" style="height: 300px" >
				                                    <div class="img"><img src="img/Asset 27.png" style="height: 100%;"></div>
				                                    <i class="fa fa-heart-o heart" aria-hidden="true" ></i>
			                                    <i class="fa fa-eye eye" aria-hidden="true">
			                                    	<div class="tri_message">Qick view</div>
			                                    </i>
				                                    <div class="shop_icon_promo">ADD TO BAG</div>              
				  							</div>
										</div>	
										<div class="col-md-6">
											<div class="shop" style="height: 300px" >
				                                    <div class="img"><img src="img/Asset 30.png" style="height: 100%;"></div>
				                                    <i class="fa fa-heart-o heart" aria-hidden="true" ></i>
			                                    <i class="fa fa-eye eye" aria-hidden="true">
			                                    	<div class="tri_message">Qick view</div>
			                                    </i>
				                                    <div class="shop_icon_promo">ADD TO BAG</div>              
				  							</div>
										</div>		
								
							</div>
							<div class="row">
								<div class="col-md-offset-4 col-md-4 lead_more">LOAD MORE PRODUCTS</div>
							</div>
						</div>

					<!-- </div>	 -->
					<!-- sales -->

				</div>
			<!-- /Center content -->	
		</div>
</body>


<style type="text/css">

.sub_m_n{
	color:silver;
	font-size: 18px;
}
.lead_more{
	color:white;
	background-color: #a3836d;
	padding: 10px;
	text-align: center;
	margin-bottom: 80px;
	font-size: 13px;
	font-weight: bold;
}
.tri_message{
	display: none;
}
.deposit{
	font-size: 11px;
	color:#a3836d;
}
.discount{
	font-size: 11px;
	color:silver;
	padding: 5px;
}
.shop .eye:hover .tri_message{
	display: block;
	color:white;
	position: absolute;
	top:4px;
	left: -80px;
	background-color: black;
	padding: 10px;
	font-size: 12px;
}
  .shop:hover .shop_icon_promo{
        display: block;
    }
    .shop:hover i{
        display: block;
    }
    .shop_icon_promo{
        display: none;
        background-color: #a3836d;
        padding: 13px 30px;
        position: absolute;
        bottom:-36px;
        color:white;
        font-size: 12px;
        font-weight: bold;
        margin-left: 33%;
    }
    .shop:hover{
        border:1px solid #a3836d;
        /*margin-bottom: 100px;*/
    }
    .shop{
        position: relative;
        margin-left: 50px;
        border:1px solid white;
        margin-bottom: 50px;
    }
    .shop .heart{   
        float: right;
        position: absolute;
        top:10px;
        right: 7px;
        display: none;
        background-color: #a3836d;
        color:white;
        padding: 12px;
    }
     .shop .eye{   
        float: right;
        position: absolute;
        top:55px;
        right: 7px;
        display: none;
        background-color: #a3836d;
        color:white;
        padding: 12px;
    }
    .shop i:hover{
    	background-color: black;
    }
	.line{
		background-color: #a3836d;
		height: 3px;
		margin-left: 33%;
		width: 34%;


	}
	.name{
		font-size: 30px;
		margin-top: 50px;
		color:black;
		margin-bottom: 30px;
		text-align: center;
	}
	.arrivals_content{
		margin-left: 5%;
		margin-right: 5%;
	}
	.menu_txt{
		font-size: 11px;
		color:black;
		text-align: center;
		font-style: italic;
		font-weight: 600;
		margin-top: 25px;
		margin-bottom: 40px;
	}
	.heading{
		color:black;
		font-weight: 500;
		margin-bottom: 15px;
		/*margin-top: 40px;*/
	}
	  input[type="radio"] {
                display: inline-block;
                margin: -5px 12px 0 0;
                visibility: hidden;
            }
            .radio_label{
                display: inline-block;
                cursor: pointer;
                position: relative;
                /*  padding-left: 25px;*/
                margin-right: 15px;
                color:#a3836d;
                font-size: 12px;
            }
            .radio_label::before {
                content: "";
                display: inline-block;

                width: 16px;
                height: 16px;

                margin-right: 10px;
                position: absolute;
                left: 0;
                /*   bottom: 4px;*/
                border:1.3px solid #a3836d;
                /*background-color: #aaa;
                box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);*/
                border-radius:100%;
            }

            input[type="radio"]:checked + span:before {
                content: "";
                display: inline-block;

                width: 16px;
                height: 16px;
                color:#a3836d;
                margin-right: 10px;
                position: absolute;
                left: 1px;
                top:1px;
                border-radius:100%;
                background-color: #a3836d;
            }
	}
	.sale{
		margin-top: 0px;
	}
	.sale_count{
		font-size: 11px;
		color:black;
		font-weight: bold;
	}
	.sale select option{
		font-size:11px;
	}
	.sale select{
		font-size:11px;
		text-align: center;

	}
	.sale_br:hover{
		border:1px solid #a3836d;
	}
	.sale_br img{
/*  vertical-align: middle; display:table-cell;
    height: 100%;
    width: 100%;*/
    margin-left: 15%;
    margin-right:5%;
	}
	.price{
		color:black;
		text-align: center;
		font-weight: bold;
		font-size:13px;
	}
	.silver{
		color:silver;
		text-align: center;
		font-weight: bold;
		font-size:11px;
	}
	.icon {
		display: block;
	}
	.icon i{
		color:white;
		padding: 15px;	
	}
	.icon_txt_hover span{
		color:white;
	}
	.icon:hover{
		background-color: black;
	}
	.add_bag{
		color:white;
	}




</style>

