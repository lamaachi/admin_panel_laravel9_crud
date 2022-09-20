@extends('layouts.admin')

@Section('content')
    <div class="card">
        <div class="card-header  text-center">
            <h4 class="fw-bold">Add Category</h4>
        </div>
        <div class="card-body">

                <form action="{{ url('/categories')}}" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                        <div class="col-md-6 mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name')}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name">Slug</label>
                            <input type="text" name="slug" class="form-control" value="{{ old('slug')}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Descreption">Descreption</label>
                            <input type="text" name="descreption" class="form-control" value="{{ old('descreption')}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status">Status</label>
                            <input type="checkbox" name="status" >
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="popular">Popular</label>
                            <input type="checkbox" name="popular" >
                        </div>

                        <div class="col-md-6  mb-3">
                            <label for="">Meta Title</label>
                            <input type="text" name="m_title" class="form-control" value="{{ old('m_title')}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Meta Descreption</label>
                            <input type="text" name="m_desc" class="form-control" value="{{ old('m_desc')}}">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">Meta KeyWords</label>
                            <input type="text" name="m_keys" class="form-control" value="{{ old('m_keys')}}">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>

                        <div class="m-2 mb-3">
                            <input type="submit" value="Add Category"  class="btn btn-success" >
                            </div>
                        </div>
                   
                </form>

           
        </div>
    </div>
@endsection



@Section('scripts')
@endsection