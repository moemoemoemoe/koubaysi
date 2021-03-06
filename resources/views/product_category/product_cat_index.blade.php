@extends('layouts.app')

@section('content')
<div class="container">

	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">

				<div class="card-header">Add  Category</div>
				<div class="card-body">

					<form method="POST" enctype="multipart/form-data" class="well">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<p>
							<input type="text" name="cat_name" placeholder="Category" class="form-control" value="{{old('cat_name')}}" autocomplete="off">
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
          <th scope="col">#</th>
          <th scope="col"> Category Name</th>
         <th scope="col" style="text-align:center"><i class="fas fa-edit"></i> </th>
         
 <!--  <th scope="col"><i class="fas fa-upload"></i> </th> -->
      </tr>
  </thead>
  <tbody>
     @foreach($allcats as $cat)
     <tr>
      <th >{{$cat->id}}</th>
      <th > {{$cat->category_name}}</th>

      <td style="text-align:center">  <a href="{{route('update_product_cat', $cat->id)}}" class="btn btn-primary ">Update And Details</a></td>
     
</tr>

@endforeach

</tbody>

</table>
<hr style="border: 1px solid #169cd9;" >
{!!$allcats->links()!!} 
</div>
@endsection
