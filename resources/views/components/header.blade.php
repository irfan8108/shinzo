<div id="LoadingGif"><center><img src="{{ asset('images/logo.png') }}"></center></div>

<!-- Header Start -->
<header class="Landing" id="StarHere">
    
    <input type="hidden" id="baseUrl" value="{{ url('/') }}">

	<div class="container-fluid">
    	<div class="row Top">
      		<div class="col-md-2">
        		<div class="logo">
        			<a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}"></a>
    			</div>
      		</div>
      		<div class="col-md-7">
				<!-- <ul class="TopNav">
					<li><a href="">Seller</a><span>|</span></li>
					<li><a href="">Get the Android App</a><span>|</span></li>
					<li><a href="" target="_blank">E-Commerce Store</a><span>|</span></li>
					<li><a href="">Help</a><span>|</span></li>
					<li><a href="">Faq's</a><span>|</span></li>
					<li><a href="">Term & Privacy</a><span>|</span></li>
					<li><a href="">Blog</a></li>
				</ul> -->
				<div class="HeaderSearch">
					<select class="dropdown">
						<option>All</option>
						<option>Product</option>
						<option>Seller</option>
					</select>
					<input type="text" placeholder="What you are looking for...">
		          	<input type="submit" value="Search">
	    		</div>
			</div>
      		<div class="col-md-3">
        		<div class="HeaderTopRight">
          			<table>
						@if(auth::check())
						    <tr>
						        <td rowspan="2"><img src="{{ asset('images/avatar.png') }}"></td>
						        <td><a href="">UserName</a> <span>|</span> <a href="">Logout</a> <i class="fa fa-sign-out"></i></td>
						    </tr>
						@else
						    <tr>
						        <td rowspan="2"><img src="{{ asset('images/avatar.png') }}"></td>
						        <td><a href="{{ route('whoU') }}">Login / Signup</a></td>
						    </tr>
						@endif
            				<tr>
		              			<td><a href="" class="MyAccountTopLink">My Account</a></td>
			            	</tr>
	          		</table>
        		</div>
      		</div>
    	</div>

	    <div class="row headerMenuRow">
			<div class="col-md-2 CatBor">
	    
	        	<!-- Call heler for multi-dropdown categories -->
				<x-header-categories />

			</div>

			<div class="col-md-8">
				<ul class="TopNav">
					<li><a href="">Seller</a><span>|</span></li>
					<li><a href="">Get the Android App</a><span>|</span></li>
					<li><a href="" target="_blank">E-Commerce Store</a><span>|</span></li>
					<li><a href="">Help</a><span>|</span></li>
					<li><a href="">Faq's</a><span>|</span></li>
					<li><a href="">Term & Privacy</a><span>|</span></li>
					<li><a href="">Blog</a></li>
				</ul>
				<!-- <div class="HeaderSearch">
					<select class="dropdown">
						<option>All</option>
						<option>Product</option>
						<option>Seller</option>
					</select>
					<input type="text" placeholder="What you are looking for...">
		          	<input type="submit" value="Search">
	    		</div> -->
	  		</div>

	      	<div class="col-md-2">
	        	<!-- <div class="HeaderLocation">
	          		<span><i class="fa fa-phone"></i></span>
	          		<span>
	          			<b>Call us:</b> +91 8800 899 998<br><b>Customer support:</b> info@shinzo.com
	          		</span>
		        </div> -->
	      	</div>
	    </div>
    </div>

</header>

<header class="fixed">
	<div class="container">
		<div class="row">
  			<div class="col-md-1 col-xs-3">
        		<div class="logo">
    				<a href="">
    					<img src="{{ asset('images/logo.png') }}">
    				</a>
    			</div>
  			</div>

			<div class="col-xs-9 OnlyForMobile">
				<div class="HeaderLocation">
			  		<span><b><i class="fa fa-phone"></i></b> +91 999 999 9901 <br><b><i class="fa fa-envelope"></i></b> info@shinzo.com</span>
				</div>
			</div>

			<div class="col-md-2 CatBor">
				<x-header-categories />
			</div>

			<div class="clear Header OnlyforMobile"></div>

			<div class="col-xs-2 OnlyForMobile">
        		<a href="javascript:void(0)" class="MobileToggle">
        			<i class="fa fa-bars" aria-hidden="true"></i>
        		</a>
        		<a href="javascript:void(0)" class="MobileToggleClose">
        			<i class="fa fa-times" aria-hidden="true"></i>
        		</a>
      		</div>
      		<div class="col-md-6 col-xs-10">
        		<div class="HeaderSearch">
	          		<input type="text" placeholder="What you are looking for...">
	          		<input type="submit" value="Search">
		        </div>
      		</div>
	      	<div class="col-md-3 NotForMobile">
		        <div class="HeaderLocation">
	          		<!---<span><i class="fa fa-phone"></i></span>-->
	          		<span><b>Call us:</b> +91 8800 899 998 <br>
	          		<b>Customer support:</b> info@shinzo.com</span>
		        </div>
	      	</div>
    	</div>
	</div>
</header>            
<!-- Header End -->