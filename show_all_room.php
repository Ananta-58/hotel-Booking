<?php
include_once 'admin/include/class.user.php'; 
$user=new User();


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
    <title>WELCOME TO HOTEL AADI</title>
</head>

<body class="bg-image" style="background-image: url('img/home_bg.jpg');
            height90">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="index.html">HOTEL AADI</a>
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

                    <li class="nav-item m-2">
                        <a href="http://www.facebook.com "><img src="img/facebook.png"></a>
                    </li>
                    <li class="nav-item m-2">
                        <a href="http://www.twitter.com"><img src="img/twitter.png"></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <?php
        
        $sql="SELECT * FROM rooms WHERE book='true'";
        $result = mysqli_query($user->db, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
//               ********************************************** Show Room Category***********************
                while($row = mysqli_fetch_array($result))
                {
                    
                    

                         
                    echo"
                    <div class='container p-5 my-5 border text-dark bg-info '>
                    <div class='row row-cols-1 row-cols-md-3 g-4 my-3'>
                    <h4>".$row['room_cat']."</h4><hr>
                    <h6>Checkin: ".$row['checkin']." and checkout: ".$row['checkout']."</h6>
                    <h6>Name: ".$row['name']."</h6>
                    <h6>Phone: ".$row['phone']."</h6>
                    <h6>Booking Condition: ".$row['book']."</h6>


                    </div>
                    <hr style='hight:2px; color:red; background-color:red'>
                    &nbsp;&nbsp;
                    <a href='edit_all_room.php?id=".$row['room_id']."'><button class='btn btn-primary button'>Edit</button></a>
                        
                    </div>
                    
                    ";
                    
                    
                }
                
                
                          
            }
            else
            {
                echo "NO Data Exist";
            }
        }
        else
        {
            echo "Cannot connect to server".$result;
        }
        
        
        
        
        
        ?>



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