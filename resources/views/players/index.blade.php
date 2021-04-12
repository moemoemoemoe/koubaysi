@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">Create New   Player </div>
                <div class="card-body">

                    <form method="POST" enctype="multipart/form-data" class="well">
                     
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <p>
                            <input type="text" name="name" placeholder="Player name" class="form-control" value="" autocomplete="off">
                        </p>
                               <p>
                            <input type="text" name="url" placeholder="Player Url YT" class="form-control" value="" autocomplete="off">
                        </p>
                          
               

                        
                        <p>
                            <input type="submit" value="Save" class="btn btn-primary form-control">
                        </p>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <br/>
     <table class="table table-striped" style="text-align: center;">
      <thead>
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Player Name</th>
          <th scope="col"> Player URL-YTB</th>
        
         
         
      </tr>
  </thead>
  <tbody>
   @foreach($players as $player)
   <tr>
      <th width="30%"><img src="{{asset('images/'.$player->image)}}" width="60px" height="60px" /></th>

      <th width="30%">{{$player->name}}</th>
      <th width="30%">{{$player->ytb_channel}} </th>

 
   

     </tr>
         
        @endforeach

      </tr>

      
      
  </tbody>
  
</table>
</div>



@endsection
