<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use paginate;
use Validator;
use Redirect;
use App\Models\Product;
class ProductsContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $products = Product::orderBy('id','DESC')->paginate(6);
         $categories = ProductCategory::orderBy('id','DESC')->get();
        return view('products.product_index',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_save(Request $r)
    {
         $name = $r->input('name');
         $description = $r->input('description');
         $cat_id = $r->input('cat_id');
         $dollar = $r->input('dollar');
         $lbp = $r->input('lbp');
  $foreign_name = mt_rand(111111,999999);
   $photo = $r->file('photo');



         $data = ['name' => $name,'description'=>$description ,'photo' => $photo,'cat_id'=>$cat_id ,'dollar'=>$dollar, 'lbp'=>$lbp];

            $rules = ['name' => 'required','description'=>'required','photo'=> 'required','cat_id' => 'required','dollar'=>'required','lbp'=>'required'];

            $v = Validator::make($data, $rules);

            if($v->fails()){
                return Redirect::Back()->withErrors($v)->withInput($r->input());
            }
            else
            {
           $destination = 'uploads/products';
            $photo_name = str_replace(' ', '_', $foreign_name);
            $photo_name .= '.'.$photo->getClientOriginalExtension();
            $photo->move($destination, $photo_name);

                $save_products = new Product();
                $save_products->name = $name;
   $save_products->image = $photo_name;
                $save_products->category_id = $cat_id;
                $save_products->description = $description;
                $save_products->price_dollar = $dollar;
                $save_products->price_lbp = $lbp;
                $save_products->status = 0;
                $save_products->save();
                return Redirect::back()->with('success', 'New Product successfuly created');

            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function publish_product($id)
    {
         $main = Product::findOrFail($id);
     if($main->status == '0')
     {
       $main->status = '1';
       $main->save();
       return Redirect::Back()->with('success', 'This  Product is Published');
     }
     else{
      $main->status = '0';
      $main->save();
      return Redirect::Back()->with('success', 'This  Product is Unpublished');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_product($id)
    {
        $products = Product::findOrFail($id);
          $categories = ProductCategory::orderBy('id','DESC')->get();

        return view('products.product_update_index',compact('products','categories'));

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
    public function update_product_save(Request $r, $id)
    {
         $name = $r->input('name');
         $description = $r->input('description');
         $cat_id = $r->input('cat_id');
         $dollar = $r->input('dollar');
         $lbp = $r->input('lbp');
  $foreign_name = mt_rand(111111,999999);
   $photo = $r->file('photo');



         $data = ['name' => $name,'description'=>$description  ,'dollar'=>$dollar, 'lbp'=>$lbp];

            $rules = ['name' => 'required','description'=>'required','dollar'=>'required','lbp'=>'required'];

            $v = Validator::make($data, $rules);

            if($v->fails()){
                return Redirect::Back()->withErrors($v)->withInput($r->input());
            }
            else
            {
          

if($r->hasFile('photo')){
            $destination = 'uploads/products';
            $photo_name = str_replace(' ', '_', $foreign_name);
            $photo_name .= '.'.$photo->getClientOriginalExtension();
            $photo->move($destination, $photo_name);
        } 



                $save_products = Product::findOrFail($id);
                $save_products->name = $name;
       if($r->hasFile('photo')){
            unlink('uploads/products/'.$save_products->image);
                  $save_products->image = $photo_name;

        }
              
                $save_products->description = $description;
                $save_products->price_dollar = $dollar;
                $save_products->price_lbp = $lbp;
               
                $save_products->save();
                return Redirect::back()->with('success', 'New Product successfuly Updated');

            }
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
