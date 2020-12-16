@extends('admin.master')

@section('page-title', 'Edit Landing Page')

@section('content')
    <div class="row">
        <div class="col-10">

            <div class="card shadow">
                <div class="card-body">

                        @foreach ($configs as $config)
                            <form action="/admin/home/update/{{ $config->id }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ $config->id }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Landing Title</label>
                                        <textarea class="form-control" name="landing_title" id="editor1">{{ $config->landing_title }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Landing Desc</label>
                                        <textarea class="form-control" name="landing_desc" id="editor2">{{ $config->landing_desc }}</textarea>
                                    </div>

                                    <div class="form-group d-flex flex-row justify-content-end">
                                        <a href="{{ url('admin/home') }}" class="btn btn-outline-secondary"><i class="fas fa-fw fa-trash mr-2"></i>
                                        Cancel
                                        </a>

                                        <button type="submit" class="btn btn-info ml-2"><i class="fas fa-fw fa-paper-plane mr-2 text-white-50"></i>
                                        Update
                                        </button>
                                    </div>
                                </form>
                        @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
