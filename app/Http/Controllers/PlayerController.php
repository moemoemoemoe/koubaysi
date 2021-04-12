<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Video;

use Validator;
use Redirect;
use paginate;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function player_index()
    {
         $players = Player::orderBy('id','ASC')->get();

     return view('players.index',compact('players'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function player_index_save(Request $r)
    {
        
        $name =$r->input('name');
        $url =$r->input('url');
    
       

        $data = ['name' => $name, 'url'=>$url];
        $rules = ['name' => 'required', 'url' =>'required'];
        $v = Validator::make($data, $rules);
        if($v->fails()){
            return Redirect::Back()->withErrors($v)->withInput($r->input());
        }else
       {
           
             $player = new Player();
                  $player->name = $name;
                  $player->ytb_channel = $url;
                $player->image = $player->id.".jpg";

               
               
                $player->save();
      return Redirect::Back()->with('success', 'Player  added successfully');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function video_index()
    {
         $players = Player::orderBy('id','ASC')->get();
        $videos = Video::orderBy('id','ASC')->with('player')->get();
// return $videos;
     return view('videos.index_video',compact('players','videos'));

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function video_index_save(Request $r)
    {
         $player_id = $r->input('player_id');
        $title =$r->input('title');
        $url =$r->input('url');
    
       

        $data = ['title' => $title, 'url'=>$url];
        $rules = ['title' => 'required', 'url' =>'required'];
        $v = Validator::make($data, $rules);
        if($v->fails()){
            return Redirect::Back()->withErrors($v)->withInput($r->input());
        }else
       {
           
             $video = new Video();
                  $video->player_id = $player_id;
                  $video->title = $title;
                $video->url = $url;

               
               
                $video->save();
      return Redirect::Back()->with('success', 'Video  added successfully');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
