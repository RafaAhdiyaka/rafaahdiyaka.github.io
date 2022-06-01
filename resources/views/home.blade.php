@extends('layout.main')


@section('content')
<div class="container pt-2">
    <h1>Data Pegawai</h1>
    <a href="{{route('tambahpegawai')}}"><button type="button" class="btn btn-primary px-5 mt-3 btn-sm mb-3">Create</button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
            @php
                $no = 1;
            @endphp
        <tbody>
            @foreach ($data as $row)
            <tr>
                <th scope="row">{{ $no }}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->jeniskelamin }}</td>
                <td>0{{ $row->notelepon }}</td>
                <td>
                    <form action="/deletedata/{{ $row->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" href="" class="btn btn-danger btn-sm">Delete</button>
                        <a type="button" href="/tampilan/{{ $row->id }}" class="btn btn-warning btn-sm">Edit</a> 
                    </form>
                    
                </td>
            </tr>
            @php
                $no++
            @endphp
            @endforeach
        </tbody>
    </table>
</div>

@endsection
