@extends('layouts.app')

@section('content')
    <section class="p-4">

        <h3>ciao sono edit n°: {{ $comic->id }} </h3>
        <h4>nome fumetto: {{ $comic->title }} </h4>

        <form action=" {{ route('comics.update', $comic->id) }} " method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="title">title</label>
                <input type="text" name="title" value=" {{ $comic->title }} " id="title">
            </div>

            <div>
                <label for="description">text</label>
                <textarea name="description" id="description" cols="30" rows="10"> {{ $comic->description }} </textarea>
            </div>

            <div>
                <label for="thumb">img path</label>
                <input type="text" name="thumb" value=" {{ $comic->thumb }} " id="thumb">
            </div>

            <div>
                <label for="series">series</label>
                <input type="text" name="series" value=" {{ $comic->series }} " id="series">
            </div>

            <div>
                <label for="sale_date">sale date</label>
                <input type="date" name="sale_date" value="{{ old('sale_date', date('Y-m-d')) }}" id="sale_date">
            </div>

            <div>
                <label for="type">type</label>
                <input type="text" name="type" value=" {{ $comic->type }} " id="type">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Edit</button>
        </form>
    </section>
@endsection
