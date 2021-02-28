@extends('layouts.admin')
@section('title', 'Create Department')
@section('header-title', 'Create New Departments')
@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mx-auto">
        <div class="card w-100">
            <div class="card-header">
                <div class="row">
                    <div class="col-xl-6">
                        <h5 class="">All Departments</h5>
                    </div>
                    <div class="col-xl-6">
                        <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#createDept">
                            Create Department
                        </a>
                        {{-- Modal for creating new department --}}
                        @include('dash.department.create-department')
                        {{-- Modal for creating new department --}}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Department Name</th>
                            <th scope="col">Department College</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ ucfirst($department->name) }}</td>
                                <td>{{ strtoupper($department->college) }}</td>
                                <td>{{ date('d-m-Y', strtotime($department->created_at)) }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="toolbar" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink"
                                            x-placement="bottom-end"
                                            style="position: absolute; transform: translate3d(18px, 25px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#edit-department-{{ $department->id }}">Update Department</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#delete-department-{{ $department->id }}">Delete
                                                Department</a>
                                        </div>
                                    </div>
                                </td>
                                @empty($departments->count())
                                    <td colspan="5">
                                        <img src="{{ asset('images/icons/empty.svg') }}" alt=""
                                            class="opacity-30 mx-auto w-24 h-24 mt-12">
                                        <p class="pt-10 text-center">No Departments created yet....</p>
                                        <p class="pt-2 text-center">use the create department button at the top of the table to
                                            do that</p>
                                    </td>
                                @endempty
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @foreach ($departments as $department)
            {{-- expr --}}
            @include('dash.department.edit-department')
            @include('dash.department.delete-department')
        @endforeach
    </div>
@endsection
