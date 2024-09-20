@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Detail Guest</h3>

        <a href="{{ route('admin.guests.index') }}" class="btn btn-sm btn-secondary mb-2">Kembali</a>
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <td><strong>#{{$guests->id}}</strong></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{$guests->fulname}}</td>
            </tr>
            <tr>
                <td>institutions</td>
                <td>{{$guests->institutions_id}}</td>
            </tr>
            <tr>
                <td>From</td>
                <td>{{$guests->from}}</td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>{{$guests->phonenumber}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$guests->email}}</td>
            </tr>
            <tr>
                <td>Note</td>
                <td>{{$guests->note}}</td>
            </tr>
            <tr>
                <th>Created_At</th>
                <td>{{ \Carbon\Carbon::parse($guests->created_at)->isoFormat('DD MMM Y HH:mm') }}</td>
            </tr>
            <tr>
                <th>Updated_At</th>
                <td>{{ \Carbon\Carbon::parse($guests->updated_at)->isoFormat('DD MMM Y HH:mm') }}</td>
            </tr>

        </table>
    </div>
    
@endsection
