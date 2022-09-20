@extends('layouts.admin')

@Section('content')
    <div class="card">
        <div class="card-header  text-center">
            <h4 class="fw-bold">Update Category </h4>
        </div>
        <div class="card-body">

                <form action="{{ url("categories/".$category->id)}}" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                        @method("PUT")
                        <div class="col-md-6 mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$category->name}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name">Slug</label>
                            <input type="text" name="slug" class="form-control" value="{{ $category->slug}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Descreption">Descreption</label>
                            <input type="text" name="descreption" class="form-control" value="{{ $category->description}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status">Status</label>
                            <input type="checkbox" {{ $category->status == '1' ? 'checked' : ''}} name="status" >
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="popular">Popular</label>
                            <input type="checkbox" {{ $category->popular == '1' ? 'checked' : ''}} name="popular" >
                        </div>

                        <div class="col-md-6  mb-3">
                            <label for="">Meta Title</label>
                            <input type="text" name="m_title" class="form-control" value="{{ $category->meta_title}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Meta Descreption</label>
                            <input type="text" name="m_desc" class="form-control" value="{{ $category->meta_desc}}">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">Meta KeyWords</label>
                            <input type="text" name="m_keys" class="form-control" value="{{ $category->meta_keywords}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" >
                        </div>

                        <div class="col-md-6 mb-3">
                            <img src="{{ asset('assets/uploads/images/'.$category->image)}}" class="w-25" alt="images category">
                        </div>

                        <div class="m-2 mb-3">
                            <input type="submit" value="Update Category"  class="btn btn-success" >
                            </div>
                        </div>
                   
                </form>

           
        </div>
    </div>
@endsection



@Section('scripts')
@endsection