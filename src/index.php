<html>
  <body>
    <center><h1>
    <?php 
      echo "Welcome to my demo v1.0!";
    ?>
    </h1></center>
    
    <center>
      <button onclick="handleButtonClick()" style="
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 20px 2px;
        cursor: pointer;
        border-radius: 4px;
      ">Click Me!</button>
    </center>
    
    <script>
      function handleButtonClick() {
        alert('Hello! You clicked the button on the home page!');
      }
    </script>
    
    <h2>Request Information</h2>
    <p/>
    <?php
      foreach (getallheaders() as $name => $value) { echo "<li>Headers['".$name."']: $value";}
    ?>
  </body>
</html>
