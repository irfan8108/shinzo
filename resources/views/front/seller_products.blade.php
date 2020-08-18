@extends ('layouts.default')

@section('content')


<!-- Popup for enquiry -->
  <div class="modal fade" id="enquiryModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="EnquiryModalHeading">Product Name</h4>
        </div>

        <form>

        <input type="hidden" id="txtUserId" name="txtUserId" value="">
        <input type="hidden" id="txtProductId" name="txtProductId" value="">
        <div class="modal-body">
          <p>Please fill the below form to,<br>
          <b>Get a <span class="txt-orange">call back</span> or <span class="txt-orange">quotation</span> for such product by related seller</b><hr>
          	<div class="row">
          		<div class="col-md-12">

          			<!-- <div class="row">
      					<div class="col-md-1">
      					<span class="inputIcon"><i class="fa fa-user"></i></span>
	      				</div>
		          		<div class="col-md-3" style="padding: 0">
			          		<select class="form-control " name="txtUserType">
				          		
				          		@if (empty(session()->get('userId')))
					          		<option value="Guest" selected="">Guest</option>
				          		@else
				          			{{ $usr = session()->get('userType') == 1 ? "Seller" : "Buyer" }}
					          		<option value="{{ session()->get('userType') }}">{{ $usr }}</option>
					          		
				          		@endif

			          		</select>
		          		</div>
          			</div> -->

					<div class="row">
      					<div class="col-md-12">
      						<div class="form-group">
      							<label>Email Address</label>
			          			<input class="form-control validate[required, custom[email]]" data-errormessage-value-missing="Please enter your email address." data-errormessage-custom-error="Please enter a valid email address." type="text" placeholder="Enter your email address" name="txtUserEmail" id="txtUserEmail" value="{{ session()->get('userEmail') }}" >
      						</div>
	          			</div>
      				</div>

      				<div class="row">
		          		<div class="col-md-12">
		          			<div class="form-group">
		          				<label>Name</label>
			          				<input class="form-control validate[required]" data-errormessage-value-missing="Please enter your full name." type="text" placeholder="Enter your name" name="txtUserName" id="txtUserName" value="{{ session()->get('userName') }}" disabled="">
		          			</div>
	          			</div>
      				</div>

      				<div class="row">
      					<div class="col-md-12">
    						<div class="form-group">
	  							<label>Contact Number</label>
		          				<input class="form-control validate[required]" data-errormessage-value-missing="Please enter your contact number." type="text" placeholder="Enter your contact number" name="txtUserContact" id="txtUserContact" value="{{ session()->get('userMobile') }}" disabled="">
    						</div>
	          			</div>
      				</div>

      				<div class="row">
      					<div class="col-md-12">
      						<label>Comment / Message <span>(optional)</span></label>
		          			<textarea placeholder="Type your message.." class="form-control" name="txtMessage" id="txtMessage" disabled=""></textarea>
	          			</div>
      				</div>

      		 	</div>
      		</div>
        </div>
        <div class="modal-footer">
            <div class="row">
				<div class="col-md-12">
					<input type="submit" name="btnEnquiry" value="Send Now!" class="btn btn-success">
					<button type="button" id="ClosePopup" class="btn btn-default" data-dismiss="modal">Cancel</button>
  				</div>
			</div>
        </div>
    	
</form>

      </div>
      
    </div>
  </div>

<div class="container">
		<div class="row">
			<div class="col-md-12 CatLeftBar">

				<div class="PageNavigation">
					<h1>Product Name</h1>
					<a href=""><i class="fa fa-home"></i> Business Directory</a> <i class="fa fa-angle-right"></i>
					<a href="">Category Name</a> <i class="fa fa-angle-right"></i>
					<a href="">Sub Category Name</a> <i class="fa fa-angle-right"></i>
					Product Name
				</div>

<div class="row">
<div class="col-md-3">
	Filters
</div>

<div class="col-md-9 LeftZeroPad">
	<div id="wrapper">

<div id="response"></div>

<?php # if(!empty($SellersList)){ ?>
		<div id="columns" class="Prod">
			
				<!-- <div class="pin featured"> -->
				<div class="pin">
					<div class="PImage">
						<img src="{{ asset('images/dhotikurta2.jpg') }}" />
					</div>
					<div class="PDetail">
						<h1><a href=""><b>Product Name</b></a></h1>
						<p>
							<span>
								ProductDetails.....ProductDetails...ProductDetails
							</span>
						<a href="productdetails"> read more...</a></p>
						<hr>
						<span class="MobileNumber">+91-XXXXXXX998 <a href="signup.php" data-toggle="tooltip" title="You need to register to access seller information!">View</a></span>

						<!-- Sending data to EnquiryProduct() function to set enquiry popup --> 
						<span onclick="EnquiryProduct('ProductName', 'CategoryName', 'SellerID', 'ProductID')" data-toggle="modal" data-target="#enquiryModal" class="SendEnquiry"><a href="javascript:void(0)">Send Enquiry</a></span>

					</div>
					<div class="PFooter">
						<h1>Astu Fashion Apparels</h1>
						<p><i class="fa fa-map-marker"></i> G-72, Sector 63, Noida Uttarpradesh, Pin - 201301</p>
						<p><i class="fa fa-globe"></i> <a target="_blank" href="http://www.gofrescoo.com">www.gofrescoo.com/astu230</a></p>
					</div>
				</div>

				<div class="pin">
					<div class="PImage">
						<img src="{{ asset('images/dhotikurta6.jpg') }}" />
					</div>
					<div class="PDetail">
						<h1><a href=""><b>Product Name</b></a></h1>
						<p>
							<span>
								ProductDetails.....ProductDetails... ProductDetails
							</span>
						<a href="productdetails"> read more...</a></p>
						<hr>
						<span class="MobileNumber">+91-XXXXXXX998 <a href="signup.php" data-toggle="tooltip" title="You need to register to access seller information!">View</a></span>

						<!-- Sending data to EnquiryProduct() function to set enquiry popup --> 
						<span onclick="EnquiryProduct('ProductName', 'CategoryName', 'SellerID', 'ProductID')" data-toggle="modal" data-target="#enquiryModal" class="SendEnquiry"><a href="javascript:void(0)">Send Enquiry</a></span>

					</div>
					<div class="PFooter">
						<h1>Astu Fashion Apparels</h1>
						<p><i class="fa fa-map-marker"></i> G-72, Sector 63, Noida Uttarpradesh, Pin - 201301</p>
						<p><i class="fa fa-globe"></i> <a target="_blank" href="http://www.gofrescoo.com">www.gofrescoo.com/astu230</a></p>
					</div>
				</div>

		</div>

<?php # }
#else
#	{ echo "<h3 class='alert alert-warning'>Ooops, No product found!</h3>
#<a href='".$BackUrl."'><i class='fa fa-reply'></i> Back</a> | <a href="">Go to Home</a><br><br>
#"; }
?>


	</div>
</div>
</div>

				
			</div>

		</div>
</div>

@endsection
