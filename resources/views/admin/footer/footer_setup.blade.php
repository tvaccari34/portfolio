@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">About Page</h4>

                        <form method="post" action="{{ route('footer.update') }}">
                            @csrf

                            <input type="hidden" name='id' value="{{ $footer->id }}">

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number:</label>
                                <div class="col-sm-10">
                                    <input name="footer_phone_number" class="form-control" type="text" placeholder="Phone Number" value="{{ $footer->footer_phone_number }}" id="footer_phone_number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Description:</label>
                                <div class="col-sm-10">
                                    <textarea name='footer_short_description' required="" class="form-control" rows="5">
                                        {{ $footer->footer_short_description }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Country:</label>
                                <div class="col-sm-10">
                                    <input name="footer_country" class="form-control" type="text" placeholder="Country" value="{{ $footer->footer_country }}" id="footer_country">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Address:</label>
                                <div class="col-sm-10">
                                    <input name="footer_address" class="form-control" type="text" placeholder="Country" value="{{ $footer->footer_address }}" id="footer_address">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email:</label>
                                <div class="col-sm-10">
                                    <input name="footer_email" class="form-control" type="text" placeholder="Country" value="{{ $footer->footer_email }}" id="footer_email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Social Title:</label>
                                <div class="col-sm-10">
                                    <input name="footer_social_title" class="form-control" type="text" placeholder="Country" value="{{ $footer->footer_social_title }}" id="footer_social_title">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Social Network Description:</label>
                                <div class="col-sm-10">
                                    <textarea name='footer_social_description' required="" class="form-control" rows="5">
                                        {{ $footer->footer_social_description }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Facebook Link:</label>
                                <div class="col-sm-10">
                                    <input name="footer_social_facebook" class="form-control" type="text" placeholder="Country" value="{{ $footer->footer_social_facebook }}" id="footer_social_facebook">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Twitter Link:</label>
                                <div class="col-sm-10">
                                    <input name="footer_social_twitter" class="form-control" type="text" placeholder="Country" value="{{ $footer->footer_social_twitter }}" id="footer_social_twitter">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Behance Link:</label>
                                <div class="col-sm-10">
                                    <input name="footer_social_behance" class="form-control" type="text" placeholder="Country" value="{{ $footer->footer_social_behance }}" id="footer_social_behance">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">LinkedIn Link:</label>
                                <div class="col-sm-10">
                                    <input name="footer_social_linkedin" class="form-control" type="text" placeholder="Country" value="{{ $footer->footer_social_linkedin }}" id="footer_social_linkedin">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Instagram Link:</label>
                                <div class="col-sm-10">
                                    <input name="footer_social_instagram" class="form-control" type="text" placeholder="Country" value="{{ $footer->footer_social_instagram }}" id="footer_social_instagram">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Update Footer">
                        </form>
                        <!-- end row -->
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

@endsection
