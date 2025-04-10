<!DOCTYPE html>
<html>

<head>
	<title>{{ config('zenbolt.tab_title') }}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="{{ url(config('zenbolt.favicon.apple-icon-57x57')) }}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ url(config('zenbolt.favicon.apple-icon-60x60')) }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ url(config('zenbolt.favicon.apple-icon-72x72')) }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ url(config('zenbolt.favicon.apple-icon-76x76')) }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ url(config('zenbolt.favicon.apple-icon-114x114')) }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ url(config('zenbolt.favicon.apple-icon-120x120')) }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ url(config('zenbolt.favicon.apple-icon-144x144')) }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ url(config('zenbolt.favicon.apple-icon-152x152')) }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ url(config('zenbolt.favicon.apple-icon-180x180')) }}">
	<link rel="icon" type="image/png" sizes="192x192" href="{{ url(config('zenbolt.favicon.android-icon-192x192')) }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ url(config('zenbolt.favicon.favicon-32x32')) }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ url(config('zenbolt.favicon.favicon-96x96')) }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ url(config('zenbolt.favicon.favicon-16x16')) }}">
	@if(config('zenbolt.favicon.manifest'))
	<link rel="manifest" href="{{ url(config('zenbolt.favicon.manifest')) }}"> @endif
	@if(config('zenbolt.favicon.msapplication-TileColor'))
	<meta name="msapplication-TileColor" content="{{ config('zenbolt.favicon.msapplication-TileColor') }}"> @endif
	@if(config('zenbolt.favicon.msapplication-TileImage'))
	<meta name="msapplication-TileImage" content="{{ url(config('zenbolt.favicon.msapplication-TileImage')) }}"> @endif
	@if(config('zenbolt.favicon.theme-color'))
	<meta name="theme-color" content="{{ config('zenbolt.favicon.theme-color') }}"> @endif

	<!-- Styles -->
	@foreach(config('zenbolt.cms_assets.styles') as $path)
	<link rel="stylesheet" type="text/css" href="{{ url($path) }}">
	@endforeach

	@yield('styles')

</head>

<body class="m-0">

	<div id="loader">
		@if (config('zenbolt.loading'))
		<img src="{{ url(config('zenbolt.loading')) }}">
		@endif
	</div>

	@yield('main-content')

	<script>
		var CKEditorColors = {
			!!config('zenbolt.ckeditor') && config('zenbolt.ckeditor.colors') && count(config('zenbolt.ckeditor.colors')) ? '"'.implode(',', config('zenbolt.ckeditor.colors')).
			'"' : 'null'!!
		};
	</script>

	@foreach(config('zenbolt.cms_assets.scripts') as $path)
	<script type="text/javascript" src="{{ url($path) }}"></script>
	@endforeach

	@yield('scripts')

</body>

</html>