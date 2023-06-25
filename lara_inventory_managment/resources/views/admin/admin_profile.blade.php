@extends('index');
@section('dashboard')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Profile</h4>
                <h6>User Profile</h6>
            </div>
        </div>

        <div class="card">
            <form action="{{ route('updateAdmin') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="profile-set">
                        <div class="profile-head">
                        </div>
                        <div class="profile-top">
                            <div class="profile-content">
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <div class="profile-contentimg">
                                    <img src="{{ !empty($data->photo) ? url('upload/admin_images/' . $data->photo) : url('upload/no_image.jpg') }}"
                                        alt="img" name="photo" id="blah">
                                    <div class="profileupload">
                                        <input type="file" name="photo" id="imgInp">
                                        <a href="javascript:void(0);"><img src="{{ 'admin/assets/img/icons/edit-set.svg' }}"
                                                alt="img"></a>
                                    </div>
                                </div>
                                <div class="profile-contentname">
                                    <h2>{{ $data->name }}</h2>
                                    <h4>Updates Your Photo and Personal Details.</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="name" value="{{ $data->name }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" value="{{ $data->address }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="{{ $data->email }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" value="{{ $data->phone }}">
                            </div>
                        </div>

                        <div class="col-12">
                            <input type="submit" class="btn btn-submit me-2" value="Update  Profile" />
                            {{-- <a href="javascript:void(0);" class="btn btn-submit me-2">Update</a> --}}
                            <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
