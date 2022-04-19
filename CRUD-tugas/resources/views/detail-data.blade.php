
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Detail Data</title>
</head>
<body>
<center>
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h1 class="mt-3">Detail Data</h1>
                        <br>
                        @if (Session::has('isi'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('title'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        {{-- <form id="form-login" action="{{ route('announces.show') }}" method="get">
                            @csrf --}}
                            <div>
                                <input class="mt-3 form-control form-control-lg @error('nama') is-invalid @enderror" name="nama" type="text"
                                       placeholder="nama" value="{{ $data->nama ? $data->nama : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('nama')
                            <div class="alert alert-danger">
                                Nama salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('nrp') is-invalid @enderror" name="nrp" type="text"
                                       placeholder="nrp" value="{{ $data->nrp ? $data->nrp : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('nrp')
                            <div class="alert alert-danger">
                                NRP Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('tahunmasuk') is-invalid @enderror" name="tahunmasuk" type="text"
                                       placeholder="tahunmasuk" value="{{ $data->tahunmasuk ? $data->tahunmasuk : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('tahunmasuk')
                            <div class="alert alert-danger">
                                tahunmasuk Salah
                            </div>
                            @enderror 
                            <div>
                                <input class="mt-3 form-control form-control-lg @error('semester') is-invalid @enderror" name="semester" type="text"
                                       placeholder="semester" value="{{ $data->semester ? $data->semester : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('semester')
                            <div class="alert alert-danger">
                                Semester Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('jurusan') is-invalid @enderror" name="jurusan" type="text"
                                       placeholder="jurusan" value="{{ $data->jurusan ? $data->jurusan : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('jurusan')
                            <div class="alert alert-danger">
                                Jurusan Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('ips') is-invalid @enderror" name="ips" type="text"
                                       placeholder="ips" value="{{ $data->ips ? $data->ips : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('ips')
                            <div class="alert alert-danger">
                                IPS Salah
                            </div>
                            @enderror
                            <div>
                                <input class="mt-3 form-control form-control-lg @error('ipk') is-invalid @enderror" name="ipk" type="text"
                                       placeholder="ipk" value="{{ $data->ipk ? $data->ipk : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('ipk')
                            <div class="alert alert-danger">
                                IPK Salah
                            </div>
                            @enderror
                        {{-- </form> --}}
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>