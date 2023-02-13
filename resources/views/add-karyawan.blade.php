<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleadd.css') }}">
    <script>type="text/javascript" src="{{ asset('js/manage.js') }}"</script>
    <title>Add-Karyawan</title>
</head>
<body>
    <div class="navbar">
        <div class="Else"><a href="/">Home</a></div>
        <div class="List"><a href="/Listworker">List Worker</a></div>
        <div class="Else"><a href="/aboutus">About Us</a></div>
    </div>
    
    <div class="page">
        <div class="form-utama">
            <div><h1>Add Worker</h1></div>
            <form onsubmit="return validation()" action="{{route('postKaryawan')}}" method="POST">
                @csrf
                <fieldset>
                <div class="Nama">
                    <label for="Name">Nama :</label>
                    <input id="name" name="name" type="text">
                    @error('name')
                        <span class="error">{{$message}}</span>
                    @enderror
                </div>
                <div class="Umur">
                    <label for="Name">Umur :</label>
                    <input id="umur" name="umur" type="text">
                    @error('umur')
                        <span class="error">{{$message}}</span>
                    @enderror
                </div>
                <div class="Alamat">
                    <label for="Name">Alamat :</label>
                    <input id="alamat" name="alamat" type="text">
                    @error('alamat')
                        <span class="error">{{$message}}</span>
                    @enderror
                </div>
                <div class="Nomor">
                    <label for="Name">Nomor Telp. :</label>
                    <input id="nomor" name="nomor" type="text">
                    @error('nomor')
                        <span class="error">{{$message}}</span>
                    @enderror
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