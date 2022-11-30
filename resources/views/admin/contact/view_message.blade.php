@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contact Message</h4>

                        <form method="get" action="{{ route('contact.message') }}">
                            @csrf

                            <input type="hidden" name='id' value="{{ $message->id }}">

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name:</label>
                                <div class="col-sm-10">
                                    <input name="contact_name" class="form-control" type="text" placeholder="Name" value="{{ $message->contact_name }}" id="contact_name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email:</label>
                                <div class="col-sm-10">
                                    <input name="contact_email" class="form-control" type="text" placeholder="Email" value="{{ $message->contact_email }}" id="contact_email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Subject:</label>
                                <div class="col-sm-10">
                                    <input name="contact_subject" class="form-control" type="text" placeholder="Subject" value="{{ $message->contact_subject }}" id="contact_subject">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input name="contact_phone" class="form-control" type="text" placeholder="Phone" value="{{ $message->contact_phone }}" id="contact_phone">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Message:</label>
                                <div class="col-sm-10">
                                    <textarea name='contact_message' required="" class="form-control" rows="5">
                                        {{ $message->contact_message }}
                                    </textarea>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Back">
                        </form>
                        <!-- end row -->
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

@endsection
