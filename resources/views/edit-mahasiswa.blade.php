<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 60vh;
  margin: 0;
}

form {
  max-width: 900px;
  width:100%;
  background-color: #fff;
}

h2 {
 text-align: center;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 6px;
  margin: 8px 0;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  padding: 10px;
  margin: 8px 0;
  width: 10%;
}

</style>
</head>
<body>

<form action="{{ url('update/{nrp}') }}" method="POST">
@csrf
  <h2>Form Data Mahasiswa </h2>
  <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="text" class="form-control" name="nrp" id="nrp" placeholder="Masukkan NRP" value="{{  $detail[0]->nrp }}" {{ ( !empty($detail) ) ? 'readonly' : '' }}>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="{{ $detail[0]->nama }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="{{ $detail[0]->email }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
</body>
</html>
