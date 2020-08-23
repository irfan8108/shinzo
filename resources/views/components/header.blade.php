<div id="LoadingGif"><center><img src="{{ asset('images/logo_white.png') }}"></center></div>

<!-- Header Start -->
<section id="shinzo">
	<header class="Landing" id="StarHere">
		<div class="container-fluid">
	    	<div class="row Top">

	    		<div class="col-md-7">
	    			<ul class="TopNav">
	    				<li>
	    					<a href="">Seller Centre</a>
	    				</li>
	    				<li>
	    					<a href="">Sell on Shnzo</a>
	    				</li>
	    				<li>
	    					<a href="">Download</a>
	    				</li>
	    				<li class="social">
	    					<a>Follow us on</a>
	    					<a href="" class="social">
	    						<i class="fa fa-facebook"></i>
	    					</a>
	    					<a href="" class="social">
	    						<i class="fa fa-instagram"></i>
	    					</a>
	    				</li>
	    			</ul>
	    		</div>

	    		<div class="col-md-5">
	    			<ul class="TopNav pull-right">
	    				<li>
	    					<a href="">
	    						<i class="fa fa-bell"></i> Notifications
	    					</a>
	    				</li>
	    				<li>
	    					<a href="">
	    						<i class="fa fa-question-circle"></i> Help
	    					</a>
	    				</li>
	    				<li>
	    					<a href="">
	    						<i class="fa fa-user"></i> My Account
	    					</a>
	    				</li>
	    				<li class="user">
	    					<a href="">
	    						Hello, <b>irfanALI</b>
	    					</a>
	    				</li>
	    			</ul>
	    		</div>

	      		<div class="bottomNav">
	      			<div class="col-md-2">
		        		<div class="logo">
		        			<a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}"></a>
		    			</div>
		      		</div>
		      		<div class="col-md-8">
						<div class="HeaderSearch">
							<select class="dropdown">
								<option>All</option>
								<option>Product</option>
								<option>Seller</option>
							</select>
							<input type="text" placeholder="What you are looking for...">
				          	<button type="submit"><i class="fa fa-search"></i></button>
			    		</div>
					</div>
					<div class="col-md-2">
						<ul class="TopNav">
							<li class="my_account">
		    					<a href="">
		    						<i class="fa fa-info-circle"></i> Complete Your Profile
		    					</a>
		    				</li>
						</ul>
					</div>
	      		</div>
	    	</div>
	    </div>

	    <nav role='navigation' class="menu">
  <label for="menu">Menu <i class="fa fa-bars"></i></label>
  <input type="checkbox" id="menu">
  <ul>
    <li><a href="#">My Products</a></li>
    <li class="menu-hasdropdown">
      <a href="#">Order Management
        <label title="toggle menu" for="about">
          <i class="fa fa-caret-down"></i>
        </label>
      </a>
      <input type="checkbox" id="about">
		<ul class="menu-dropdown">
			<li><a href="">Pending Orders</a></li>
			<li><a href="">Dispatch Order</a></li>
			<li><a href="">Order Status</a></li>
			<li><a href="">Order Delivered</a></li>
		</ul>
	</li>
    <li class="menu-hasdropdown">
      <a href="#">My Account 
        <label title="toggle menu" for="about">
          <i class="fa fa-caret-down"></i>
        </label>
      </a>
      <input type="checkbox" id="about">
		<ul class="menu-dropdown">
			<li><a href="">My Profile</a></li>
			<li class="menu-hasdropdown menu-hasflyout">
			  <a href="">Payment
			    <label title="toggle menu" for="services">
			      <i class="fa fa-caret-down menu-downicon"></i>
			      <i class="fa fa-caret-right menu-righticon"></i>
			    </label>        
			  </a>
			  <input type="checkbox" id="services">
			  <ul class="menu-dropdown">
	    		<li><a href="">Bank Details</a></li>
			    <li><a href="">QR Code</a></li>
			  </ul>
			</li>
			<li><a href="">Subscription</a></li>
			<li><a href="#">Customers</a></li>
			<li><a href="">Change Password</a></li>
		</ul>
	</li>
    <li class="menu-hasdropdown">
      <a href="#">Stock Management 
        <label title="toggle menu" for="about">
          <i class="fa fa-caret-down"></i>
        </label>
      </a>
      <input type="checkbox" id="about">
      <ul class="menu-dropdown">
        <li class="menu-hasdropdown menu-hasflyout">
          <a href="">Category
            <label title="toggle menu" for="services">
              <i class="fa fa-caret-down menu-downicon"></i>
              <i class="fa fa-caret-right menu-righticon"></i>
            </label>        
          </a>
          <input type="checkbox" id="services">
          <ul class="menu-dropdown">
            <li><a href="">Add New Category</a></li>
            <li><a href="">List of Categories</a></li>
          </ul>
        </li>
        <li class="menu-hasdropdown menu-hasflyout">
          <a href="">Product
            <label title="toggle menu" for="services">
              <i class="fa fa-caret-down menu-downicon"></i>
              <i class="fa fa-caret-right menu-righticon"></i>
            </label>        
          </a>
          <input type="checkbox" id="services">
          <ul class="menu-dropdown">
            <li><a href="">Add New Product</a></li>
            <li><a href="">List of Products</a></li>
          </ul>
        </li>
        <li><a href="">Out of Stock</a></li>
      </ul>
    </li>
    <li><a href="#">Enquiries</a></li>

  </ul>
</nav>



	</header>
</section>

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