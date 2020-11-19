<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home page</title>

  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="icofont.min.css" rel="stylesheet">
  <link href="boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="main.css" />
  

  <link href="style.css" rel="stylesheet">

</head>

<body>
  <!--trying but not working -->
  <!--
  <?php
  if(isset($_POST['create'])){
    $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Contact = $_POST['contact'];
  $Gender = $_POST['Gender'];
  $address = $_POST['address'];
  $issue = $_POST['issue'];

  $sql = "INSERT INTO details(Name, Email, Contact, Gender, address, issue) values(?, ?, ?, ?, ?, ?)";
  $stmtinsert = $db->prepare($sql);
  $result = $stmtinsert->([$name, $Email, $Contact, $Gender, $address, $issue]);
  if($result)
  {
    echo "successfully saved";
  }
  else
  {
    echo "There were some wrong in data";
  }
}
  ?>-->

  <header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="index.html">lost and found</a></h1>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li><a href="home.html" class="active">Home</a></li>
              <li class="drop-down"><a href="about.php">About us</a>
              	  <ul>                
                  <li><a href="#">Our team</a></li>
                  <li><a href="#">our purpose</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="#services">our work</a>
                <ul>
                  <li class="drop-down"><a href="#services">Counselling</a>
                  <ul>                
                  <li><a href="#">personal</a></li>
                  <li><a href="#">group</a></li>
                  <li><a href="#">online</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="#services">workshop</a>
                  <ul>                
                  <li><a href="#">personal developement</a></li>
                  <li><a href="#">relationship</a></li>
                  <li><a href="#">parenting</a></li>
                </ul>
              </li>
            </ul>
            </li>
              <li class="drop-down"><a href="#portfolio">Resistration</a>
              	  <ul>
                  <li><a href="#">counselling registraion</a></li>                 
                  <li><a href="#">workshop registration</a></li> 
                </ul>
              </li>
              <li><a href="#contact">Contact us</a></li>


            </ul>
          </nav>
        </div>
      </div>

    </div>
  </header>

  <main id="main">

   
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="Home.php">Home</a></li>
          <li><a href="about.php">About us</a></li>
        </ol>

      </div>
    </section>
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
        <h1><b><i><u>
        <font face = "Times New Roman">With you</font></u></i></b></h1>
        </div>
        <div>
          <font size="10px" color="white">This is the page of sharing</font>
          <h2>you found here members who exited to listening you</h2>
        
        </div>
      </div>
    </div>
  </section>
  </main>

      <footer id="footer">
        <div class="inner">

          <h2>Register your details</h2>

          <form action="#" method="post">

            <div class="field half first">
              <label for="Name">Name</label>
              <input name="name" id="name" type="text" placeholder="Name">
            </div>
            <div class="field half">
              <label for="Email">Email</label>
              <input name="email" id="email" type="email" placeholder="Email">
            </div>
            <div class="field half first">
              <label for="Contact">contact</label>
              <input name="name" id="contack_no" type="text" placeholder="enter number here">
            </div>
            <div class="field half ">
              <label for="Gender">choose your gender</label>
              <input name="gender" id="Male" type="radio">
              <label for="male">Male</label>
              <input name="gender" id="Female" type="radio">
              <label for="male">Female</label>
              <input name="gender" id="Other" type="radio">
              <label for="male">Other</label>

            </div>
               <div class="field">
              <label for="address">where to meet</label>
              <textarea name="Address" id="Address" placeholder="Your Address plz"></textarea>
            </div>
            <div class="field">
              <label for="isse">share whats in your mind</label>
              <textarea name="message" id="message" rows="3" placeholder="give the basic idea or topic of problem"></textarea>
            </div>
            <ul class="actions">
              <li><input value="Send Message" class="button alt" type="submit"></li>
            </ul>
          </form>

       <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="credits">
        Designed by rutuja bhagat
      </div>
    </div>
        </div>
      </footer>

  <script src="bootstrap.bundle.min.js"></script>
        <script src="jquery.min.js"></script>
      <script src="jquery.scrolly.min.js"></script>
      <script src="jquery.scrollex.min.js"></script>
      <script src="skel.min.js"></script>
      <script src="util.js"></script>
      <script src="main.js"></script>

</body>
</html>