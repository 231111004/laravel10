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

<form action="<?php echo e(url('add-mahasiswa/new')); ?>" method="post">
<?php echo csrf_field(); ?>
  <h2>Form Data Mahasiswa </h2>
  <div class="container">
  
  <?php if(session('err_msg')): ?>
            <div class="alert alert-danger text-center mx-auto mt-3" role="alert">
                <?php echo e(session('err_msg')); ?>

            </div>
        <?php endif; ?>


 	<label for="nrp"><b>NRP</b></label>
    <input type="text" placeholder="Masukkan NRP" name="nrp" required>
    <label for="nama"><b>Nama</b></label>
    <input type="text" placeholder="Masukkan Nama" name="nama" required>
    <label for="email"><b>Email Address</b></label>
    <input type="text" placeholder="name@example.com" name="email" required>

    
        
    <button class="btn btn-primary btn-sm">submit</button>
  </div>
</form>

</body>
</html>
<?php /**PATH C:\skeleton_laravel_10-main\resources\views/add-mahasiswa.blade.php ENDPATH**/ ?>