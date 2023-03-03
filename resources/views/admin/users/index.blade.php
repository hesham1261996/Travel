@extends('admin.layouts.admin_layouta')

@section('title' , 'Users')

@section('content')
<div class="container">
    <div class="container pt-5">
        <h3 class="text-center">Users & Admin</h3>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">user_name</th>
                    <th scope="col">email</th>
                    <th scope="col">status</th>

                </tr>
                </thead>
                @foreach ($users as $user)
                <tbody class="table-group-divider">
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <th scope="row">{{$user->name}}</th>
                    <td>{{$user->email}}</td>
                    <td>
                        <span class="{{$user->status == 0 ? 'btn btn-danger' : 'btn btn-success'}}">
                            {{$user->status == 1 ? 'Admin': 'User'}}
                        </span>
                    </td>
                    <td>
                        <form action="/admins/users/{{$user->id}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="status" class="custom-select" onchange="this.form.submit()">
                            <option value="0"{{($user->status)== 0 ? 'selected':""}}>User</option>
                            <option value="1"{{($user->status)== 1 ? 'selected':""}}>Admin</option>
                        </select>
                        </form></td>
                    <td>    
                </tr>
                </tbody>
                @endforeach
        </table>
        </div>
    </div>
</div>
@endsection