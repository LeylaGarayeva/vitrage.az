<footer>
	<div class="footer2">
		<div class="row">
			<div class="col-md-6">
				<div class="fot_n">USEFULL INFORMATION</div>
				<div class="row">
					<div class="col-md-4">
						<ul>
							<a href="#"><li>Customer Care 24/7</li></a>
							<a href="#"><li>Delivery</li></a>
							<a href="#"><li>Exchanges & Returns</li></a>
							<a href="#"><li>Payment</li></a>
						</ul>
					</div>
					<div class="col-md-4">
						<ul>
							<a href="#"><li>Gift Cards</li></a>
							<a href="#"><li>FAQs</li></a>
							<a href="#"><li>About Us</li></a>
							<a href="#"><li>Careers</li></a>
						</ul>
					</div>
					<div class="col-md-4">
						<ul>
							<a href="#"><li>Advertising</li></a>
							<a href="#"><li>Terms & Conditions</li></a>
							<a href="#"><li>Privacy Policy</li></a>
							<a href="#"><li>Cookie Policy</li></a>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="fot_n">STAY IN TOUCH</div>
				<div class="subs_in">
					<input type="text" name="" placeholder="Sign up for the VITRAGE news..."><div class="arrow_ri"><i class="right"></i></div>
				</div>
				<div class="social_icons">
					<i class="fa fa-facebook-f"></i>
					<i class="fa fa-twitter" aria-hidden="true"></i>
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</div>
				<p>© <?php echo date('Y'); ?>, VITRAGE LLC</p>
			</div>
			<button onclick="topFunction()" id="myBtn" ><span>S</span></button>
		</div>
	</div>	
</footer>

<style type="text/css">
	.social_icons i{
	font-size: 18px;
	margin:20px 7px;
}
.subs_in input[type="text"]::-webkit-input-placeholder {
    color:rgb(163, 131, 109);
    padding: 30px;
    font-size: 12px;
    font-weight: bold;
    font-style: italic;
   } 
.subs_in input{
	float: left;
	height: 40px;
	width: 100%;
}
.arrow_ri i {
  border: solid #b2907d;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
  margin-left: 4px;

}
.arrow_ri{
	width: 22px;
	border-radius: 100%;
	border:1px solid #b2907d;
	float: left;
	position: absolute;
	right: 20px;
	margin-top: 13px;
}
.arrow_ri:hover{
background-color: #b2907d;
}
.arrow_ri:hover i{
	  border: solid white;
	  border-width: 0 3px 3px 0;
	  display: inline-block;
	  padding: 3px;
	  margin-left: 3px;
}
.right {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
}
	footer{
	/*height: 200px;*/
	background-color: #b2907d;
	color:white;
	font-size: 11px;
	padding: 30px;
}
.footer2{
	margin-right: 5%;
	margin-left: 5%;
}
.fot_n{
	padding: 30px 0px;
}
footer ul li{
padding: 9px 0px;
}


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #a3836d;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}
#myBtn  span{
	border-bottom: 2px solid white;
	font-weight: bold;
}
#myBtn:hover {
  background-color: #705c4e;
}
footer a{
	color:white;
	text-decoration: none;
}
footer a:hover{
	color:white;
	text-decoration: none;
}
</style>