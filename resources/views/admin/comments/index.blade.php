@extends('admin.layouts.admin_layouta')

@section('title' , 'Bookings')

@section('content')
<div class="container">
    <div class="container pt-5">
        <h3 class="text-center">Comments</h3>
        @if (count($comments) == 0)
        <div class="d-flex justify-content-center btn btn-light">There is not Comments</div>
        @else
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Comment</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Tours</th>
                    <th scope="col">Setting</th>
                </tr>
                </thead>
                @foreach ($comments as $comment)
                <tbody>
                <tr>
                    <th scope="row">{{$comment->id}}</th>
                    <td>{{$comment->body}}</td>
                    <td>{{$comment->user->name}}</td>
                    <td><a href="/tours/{{$comment->tour->id}}">{{$comment->tour->title}}</a></td>
                    <td>
                        <div class="row">
                            <form action="/admins/comments/{{$comment->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit"class="btn btn-danger" value="Delet">
                            </form>
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