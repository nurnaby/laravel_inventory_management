@extends('index')
@section('dashboard')
    <div class="content container-fluid">

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
                <a href="{{ route('add.customer') }}" class="btn btn-added " id="BootModelShow"><img
                        src="{{ 'admin/assets/img/icons/plus.svg' }}" class="me-2 " id="BootModelShow" alt="img"
                        selector="emploey_create">Add Customer</a>
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
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($customers as $item)
                                        <tr>
                                            <td>{{ $item->coustomer_name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td><img src="{{ asset($item->photo) }}" style="width: 70px; height:40px "
                                                    alt=""></td>
                                            <td>{{ $item->addres }}</td>
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
                                        <h2>NO data found</h2>
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
