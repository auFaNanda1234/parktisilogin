<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Query Builder</title>

    <head>

    <body>
        <ul>
            <table border=1>
                <th>nama</th>
                <th>alamat</th>

                @foreach($produk as $p)
                <tr>
                    <td>{{ $p->Nama }}</td>
                    <td>{{ $p->Alamat }}</td>
                </tr>@endforeach
            </table>
    </body>

</html>