@extends('index');
@section('dashboard')
    <div class="content">


        <div class="row offset-md-1">
            <div class="card col-lg-10 ">
                <div class="page-header ">
                    <div class="page-title p-2">
                        <h4>Change Password</h4>
                    </div>
                </div>

                <div class="card-body ">
                    <form action="{{ route('UpdatePassword') }}" method="post">
                        @csrf
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @elseif(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-sm-6 col-12 ">
                                <div class="form-group @error('old_password') is-invalid @enderror ">
                                    <label>Old password</label>
                                    <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                        id="courrent_password" name="old_password" placeholder=" Enter Old password">
                                    @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-12 ">
                                <div class="form-group  ">
                                    <label>New password</label>
                                    <input type="password" id="new_password"
                                        class="form-control @error('new_password') is-invalid @enderror" name="new_password"
                                        placeholder=" Enter New password">
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-12 ">
                                <div class="form-group ">
                                    <label>Confirm New password</label>
                                    <input type="password" id="confirm_new_password" name="confirm_new_password"
                                        placeholder=" Enter Confirm New password">

                                </div>
                            </div>





                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-submit me-2" value="Save Change">
                                {{-- <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
