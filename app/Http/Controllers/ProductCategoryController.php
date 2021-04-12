<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProductCategory;
use paginate;
use Validator;
use Redirect;
class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $allcats = ProductCategory::orderBy('id','DESC')->paginate(6);
        return view('product_category.product_cat_index',compact('allcats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_cat_index_save(Request $r)
    {
         $cat_name = $r->input('cat_name');

         $data = ['cat_name' => $cat_name];

            $rules = ['cat_name' => 'required'];

            $v = Validator::make($data, $rules);

            if($v->fails()){
                return Redirect::Back()->withErrors($v)->withInput($r->input());
            }
            else
            {
                $cat_exist = ProductCategory::where('category_name',$cat_name)->count();

if($cat_exist > 0)
{
                return Redirect::Back()->withErrors("Error : Duplicate Category Name")->withInput($r->input());


} else
{

                  $package_cat = new ProductCategory();
                  $package_cat->category_name = $cat_name;
                 // $package_cat->status = 0;
               
               
                $package_cat->save();
      return Redirect::Back()->with('success', 'Category  added successfully');
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_product_cat($id)
    {
          $categories = ProductCategory::findOrFail($id);
        return view('product_category.product_cat_index_update',compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_product_cat_save($id,Request $r)
    {
    $cat_name = $r->input('cat_name');

         $data = ['cat_name' => $cat_name];

            $rules = ['cat_name' => 'required'];

            $v = Validator::make($data, $rules);

            if($v->fails()){
                return Redirect::Back()->withErrors($v)->withInput($r->input());
            }
            else
            {
                $cat_exist = ProductCategory::where('category_name',$cat_name)->count();

if($cat_exist > 0)
{
                return Redirect::Back()->withErrors("Error : Duplicate Category Name")->withInput($r->input());


} else
{

                  $package_cat = ProductCategory::findOrFail($id);
                  $package_cat->category_name = $cat_name;
                
               
               
                $package_cat->save();
      return Redirect::Back()->with('success', ' Categoriy  updated successfully');
            }
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
