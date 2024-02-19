<?php
$hostname = "localhost";
$username = "root";
$passward = "";
$dbname = "hospital";

$con = mysqli_connect($hostname, $username , $passward,  $dbname);

if(!$con){

  echo"not connected";
}
else{
  echo "connected";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="index.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Catamaran:wght@200&family=Courgette&family=Dancing+Script:wght@700&family=Edu+TAS+Beginner:wght@700&family=Lato:wght@300;900&family=Mukta:wght@700&family=Mulish:wght@300&family=Open+Sans&family=PT+Sans:ital,wght@1,700&family=Poppins:wght@300&family=Raleway:wght@100&family=Roboto&family=Roboto+Condensed:wght@700&family=Roboto+Slab&display=swap"
      rel="stylesheet"
    />

    <!-- <script src="https://kit.fontawesome.com/f30fac2c61.js" crossorigin="anonymous"></script> -->
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <nav>
          <div class="logo">
            <h1>LifeCare</h1>
          </div>
          <i id="bar" class="fa-solid fa-bars"></i>

          <ul>
            <li><a href="">Home</a></li>
            <li><a href="#doctors">Doctor's</a></li>
            <li><a href="#speciality">Speciality's</a></li>
            <li><a href="#patient">Patient Review's</a></li>
            <li><a href="#contact">Register Patient</a></li>
          </ul>
        </nav>
      </div>

      <div class="main">
        <div class="mainText">
          <h1>The Hospital that <br />Care for you</h1>
          <h3>Best Team's</h3>
          <button>Show More</button>
        </div>
        <img src="mains.png" alt="" width="40%" />
      </div>

      <div id="doctors">
        <div class="head">
          <h1>Our Doctor's</h1>
        </div>
        <div class="doctors">
          <div class="card">
            <img src="dt1.jpg" alt="" />
            <p>Dr Alexa</p>
            <p>Surgeon</p>
          </div>
          <div class="card">
            <img src="dt2.jpg" alt="" />
            <p>Dr Alexa</p>
            <p>Surgeon</p>
          </div>
          <div class="card">
            <img src="dt3.jpg" alt="" />
            <p>Dr Alexa</p>
            <p>Surgeon</p>
          </div>
        </div>
      </div>

      <div id="speciality">
        <div class="head">
          <h1>Our Speciality</h1>
        </div>
        <div class="surgery">
          <div class="surgeryCard">
            <img src="s1.png" alt="" />
            <p>Succesfully Knee Surgery</p>
          </div>
          <div class="surgeryCard">
            <img src="s2.png" alt="" />
            <p>Succesfully Knee Surgery</p>
          </div>
          <div class="surgeryCard">
            <img src="s3.png" alt="" />
            <p>Succesfully Knee Surgery</p>
          </div>
        </div>
      </div>

      <div id="patient">
        <div class="head">
          <h1>Our Patient's Review</h1>
        </div>
        <div class="patients">
          <div class="patientCard">
            <img src="p1.png" alt="" />
            <img src="p2.png" alt="" />
          </div>
          <div class="patientCard">
            <img src="p3.jpg" alt="" />
            <img src="p4.jpg" alt="" />
          </div>
          <div class="patientCard">
            <img src="p5.jpg" alt="" />
            <img src="p6.jpg" alt="" />
          </div>
        </div>
      </div>

      <div id="contact">
        <div class="head">
          <h1>Patient Registration <span></span></h1>
        </div>
        <div class="contact">
          <h1>Registration Form</h1>
          <form action="" method="post">
            <input
              type="text"
              placeholder="Patient Full Name"
              name="fullname"
              required
            />

            <input
              type="number"
              placeholder="Enter Patient Age"
              name="age"
              required
            />
            <input type="email" placeholder="E-mail" name="email" required />

            <input
              type="number"
              placeholder="Contact Number"
              name="contact"
              required
            />
            <input type="text" placeholder="Address" name="address" required />

            <div class="gender">
              <legend>Gender:</legend>

              <label for="male">Male</label>
              <input
                type="radio"
                name="gender"
                id="male"
                value="male"
                checked
              />
              <label for="female">Female</label>
              <input type="radio" name="gender" id="female" value="female" />
              <label for="Other">Other</label>
              <input type="radio" name="gender" id="Other" value="Other" />
            </div>

            <label for="registration">Ragistration Date</label>
            <input type="date" name="registration" id="registration" required />

            <button id="connectBtn">Submit</button>
          </form>
        </div>
      </div>

      <div class="footer">
        <div class="text">
          <h3>About Us</h3>
          <p>24 Hour's</p>
          <p>Top Doctors</p>
          <p>Best Care</p>
          <p>Patient</p>
        </div>
        <div class="text">
          <h3>Speciality</h3>
          <p>Spin Surgery</p>
          <p>Knee Surgery</p>
          <p>Leg Surgery</p>
          <p>Tendon Surgery</p>
        </div>
        <div class="text">
          <h3>Best Teams</h3>
          <p>Doctor</p>
          <p>Nursing</p>
          <p>Staff</p>
          <p>Hospital</p>
        </div>
        <div class="text">
          <h3>Address</h3>
          <p>Near Gandhi Nagar</p>
          <p>LifeCare Care</p>
          <p>333-00222</p>
          <p>2222-4334</p>
        </div>
      </div>

      <div class="content">
        <button id="close">
          <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="contentDetail"></div>
      </div>
    </div>
    <!-- <script src="index.js"></script> -->
  </body>
</html>

<?php
@$fullname = $_POST['fullname'];
@$age = $_POST['age'];
@$contact = $_POST['contact'];
@$email = $_POST['email'];
@$address = $_POST['address'];
@$gender = $_POST['gender'];
@$date = $_POST['registration'];



$q = "insert into patient(fullname , age , contact , email , address, gender, registration) 
values('$fullname', '$age', '$contact', '$email', '$address', '$gender' , '$date')";

$r = mysqli_query($con,$q);
if(isset($r)){
  echo" inserted";
}
else{
  echo"not inserted";
}
  ?>
