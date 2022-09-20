<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'descreption' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'm_keys' => 'required',
            'm_title' => 'required',
            'm_desc' => 'required',
        ]);

        $category = new Category();

        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('assets/uploads/images'), $imageName);

        $category->name = $request->name;
        $category->slug = Str::slug($category->name);
        $category->description = $request->descreption;
        $category->status = $request->has('status') ? '1' : '0';
        $category->popular = $request->has('popular') ? '1' : '0';
        $category->image = $imageName;
        $category->	meta_title = $request->m_title;
        $category->meta_desc = $request->m_desc;
        $category->meta_keywords = $request->m_keys;



        $category->save();
        Alert::toast('You\'ve Successfully Add A Category', 'success');
        
        return redirect('categories');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
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
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'descreption' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'm_keys' => 'required',
            'm_title' => 'required',
            'm_desc' => 'required',
        ]);


        $category = Category::find($id);

        if($request->hasFile('image')){
            $path = 'assets/uploads/images/'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $imageName = time().'.'.$request->image->extension(); 
            $request->image->move(public_path('assets/uploads/images'), $imageName);
            $category->image = $imageName;
        }


        $category->name = $request->name;
        $category->slug = Str::slug($category->name);
        $category->description = $request->descreption;
        $category->status = $request->has('status') ? '1' : '0';
        $category->popular = $request->has('popular') ? '1' : '0';
        $category->	meta_title = $request->m_title;
        $category->meta_desc = $request->m_desc;
        $category->meta_keywords = $request->m_keys;

        $category->save();
        Alert::toast('You\'ve Successfully Updated A Category', 'success');

        return redirect('/categories');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category = Category::find($id);

        if($category->image){
            $path = 'assets/uploads/images/'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }

        $category->delete();
        Alert::toast('You\'ve Successfully Deleted A Category', 'success');
        return redirect()->back();
    }
}
