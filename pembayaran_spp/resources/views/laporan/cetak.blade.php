{{-- <!DOCTYPE html>
<html>
<head>
</head>
<body>

<h1>Laporan Pembayaran SPP</h1>

<table id="customers">
    <thead>
        <tr>
           <th>Petugas</th>
           <th>NISN</th>
           <th>Nama</th>
           <th>Kelas</th>
           <th>Tanggal Bayar</th>
           <th>Jumlah Bayar</th>
        </tr>
     </thead>
     <tbody>
        @foreach($data_transaksi as $id)
        <tr>
           <td>{{ $id->nama_petugas }}</td>
           <td>{{ $id->nisn }}</td>
           <td>{{ $id->nama }}</td>
           <td>{{ $id->nama_kelas }}</td>
           <td>{{ $id->tgl_bayar }}</td>
           <td>{{ $id->jumlah_bayar }}</td>
        </tr>
        @endforeach
     </tbody>
</table>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Laporan Pembayaran SPP </title>
   <style>
      #customers {
         font-family: Arial, Helvetica, sans-serif;
         border-collapse: collapse;
         width: 100%;
      }

      #customers td, #customers th {
         border: 1px solid #ddd;
         padding: 8px;
      }

      #customers tr:nth-child(even){background-color: #f2f2f2;}

      #customers tr:hover {background-color: #ddd;}

      #customers th {
         padding-top: 12px;
         padding-bottom: 12px;
         text-align: left;
         background-color: #2655BF;
         color: white;
      }
   </style>
</head>
<body>
   <div classs="container">
      <div class="text-center">
         <h1 class="text-dark mb-5">Laporan Pembayaran SPP</h1>
      </div>
      <div class="justify-content-center">
         <table class="table table-bordered" id="customers">
            <thead>
                <tr>
                   <th class="text-center">Petugas</th>
                   <th class="text-center">NISN</th>
                   <th class="text-center">Nama</th>
                   <th class="text-center">Kelas</th>
                   <th class="text-center">Tanggal Bayar</th>
                   <th class="text-center">Jumlah Bayar</th>
                </tr>
             </thead>
             <tbody>
                @foreach($data_transaksi as $id)
                <tr>
                   <td>{{ $id->name }}</td>
                   <td>{{ $id->nisn }}</td>
                   <td>{{ $id->nama }}</td>
                   <td>{{ $id->nama_kelas }}</td>
                   <td>{{ $id->tgl_bayar }}</td>
                   <td>{{ $id->jumlah_bayar }}</td>
                </tr>
                @endforeach
             </tbody>
        </table>
      </div>
   </div>
   <script>
    function printPage() {
	window.print();
}

window.onload = function() {
	printPage();
}

   </script>
</body>
</html>