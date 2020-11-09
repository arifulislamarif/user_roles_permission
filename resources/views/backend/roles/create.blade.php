@extends('layouts.admin')

@section('content')
<div class="page-title-area py-3">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Roles Create</h4>

            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <ul class="breadcrumbs pull-right">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><span>Roles Create</span></li>
            </ul>
        </div>
    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Role Create
                        <a href="{{ url()->previous() }}" class="btn btn-primary float-right fa fa-arrow-left"></a>
                    </h4>
                    <div class="row">
                        <div class="col-sm-6 offset-3">
                            <form action="{{ route('roles.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Role Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter role name">
                                       @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                </div>
                                <div class="form-group">
                                    <label>Permissions</label>
                                    @foreach ($permissions as $item)
                                    <div class="form-check">
                                        <input name="permissions[]" type="checkbox" class="form-check-input" id="permission_checkbox_{{ $item->id }}" value="{{ $item->name }}">
                                        <label class="form-check-label" for="permission_checkbox_{{ $item->id }}">{{ $item->name }}</label>
                                    </div>
                                    @endforeach
                                </div>

                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
