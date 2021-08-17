<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekapitulasi Kas Masjid </title>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> --}}

</head>

<body>
    <div class="container mt-5">

        <div class="row">
            <div class="col-1">
                <img src="{{ asset('image/vektor_masjid.png') }}" alt="" width="150px">
            </div>
            <div class="col">
                <h2 class="text-center">REKAPITULASI KAS MASJID</h2>
                <h3 class="text-center">MASJID ABU BAKAR AS-SHIDDIQ</h3>
                <h4 class="text-center">Jl. Kaca Piring, Kel. Gebang, Kec. Patrang, Kab. Jember, Jawa Timur, Kode Pos :
                    68117</h4>

            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Pemasukan</th>
                    <th scope="col">Pengeluaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataPeriode as $d)
                    @if ($d->jenis == 'masuk')
                        
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>@datetime($d->tanggal)</td>
                        <td>{{ $d->keterangan }}</td>
                        <td>@currency($d->pemasukan)</td>
                        <td>-</td>
                    </tr>
                    @elseif ($d->jenis == 'keluar')
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>@datetime($d->tanggal)</td>
                        <td>{{ $d->keterangan }}</td>
                        <td>-</td>
                        <td>@currency($d->pengeluaran)</td>
                    </tr>

                    @endif




                   
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <th scope="row" >TOTAL PEMASUKAN  </th>
                    <td > <p class="text-bold">=  @currency($dataPeriode->sum('pemasukan'))</p> </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <th scope="row">TOTAL PENGELUARAN</th>
                    <td></td>
                    <td><p class="text-bold">= @currency($dataPeriode->sum('pengeluaran'))</p></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <th scope="row" colspan="">TOTAL SALDO KAS MASJID </th>
                    <td colspan="2"> <p class="text-bold">= @currency($dataPeriode->sum('pemasukan')- $dataPeriode->sum('pengeluaran'))</p></td>

                </tr>
            </tbody>
        </table>
      

    </div>

    <script>
        window.print();
    </script>
<!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
