@extends ('layouts.seller')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-9">
			
			<div class="row">
				<div class="col-md-12">
					<div class="cover_pic">
						<input type="hidden" name="profile_base64" id="profile_base64">
						<div class="avatar-upload">
				            <div class="avatar-edit">
				                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
				                <label for="imageUpload"></label>
				            </div>
				            <div class="avatar-preview">
				                <div id="imagePreview" style="background-image: url({{ asset('images/cover.jpg') }})">
				                </div>
				            </div>
				        </div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					    <div class="panel panel-default shnzo_accordian">
					      <div class="panel-heading" role="tab" id="headingOne">
					        <h4 class="panel-title">
					        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					          My Online Store
					        </a>
					      </h4>
					      </div>
					      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					        <div class="panel-body">
				          	
				          		<button onclick="redirect({{ route('create','store') }})" type="button" class="btn btn-default">Create Your First Online Store</a> <i class="fa fa-plus-circle"></i></button>

				          		<button type="button" class="btn btn-default">View Stores</button>

					        </div>
					      </div>
					    </div>

					    <div class="panel panel-default shnzo_accordian">
					      <div class="panel-heading" role="tab" id="headingTwo">
					        <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          My Product
					        </a>
					      </h4>
					      </div>
					      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					        <div class="panel-body">
					        	<button type="button" class="btn btn-default" onclick="redirect({{ route('create','product') }})">Add Product</button>
					        	<button type="button" class="btn btn-default">Add Related Images</button>
					        	<button type="button" class="btn btn-default">View Products</button>
					        </div>
					      </div>
					    </div>

					    <div class="panel panel-default shnzo_accordian">
					      <div class="panel-heading" role="tab" id="promocode">
					        <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
					          Promocode/Offer
					        </a>
					      </h4>
					      </div>
					      <div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="promocode">
					        <div class="panel-body">
					        	<button type="button" class="btn btn-default">Add Promocode</button>
					        	<button type="button" class="btn btn-default">View Promocode</button>
					        	<button type="button" class="btn btn-default">Used Promocode</button>
					        	<button type="button" class="btn btn-default">Expired Promocode</button>
					        </div>
					      </div>
					    </div>

					    <div class="panel panel-default shnzo_accordian">
					      <div class="panel-heading" role="tab" id="orders">
					        <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					          Orders <span class="badge warning">7</span>
					        </a>
					      </h4>
					      </div>
					      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="orders">
					        <div class="panel-body">
								<button type="button" class="btn btn-warning">Pending Orders <span class="badge">7</span></button>
								<button type="button" class="btn btn-success">Delivered Orders</button>
					        </div>
					      </div>
					    </div>

					    <div class="panel panel-default shnzo_accordian">
					      <div class="panel-heading" role="tab" id="account">
					        <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
					          My Account <span class="label label-warning">Complete Your Profile</span>
					        </a>
					      </h4>
					      </div>
					      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="account">
					        <div class="panel-body">
								<button type="button" class="btn btn-default">Registration Details</button>
					        </div>
					      </div>
					    </div>

					    <div class="panel panel-default shnzo_accordian">
					      <div class="panel-heading" role="tab" id="payments">
					        <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
					          Payments <span class="label label-danger">Add Payment Details</span>
					        </a>
					      </h4>
					      </div>
					      <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="payments">
					        <div class="panel-body">
								<button type="button" class="btn btn-default">Upload eWallet Barcode</button>
								<button type="button" class="btn btn-default">Add Bank Details</button>
					        </div>
					      </div>
					    </div>

					</div>
				</div>
			</div>

		</div>

		<div class="col-md-3">
			
			<div class="row">
				<div class="col-md-12">
					<div class="cover_pic">
						<input type="hidden" name="profile_base64" id="profile_base64">
						<div class="avatar-upload">
				            <div class="avatar-edit">
				                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
				                <label for="imageUpload"></label>
				            </div>
				            <div class="avatar-preview">
				                <div id="imagePreview" style="background-image: url({{ asset('images/cover.jpg') }})">
				                </div>
				            </div>
				        </div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<center>
						<br>
						<p>Last Login: <b>5th August 2020</b></p>
					</center>
				</div>
			</div>

		</div>

	</div>
</div>

<!-- <div class="container">
	<div class="row">
		<div class="col-md-12 text-center">

			<div class="add_store">
				<a href="{{ route('create','store') }}">
					<img src="{{ asset('images/online-store.png') }}">
					<span class="add_icon">
						<i class="fa fa-plus-circle"></i>
					</span>
					<span>
						Create Your First Online Store 
						<span>
							You are almost done! start building your online store now.
						</span>
					</span>
					<span class="button">
						Create a Store
					</span>
				</a>
			</div>

		</div>
	</div>
</div> -->

@endsection

@include('seller.inc.data_entry')