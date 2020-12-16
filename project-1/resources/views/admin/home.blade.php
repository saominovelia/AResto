@extends('admin.master')

@section('page-title', 'Home')

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
          <h6 class="m-0 font-weight-bold text-primary">Content Data</h6>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="align-middle">
                    <th class="text-center">Title</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($configs as $config)
                        <tr class="text-center">
                            <td class="align-middle">{!! $config->landing_title !!}</td>
                            <td class="align-middle">{!! $config->landing_desc !!}</td>
                            <td>
                                <a href="{{url("admin/home/edit/". $config->id) }}" class="btn btn-warning btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
    </div>

@endsection
