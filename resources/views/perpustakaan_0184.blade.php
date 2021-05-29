<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Perpus</title>
        <style>
            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 1px solid #ddd;
            }

            thead {
                background-color: #f2f2f2;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) { background-color: #f2f2f2}

            .tambah {
                padding: 8px 16px ;
                text-decoration: none;
            }
        </style>
      </head>
      <body>
        <div style="overflow-x:auto;">
        <table>
            <thead>
                <tr>
                    <th>Judul Buku</th>
                    <th>Jumlah Buku</th>
                    <th>Nama Kategori</th>
                    <th>Kode Kategori</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($perpustakaan_0184 as $perpus)
                <tr>
                    <td>{{$perpus->judul_buku}}</td>
                    <td>{{$perpus->jumlah_buku}}</td>
                    <td>{{$perpus->nama_kategori}}</td>
                    <td>{{$perpus->kode_kategori}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
      </body>
</html>
