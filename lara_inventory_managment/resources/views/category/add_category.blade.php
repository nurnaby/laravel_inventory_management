@extends('index')
@section('dashboard')
    <div class="content offset-1">
        <div class="page-header">
            <div class="page-title">
                <h4>Category Management</h4>
                <h6>Add Category</h6>
            </div>
        </div>

        <div class="card col-10 ">
            <div class="card-body ">
                <form action="{{ route('store.category') }}" method="post">
                    @csrf

                    <div class="row ">
                        <div class="col-lg-12 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="category_name" placeholder="Enter Category Name"
                                    value="{{ old('category_name') }}">
                                @error('category_name')
                                    <div class="text-danger ">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>






                        <div class="col-lg-12">
                            <input type="submit" class="btn btn-submit me-2" value="Add Category" />
                            {{-- <a type="submit" class="btn btn-submit me-2">Submit</a> --}}
                            <a href="{{ route('all.Category') }}" class="btn btn-cancel">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
