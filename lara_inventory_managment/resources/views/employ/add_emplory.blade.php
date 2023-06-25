<div class="content">
    {{-- <div class="page-header">
        <div class="page-title">
            <h4>Customer Management</h4>
            <h6>Add/Update Customer</h6>
        </div>
    </div> --}}
    <form action="{{ route('storeEmploye') }}" id="creataEmployeForm" method="post">
        <div class="row">
            @csrf
            <div class="col-lg-6 col-sm-6 col-12">
                <div class="form-group">
                    <label>Customer Name</label>
                    <input type="text" name="name">
                    <div class="nameError error d-none"></div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email">
                    <div class="nameError error d-none"></div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone">
                    <div class="nameError error d-none"></div>
                </div>
            </div>


            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label>Salary</label>
                    <input type="text" name="salary">
                    <div class="nameError error d-none"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="address"></textarea>
                    <div class="nameError error d-none"></div>
                </div>
            </div>
            {{-- <div class="buttons text-end">
                <button type="button" class="btn btn-danger bootbox-cancel">Close</button>
               
                <button type="submit" class="btn btn-submit me-2">Submit</button>
    
                <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
    
            </div> --}}

            <div class="col-lg-12 text-end">
                <button class="btn btn-cancel bootbox-cancel">Cancel</button>
                <button type="submit" class="btn btn-submit me-2">Submit</button>
                {{-- <a href="javascript:void(0);" >Submit</a>
                <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a> --}}
            </div>

        </div>
    </form>


</div>
