@extends('admin.master')

@section('page-title', 'List Contact')

@section('content')

@if (session()->get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
        {{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Contact Data</h6>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="align-middle">
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Business Name</th>
                                <th class="text-center">Website</th>
                                <th class="text-center">Comment</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($configs as $config)
                                <tr class="text-center">
                                    <td class="align-middle">{{ $config->name }}</td>
                                    <td class="align-middle">{{  $config->email}}</td>
                                    <td class="align-middle">{{  $config->phone}}</td>
                                    <td class="align-middle">{{  $config->business_name}}</td>
                                    <td class="align-middle">{{  $config->website}}</td>
                                    <td class="align-middle">{{  $config->comment}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

@endsection
