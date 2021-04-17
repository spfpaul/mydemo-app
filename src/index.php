<html>
  <body>
    <center><h1>
    <?php 
      echo "Welcome to my demo v3!";
    ?>
    </h1></center>
    <h2>Request Information</h2>
    <p/>
    <?php
      foreach (getallheaders() as $name => $value) { echo "<li>Headers['".$name."']: $value";}
    ?>
  </body>
</html>
