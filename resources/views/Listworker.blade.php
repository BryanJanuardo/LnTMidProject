<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylelist.css') }}">
    <title>List Worker</title>
</head>
<body>
    <div class="navbar">
        <div class="Else"><a href="/">Home</a></div>
        <div class="List"><a href="/Listworker">List Worker</a></div>
        <div class="Else"><a href="/aboutus">About Us</a></div>
    </div>

    <div class="page">
        <div class="top-page">
            <div class="Judul">
                <h1>List Worker</h1>
            </div>

            <div class="add-karyawan">
                <form action="{{route('addkaryawan')}}">
                    <Button type="submit">Add Worker</Button>
                </form>
            </div>
        </div>
    
        <div class="center-page">

            @for($i = 0; $i < $data->count(); $i++)
                <div class="karyawan-box">
                    <div class="nama">{{$data[$i]->name}}</div>
                    <div>Umur : {{$data[$i]->umur}}</div>
                    <div>Alamat : {{$data[$i]->alamat}}</div>
                    <div>Nomor : {{$data[$i]->nomor}}</div>
                    <div class="buttons">
                        <form action="{{route('updateKaryawan', ['id' => $data[$i]->id])}}">
                            <button type="submit" class="edit">Edit</button>
                        </form>
                        <form action="{{route('deletekaryawan', ['id' => $data[$i]->id])}}" method="POST">
                            @csrf
                            @method('delete')
                            <button  type="submit" class="delete">Delete</button>
                        </form>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    

</body>
</html>