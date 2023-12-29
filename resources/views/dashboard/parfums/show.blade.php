@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $parfum->title }}</h1>
                <a href="/dashboard/parfums/" class="btn btn-success"><span data-feather="arrow-left"></span> Back
                    to All parfum</a>
                <a href="/dashboard/parfums/{{ $parfum->slug }}/edit" class="btn btn-warning"><span
                        data-feather="edit"></span>Edit</a>
                <form action="/dashboard/parfums/{{ $parfum->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                            data-feather="x-circle"></span>Delete</button>
                </form>

                @if ($parfum->image)
                    <div style="max-height: 400px; overflow:hidden">
                        <img src="{{ asset('storage/' . $parfum->image) }}" alt="{{ $parfum->name }}"
                            class="img-fluid mt-3">
                    </div>
                @else
                    <img src="/img/defaultimg.png{{ $parfum->name }}" alt="{{ $parfum->name }}" class="img-fluid mt-3">
                @endif
                <article class="my-3 fs-5"></article> {!! $parfum->body !!} </article>
            </div>
        </div>
    </div>
@endsection
