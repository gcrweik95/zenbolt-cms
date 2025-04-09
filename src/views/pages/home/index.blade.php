@extends('cms::layouts/dashboard')

@section('dashboard-content')

<div class="card py-4 mx-2 mx-lg-5">
    <h4 class="font-weight-bold text-center my-4">{{ config('zenbolt.home_title') }}</h4>
    @if (config('zenbolt.home_content'))
    {!! config('zenbolt.home_content') !!}
    @endif
</div>

@endsection