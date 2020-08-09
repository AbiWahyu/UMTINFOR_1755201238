@extends('layouts.app')

@section('title','Halaman Mahasiswa')

@section('bread1','Mahasiswa')
@section('bread2','Daftar Mahasiswa')

@section('content')
    <h1>Daftar Mahasiswa</h1>
    <table class="table table-striped" id="mhs-table">
        <thead>
            <tr>
                <th>id</th>
                <th>nim</th>
                <th>nama lengkap</th>
            </tr>
        </thead>
    </table>

    <script>
    $(function() {
        $('#mhs-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('mhs_list') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'nim', name: 'nim' },
            { data: 'nama_lengkap', name: 'nama_lengkap' },
        ]
    });
});
</script>

@endsection
