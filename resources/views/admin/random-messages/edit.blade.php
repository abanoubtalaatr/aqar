@extends('admin.app')
@section('title', __('dashboard.Edit Random Message'))

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-transparent">
                {{-- <h3 class="card-title">@yield('title')</h3> --}}
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.random-messages.update', $randomMessage->id) }}">
                    @csrf @method('PUT')
                    <div class="form-group">
                        <label>@lang('dashboard.Name (Arabic)')</label>
                        <input type="text" name="name_ar" class="form-control" value="{{ $randomMessage->name_ar }}" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('dashboard.Name (English)')</label>
                        <input type="text" name="name_en" class="form-control" value="{{ $randomMessage->name_en }}" required>
                    </div>
                    <button type="submit" class="btn btn-info">@lang('dashboard.Update')</button>
                    <a href="{{ route('admin.random-messages.index') }}" class="btn btn-default">@lang('dashboard.Cancel')</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
