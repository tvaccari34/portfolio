@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card"><br><br>
                    <center>
                        <img class="rounded-circle avatar-xl" src="{{ asset('backend/assets/images/small/img-5.jpg')}}" alt="Card image cap">
                    </center>

                    <div class="card-body">
                        <h4 class="card-title">Name: {{$userData->name}}</h4>
                        <hr>
                        <h4 class="card-title">Email: {{$userData->email}}</h4>
                        <hr>
                        <h4 class="card-title">Username: {{$userData->user_name}}</h4>
                        <hr>
                        <a href="{{ route('edit.profile')}}" class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
