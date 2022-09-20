@extends('layouts.admin')

@Section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="text-center fw-bold">Products Table</h4>
        </div>
        <div class="card-body">
           <table class="table">
                <thead >
                    <th class="fw-bold">name</th>
                    <th class="fw-bold">Category</th>
                    <th class="fw-bold">Descreption</th>
                    <th class="fw-bold">Price</th>
                    <th class="fw-bold">Selling</th>
                    <th class="fw-bold">Quantite</th>
                    <th class="fw-bold">Image</th>
                    <th class="fw-bold">Action</th>
                </thead>
                <tbody>
                    @foreach ($products as $pro)
                        <tr>
                            <td>{{$pro->name}}</td>
                            <td>{{$pro->category->name}}</td>
                            <td>{{ Str::limit($pro->descreption,10)}}</td>
                            <td>{{ $pro->original_price}}dhs</td>
                            <td>{{ $pro->selling_price}}dhs</td>
                            <td>{{ $pro->qte}}</td>
                            <td>
                                <img  src="{{ asset('assets/uploads/images/'.$pro->image) }}" class="img" alt="">
                            </td>
                            <td>
                                <a href="{{ url('products/'.$pro->id.'/edit')}}" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ url('products/'.$pro->id)}}" method="POST" class="d-inline">
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