@extends('layouts.admin')

@Section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="text-center fw-bold">Categories Table</h4>
        </div>
        <div class="card-body">
           <table class="table">
                <thead >
                    <th class="fw-bold">name</th>
                    <th class="fw-bold">Descreption</th>
                    <th class="fw-bold w-25">Image</th>
                    <th class="fw-bold">Action</th>
                </thead>
                <tbody>
                    @foreach ($categories as $cat)
                        <tr>
                            <td>{{$cat->name}}</td>
                            <td>{{ Str::limit($cat->description,10)}}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/images/'.$cat->image) }}" class="w-25" alt="">
                            </td>
                            <td>
                                <a href="{{ url('categories/'.$cat->id.'/edit')}}" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ url('categories/'.$cat->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"  onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger "><i class="fa-solid fa-trash"></i></button>
                                </form>         
                            </td>
                        </tr>
                    @endforeach
                </tbody>
           </table>
        </div>
    </div>
@endsection



@Section('scripts')

@endsection