@extends('index')
@section('dashboard')
    <div class="content container-fluid">
        <a href="{{ route('january.sale') }}" class="btn btn-primary btn-sm">January</a>
        <a href="" class="btn btn-info btn-sm">February</a>
        <a href="" class="btn btn-success btn-sm">March</a>
        <a href="" class="btn btn-secondary btn-sm">April</a>
        <a href="" class="btn btn-warning btn-sm">May</a>
        <a href="{{ route('june.sale') }}" class="btn btn-dark btn-sm">June</a>
        <a href="{{ route('july.sale') }}" class="btn btn-info btn-sm">July</a>
        <a href="{{ route('august.sale') }}" class="btn btn-danger btn-sm">August</a>
        <a href="{{ route('september.sale') }}" class="btn btn-success btn-sm">September</a>
        <a href="{{ route('october.sale') }}" class="btn btn-secondary btn-sm">October</a>
        <a href="{{ route('november.sale') }}" class="btn btn-warning btn-sm">November</a>
        <a href="{{ route('december.sale') }}" class="btn btn-danger btn-sm">December</a>
        <div class="page-header py-3">
            <div class="row">
                <div class="col">
                    <h3 class="page-title"></h3>
                    <ul class="breadcrumb">
                        <h3 class="page-title">This month Agami Sale</h3>
                        {{-- <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li> --}}
                        {{-- <li class="page-title">This month Agami Sale</li> --}}

                    </ul>
                </div>
            </div>
            {{-- <div class="page-btn">
                <a href="{{ route('agami.add-product') }}" class="btn btn-added " id="BootModelShow"><img
                        src="{{ asset('admin/assets/img/icons/plus.svg') }}" class="me-2 " id="BootModelShow"
                        alt="img">Add
                    Agami Sale</a>
            </div> --}}
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
                                        <th>Jar</th>
                                        <th>Poly</th>
                                        <th>Amount</th>
                                        <th>Month</th>
                                        <th>Year</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($thismonthsale as $item)
                                        <tr>
                                            <td>{{ $item->pro_name }}</td>
                                            <td>{{ $item->jar }}</td>
                                            <td>{{ $item->poly }}</td>
                                            <td>{{ $item->amount }}</td>
                                            <td>{{ $item->month }}</td>
                                            <td>{{ $item->year }}</td>

                                            <td>{{ $item->date }}</td>

                                        </tr>
                                    @empty
                                        <h2>NO data found</h2>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @php
                $month = date('F');
                $total = DB::table('agamis')
                    ->where('month', $month)
                    ->sum('amount');
            @endphp
            <div class="col-sm-4">
                <h4> Total Sale Amount:{{ $total }}</h4>
            </div>
            @php
                $month = date('F');
                $total_jar = DB::table('agamis')
                    ->where('month', $month)
                    ->sum('jar');
            @endphp
            <div class="col-sm-4">
                <h4> Total Sale Jar:{{ $total_jar }}</h4>

            </div>
            @php
                $month = date('F');
                $total_poly = DB::table('agamis')
                    ->where('month', $month)
                    ->sum('poly');
            @endphp
            <div class="col-sm-4">
                <h4> Total Sale Poly:{{ $total_poly }}</h4>
            </div>
        </div>


    </div>
@endsection
