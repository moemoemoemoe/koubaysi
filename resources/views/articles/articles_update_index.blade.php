@extends('layouts.app')

@section('content')
<div class="container">

	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">

				<div class="card-header">Update  Article</div>
				<div class="card-body">

					<form method="POST" enctype="multipart/form-data" class="well">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<p>
							<input type="text" name="title" placeholder="Ttile" class="form-control" value="{{$articles->title}}" autocomplete="off">
						</p>
						 <p>
							<input type="text" name="description" placeholder="Product Description" class="form-control" value="{{$articles->description}}" autocomplete="off" style="height: 200px">
						</p>
                      			</p>
             <p>
                  
                            <b>Current Image</b>
                        </p>
                        <p>
                            <img src="{{asset('uploads/articles/'.$articles->image)}}" class="img img-responsive" style="height:100px" />
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
