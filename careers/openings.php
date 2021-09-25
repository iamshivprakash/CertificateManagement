<?php include 'includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'includes/links.php'; ?>
    <link rel="stylesheet" href="css/internship_openings.css">
    <title>EXAMission Internship</title>
  </head>
  <body>
    <?php
    include 'includes/header.php';
    $internship_id=$_GET['internship_id'];
    $selectquery="select * from internships Where id=$internship_id";
    $query=mysqli_query($con,$selectquery);
    $res=mysqli_fetch_array($query);
     ?>
    <div class="container-fluid EM">
      <div class="row header">
        <div class="col-md-9">
          <h1><?=$res["name"] ?></h1>
          <span>Internship ID:  <?=$res["id"] ?>   |   EXAMission Summer Internships</span>
        </div>
        <div class="col-md-3 apply">
          <button type="button" class="btn btn-lg btn-warning" name="apply">Apply Now</button>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h4>DESCRIPTION</h4>
          <?php
            // echo $path='includes/'.$res["description"];
            $f=fopen('internships/'.$res["description"],"r");
            // $f1=fopen("problem1.rtf","r");
            while (!feof($f)) {
              // code...
              echo fgets($f);
              echo "<br/>";
            }
             ?>
        </div>
        <div class="col-md-3">
          <h4>Intrainship Details</h4>
          <hr>
          <h5>Type: <?=$res["type"] ?></h5>
          <hr>
          <h5>Stippend: <?=$res["stippend"] ?></h5>
          <hr>
          <h5>Experience: <?=$res["experience"] ?></h5>
          <hr>
          <h5>Duration: <?=$res["duration"] ?></h5>
          <hr>
          <div class="related">
            <br>
            <br>
            <h4>Related Internships</h4>
            <hr>
            <?php
            $rselectquery="select * from internships";
            $rquery=mysqli_query($con,$rselectquery);
            $rres=mysqli_fetch_assoc($rquery);
            while ($rres=mysqli_fetch_assoc($rquery)) {
              if ($rres["id"]==$internship_id) {
                continue;
              }
                ?>
                <a href="#">
                  <h6><?=$rres["name"] ?></h6>
                  <?php echo "<br/>"; ?>
                </a>
                <?php
            }
             ?>
          </div>
        </div>
      </div>
    </div>
<?php
include '../includes/footer.php';
include '../includes/scripts.php';
?>
</body>
</html>
