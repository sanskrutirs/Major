<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Major Project</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f262bb2a7c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <header id="topheader">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container p-2">
                <a class="navbar-brand text-uppercase" href="#"><img src="park.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-lighter navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#table">Parking details</a>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="button"><a href="#form">Add Car</a></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
        <section id="hero" class="backimg">
                <!-- <div class="overlay"></div> -->
                <div class="container">
                    <div class="container text-center text" data-aos="fade-up">
                       <h1>Welcome to Company name!</h1>
                       <p>Don't park your vechical on Road, It's so dengerous. Park your vechical in Company Name.</p>
                        <a href=""><span class="arrow"><i class="fas fa-angle-double-right"></i></span></a>
                    </div>
                </div>
         </section>
    </header>

    <section id="about" class="u-black u-align-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-4 col-12 text-center about" data-aos="fade-up" data-aos-delay="400">
                    <a href="#"><span class="icon"><i class="fas fa-map-marker-alt"></i></span></a>
                    <h2>Location</h2>
                    <p>A108 Adam Street, New York, NY 535022</p>
                </div>
                <div class="col-lg-4 col-lg-4 col-12 text-center about" data-aos="fade-up" data-aos-delay="500">
                    <a href="#"><span class="icon"><i class="fas fa-phone-volume"></i></span></a>
                    <h2>Call</h2>
                    <p>+1 5589 55488 55s <br>info@example.com</p>
                </div>
                <div class="col-lg-4 col-lg-4 col-12 text-center about" data-aos="fade-up" data-aos-delay="600">
                    <a href="#"><span class="icon"><i class="fas fa-lightbulb"></i></span></a>
                    <h2>For your future</h2>
                    <p>We protect investments and financial dreams.</p>
                </div>
            </div>

        </div>
    </section>

    <section id="safe">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6" data-aos="zoom-in">
                    <div class="image">
                        <img src="safe.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="fade-up">
                    <div class="safe">
                    <h1>Safe. <br> Relaxing. <br>Your car <br>in <span style="color: #f17c0e;">good <br>hand's.</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="form">
        <div class="container">
            <form align="center" action="function.php" method="POST" data-aos="zoom-in">
                <div class="form-group">
                <input type="text" name="name" class="form-control text-white" placeholder="Enter Name..">
                </div>
                <div class="form-group">
                <input type="text" name="vname" class="form-control text-white" placeholder="Vechical Name..">
                </div>
                <div class="form-group">
                    <input type="text" name="vnumber" class="form-control text-white" placeholder="Vechical Number..">
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input onfocus="(this.type='date')" name="entry" class="form-control"  placeholder="Entry Date" required="">
                    </div>
                    <div class="col-md-6 form-group">
                        <input onfocus="(this.type='date')" name="exit" class="form-control"  placeholder="Exit Date" required="">
                    </div>
                </div>
                <input type="submit" name="submit">
            </form><br>

            <table class="table table-dark" id="table">
            <thead>
                <tr>    
                <th scope="col">Name</th>
                <th scope="col">Vechical Name</th>
                <th scope="col">Vechical Number</th>
                <th scope="col">Entry Date</th>
                <th scope="col">Exit Date</th>
                </tr>
            </thead>
            <?php
            $result = mysqli_query($major, "SELECT * FROM major ORDER BY Id DESC"); 
     
            while($res = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$res['Name']."</td>";
                echo "<td>".$res['Vname']."</td>";
                echo "<td>".$res['Vnumber']."</td>";
                echo "<td>".$res['from_date']."</td>";
                echo "<td>".$res['to_date']."</td>";
                echo "</tr>";

            }
            ?>
            </table>



          </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        duration: 800,
        offset: 150,
    });
  </script>

</body>
</html>