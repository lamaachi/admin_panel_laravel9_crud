<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create',compact('categories'));
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
          //  
        ]);

        $product = new Product();

        $imageName =time(). '.' .  $request->image->extension();
        $request->image->move(public_path('assets/uploads/images'),$imageName);

        $product->name = $request->input('name');
        $product->cate_id = $request->input('category');
        $product->slug = Str::slug($product->name);
        $product->small_descreption = $request->input('Small_Descreption');
        $product->descreption = $request->input('descreption');
        $product->original_price = $request->input('original');
        $product->selling_price = $request->input('selling');
        $product->status = $request->has('status') ? '1' : '0';
        $product->trending = $request->has('trending') ? '1' : '0'; 
        $product->image = $imageName;
        $product->qte = $request->input('qte');
        $product->tax = $request->taxes;
        $product->	meta_title = $request->m_title;
        $product->meta_desc = $request->m_desc;
        $product->meta_keys = $request->m_keys;
        
       // dd($product);
        Alert::toast('You\'ve Successfully Add A Product', 'success');

        $product->save();
        return redirect('/products');

        
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
        $product = Product::find($id);
        $categories = Category::all();

        return view('admin.product.edit',)->with([
            'product'=>$product,
            'categories'=>$categories,
        ]);
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
            //  
          ]);
  
          $product = Product::find($id);
          

          if($request->hasFile('image')){
            $path = 'assets/uploads/images/'.$product->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $imageName = time().'.'.$request->image->extension(); 
            $request->image->move(public_path('assets/uploads/images'), $imageName);
            $product->image = $imageName;
        }

          $product->name = $request->input('name');
          $product->cate_id = $request->input('category');
          $product->slug = Str::slug($product->name);
          $product->small_descreption = $request->input('Small_Descreption');
          $product->descreption = $request->input('descreption');
          $product->original_price = $request->input('original');
          $product->selling_price = $request->input('selling');
          $product->status = $request->has('status') ? '1' : '0';
          $product->trending = $request->has('trending') ? '1' : '0'; 
          $product->qte = $request->input('qte');
          $product->tax = $request->taxes;
          $product->	meta_title = $request->m_title;
          $product->meta_desc = $request->m_desc;
          $product->meta_keys = $request->m_keys;
          
          Alert::toast('You\'ve Successfully Add A Product', 'success');
  
          $product->save();
          return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Product::find($id);

        if($pro->image){
            $path = 'assets/uploads/images/'. $pro->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $pro->delete();
        Alert::toast('You\'ve Successfully Deleted A Category', 'success');
        return redirect()->back();
    }
}
