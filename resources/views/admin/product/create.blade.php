@extends('layouts.admin')

@Section('content')
    <div class="card">
        <div class="card-header  text-center">
            <h4 class="fw-bold">Add Product</h4>
        </div>
        <div class="card-body">

                <form action="{{ url('/products')}}" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                        <div class="col-md-6 mb-3">
                            <label for="name">Category</label>
                                <select class="form-select" name="category" id="">
                                    <option value="0">--Select A Category--</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" required value="{{ old('name')}}">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="Descreption">Descreption</label>
                            <input type="text" name="descreption" class="form-control" required value="{{ old('descreption')}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Small_Descreption">Small Descreption</label>
                            <input type="text" name="Small_Descreption" class="form-control" required value="{{ old('Small_Descreption')}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Original_Price">Original Price</label>
                            <input type="number" min="0" name="original" class="form-control" required value="{{ old('original')}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Small_Descreption">Selling Price</label>
                            <input type="number" min="0" name="selling" class="form-control" required value="{{ old('selling')}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="qte">Quantity</label>
                            <input type="number" min="0" name="qte" class="form-control" required value="{{ old('qte')}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Small_Descreption">Taxes</label>
                            <input type="number" min="0" name="taxes" class="form-control" required value="{{ old('taxes')}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status">Status</label>
                            <input type="checkbox" name="status" >
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status">Trending</label>
                            <input type="checkbox" name="trending" >
                        </div>


                        <div class="col-md-6  mb-3">
                            <label for="">Meta Title</label>
                            <input type="text" name="m_title" class="form-control" required value="{{ old('m_title')}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Meta Descreption</label>
                            <input type="text" name="m_desc" class="form-control" required value="{{ old('m_desc')}}">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">Meta KeyWords</label>
                            <input type="text" name="m_keys" class="form-control" required value="{{ old('m_keys')}}">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>

                        <div class="m-2 mb-3">
                            <input type="submit" value="Add Product"  class="btn btn-success" >
                        </div>
                   
                </form>

           
        </div>
    </div>
@endsection



@Section('scripts')
@endsection