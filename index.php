<?php if (isset($_COOKIE['PHPSESSID'])) {
  session_start();
} ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
  <?php include 'assets/header.php'; ?>
  <div class="container">
    <div class="row">
      <h1 class="centertext"> Тестовое задание на вакансию Web программиста (РНР-разработчика) </h1>
    </div>
    <div class="row">
      <h2 class="centertext"> Ноздрюхин Максим Александрович </h2>
    </div>
    <?php if (empty($_SESSION['auth'])) { ?>
      <div class="row">
        <div class="col-md-6">
          <a href="login.php" class="btn btnw btn-dark">Войти</a>
        </div>
        <div class="col-md-6">
          <a href="register.php" class="btn btnw btn-dark">Зарегестрироваться</a>
        </div>
      </div>
    <?php } ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>