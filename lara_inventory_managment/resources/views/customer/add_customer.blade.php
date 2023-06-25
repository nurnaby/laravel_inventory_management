@extends('index')
@section('dashboard')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Customer Management</h4>
                <h6>Add Customer</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('store.customer') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Customer Name</label>
                                <input type="text" name="coustomer_name" placeholder="Enter Customer Name"
                                    value="{{ old('coustomer_name') }}">
                                @error('coustomer_name')
                                    <div class="text-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" placeholder="Enter Customer Email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text"name="phone" placeholder="Enter Phone Number"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="text-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Shope Name</label>
                                <input type="text"name="shope_name" placeholder="Enter Shope Name"
                                    value="{{ old('shope_name') }}">
                                @error('shope_name')
                                    <div class="text-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Account Holder</label>
                                <input type="text"name="account_helder" placeholder="Enter Account Holder"
                                    value="{{ old('account_helder') }}">
                                @error('account_helder')
                                    <div class="text-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Account Number</label>
                                <input type="text"name="account_number" placeholder="Enter Account Number"
                                    value="{{ old('account_number') }}">
                                @error('account_number')
                                    <div class="text-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Bank Branch</label>
                                <input type="text"name="bank_branch" placeholder="Enter Customer Bank Branch"
                                    value="{{ old('bank_branch') }}">
                                @error('bank_branch')
                                    <div class="text-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text"name="addres" placeholder="Enter Customer Address"
                                    value="{{ old('addres') }}">
                                @error('addres')
                                    <div class="text-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text"name="city" placeholder="Enter Customer City"
                                    value="{{ old('city') }}">
                                @error('city')
                                    <div class=" text-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> Customer Image</label>
                                <div class="image-upload">
                                    <input type="file"name="photo" id="image" placeholder="Enter Customer Image">
                                    @error('photo')
                                        <div class="text-danger ">{{ $message }}</div>
                                    @enderror
                                    {{-- <div class="image-uploads">
                                        <img src="{{ 'admin/assets/img/icons/upload.svg' }}" alt="img">
                                        <h4>Drag and drop a file to upload</h4>
                                    </div> --}}
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"> </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin"
                                                style="width:100px; height: 100px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" class="btn btn-submit me-2" value="Customer Add" />
                            {{-- <a type="submit" class="btn btn-submit me-2">Submit</a> --}}
                            <a href="{{ route('all.customer') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>





    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>







    {{-- <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Data Tables</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ul>
                </div>
            </div>
            <div class="page-btn">
                <a href="{{ route('add.coustomer') }}" modal-title="Add Employe " modal_type="Submit"
                    class="btn btn-added open-model" id="BootModelShow"><img src="{{ 'admin/assets/img/icons/plus.svg' }}"
                        class="me-2 " id="BootModelShow" alt="img" selector="emploey_create">Add Coustomer</a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div id="abc"></div>
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table  datanew ">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Photo</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <a class="me-3 open-model" href="{{ route('editEmploye') }}"
                                                modal-title="Update Employe ">
                                                <img src="{{ asset('admin/assets/img/icons/edit.svg') }}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="{{ asset('admin/assets/img/icons/delete.svg') }}" alt="img">
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
