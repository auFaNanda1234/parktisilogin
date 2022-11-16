<!DOCTYPE html>
<html>
<head>
<title>Laravel Saya</title>
</head>
<body>
<table border=1>
 <th>nama</th><th>alamat</th>

 @foreach($produk as $p)
 <tr><td>{{ $p->Nama }}</td><td>{{ $p->Alamat }}</td> </tr>@endforeach
</table>
</body>
</html>