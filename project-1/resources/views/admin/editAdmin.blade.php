@extends('admin.master')

@section('page-title','Edit Administrator')

@section('content')

    <div class="row">
        <div class="col-10">

            @if(count($errors)>0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="error-alert">
                @foreach ($errors->all() as $item)
                    {{$errors}} <br>
                @endforeach

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="card shadow">
                <div class="card-body">
                    <form method="POST" action="{{url('admin/post-updateAdmin')}}" id="regForm">
                        @csrf
                        <input type="hidden" class="form-control" id="id" name="id" value="{{$configs->id}}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$configs->name}}" placeholder="enter a fullname">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control"id="email" name="email" value="{{$configs->email}}" placeholder="enter an email address">
                        </div>

                        <div class="form-group">
                            <label for="passord">Password</label>
                            <input type="password" class="form-control"id="password" name="password" autocomplete="new-password" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirm  Password</label>
                            <input type="password" class="form-control" id="password-confirmation" name="password_confirmation"  autocomplete="new-password" placeholder="enter an email address">
                        </div>

                        <div class="form-group d-flex flex-row justify-content-end">
                            <a href="{{url('admin/administration')}}" class="btn btn-outline-secondary"><i class="fas fas-fw fa-trash mr-2"></i>
                            Cancel
                            </a>

                            <button type="submit" class="btn btn-primary ml-2"><i class="fas fa-fw fa-paper-plane mr-2 text-white-50"></i>
                            Submit
                            </button>
                        </div>

                    </form>
                </div>
            </div>


        </div>
    </div>

@endsection
