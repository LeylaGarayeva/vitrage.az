
<div class="topnav" id="myTopnav">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<a href="" class="menu_hover">New arrivals <div id="triangle-up"><br>
				<div>
				<span class="br_n">Man</span><br>
				<ul class="hov_menu">
					<li>EARRINGS</li>
					<li>RINGS</li>
					<li>BRACELETS</li>
					<li>NECKLACES</li>
					<li>PENDANTS</li>
				</ul>
				<img src="img">
				</div>
			</div></a>

	  		<a href="">brands</a>
	 		<a href="">woman</a>
	  		<a href="">man</a>
	  		<a href="">kids</a>
	  		<a href="">sale</a>
	  		<a href="">promo</a>
	  		<a href="">levatagroup</a>
	  		<input type="text" name="search" placeholder="Search..">
		</div>
	</div>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<style> 
.topnav a{
	position: relative;
}
.menu_hover div{
		display: none;
		position: absolute;
		left: 0;
		top:20;
	}


#myTopnav a:hover {
		  background-color:#b2907d;
		  color: white;
		  text-decoration: none;
		}
.hov_menu{
	display: inline;
	color:black;
}
/*#myTopnav{
	height: 400px;
}
*/

#triangle-up{
	display: none;
/*	position: absolute;
	top:0;*/
}
 .menu_hover:hover #triangle-up  {
 	display: block;
	width: 0;
	height: 0;
	border-left: 15px solid transparent;
	border-right: 15px solid transparent;
	border-bottom: 20px solid white;
	margin-left: 30px;
/*	position: absolute;
	left: 0;
	top:0;*/
}

#triangle-up div{
	width: 400px;
	background-color: white;
	display: block;
	margin-left: -190px;
	margin-top: -3px;
	color:black;
	padding: 15px;
}
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: black;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    float:right;
}

input[type=text]:focus {
    width: 100%;
}
</style>


