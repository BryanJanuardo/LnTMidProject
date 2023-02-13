<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleedit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleadd.css') }}">
    <script>src="{{ asset('js/manage.js') }}"</script>
    <title>Edit Worker</title>
</head>
<body>
    <div class="navbar">
        <div class="Else"><a href="/">Home</a></div>
        <div class="List"><a href="/Listworker">List Worker</a></div>
        <div class="Else"><a href="/aboutus">About Us</a></div>
    </div>

    <div class="page">
        <div class="form-utama">
            <div><h1>Edit Worker</h1></div>
            <form onsubmit="return validation()" action="{{route('updateKaryawan', ["id" => $idKaryawan])}}" method="POST">
                @csrf
                @method('patch')
                <fieldset>
                <div class="Nama">
                    <label for="Name">Nama :</label>
                    <input value="{{$data->name}}" name="name" type="text">
                </div>
                <div class="Umur">
                    <label for="Name">Umur :</label>
                    <input value="{{$data->umur}}" name="umur" type="text">
                </div>
                <div class="Alamat">
                    <label for="Name">Alamat :</label>
                    <input value="{{$data->alamat}}" name="alamat" type="text">
                </div>
                <div class="Nomor">
                    <label for="Name">Nomor Telp. :</label>
                    <input value="{{$data->nomor}}" name="nomor" type="text">
                </div>
    
                <div class="Buttons">
                    <div class="Submit">
                        <button type="submit">Submit</button>
                    </div>
                </div>
                
            </fieldset>
        </form>
            <div class="Cancel">
                <form action="{{route('listKaryawan')}}">
                    <button type="submit">Back</button>
                </form>
            </div>
        </div>

    </div>
</body>
</html>