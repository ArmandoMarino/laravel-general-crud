@extends('layouts.main')

@section('title', 'CARDS')

@section('content')

@include ('includes.alert')

<section id="contents-space" class="container">

    <div class="row my-5 g-5 justify-content-between">
        <h1>Cards List</h1>
        <div id="list-card" class="d-flex">
        @foreach ($cards as $card)
            <div class="col">
                <div class="row">
                    <div class="card nature">
                        <div class="col">
                            <div
                                class='text-session name border border-4 border-dark p-2 d-flex justify-content-between mb-3'>
                                <p class='fs-5'>{{ $card->name }}</p>
                                <span class='fs-5'>{{ $card->mana }}</span>
                            </div>

                        </div>
                        <div class="col text-center">
                            <img class='img-fluid
                                    mb-4 border border-4 border-dark'
                                src="https://images.ctfassets.net/s5n2t79q9icq/4s3ygGWPG5QRL2SDOMZ3HA/51d9e0188b4578dff5aab889bf846e57/en_articles_archive_card-image-gallery_strixhaven-school-mages-art-cards-2021-04-15-meta-image.jpeg" alt="{{ $card->name }}">
                        </div>
                        <div
                            class="col fs-5 text-session mb-1 border border-4 p-2 border-dark  d-flex justify-content-between align-items-center">
                            <span>{{ $card->type }}</span>
                            <span> {{ $card->edition }}</span>
                        </div>
                        <div class="text-session col border border-4 p-2 border-dark bg-color-white">
                            <ul>
                                <li>{{ $card->first_effect }}</li>
                                <li>{{ $card->second_effect }}</li>
                                <li>{{ $card->third_effect }}</li>
                                <li>{{ $card->fourth_effect }}</li>
                            </ul>
                            <div class="col-12">
                                <p class='text-start'>{{ $card->description }}</p>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-end align-items-center">
                            <span>{{ $card->strength }}</span>/
                            <span>{{ $card->constitution }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



@endsection

@section('scripts')
<script>
vote = getDocument
</script>
@endsection

<div class="vote m-0">
    <font-awesome-icon icon="fa-solid fa-star" v-for="i in fullStar" :key="i" class="text-warning" />
    <font-awesome-icon icon="fa-solid fa-star" v-for="i in hollowStar" :key="i" />
</div>