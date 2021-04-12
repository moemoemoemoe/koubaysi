@extends('layouts.app')

@section('content')
<div class="container">

	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">

				<div class="card-header">Add  Product</div>
				<div class="card-body">

					<form method="POST" enctype="multipart/form-data" class="well">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<p>
							<input type="text" name="name" placeholder="Product Name" class="form-control" value="{{old('name')}}" autocomplete="off">
						</p>
						 <p>
							<input type="text" name="description" placeholder="Product Description" class="form-control" value="{{old('description')}}" autocomplete="off" style="height: 100px">
						</p>
                       <p>


                            <select class="form-control" name="cat_id">
                                @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                @endforeach
                            </select> 
                        </p>
                        <p>
							<input type="text" name="dollar" placeholder="Price In Dollar" class="form-control" value="{{old('dollar')}}" autocomplete="off">
						</p>
						 <p>
							<input type="text" name="lbp" placeholder="Price In LBP" class="form-control" value="{{old('lbp')}}" autocomplete="off">
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

<br/>
<div class="container">

    <table class="table table-striped" style="text-align: center">
      <thead>
        <tr>
          <th scope="col">Image</th>
          <th scope="col"> Product Name</th>

         <th scope="col" style="text-align:center"><i class="fas fa-edit"></i> </th>
         
  <th scope="col"><i class="fas fa-upload"></i> </th>
      </tr>
  </thead>
  <tbody>
     @foreach($products as $product)
     <tr>
      <th ><img src="{{asset('uploads/products/'.$product->image)}}" style="width: 50px;height:50px"></th>
      <th > {{$product->name}}</th>

      <td style="text-align:center">  <a href="{{route('update_product', $product->id)}}" class="btn btn-primary ">Update And Details</a></td>
       <td>@if($product->status == 0)
       <a href="{{route('publish_product', $product->id)}}" class="btn btn-success ">Publish</a>
       @else
       <a href="{{route('publish_product', $product->id)}}" class="btn btn-danger ">Unpublish</a>
       @endif
   </td>
     
</tr>

@endforeach

</tbody>

</table>
<hr style="border: 1px solid #169cd9;" >
{!!$products->links()!!} 
</div>
@endsection
