@extends('layouts.app')

@section('content')
<div class="container">

	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">

				<div class="card-header">Update  Product</div>
				<div class="card-body">

					<form method="POST" enctype="multipart/form-data" class="well">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<p>
							<input type="text" name="name" placeholder="Product Name" class="form-control" value="{{$products->name}}" autocomplete="off">
						</p>
						 <p>
							<input type="text" name="description" placeholder="Product Description" class="form-control" value="{{$products->description}}" autocomplete="off" style="height: 100px">
						</p>
                      
                        <p>
							<input type="text" name="dollar" placeholder="Price In Dollar" class="form-control" value="{{$products->price_dollar}}" autocomplete="off">
						</p>
						 <p>
							<input type="text" name="lbp" placeholder="Price In LBP" class="form-control" value="{{$products->price_lbp}}" autocomplete="off">
						</p>
             <p>
                  
                            <b>Current Image</b>
                        </p>
                        <p>
                            <img src="{{asset('uploads/products/'.$products->image)}}" class="img img-responsive" style="height:100px" />
                        </p>
						  <p>
                     <div class="row">
                        <div class="col-md-12">
                            Choose Image
                            <input type="file" name="photo"  class="form-control" />
                        </div>

                    </div>
                </p>
						<p>
							<input type="submit" value="Save" class="btn btn-primary form-control">
						</p>

					</form>
				</div>

			</div>
		</div>
	</div>
</div>


@endsection
