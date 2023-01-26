@extends('layouts.homepage')

@section('comics_array')

<main>
        <!-- Jumbotron -->
        <div>
            <img src=" {{ Vite::asset('resources/images/jumbotron.jpg') }}" class="jumbotron" alt="">
        </div>

        {{-- Start Comic Array --}}
    <div class="container">
        <div class="text-white d-flex margin-">
            <h3 class="border border-primary bg-primary rounded fw-bold p-3">CURRENT SERIES</h3>
        </div>


        <!-- Cards -->
        <div class="g-4 my-3">
            <div class="row bg-dark-grey">
                @foreach ($comicsArray as $comicElement)
                <div class="col-2 card border-0 bg-dark-grey">
                    <img src="{{ $comicElement["thumb"] }}" class="card-img-top">
                    <div class="card-body bg-dark-grey">
                        <h6 class="card-title text-white">{{ $comicElement["title"] }}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center my-2">
            <button class="btn btn-primary fw-bold p-2 px-5 mb-4">LOAD MORE</button>
        </div>
    </div>

    {{-- Blue Banner Info  --}}
    <section>
        <div class="bg-primary">
            <div class="container d-flex justify-content-center py-5">
                <div class="d-flex align-items-center gap-3">
                    @foreach ($bannerInfos as $info)
                    <div class="img-container">
                        <img src=" {{ Vite::asset($info['img']) }} " class="img-fluid my-img">
                    </div>
                    <div class="me-5"><a href="#" class="text-white fw-semibold">{{ $info["title"] }}</a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


</main>

@endsection

