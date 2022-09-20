@extends('layouts.admin')

@Section('content')
    <div class="card">
        <div class="card-header  text-center">
            <h4 class="fw-bold">Update Product</h4>
        </div>
        <div class="card-body">

                <form action="{{ url('products/'. $product->id)}}" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6 mb-3">
                            <label for="name">Category</label>
                                <select class="form-select" name="category" id="">
                                    @foreach ($categories as $cat)
                                        <option value="{{$cat->id}}" {{ $product->cate_id==$cat->id ? 'selected' : ''}}>{{$cat->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" required value="{{ $product->name}}">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="Descreption">Descreption</label>
                            <input type="text" name="descreption" class="form-control" required value="{{ $product->descreption}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Small_Descreption">Small Descreption</label>
                            <input type="text" name="Small_Descreption" class="form-control" required value="{{ $product->small_descreption}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Original_Price">Original Price</label>
                            <input type="number" min="0" name="original" class="form-control" required value="{{ $product->original_price}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Small_Descreption">Selling Price</label>
                            <input type="number" min="0" name="selling" class="form-control" required value="{{ $product->selling_price}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="qte">Quantity</label>
                            <input type="number" min="0" name="qte" class="form-control" required value="{{ $product->qte}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Small_Descreption">Taxes</label>
                            <input type="number" min="0" name="taxes" class="form-control" required value="{{ $product->tax}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status">Status</label>
                            <input type="checkbox" {{ $product->status ? 'checked' : ''}} name="status" >
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status">Trending</label>
                            <input type="checkbox" {{ $product->trending ? 'checked' : ''}} name="trending" >
                        </div>


                        <div class="col-md-6  mb-3">
                            <label for="">Meta Title</label>
                            <input type="text" name="m_title" class="form-control" required value="{{ $product->meta_title}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Meta Descreption</label>
                            <input type="text" name="m_desc" class="form-control" required value="{{ $product->meta_desc}}">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">Meta KeyWords</label>
                            <input type="text" name="m_keys" class="form-control" required value="{{ $product->meta_keys}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <img src="{{ asset('assets/uploads/images/'.$product->image)}}" class="w-25" alt="images Product">
                        </div>

                        <div class="m-2 mb-3">
                            <input type="submit" value="Update Product"  class="btn btn-success" >
                        </div>
                   
                </form>

           
        </div>
    </div>
@endsection



@Section('scripts')
@endsection