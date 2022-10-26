@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Profile</h4>

                        <form action="">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name:</label>
                                <div class="col-sm-10">
                                    <input name="name" class="form-control" type="text" placeholder="Name" value="{{ $userData->name }}" id="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email:</label>
                                <div class="col-sm-10">
                                    <input name="email" class="form-control" type="text" placeholder="Email" value="{{ $userData->email }}" id="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Username:</label>
                                <div class="col-sm-10">
                                    <input name="user_name" class="form-control" type="text" placeholder="Username" value="{{ $userData->user_name }}" id="user_name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                                <div class="col-sm-10">
                                    <input name="profile_image" class="form-control" type="file" placeholder="" id="image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg" src="{{ asset('backend/assets/images/small/img-5.jpg')}}" alt="Card image cap">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Update Profile">
                        </form>
                        <!-- end row -->
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection
