@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @foreach ($comics as $comic)
                <div class="col-2 p-3">
                    <a href=" {{ route('comics.show', $comic->id) }} ">

                        <div class="card clickable p-2">

                            <img src=" {{ $comic->thumb }} " alt="">

                            <div class="text-box p-2">
                                <p>
                                    {{ $comic->title }}
                                </p>
                                <p>
                                    {{ $comic->series }}
                                </p>
                                <p>
                                    {{ $comic->type }}
                                </p>
                            </div>

                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
