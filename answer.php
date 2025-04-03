<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of Sphere, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Benjamin Abebe" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Volume of Sphere, with PHP</title>
  <!-- Include Material Design Lite (MDL) -->
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of Sphere, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./volume-of-sphere.png" alt="pyramid" />
      </div>
      <div class="page-content">
        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
          // Get input values and convert to float
          $R = ($_GET["R"]) ?  $_GET["R"] : 0;

          // Calculate the volume of the right rectangular pyramid
          $volume = 4 / 3 * pi() * $R ** 3;
          // rounding the $volume into 2 decimal 
          $volume = round($volume, 2);
        }
        ?>
        <?php if ($volume) echo "<h3>If a sphere has a radius of $R mm then the Volume is: $volume mm³</h3>"; ?>
        <!-- Button to submit the form -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="button" href="index.php">
          Return
        </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>