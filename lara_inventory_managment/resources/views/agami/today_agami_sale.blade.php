@extends('index')
@section('dashboard')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Data Tables</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Today Agami Sale</li>
                    </ul>
                </div>
            </div>
            <div class="page-btn">
                <a href="{{ route('agami.add-product') }}" class="btn btn-added " id="BootModelShow"><img
                        src="{{ asset('admin/assets/img/icons/plus.svg') }}" class="me-2 " id="BootModelShow"
                        alt="img">Add
                    Agami Sale</a>
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($todaysale as $item)
                                        <tr>
                                            <td>{{ $item->pro_name }}</td>
                                            <td>{{ $item->jar }}</td>
                                            <td>{{ $item->poly }}</td>
                                            <td>{{ $item->amount }}</td>
                                            <td>{{ $item->month }}</td>
                                            <td>{{ $item->year }}</td>

                                            <td>{{ $item->date }}</td>
                                            <td>
                                                <a class="me-3 " href="{{ route('edit.customer', $item->id) }}">
                                                    <img src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                        alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ asset('admin/assets/img/icons/delete.svg') }}"
                                                        alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <h3 class="text-center " style="color:red;"> No sale available </h3>
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
                $today = date('d/m/y');
                $total = DB::table('agamis')
                    ->where('date', $today)
                    ->sum('amount');
            @endphp
            <div class="col-sm-4">
                <h4> Total Sale Amount:{{ $total }}</h4>
            </div>
            @php
                $today = date('d/m/y');
                $total_jar = DB::table('agamis')
                    ->where('date', $today)
                    ->sum('jar');
            @endphp
            <div class="col-sm-4">
                <h4> Total Sale Jar:{{ $total_jar }}</h4>

            </div>
            @php
                $today = date('d/m/y');
                $total_poly = DB::table('agamis')
                    ->where('date', $today)
                    ->sum('poly');
            @endphp
            <div class="col-sm-4">
                <h4> Total Sale Poly:{{ $total_poly }}</h4>
            </div>
        </div>
    </div>
@endsection
