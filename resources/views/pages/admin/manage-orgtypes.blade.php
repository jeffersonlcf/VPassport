@extends('layouts.app')


@section('template_title')
    {{ trans('titles.orgTypes') }}
@endsection


@section('content')
    <div class="row">
        <div class="col-sm-12 table-responsive">

            <table class="datatable table-striped table-hover mobile-primary table" data-ajax-fetch-url="/admin/orgtypes/data">
                <thead>
                    <tr class>
                        <th class="all">ID</th>
                        <th class="all">Title</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
    
        </div>
    </div>
    @include('scripts.datatables')
@endsection

@section('scripts')
    @include('scripts.datatables')
@endsection
