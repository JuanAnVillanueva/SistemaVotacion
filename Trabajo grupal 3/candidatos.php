<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+-, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/principal.css">
    <title>Document</title>
</head>
<body>
<head>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/1.png"  style="margin-left: 150%;">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="nav-link active" aria-current="page" href="Inicio.html" style="margin-left: 100%;">
                  <h4>Inicio</h4></a>
                <a class="nav-link" href="candidatos.php" >
                  <h4>Candidatos</h4>
                </a>
                <a class="nav-link" href="informacion.html" >
                  <h4>información</h4>
                </a>
                <a class="nav-link" href="ayuda.html" >
                    <h4>Ayuda</h4>
                  </a>
                <a class="nav-link" style="margin-left: 100%;" href="login.html">
                  <h4>Login</h4>
                </a>
          </div>
        </div>
      </nav>
</head>
    <br></br>
    <div class = "row">
<?php
include 'conexcion.php';
$sql = "SELECT * FROM candidatos";
$result = $conexion->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo'
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img src="'.$row['logo'].'">
        <h5 class="card-title" class="form-label">
          <label for="disabledSelect" class="form-label">nombre del partido: '.$row['nompartido'].'</label>
        </h5>
        <h5 class="card-title" class="form-label">
          <label for="disabledSelect" class="form-label">Integrantes: '.$row['integrantes'].'</label>
        </h5>
        <h5 class="card-title" class="form-label">
          <label for="disabledSelect" class="form-label">Informacion '.$row['info'].'</label> 
        </h5>
      </div>
    </div>'


;}
} else {
  echo "0 results";
}
?> 
</body>
</html>