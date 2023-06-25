@extends('index')
@section('dashboard')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title"></h3>
                    <ul class="breadcrumb">
                        <h3 class="page-title">June month Agami Sale</h3>
                        {{-- <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li> --}}
                        {{-- <li class="page-title">This month Agami Sale</li> --}}

                    </ul>
                </div>
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
                                        <th>Jar</th>
                                        <th>Poly</th>
                                        <th>Amount</th>
                                        <th>Month</th>
                                        <th>Year</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($june as $item)
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
                                        @php
                                            $year = date('Y');
                                        @endphp
                                        <h3 class="text-center " style="color:red;">No sale available in June month
                                            {{ $year }}</h3>
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
                $month = 'June';
                $year = date('Y');
                $total = DB::table('agamis')
                    ->where('month', $month)
                    ->where('year', $year)
                    ->sum('amount');
            @endphp
            <div class="col-sm-4">
                <h4> Total Sale Amount:{{ $total }}</h4>
            </div>
            @php
                $month = 'June';
                $year = date('Y');
                $total_jar = DB::table('agamis')
                    ->where('month', $month)
                    ->where('year', $year)
                    ->sum('jar');
            @endphp
            <div class="col-sm-4">
                <h4> Total Sale Jar:{{ $total_jar }}</h4>

            </div>
            @php
                $month = 'June';
                $year = date('Y');
                $total_poly = DB::table('agamis')
                    ->where('month', $month)
                    ->where('year', $year)
                    ->sum('poly');
            @endphp
            <div class="col-sm-4">
                <h4> Total Sale Poly:{{ $total_poly }}</h4>
            </div>
        </div>
    </div>
@endsection
