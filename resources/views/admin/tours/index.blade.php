@extends('admin.layouts.admin_layouta')

@section('title' , 'admin_index')

@section('content')
<div class="container">
    <div class="container pt-5">
        <h2 class="text-center">Our Tours</h2>
        <a href="/admins/tours/create" class="btn btn-primary ">Create Tour</a>
        @if (count($tours) == 0)
            <div class="d-flex justify-content-center btn btn-light">There is not Tours</div>
        @else
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">NO.of members</th>
                    <th scope="col">setting</th>

                </tr>
                </thead>
                @foreach ($tours as $tour)
                <tbody class="table-group-divider">
                <tr>
                    <th>
                        <img src="{{"/storage/$tour->image"}}"
                        class="img-responsive img-rounded"
                        style="max-height: 50px; max-width: 50px;">
                    </th>
                    <th scope="row">{{$tour->id}}</th>
                    <td>{{$tour->title}}</td>
                    <td>{{Str::limit( $tour->description , 50)}}</td>
                    <td>{{count($tour->booking)}}</td>
                    <td>
                        <div class="row">
                            <form action="/admins/tours/{{$tour->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit"class="btn btn-danger" value="Delet">
                            </form>
                            <a href="/admins/tours/{{$tour->id}}/edit" class="btn btn-success">Edit</a>
                        </div>

                    </td>
                </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        @endif
        
    </div>
</div>
@endsection