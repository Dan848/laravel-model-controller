@extends("layouts.app")

@section("page_title")
    Home
@endsection

@section("main_content")
    @if (isset($order))
    <h2 class="text-white text-center text-capitalize mt-3">Order By {{$order}}</h2>
    @endif
    @include("partials.movies")
@endsection
