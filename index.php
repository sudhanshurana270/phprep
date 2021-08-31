<?php
include dbconnect.php
if($_SERVER["REQUEST_METHOD"]="$_POST"){
$employee_id=$_POST['employee'];
$password= $_POST['password'];
$employee_location=$_POST['employee_location'];
$sql=INSERT INTO user[$employee_id,$password,$employee_location];
$result=mysqli_query($connection,$sql);
if($result){
  echo"values sucessfully uploaded";
}
else(){
  echo"error".mysqli_error($result);
}                                             
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
    <h1>crud app</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    <form action="index.php" method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">employee id</label>
    <input type="text" class="form-control" id="employee" aria-describedby="employee">
    <div id="employee" class="form-text">Employee ID</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="mb-3 form-check">
    <input type="employee_location" class="form-check-input" id="employee_location">
    <label class="form-check-label" for="employee_location">Employee Location</label>
  </div>
  <button type="submit" class="btn btn-primary-outline-sucess">Submit</button>
</form>
  </body>
</html>