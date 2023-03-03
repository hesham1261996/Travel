@extends('admin.layouts.admin_layouta')

@section('title' , 'Bookings')

@section('content')
<div class="container">
    <div class="container pt-5">
        <h3 class="text-center">Bookings</h3>
        @if(count($bookings) === 0)
        <div class="d-flex justify-content-center btn btn-light">There is not Bookings</div>
        @else
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">user_name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone_number</th>
                    <th scope="col">status</th>

                </tr>
                </thead>
                @foreach ($bookings as $booking)
                <tbody class="table-group-divider">
                <tr>
                    <th scope="row">{{$booking->id}}</th>
                    <th scope="row">{{$booking->user_name}}</th>
                    <td>{{$booking->email}}</td>
                    <td>{{$booking->phone_number}}</td>
                    <td>
                        <span class="{{$booking->status == 0 ? 'btn btn-danger' : 'btn btn-success'}}">
                            {{$booking->status == 1 ? 'approved': 'pending'}}
                        </span>
                    </td>
                    <td>
                        <form action="/admins/bookings/{{$booking->id}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="status" class="custom-select" onchange="this.form.submit()">
                            <option value="0"{{($booking->status)== 0 ? 'selected':""}}>pending</option>
                            <option value="1"{{($booking->status)== 1 ? 'selected':""}}>approved</option>
                        </select>
                        </form></td>
                    <td>    
                </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        @endif
    </div>
</div>
@endsection