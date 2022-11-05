@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">About Multi Image</h4><br><br>

                        <form method="post" action="{{ route('update.about') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name='id' value="{{ $aboutmultiimage->id }}">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">About Multi Image</label>
                                <div class="col-sm-10">
                                    <input name="multi_image" class="form-control" type="file" placeholder="" id="image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg" src="{{
                                        url('upload/no_image.jpg') }}"
                                        alt="About Multi Page">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Add Multi Image">
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
