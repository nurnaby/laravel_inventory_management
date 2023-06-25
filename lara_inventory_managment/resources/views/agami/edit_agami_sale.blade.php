@extends('index')
@section('dashboard')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Agami Product Management</h4>
                <h6>Update Agami Sale</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('update.agamiSale') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $agamiSales->id }}">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="pro_name" value="{{ $agamiSales->pro_name }}">

                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Jar</label>
                                <input type="text" name="jar" value="{{ $agamiSales->jar }}">

                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product poly</label>
                                <input type="text"name="poly" value="{{ $agamiSales->poly }}">

                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text"name="amount" value="{{ $agamiSales->amount }}">

                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">

                                <input type="hidden"name="month" value="{{ date('F') }}">

                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">

                                <input type="hidden"name="date" value="{{ date('d/m/y') }}">

                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">

                                <input type="hidden"name="year" value="{{ date('Y') }}">

                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" class="btn btn-submit me-2" value="Agami Sale Update" />
                            {{-- <a type="submit" class="btn btn-submit me-2">Submit</a> --}}
                            <a href="{{ route('all.agami_product') }}" class="btn btn-cancel">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
