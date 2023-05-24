@extends("layouts.app")

@section("page_title")
    @foreach ($movie as $info)
        {{ $info['title'] }}
    @endforeach
@endsection

@section("main_content")
<div class="container mt-4 text-white">
    @foreach ($movie as $info)
    <div class="row">
        <div class="col d-flex flex-column align-items-center">
            <h1 class="mb-4">{{ $info['title'] }}</h1>
            <div class="poster"><img class="img-fluid" src="{{$info["image"]}}" alt=""></div>

        </div>
        <div class="col mt-5">
            <div class="h3 mt-4 mb-5">Voto:
                <div class="h2">{{ $info["vote"] }}</div>
            </div>
            <div class="h3 mb-5">Titolo Originale:
                <div class="h2">{{ $info["original_title"] }}</div>
            </div>
            <div class="h3 mb-5">Data di Uscita:
                <div class="h2">{{($info["date"]) }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
