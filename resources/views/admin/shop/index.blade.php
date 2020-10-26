@extends('admin.layouts.master')

@section('main-content')

<section class="section">
    <div class="section-header">
        <h1>{{ __('Shops') }}</h1>
        {{ Breadcrumbs::render('shops') }}
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.shop.create') }}" class="btn btn-icon icon-left btn-primary"><i
                                class="fas fa-plus"></i> {{ __('Add Shop') }}</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3">
                                <div class="input-group input-daterange" id="date-picker">
                                    <select class="form-control" id="status" name="status">
                                        @foreach(trans('statuses') as $key => $status)
                                        <option value="{{ $key }}">{{ $status }}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control" id="applied" name="applied">
                                        <option value="">{{ __('Select Applied') }}</option>
                                        @foreach(trans('shop_applieds') as $key => $shop_applied)
                                        <option value="{{ $key }}">{{ $shop_applied }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="refresh">
                                            {{ __('Refresh') }}</button>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button"
                                            id="date-search">{{ __('Search') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped" id="maintable"
                                data-url="{{ route('admin.shop.get-shop') }}"
                                data-status="{{ \App\Enums\Status::ACTIVE }}">
                                <thead>
                                    <tr>
                                        <th>{{ __('levels.id') }}</th>
                                        <th>{{ __('levels.name') }}</th>
                                        <th>{{ __('levels.user') }}</th>
                                        <th>{{ __('levels.location') }}</th>
                                        <th>{{ __('levels.status') }}</th>
                                        <th>{{ __('levels.actions') }}</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection



@section('css')
<link rel="stylesheet" href="{{ asset('assets/modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('assets/modules/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/modules/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/shop/index.js') }}"></script>
@endsection
