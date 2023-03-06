<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

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
                        <div class="col-8">
                            <h1>{{ $card->name }}</h1>
                        </div>

                        <div class="col-4"><span>{{ $card->mana }}</span></div>
                        <div class="col"> <img class='img-fluid' src="{{ $card->thumb }}" alt="{{ $card->name }}">
                        </div>
                        <div class="col-8">{{ $card->type }}</div>
                        <div class="col-4">{{ $card->edition }}</div>
                        <div class="col">
                            <ul>
                                <li>{{ $card->first_effect }}</li>
                                <li>{{ $card->second_effect }}</li>
                                <li>{{ $card->third_effect }}</li>
                                <li>{{ $card->fourth_effect }}</li>
                            </ul>
                            <div class="col-12">
                                <p>{{ $card->description }}</p>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-end align-items-center">
                            <span>{{ $card->strenght }}</span>
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
