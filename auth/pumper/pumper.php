<?php session_start(); ?>
<?php
include '../../config/conn.php';
require_once '../../res/link.php';
require_once '../../res/add-ons.php';
include '../../res/function.php';
?>
<?php
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../login.php');
}
if ($_SESSION['userType'] != 'PUMPER') {
    header('Location: ../../login.php');
}

?>
<?php

$user_id = $_SESSION['user_id'];
$sql="SELECT * FROM pumper_station WHERE user_id='{$user_id}'";
$result=mysqli_query($connection,$sql);
if ($result){
    $row=mysqli_fetch_assoc($result);
    $station_id=$row['station_id'];

    $sql1="SELECT * FROM Fuel_station WHERE station_id='{$station_id}'";
    $result1=mysqli_query($connection,$sql1);
    if ($result1){
        $row1=mysqli_fetch_assoc($result1);
        $station_name=$row1['station_name'];
        $station_zip=$row1['station_zip'];

    }
}else{
    die("Database query failed");
}

?>


<?php
if (isset($_POST['btn-billCal'])){
//assign the empty string to the variable

    $fuelType = "";
    $fuelPrice = "";
    $fuelAmount = "";

    $fuelType = $_POST['fuelType'];

    $fuelAmount = $_POST['fuelAmount'];






}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Bootstrap demo</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" rel="stylesheet">
    <link href="../../css/pumper.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="/search-filter.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Fuel Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="">Logout</a>
            </div>
        </div>
    </div>
</nav>

<div class="fuel-station-heading">
    <h1 class="fuel-station-name"><?php echo$station_name; ?> </h1>
    <h4 class="address"> <?php echo$station_zip; ?> </h4>
</div>

<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-8">
            <div class="card-body">
                <form action="pumper.php" method="Post">
                    <div class="clsss1">
                        <label>Fuel Amount - </label>
                        <label for="Fuel-amount"></label><input class="liters" id="Fuel-amount" placeholder="Liters" type="number" name="fuelAmount">
                    </div>

                    <div class="box2">
                        <label class="Fuel-Price ">Price - </label>
                        <label for="Fuel-pricet"></label><input class="price" id="Fuel-pricet" placeholder="Rs" type="number" name="fuelPrice" DISABLED>
                    </div>


                    <div class = "fuel_type">
                        <label class="type"> Select the fuel type  </label>
                        <br>
                        <div class ="drop">
                            <select class="form-select" name="fuelType" aria-label="Default select example">
                                <option value="1">PETROL 92</option>
                                <option value="2">PETROL 95</option>
                                <option value="3">DIESEL</option>
                                <option value="4">SUPER DIESEL</option>
                                <option value="5">KEROSENE</option>
                            </select>
                        </div>
                        <br>

                        <!--                        <div class = type>-->

                        <!--                        <button id="Petrol 92">PETROL 92</button>-->
                        <!--                        <button id="Petrol 95">PETROL 95</button>-->
                        <!--                        <button id="Diesel">DIESEL</button>-->
                        <!--                        <button id="Super Diesel">SUPER DIESEL</button>-->
                        <!--                        <button id="Kerosene">KEROSENE</button>-->

                        <!--                        </div>-->
                    </div>



                    <div class = "submit">

                        <button id="submit1" name="btn-billCal"> Calculate Bill</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script>

    const btn = document.getElementById('Petrol 92');

    btn.addEventListener('click', function onClick() {
        btn.style.backgroundColor = 'salmon';
        btn.style.color = 'white';

    });

    const btn1 = document.getElementById('Petrol 95');

    btn1.addEventListener('click', function onClick() {
        btn1.style.backgroundColor = 'salmon';
        btn1.style.color = 'white';
    });

    const btn3 = document.getElementById('Diesel');

    btn3.addEventListener('click', function onClick() {
        btn3.style.backgroundColor = 'salmon';
        btn3.style.color = 'white';
    });

    const btn4 = document.getElementById('Super Diesel');

    btn4.addEventListener('click', function onClick() {
        btn4.style.backgroundColor = 'salmon';
        btn4.style.color = 'white';
    });

    const btn5 = document.getElementById('Kerosene');

    btn5.addEventListener('click', function onClick() {
        btn5.style.backgroundColor = 'salmon';
        btn5.style.color = 'white';
    });

</script>

</body>
</html>