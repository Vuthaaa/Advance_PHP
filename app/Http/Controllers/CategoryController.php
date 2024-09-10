<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\SupporT\Facades\DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    protected function get ()
    {
        $categories = CategoryModel::where('active', 1)->orderBy('id')->paginate(3);

        return view('category.list', ['categories' => $categories]);
    }

    protected function add()
    {
        return view('category.add');
    }

    protected function create (Request $request)
    {
        $category = new CategoryModel;
        $category->name = $request->name;

        $image = $request->file('image');
        if($image != null)
        {
            $imageName = date('Y_m_d_H_i_s'). '.' . $image->getClientOriginalExtension();
            $imagePath = 'images/category/';
            $imageUrl = $imagePath.$imageName;
            $image->move($imagePath, $imageName);
        }else {
            $imageUrl = null;
        }
        $category->image = $imageUrl;
        $category->note = $request->note;
        $category->save();
        return redirect()->route('category');
    }

    protected function find($id)
    {
        $category = CategoryModel::find($id);

        return view('category.edit')->with('category', $category);
    }


    protected function update ($id ,Request $request){
        $category = CategoryModel::find($id);
        $category->name = $request->name;
        $old_image = $category->old_image;
        $image = $request->file("image");
        if($image != null){
            if(file_exists($old_image)){
                unlink($old_image);
            }
            $imageName = date('Y_m_d_H_i_s') . '.' . $image->getClientOriginalExtension();
            $imagePath = "images/category/";
            $imageUrl = $imagePath.$imageName;
            $image->move($imagePath, $imageName);
        }
        else{
            $imageUrl = null;
        }
        $category->image = $imageUrl;
        $category->note = $request->note;
        $category->save();
        return redirect()->route('category');
    }

    protected function show($id)
    {
        $category = CategoryModel::where('id',$id)->first();
        return view('category.delete', compact('category'));
    }

    protected function delete($id, Request $request)
    {
        $category = DB::table('category')->where('id', $id);

        $category->update(['note' => $request->note, 'active' => 0]);
        return redirect()->route('category');
    }
}
