@extends('layouts.app')

@section('content')
    <section class="p-4">

        <h3>inserisci nuovo fumetto</h3>

        <form action=" {{ route('comics.store') }} " method="POST">
            @csrf

            <div>
                <label for="title">title</label>
                <input type="text" name="title" id="title">
            </div>

            <div>
                <label for="description">text</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>

            <div>
                <label for="thumb">img path</label>
                <input type="text" name="thumb" id="thumb" value="https://picsum.photos/200/300">
            </div>

            <div>
                <label for="series">series</label>
                <input type="text" name="series" id="series">
            </div>

            <div>
                <label for="sale_date">sale date</label>
                <input type="date" name="sale_date" id="sale_date">
            </div>

            <div>
                <label for="type">type</label>
                <input type="text" name="type" id="type">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Create</button>
        </form>
    </section>
@endsection
