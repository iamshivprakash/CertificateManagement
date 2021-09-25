<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'includes/links.php'; ?>
  <title>Careers at EXAMission</title>
  </head>
 <body>
  <div class="container-fluid first-con" id="about">
<?php include 'includes/header.php'; ?>
<div class="first-con-content d-flex">
  <div class="left-col">
    <img src="images/EXAMissionLogo.png" class="logo img-fluid" alt="EXAMissionLogo">
    <h1 class="logo-text">EXAMission</h1>
  </div>
  <div class="vl"></div>
  <div class="right-col">
  <h1 class="about-title">We are EXAMission.</h1>
  <h4 class="aboutdesc">We are on a mission to redefine the way students <br>and parents choose their career options.</h4>
  <h4 class="mt-5 aboutdesc">Join us on this incredible journey!</h4>
  <h1 class="about-title">Let's Get Started?</h1>
  </div>
</div>
</div>
<!-- About US starts -->
<div class="container-fluid about">
<div class="row">
  <div class="col-md-5 col-sm-12 about-img">
  <img src="images/EXAMissionLogo.png" class="img-fluid" alt="EXAMissionLogo">
  </div>
  <div class="col-md-7 col-sm-12 mx-auto">
    <h1 class="heading">What We Do here ?</h1>
    <p class="desc">At EXAMission, we are a team of young and enthusiastic generation
       dedicated to make an impact on career selection procedure in India.
        We are engrossed in making our Organisation a nation-wide hit and
      the most-sought-for reference for students, parents and teachers
      across the country.</p>
      <h3 class="heading">Who we are ?</h3>
      <p class="desc">Informative portal to help students and parents; Find detailed Information
         on top university and competitive examination in India and abroad with help
          of our full-fledged search and filter mechanism based on your interest and
           field of study.</p>
  </div>
</div>
</div>
<div class="wrapper" id="team">

         <!-- write your content of this page within this  -->

    <h1 id="heading">Team Members</h1>
    <hr id="horizon">

    <div class="row team" >

      <?php require('includes/connection.php');
      $selectquery="select * from teammember";
      $query=mysqli_query($con,$selectquery);
      $res=mysqli_fetch_assoc($query);
      while($res=mysqli_fetch_assoc($query)){

          ?>

                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">

                 <div class="box">
                       <div class="card">
                         <div class="imgBx">
                            <img src="teammember/<?=$res["photo"] ?>" alt="images">
                         </div>
                         <div class="details">
                            <h2><strong><?=$res["name"] ?></strong><br><span><?=$res["designation"] ?></span></h2>
                           <div class="d-flex justify-content-around icons">
                              <div class="social"><a href="<?=$res["fb"] ?>"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></div>
                              <div class="social"><a href="<?=$res["twitter"] ?>"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></div>
                              <div class="social"><a href="<?=$res["insta"] ?>"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></div>
                              <div class="social"><a href="<?=$res["fb"] ?>"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a></div>
                            </div>
                          </div>
                       </div>

                  </div>

                </div>
                <?php
              }
              ?>

                <!-- <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">

                 <div class="box">
                       <div class="card">
                         <div class="imgBx">
                            <img src="images/duser.png" alt="images">
                         </div>
                         <div class="details">
                            <h2><strong>Members name</strong><br><span>Member Designation</span></h2>
                            <div class="d-flex justify-content-around icons">
                              <div class="social"><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></div>
                              <div class="social"><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></div>
                              <div class="social"><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></div>
                              <div class="social"><a href="#"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a></div>
                            </div>
                          </div>
                       </div>

                  </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">

                     <div class="box">
                           <div class="card">
                             <div class="imgBx">
                                <img src="images/duser.png" alt="images">
                             </div>
                             <div class="details">
                                <h2><strong>Members name</strong><br><span>Member Designation</span></h2>
                                <div class="d-flex justify-content-around icons">
                                  <div class="social"><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></div>
                                  <div class="social"><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></div>
                                  <div class="social"><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></div>
                                  <div class="social"><a href="#"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a></div>
                                </div>
                              </div>
                           </div>

                      </div>

                </div> -->

    </div>
</div>
<div class="container-fluid interns">
  <h5 class="subheading text-center">Join a Team with a Shared Dream</h5>
  <h1 class="text-center">OUR CONTRIBUTORS</h1>
  <div class="wrapper" id="wrapper">
           <!-- write your content of this page within this  -->
      <div class="row team" >

                  <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                   <div class="box">
                         <div class="card">
                           <div class="imgBx">
                              <img src="images/interns.png" alt="images">
                           </div>
                           <div class="details">
                              <h2><strong>Members name</strong><br><span>Member Designation</span></h2>
                             <div class="d-flex justify-content-around icons">
                                <div class="social"><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></div>
                                <div class="social"><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></div>
                                <div class="social"><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></div>
                                <div class="social"><a href="#"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a></div>
                              </div>
                            </div>
                         </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">

                   <div class="box">
                         <div class="card">
                           <div class="imgBx">
                              <img src="images/interns.png" alt="images">
                           </div>
                           <div class="details">
                              <h2><strong>Members name</strong><br><span>Member Designation</span></h2>
                              <div class="d-flex justify-content-around icons">
                                <div class="social"><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></div>
                                <div class="social"><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></div>
                                <div class="social"><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></div>
                                <div class="social"><a href="#"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a></div>
                              </div>
                            </div>
                         </div>

                    </div>

                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">

                       <div class="box">
                             <div class="card">
                               <div class="imgBx">
                                  <img src="images/interns.png" alt="images">
                               </div>
                               <div class="details">
                                  <h2><strong>Members name</strong><br><span>Member Designation</span></h2>
                                  <div class="d-flex justify-content-around icons">
                                    <div class="social"><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></div>
                                    <div class="social"><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></div>
                                    <div class="social"><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></div>
                                    <div class="social"><a href="#"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a></div>
                                  </div>
                                </div>
                             </div>

                        </div>

                  </div>

      </div>
  </div>
</div>
<!-- benifits section starts -->
<div class="container-fluid care" id="benifits">
  <div class="row">
    <div class="col-md-9 col-12 mx-auto">
      <h1 class="text-center">We Care for Our Interns</h1>
      <p class="fw-bold text-dark">At EXAMission, we make sure you and the people most important to you have the
         resources you need to thrive. Through our comprehensive benefits system,
          we offer you a wide range of benefits in areas including Guidence, Mentorship,
           Industry Ethics, community, and time away.</p>
      <p class="mt-3 text-dark">We recognize that working on one’s own terms gives them the freedom to work,
         innovate, and come up with breakthrough solutions. At EXAMission, you have the
       flexibility to work from own destination, speed and timing.</p>
  </div>
  </div>
  <div class="row">

  <div class="col-md-4 col-sm-12 cards">

      <div class="symbolic">
          <div class="symbolic-card">
              <div class="imgBox">
                <img src="images/guide.png" alt="Guidence">
              </div>
              <div class="contentBox">
                  <h3>Guidence</h3>
                  <p>Learn & Explore in the proper guidence of industry leaders...</p>

              </div>
          </div>

      </div>


  </div>

  <div class="col-md-4 col-sm-12 cards">

      <div class="symbolic">
          <div class="symbolic-card">
              <div class="imgBox">
                  <img src="images/mentor.png" alt="Mentorship">
              </div>
              <div class="contentBox">
                  <h3>Mentorship</h3>
                  <p>Get in touch with real life Mentors during internship & forever after...</p>

              </div>
          </div>

      </div>


  </div>

  <div class="col-md-4 col-sm-12 cards">

      <div class="symbolic">
          <div class="symbolic-card">
              <div class="imgBox">
                  <img src="images/knoeledge.jpg" alt="Knowledge">
              </div>
              <div class="contentBox">
                  <h3>Insustry knowledge</h3>
                  <p>Increase your industry skills and knowledge...</p>

              </div>
          </div>
      </div>
  </div>


  </div>
</div>
<!-- opportunities section starts -->
<div class="container-fluid interns" id="internships">
<div class="row">
  <div class="col-md-10 col-12 mx-auto">
    <h1 class="text-center">Opportunities at EXAMission</h1>
    <h5 class="subheading text-center">Find an Internship that suits you.</h5>
    <div class="row internship">


        <?php require('includes/connection.php');
        $selectquery="select * from internships";
        $query=mysqli_query($con,$selectquery);
        $res=mysqli_fetch_assoc($query);
        while($res=mysqli_fetch_assoc($query)){

            ?>
            <div class="col-md-4 col-12">
            <a class="card" href="openings.php?internship_id=<?=$res["id"] ?>">
            <span class="">
              <!-- <i class="fa fa-linkedin fa-3x ps-3"></i> -->

            </span>
          <div class="card-body">
          <h5 class="card-title"><?php echo $res["name"]; ?></h5>
          <hr style="width:20%; height:2px; margin:-3px 0 5px 0;">
          <strong class="color-green">Status:<?php echo $res["status"]; ?></strong>

          <p class="card-text">Duration: <?php echo $res["duration"];?></p>
          <p class="card-text">Experience: <?php echo $res["experience"];?></p>
          <p class="card-text">Type: <?php echo $res["type"];?></p>
          </div></a>
          </div>
          <?php
        }
        ?>



    </div>
</div>
</div>
</div>
<?php include'internshipform.php'; ?>
<?php
$f=fopen("internships/backend.txt","r");
// $f1=fopen("problem1.rtf","r");
while (!feof($f)) {
  // code...
  echo fgets($f);
  echo "<br/>";
}

 ?>
<?php include'../includes/footer.php'; ?>
 <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script type="text/javascript">
       $(function() {
         var navbar = $('.main-header');
         $(window).scroll(function () {
           if($(window).scrollTop() <=100){
             navbar.removeClass('navbar-scroll');
           }else{
             navbar.addClass('navbar-scroll');
           }
         });
       });
     </script>

</body>
</html>
