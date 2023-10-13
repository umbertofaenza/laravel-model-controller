@extends('layouts.app')

@section('main-content')
    {{-- page title --}}
    <h2 class="mt-3 mb-5">
        {{ $page_title }}
    </h2>

    <p>
        {{ $about_msg }}
    </p>
@endsection
