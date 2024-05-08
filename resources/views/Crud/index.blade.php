@extends('layout.main')
@section('konten')
<div class="col-md-8 offset-md-2">
    <h1 class="text-primary">All Crud</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <a href="{{ route("crud.create") }}" class="btn btn-primary mt-3">+ Tambah Crud</a>
            <a href="{{ route("testpage") }}" class="btn btn-success mt-3 mx-3">TestPage</a>
            <form action="{{ route("logout") }}" class="" method="POST">
                @csrf
                <button class="btn btn-danger mt-3">Logout</button>
            </form>
            @foreach ($crud as $c)
            <tr>
                <td width="400">{{ $c->name }}</td>
                <td width="400">
                    <a href="{{ route('crud.edit', $c->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('crud.destroy', $c->id) }}" class="d-inline" method="POST"
                        onclick="return confirm('apa yakin?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $crud->links() }}

@endsection
