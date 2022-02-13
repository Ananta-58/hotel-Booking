<?php session_start();
include_once 'admin/include/class.user.php';
$user=new User();
$uid=$_SESSION[ 'uid']; 
if(!$user->get_session()) 
{ 
    header("location:admin/login.php"); 
} 
if(isset($_GET['q'])) 
{ 
    $user->user_logout();
 header("location:index.php"); 
} 
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css">
    <title>Admin Panal</title>
</head>

<body class="bg-image" style="background-image: url('img/pic/7.jpg');
            height90">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="index.php">HOTEL AADI</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="room.php">Room &amp; Facilities </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="reservation.php">Online Reservation</a>
                    </li>
                    <li class=" nav-item ">
                        <a class="nav-link active" href="admin.php">Admin</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-right ">
                    <li>
                        <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-danger">Logout</button>
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="container p-5 my-5 border ">
        <div class="row row-cols-1 row-cols-md-3 g-4 my-3">

            <div class="col">
                <div class="card text-center">
                    <img src="img/pic/9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title ">Room Categary</h5>
                        <hr style="hight:2px; color:red; background-color:red">
                        <a href="admin/addroom.php" class="btn btn-outline-success text-center">Add Room Category</a>
                        <hr style="hight:2px; color:red; background-color:red">
                        <a href="show_room_cat.php" class="btn btn-outline-success text-center">Show All Room
                            Category</a>
                        <hr style="hight:2px; color:red; background-color:red">
                        <a href="show_room_cat.php" class="btn btn-outline-success text-center">Edit Room Category</a>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-center">
                    <img src="img/pic/9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Booking</h5>
                        <hr style="hight:2px; color:red; background-color:red">
                        <a href="room.php" class="btn btn-outline-success text-center">BOOK NOW</a>
                        <hr style="hight:2px; color:red; background-color:red">
                        <a href="show_all_room.php" class="btn btn-outline-success text-center">Show All Booked
                            Rooms</a>
                        <hr style="hight:2px; color:red; background-color:red">
                        <a href="show_all_room.php" class="btn btn-outline-success text-center">Edit Booked Room</a>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-center">
                    <img src="img/pic/9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Add Manager</h5>
                        <hr style="hight:2px; color:red; background-color:red">
                        <a href="admin/registration.php" class="btn btn-outline-success text-center">Add Manager</a>
                    </div>
                </div>
            </div>


        </div>
    </div>




    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="">aadus.tech@outlook.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>