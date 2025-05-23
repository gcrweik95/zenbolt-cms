@extends('cms::layouts/dashboard')

@section('breadcrumb')
<ul class="breadcrumbs list-inline font-weight-bold text-uppercase m-0">
	<li>CMS Pages</li>
</ul>
@endsection

@section('dashboard-content')

<div class="card py-4 mx-2 mx-lg-5">
	<div class="actions">
		<a href="{{ url(config('zenbolt.cms_route_prefix') . '/cms-pages/create') }}" class="btn btn-primary btn-sm">Add</a>
		<a href="{{ url(config('zenbolt.cms_route_prefix') . '/cms-pages/order') }}" class="btn btn-secondary btn-sm">Order</a>
		<form method="post" action="{{ url(config('zenbolt.cms_route_prefix') . '/cms-pages/') }}" class="d-block d-md-inline-block bulk-delete" onsubmit="return confirm('Are you sure?')">
			@csrf
			<input type="hidden" name="_method" value="DELETE">
			<button type="submit" class="btn btn-danger btn-sm">Bulk Delete</button>
		</form>
		<a href="{{ url(config('zenbolt.cms_route_prefix') . '/cms-pages/create/custom') }}" class="btn btn-primary btn-sm float-right mr-0 px-3">Add Custom Page</a>
	</div>
	<div class="datatable-wrapper">
		<table class="datatable no-export">
			<thead>
				<tr>
					<th></th>
					<th>Name</th>
					<th>Name Plural</th>
					<th>Database</th>
					<th>Route</th>
					<th>Model</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($rows as $row)
				<tr>
					<td>
						@if ($row['deletable'])
						<label class="checkbox-wrapper delete-checkbox">
							<input type="checkbox" value="{{ $row['id'] }}">
							<div></div>
						</label>
						@endif
					</td>
					<td>{{ $row['display_name'] }}</td>
					<td>{{ $row['display_name_plural'] }}</td>
					<td>{{ $row['database_table'] }}</td>
					<td>{{ $row['route'] }}</td>
					<td>{{ $row['model_name'] }}</td>
					<td class="actions-wrapper text-right">
						<a href="{{ url(config('zenbolt.cms_route_prefix') . '/cms-pages/' . ($row['custom_page'] ? 'custom/' : '') . $row['id'] . '/edit') }}" class="mb-2 btn btn-primary btn-sm">Edit</a>
						@if (!in_array($row['id'], [1,2,3,4]))
						<form class="d-inline" onsubmit="return confirm('Are you sure?')" action="{{ url(config('zenbolt.cms_route_prefix') . '/cms-pages/' . $row['id']) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" class="mb-2 btn btn-danger btn-sm">Delete</button>
						</form>
						@endif
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection