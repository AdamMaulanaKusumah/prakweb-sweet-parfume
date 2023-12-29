@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Postingan Untuk Halaman parfum</h1>
    </div>


    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive col-lg-10">
        <a href="/dashboard/parfums/create" class="btn btn-primary mb-3">Create New parfum</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No Id</th>
                    <th scope="col">Nama Parfum</th>
                    <th scope="col">Created</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($parfums as $parfum)
                    <tr>
                        <td>{{ $parfum->iteration }}</td>
                        <td>{{ $parfum->title }}</td>
                        <td>{{ $parfum->created_at }}</td>
                        <td>{{ $parfum->updated_at }}</td>
                        <td>
                            <a href="/dashboard/parfums/{{ $parfum->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/parfums/{{ $parfum->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/parfums/{{ $parfum->slug }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
