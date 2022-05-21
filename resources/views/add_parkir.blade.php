<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parkir App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <h3 class="text-center">Backend test</h3>
    <h1 class="text-center mb-5">Tambah Data Parkir</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/parkir/add" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Polisi</label>
                                <input type="text" class="form-control" name="no_pol" id="no_pol" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tipe Kendaraan</label>
                                <input type="text" class="form-control" id="vid_tipe_kendaraan" aria-describedby="emailHelp" value="Mobil" readonly>
                                <input type="hidden" class="form-control" name="id_tipe_kendaraan" id="id_tipe_kendaraan" aria-describedby="emailHelp" value="1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tarif</label>
                                <input type="text" class="form-control" id="vid_tarif" aria-describedby="emailHelp" value="3000" readonly>
                                <input type="hidden" class="form-control" name="id_tarif" id="id_tarif" aria-describedby="emailHelp" value="1">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>