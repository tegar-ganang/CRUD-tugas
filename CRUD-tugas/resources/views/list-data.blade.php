<html>
<head>
	<title>Tutorial Membuat CRUD</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

	<h3>Data Mahasiswa</h3>

	<a href="{{ route('announces.tambah-data') }}"> + Tambah Data Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>NRP</th>
            <th>Tahun Masuk</th>
			<th>Semester</th>
            <th>Jurusan</th>
			<th>IPS</th>
            <th>IPK</th>
            <th>Aksi</th>
		</tr>
		@foreach($data as $d)
		<tr>
			<td>{{ $d->nama }}</td>
			<td>{{ $d->nrp }}</td>
            <td>{{ $d->tahunmasuk }}</td>
			<td>{{ $d->semester }}</td>
            <td>{{ $d->jurusan }}</td>
			<td>{{ $d->ips }}</td>
            <td>{{ $d->ipk }}</td>
			<td>
				<a href="{{ Route('announces.edit', $d->id) }}">Edit</a>
				|
				<a href="#">Hapus</a>
                |
                <a href="#">Detail</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>