<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php $title = "Mi página web";?>

      <?php if (basename($_SERVER['PHP_SELF'])=="index.php"){?>

          <link rel="stylesheet" href="style-home.css">

      <?php } else {?>

          <link rel="stylesheet" href="style.css">

      <?php };?>


    <title><?php print $title;?></title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Menú</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample05">

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="segunda.php">Segunda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tercera.php">Tercera</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="cuarta.php">Cuarta</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="quinta.php">Quinta</a>
      </li>
    </ul>
    
  </div>
</nav>