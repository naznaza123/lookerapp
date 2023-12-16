@extends('layouts.nav')
@section('content')
@auth
@
<a   class="btn btn-primary" href="{{ route('datauser.create') }}">Tambah User</a>

@endauth

@auth
<h1>Ini adalah data pengguna keseluruhan</h1>   
<div class="">
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NAMA</th>
                            <th>ALAMAT</th>
                            {{-- <th>JENIS</th> --}}
                            <th>NOMOR HP</th>
                            <th>LULUSAN</th>
                            {{-- <th>KETERANGAN</th> --}}
                            <th>ACTION</th> 
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NAMA</th>
                            <th>ALAMAT</th>
                            {{-- <th>JENIS</th> --}}
                            <th>NOMOR HP</th>
                            <th>LULUSAN</th>
                            {{-- <th>KETERANGAN</th> --}}
                            <th>ACTION</th> 
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data_users as $key => $item)    
                        <tr>
                            {{-- <td>{{ $item->nis }}</td> --}}
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat_lengkap }}</td>
                            {{-- <td>{{ $item->jns=='pemasukan'?'pemasukan':'pengeluaran' }}</td> --}}
                            <td>{{ $item->nomor_hp}}</td>
                            {{-- <td>{{ formatrupiah($item->uang)   }}</td> --}}
                            <td>{{ $item->lulusan}}</td>
                            <td>
                                <a href="kas/edit/{{ $item->id }}" class="btn btn-circle btn-success btn-sm"><i class="bi bi-pencil-fill"></i></a>
                                <a href="kas/destroy/{{ $item->id }}" class="btn btn-circle btn-danger btn-sm" onclick="return window.confirm('Hapus Data Ini ?')"><i class="bi bi-trash"></i></a>
                            </td>
                            <script>
                                function destroy(id){
                                    Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'Your work has been saved',
                                    showConfirmButton: false,
                                    timer: 1500
                                    })
                                }
                            </script>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @endauth
        @guest
            <h1>Kamu belum Login</h1>
        @endguest

    </div>
@endsection