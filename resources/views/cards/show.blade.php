@extends('layouts.main')

<body>
    <div class="container">
        <div class="row">
            <div class="col">

                {{-- @if (session('update'))
        <div class="alert alert-info  mt-5" role="alert">
            {{ session('update') }}
        </div>
    @endif --}}
                <div class="card">
                    <div class="row">
                        <div class="col">
                            <div
                                class='text-session name border border-4 border-dark p-2 d-flex justify-content-between mb-3'>
                                <p class='fs-4'><b>{{ $card->name }}<b></p>
                                <span class='fs-4'>{{ $card->mana }}</span>
                            </div>

                        </div>
                        <div class="col text-center">
                            <img class='img-fluid
                                    mb-4 border border-4 border-dark'
                                src="{{ $card->thumb }}" alt="{{ $card->name }}">
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
        </div>
    </div>

    </html>

</body>

</html>
