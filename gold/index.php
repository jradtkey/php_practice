<?php

  session_start();

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Game</title>
    <style media="screen">
      .box{
        outline: 1px solid grey;
        height: 200px;
        text-align: center;
      }
      label{
        font-size: 20px;
      }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">

      <?php echo "<h3>Your gold: ".$_SESSION['yourGold']."</h3><br>" ?>

      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3 box">
          <h2>Farm</h2>
          <p>(earns 10-20 golds)</p>
          <form action="process.php" method="post">
            <input type="hidden" name="building" value="farm" />
            <input type="submit" value="Find Gold!"/>
          </form>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 box">
          <h2>Cave</h2>
          <p>(earns 5-10 golds)</p>
          <form action="process.php" method="post">
            <input type="hidden" name="building" value="cave" />
            <input type="submit" value="Find Gold!"/>
          </form>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 box">
          <h2>House</h2>
          <p>(earns 2-5 golds)</p>
          <form action="process.php" method="post">
            <input type="hidden" name="building" value="house" />
            <input type="submit" value="Find Gold!"/>
          </form>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 box">
          <h2>Casino</h2>
          <p>(earns/takes 0-50 golds)</p>
          <form action="process.php" method="post">
            <input type="hidden" name="building" value="casino" />
            <input type="submit" value="Find Gold!"/>
          </form>
        </div>
      </div><br>

      <div class="form-group">
        <label for="activity">Activites:</label>
        <textarea class="form-control" rows="8" id="activity">

          <?php
            foreach ($_SESSION['activities'] as $value) {
              echo $value;
              echo "<br>";
            }
           ?>

        </textarea>
      </div>

    </div>

  </body>
</html>
