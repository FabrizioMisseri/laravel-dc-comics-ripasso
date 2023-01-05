@extends('layouts.app')

@section('content')
    <section class="container p-4">

        <h2>Tutti i fumetti</h2>
        <ul>
            @foreach ($comics as $comic)
                <li class="mb-4" style="border-top: 1px dashed">
                    <div class="d-flex justify-content-between">
                        <span>
                            {{ $comic->title }}
                        </span>
                        <span>
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
                        </span>
                    </div>
                </li>
            @endforeach
        </ul>
        <div>
            <a href=" {{ route('comics.create') }} " class="btn btn-primary mt-2">
                Create new Comic
            </a>
        </div>
    </section>
@endsection
