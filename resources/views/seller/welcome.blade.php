@extends ('layouts.seller')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">

			<!-- <h2>
				Welcome irfanALI, <br><small>You are almost done!</small>
			</h2> -->

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
</div>

@endsection