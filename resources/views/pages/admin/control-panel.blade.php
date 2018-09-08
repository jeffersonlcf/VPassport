@extends('layouts.app')

@section('template_title')
	Control Panel
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">

				<div class="card" style="width: 18rem; display: inline-block; margin: .5rem;">
					<div class="card-body">
						<h5 class="card-title">Manage Org Types</h5>
						<p class="card-text">Organisation types represent sector and sub-sectors which organisations belong to.</p>
						<a href="{{ url('/admin/orgtypes') }}" class="card-link">Card link</a>
					</div>
				</div>

				<div class="card" style="width: 18rem; display: inline-block; margin: .5rem;">
					<div class="card-body">
						<h5 class="card-title">@lang('titles.adminUserList')</h5>
						<p class="card-text">Organisation types represent sector and sub-sectors which organisations belong to.</p>
						<a href="{{ url('/users') }}" class="card-link">Card link</a>
					</div>
				</div>

				<div class="card" style="width: 18rem; display: inline-block; margin: .5rem;">
					<div class="card-body">
						<h5 class="card-title">@lang('titles.adminNewUser')</h5>
						<p class="card-text">Organisation types represent sector and sub-sectors which organisations belong to.</p>
						<a href="{{ url('/users/create') }}" class="card-link">Card link</a>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection
