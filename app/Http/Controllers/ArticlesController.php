<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use paginate;
use Validator;
use Redirect;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $articles = Article::orderBy('id','DESC')->paginate(6);
        return view('articles.article_index',compact('articles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_save(Request $r)
    {
        
         $title = $r->input('title');
         $description = $r->input('description');
        
  $foreign_name = mt_rand(111111,999999);
   $photo = $r->file('photo');



         $data = ['title' => $title,'description'=>$description ,'photo' => $photo];

            $rules = ['title' => 'required','description'=>'required','photo'=> 'required'];

            $v = Validator::make($data, $rules);

            if($v->fails()){
                return Redirect::Back()->withErrors($v)->withInput($r->input());
            }
            else
            {
           $destination = 'uploads/articles';
            $photo_name = str_replace(' ', '_', $foreign_name);
            $photo_name .= '.'.$photo->getClientOriginalExtension();
            $photo->move($destination, $photo_name);

                $save_products = new Article();
                $save_products->title = $title;
                $save_products->image = $photo_name;
                $save_products->description = $description;
                $save_products->status = 0;
                $save_products->save();
                return Redirect::back()->with('success', 'New Article successfuly created');

            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function publish_article($id)
    {
         $main = Article::findOrFail($id);
     if($main->status == '0')
     {
       $main->status = '1';
       $main->save();
       return Redirect::Back()->with('success', 'This  Article is Published');
     }
     else{
      $main->status = '0';
      $main->save();
      return Redirect::Back()->with('success', 'This  Article is Unpublished');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_article($id)
    {
        $articles = Article::findOrFail($id);

        return view('articles.articles_update_index',compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_article_save($id ,Request $r)
    {
         $title = $r->input('title');
         $description = $r->input('description');
        
  $foreign_name = mt_rand(111111,999999);
   $photo = $r->file('photo');



         $data = ['title' => $title,'description'=>$description ];

            $rules = ['title' => 'required','description'=>'required'];

            $v = Validator::make($data, $rules);

            if($v->fails()){
                return Redirect::Back()->withErrors($v)->withInput($r->input());
            }
            else
            {
          

if($r->hasFile('photo')){
            $destination = 'uploads/articles';
            $photo_name = str_replace(' ', '_', $foreign_name);
            $photo_name .= '.'.$photo->getClientOriginalExtension();
            $photo->move($destination, $photo_name);
        } 



                $save_products = Article::findOrFail($id);
                $save_products->title = $title;
       if($r->hasFile('photo')){
            unlink('uploads/articles/'.$save_products->image);
                  $save_products->image = $photo_name;

        }
              
                $save_products->description = $description;
               
                $save_products->save();
                return Redirect::back()->with('success', 'New Article successfuly Updated');

            }
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
