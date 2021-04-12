@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">Create New   Video </div>
                <div class="card-body">

                    <form method="POST" enctype="multipart/form-data" class="well">
                     
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <p>


                            <select class="form-control" name="player_id">
                                @foreach($players as $player)
                                <option value="{{$player->id}}">{{$player->name}}</option>
                                @endforeach
                            </select> 
                        </p>
                        <p>
                            <input type="text" name="title" placeholder="Video Title" class="form-control" value="" autocomplete="off">
                        </p>
                               <p>
                            <input type="text" name="url" placeholder="Video Url YT" class="form-control" value="" autocomplete="off">
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
          <th scope="col">Player</th>
          <th scope="col">Player Name</th>
          <th scope="col"> Player URL-YTB</th>
        
         
         
      </tr>
  </thead>
  <tbody>
   @foreach($videos as $video)
   <tr>
          <th width="20%"><img src="{{asset('images/'.$video->player->image)}}" width="60px" height="60px" /></th>
      <th width="20%">{{$video->player->name}}</th>

      <th width="30%">{{$video->title}}</th>
      <th width="30%">{{$video->url}} </th>

 
   

     </tr>
         
        @endforeach

      </tr>

      
      
  </tbody>
  
</table>
</div>



@endsection
