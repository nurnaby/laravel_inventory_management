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
                <a href="{{ route('add.category') }}" class="btn btn-added " id="BootModelShow"><img
                        src="{{ asset('admin/assets/img/icons/plus.svg') }}" class="me-2 " id="BootModelShow"
                        alt="img">
                    Add Category</a>
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
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($Categories as $item)
                                        <tr>
                                            <td>{{ $item->category_name }}</td>

                                            <td>
                                                <a class="me-3 " href="{{ route('edit.category', $item->id) }}">
                                                    <img src="{{ asset('admin/assets/img/icons/edit.svg') }}"
                                                        alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="#">
                                                    <img src="{{ asset('admin/assets/img/icons/delete.svg') }}"
                                                        alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <h2>No category available </h2>
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
