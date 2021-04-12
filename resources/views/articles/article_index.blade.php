@extends('layouts.app')

@section('content')
<div class="container">

	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">

				<div class="card-header">Add  Article</div>
				<div class="card-body">

					<form method="POST" enctype="multipart/form-data" class="well">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<p>
							<input type="text" name="title" placeholder="Ttile" class="form-control" value="{{old('title')}}" autocomplete="off">
						</p>
						 <p>
							<input type="text" name="description" placeholder="Product Description" class="form-control" value="{{old('description')}}" autocomplete="off" style="height: 200px">
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
          <th scope="col"> Article Title</th>

         <th scope="col" style="text-align:center"><i class="fas fa-edit"></i> </th>
         
  <th scope="col"><i class="fas fa-upload"></i> </th>
      </tr>
  </thead>
  <tbody>
     @foreach($articles as $article)
     <tr>
      <th ><img src="{{asset('uploads/articles/'.$article->image)}}" style="width: 50px;height:50px"></th>
      <th > {{$article->title}}</th>

      <td style="text-align:center">  <a href="{{route('update_article', $article->id)}}" class="btn btn-primary ">Update And Details</a></td>
       <td>@if($article->status == 0)
       <a href="{{route('publish_article', $article->id)}}" class="btn btn-success ">Publish</a>
       @else
       <a href="{{route('publish_article', $article->id)}}" class="btn btn-danger ">Unpublish</a>
       @endif
   </td>
     
</tr>

@endforeach

</tbody>

</table>
<hr style="border: 1px solid #169cd9;" >
{!!$articles->links()!!} 
</div>
@endsection
