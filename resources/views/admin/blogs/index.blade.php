@extends('admin.layouts.admin_layouta')

@section('title' , 'Blogs')

@section('content')
<div class="container">
    <div class="container pt-5">
        <h2 class="text-center">Our Blogs</h2>
        <a href="/admins/blogs/create" class="btn btn-primary ">Create Blog</a>
        @if (count($blogs) == 0)
            <div class="d-flex justify-content-center btn btn-light">There is not Blogs</div>
        @else
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">setting</th>

                </tr>
                </thead>
                @foreach ($blogs as $blog)
                <tbody class="table-group-divider">
                <tr>
                    <th>
                        <img src="{{"/storage/$blog->image"}}"
                        class="img-responsive img-rounded"
                        style="max-height: 50px; max-width: 50px;">
                    </th>
                    <th scope="row">{{$blog->id}}</th>
                    <td>{{$blog->title}}</td>
                    <td>{{Str::limit( $blog->body , 30)}}</td>
                    <td>
                        <div class="row">
                            <form action="/admins/blogs/{{$blog->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit"class="btn btn-danger" value="Delet">
                            </form>
                            <a href="/admins/blogs/{{$blog->id}}/edit" class="btn btn-success">Edit</a>
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