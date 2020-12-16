@extends('admin.master')

@section('page-title', 'Edit List Contact')

@section('content')
    <div class="row">
        <div class="col-10">

            <div class="card shadow">
                <div class="card-body">

                        @foreach ($configs as $config)
                            <form action="/admin/contact/update/{{ $config->id }}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ $config->id }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" id="address" name="address" value="{{ $config->address }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone_number">Phone_number</label>
                                        <img src="{{ asset('admin_assets/img/'.$config->phone_number) }}" alt="" width="150px">
                                        <input type="text" id="phone_number" name="phone_number" value="{{ $config->phone_number }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="fb_link">FB_Link</label>
                                        <img src="{{ asset('admin_assets/img/'.$config->fb_link) }}" alt="" width="150px">
                                        <input type="text" id="fb_link" name="fb_link" value="{{ $config->fb_link }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="ig_link">ig_Link</label>
                                        <img src="{{ asset('admin_assets/img/'.$config->ig_link) }}" alt="" width="150px">
                                        <input type="text" id="ig_link" name="ig_link" value="{{ $config->ig_link }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="wa_link">wa_Link</label>
                                        <img src="{{ asset('admin_assets/img/'.$config->wa_link) }}" alt="" width="150px">
                                        <input type="text" id="wa_link" name="wa_link" value="{{ $config->wa_link }}">
                                    </div>

                                    <div class="form-group d-flex flex-row justify-content-end">
                                        <a href="/view" class="btn btn-outline-secondary"><i class="fas fa-fw fa-trash mr-2"></i>
                                         Cancel
                                        </a>

                                        <button type="submit" class="btn btn-info ml-2">
                                        <i class="fas fa-fw fa-paper-plane mr-2 text-white-50"></i>
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
