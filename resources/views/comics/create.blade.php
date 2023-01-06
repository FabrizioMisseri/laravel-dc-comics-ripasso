@extends('layouts.app')

@section('content')
    <section class="pb-4 px-4">

        <h3>inserisci nuovo fumetto</h3>

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action=" {{ route('comics.store') }} " method="POST">
            @csrf

            <div>
                <label for="title">title</label>
                <input value=" {{ old('title') }} " type="text" name="title" id="title" class="is-invalid">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <label for="description">text</label>
                <textarea name="description" id="description" cols="30" rows="10" class="is-invalid">
                    {{ old('description') }}
                </textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <label for="thumb">img path</label>
                <input type="text" name="thumb" id="thumb" value="https://picsum.photos/200/300"
                    class="is-invalid">
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <label for="series">series</label>
                <input value=" {{ old('series') }} " type="text" name="series" id="series" class="is-invalid">
                @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <label for="sale_date">sale date</label>
                <input value=" {{ old('sale_date') }} " type="date" name="sale_date" id="sale_date" class="is-invalid">
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <label for="type">type</label>
                <input value="{{ old('type') }}" type="text" name="type" id="type" class="is-invalid">
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Create</button>
        </form>
    </section>
@endsection
