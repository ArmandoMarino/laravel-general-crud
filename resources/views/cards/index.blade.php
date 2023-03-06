@extends('layouts.main')

@section('title', 'CARDS')

@section('content')

@include ('includes.alert')

<section id="contents-space" class="container">

    <div class="row my-3 g-5 justify-content-between">
        <h1>Cards List</h1>
        @foreach ($cards as $card)
        <div class="my-card col-12 col-md-6 col-lg-2 d-flex flex-column align-items-center justify-content-between">
        
            <img class="img-fluid" src="{{ $card->thumb }}" alt="{{ $card->name }}">
            
            <p>{{ $card->name }}</p>
            <p>{{$card->type}}</p>

            {{-- LOGIC STARS VOTE --}}
            <div class="text-warning">
                @for($i = 1; $i <= $card->mana; $i++)
                    <i class="fa-solid fa-star"></i>
                @endfor
            </div>

            <p>{{$card->description}}</p>
       
        </div>
        
        @endforeach
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