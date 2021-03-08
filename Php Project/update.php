<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Coding World By Arun Kumar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


<!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top head">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">CODING-WORLD</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>

<li class="drop-down  get-started-btn scrollto"><a href="login.php">Log In</a>
            <ul>
              <li><a href="register.php">Register</a></li>
              <li><a href="display.php">Show sign data</a></li>
              <li><a href="display.php">Update</a></li>
              <li><a href="display.php">Delete</a></li>
            </ul>
          </li>

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

 

<!--update section start -->

<section>
     <div class="text-center my-5">
    <h1 class="display-4">Updation Page</h1>
    <hr class="w-25 mx-auto"/>
   </div>
<div class="container">
  <div class="row">
    <div class="col-11 col-md-8 col-lg-8 col-xl-8 col-xxl-8 mx-auto">
      
      
<form action="" method="POST" enctype="multipart/form-data" class="row g-3">

<?php 
error_reporting(0);

   include 'connection.php';
   $ids = $_GET['id'];
   $selectquery ="select * from crudtb where id={$ids}";
   $firequery = mysqli_query($con,$selectquery);
   $arraydata = mysqli_fetch_array($firequery);

if(isset($_POST['submit'])){
   
   $idupdate = $_GET['id'];

   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $rediobtn = $_POST['rediobtn'];
   $hobby =implode(',',$_POST['hobby']);
   $address = $_POST['address'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $zip = $_POST['zip'];
   $filename = $_FILES["uploadefile"]["name"];
   $tempname = $_FILES["uploadefile"]["tmp_name"];
   $folder = "data/".$filename;
   move_uploaded_file($tempname, $folder);

   $updatequery = "Update crudtb set id=$ids, first_name='$fname',last_name='$lname', email='$email', password='$password',address='$address',city='$city',state='$state',zip='$zip' where id=$idupdate ";

   $results = mysqli_query($con,$updatequery);

   if($results){
    
    header('location:display.php');

       // <script>
       // alert("Data Successfully updated in table PlZ Press the ok Button");
       // </script>

             }
    
   else{
        ?>
             <script>
             alert("data not updated in table");
            </script>
<?php 
 }

}

 ?>


  <div class="col-md-6">
    <label for="First name" class="form-label">First name</label>
    <input type="text" name="fname" value="<?php echo $arraydata['first_name'];?>" class="form-control" placeholder="" aria-label="First name">
  </div>
  <div class="col-md-6">
    <label for="Last name" class="form-label">Last name</label>
    <input type="text" name="lname" value="<?php echo $arraydata['last_name'];?>" class="form-control" placeholder="" aria-label="Last name">
  </div>

<div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email"  name="email" value="<?php echo $arraydata['email'];?>" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password"   name="password" value="<?php echo $arraydata['password'];?>" class="form-control" id="inputPassword4">
  </div>


<div class="col-md-6 pt-0">
<label class="pr-2">Gender</label>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rediobtn" id="inlineRadio1" value="male">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rediobtn" id="inlineRadio2" value="female">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
</div>

<div class="col-md-6 pt-0">
<label class="pr-2">Hobby</label>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="hobby[]" id="inlineCheckbox1" value="Coding">
  <label class="form-check-label" for="inlineCheckbox1">Coding</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="hobby[]" id="inlineCheckbox1" value="Gaming">
  <label class="form-check-label" for="inlineCheckbox1">Gaming</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="hobby[]" id="inlineCheckbox2" value="Singing">
  <label class="form-check-label" for="inlineCheckbox2">Singing</label>
</div>
</div>




  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text"  name="address" value="<?php echo $arraydata['address'];?>" class="form-control" id="inputAddress" placeholder="">
  </div>
  

  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text"  name="city" value="<?php echo $arraydata['city'];?>" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select name="state" id="inputState" class="form-select">

  <option selected value="<?php echo $arraydata['state'];?>">Choose State </option> 
  <option value="Uttar Pradesh">Uttar Pradesh</option>
  <option value="Madhy Pradesh">Madhy Pradesh</option>
  <option value="Vihar">Vihar</option>
 
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text"  name="zip"  value="<?php echo $arraydata['zip'];?>" class="form-control" id="inputZip">
  </div>

<div class="form-file">
  <input type="file" class="form-file-input" name="uploadefile" value="" id="customFile">
  <label class="form-file-label" for="customFile">
    <span class="form-file-text">Choose file...</span>
    <span class="form-file-button">Browse</span>
  </label>
</div>

  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">Update Now</button>
  </div>

</form>

    </div>
  </div>
</div>
</section>

<hr/>

<!-- update section stop -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/skills.jpg" class="img-fluid aboutimg" alt="">
           </div>

           <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
            <p>
             My Name Arun Kumar, I Am Web Designer And Web Developer Making Awesome Website Design And Develope Using is best Coding And also provide Seo Services .
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>PHP Of Best CMS Wordpress 5.5 Used</li>
              <li><i class="ri-check-double-line"></i>PHP Of Best CMS Laravel 8.0 Used</li>
              <li><i class="ri-check-double-line"></i>CORE PHP 7.4</li>
               <li><i class="ri-check-double-line"></i>HTML-5</li>
                <li><i class="ri-check-double-line"></i>CSS-3</li>
                 <li><i class="ri-check-double-line"></i>BOOTSRAP-5</li>
                 <li><i class="ri-check-double-line"></i>JAVASCRIPT</li>
                 <li><i class="ri-check-double-line"></i>MYSQL</li>
            </ul>
          </div>
         
        </div>

      </div>
    </section><!-- End About Us Section -->
     
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Awesome web Development for your business is simple once you check in with codecreater technologies. Yes, it’s true!! we can Developing your imaginary website.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fab fa-codepen"></i></div>
              <h4><a href="">Web Designer</a></h4>
              <p>Digital Product UI And UX, Design Development.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-laptop-code"></i></div>
              <h4><a href="">Web Developer</a></h4>
              <p>Awesome Custom web development for your business.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="far fa-file-code"></i></div>
              <h4><a href="">Laravel Developer</a></h4>
              <p>Laravel development is currently the top choice for PHP Framework.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Wordpress Developer</a></h4>
              <p>WordPress development is currently the top choice for PHP CMS.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

     <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/skills.jpg" class="img-fluid aboutimg" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Web Developer Skills</h3>
            <p class="font-italic">
            Getting Awesome custom web Development for your business is simple once you check in with codecreater technologies. Yes, it’s true!! we can Developing your imaginary website.</p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">WORDPRESS<i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">HTML<i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS<i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">PHP<i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Get Free consulting ?</h3>
            <p>Find the Perfect Solution for Your Business.Our Optimization ,Grow And Boosts Your Website Traffic With Us.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contact">Contact Today</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>My Awesome Project Please Visit This</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
           <li data-filter=".filter-web">Web</li>
          <li data-filter=".filter-web">App</li>
          <!-- <li data-filter=".filter-web">Card</li> -->
         
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <!--   <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
 -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Website 1</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-4.png" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="http://codecreater.in/" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
<!-- 
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
 -->
          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
 -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Website 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.png" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="http://shop.codecreater.in/" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        <!--   <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
 -->
         <!--  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
 -->
          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
 -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Website 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-4.png" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="http://codecreater.in/" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Meet the My Awesome Team” popular among web development and other amazing creativity.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Arun Kumar</h4>
                <span>Web Developer</span>
                <p></p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-2.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Virendr veer</h4>
                <span>Wordpress Developer</span>
               
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dinesh Saroj</h4>
                <span>Laravel Developer</span>
               <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Abhishek Krishna</h4>
                <span>Laravel Developer</span>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Best Affordable Price Web Development IT Company</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Basic Plan</h3>
              <h4><sup>RS</sup>1499<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i>.com Domain</li>
                <li><i class="bx bx-check"></i> 5 Page Design</li>
                <li><i class="bx bx-check"></i> 2 GB hosting</li>
                <li><i class="bx bx-check"></i> 5 Email Account</li>
                <li><i class="bx bx-check"></i>  24/7 Live Support</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>RS</sup>1999<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> .com Domain</li>
                <li><i class="bx bx-check"></i> 10-15 Page Design</li>
                <li><i class="bx bx-check"></i> 5 GB hosting</li>
                <li><i class="bx bx-check"></i> 15 Email Account</li>
                <li><i class="bx bx-check"></i>  24/7 Live Support</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>RS</sup>2999<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> .com Domain</li>
                <li><i class="bx bx-check"></i> 15-20 Page Design</li>
                <li><i class="bx bx-check"></i> 10 GB hosting</li>
                <li><i class="bx bx-check"></i> 35 Email Account</li>
                <li><i class="bx bx-check"></i>  24/7 Live Support</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Get Free consulting ? Find the Perfect Solution for Your Business.Our Optimization ,Grow And Boosts Your Website Traffic With Us.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>JMD Megapolis,Sohna Road,Gurugram.</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>arunaarya@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91 7080840096</p>
              </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.9839384876086!2d77.03637691440196!3d28.419741500432117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d229e71ef44dd%3A0x9931b80f30d32dd3!2sJMD%20Megapolis!5e0!3m2!1sen!2sin!4v1605552793267!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>

             </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Join Our Newsletter And Take All Notification</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>CODING-WORLD</h4>
            <p>
              JMD Megapolis,<br>
             Sohna Road,<br>
             Gurugram Harayana.<br><br>
              <strong>Phone:</strong>+91 7080840096<br>
              <strong>Email:</strong> arunaarya@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Wordpress Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Laravel Development</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Our Social Networks,Please Visit All My Social Network And check the my services.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
         <strong><span>&copy; Copyright . All Rights Reserved</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="#">Arun Kumar</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>