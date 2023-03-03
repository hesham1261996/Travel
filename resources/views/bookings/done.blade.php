@extends('layouts.layout')
@section('title' , 'congratulation')

@section('content')
<div class="container">

        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Congratulation</h5>
            </div>
            <div class="modal-body">
            <p>The tour has been booked</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a href="/tours" class="btn btn-primary">Home</a>
            </div>
        </div>
    </div>
</div>
@endsection