@extends('index')
@section('dashboard')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title"></h3>
                    <ul class="breadcrumb">
                        <h3 class="page-title">Januray month Agami Sale</h3>
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($january as $item)
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
                                        <h3 class="text-center " style="color:red;">NO data found</h3>
                                    @endforelse



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
