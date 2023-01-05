@extends('layouts.app')

@section('content')
    <div class="container card mt-5 mb-5 p-4">
        <h2 class="mb-3">
            {{ $comic->title }}
        </h2>

        <figure>
            <img src=" {{ $comic->thumb }} " alt="">
        </figure>

        <h5>
            {{ $comic->series }}
        </h5>

        <h5>
            {{ $comic->sale_date }}
        </h5>

        <h5>
            {{ $comic->type }}
        </h5>

        <p>
            {{ $comic->description }}
        </p>

        <h5>
            {{ $comic->id }}
        </h5>

        <div>
            <a class="btn btn-primary" href=" {{ route('comics.edit', $comic->id) }} ">
                Modifica
            </a>

            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    &cross;
                </button>
            </form>
        </div>

    </div>
@endsection
