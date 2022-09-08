<?php if (isset($_COOKIE['PHPSESSID'])) {
  session_start();
} ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <?php require 'functions/bdconfig.php'; ?>
  <?php require 'functions/addpost.php'; ?>
  <?php require 'functions/posts.php';
  $posts = getPosts();
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
  <?php include 'assets/header.php'; ?>
  <div class="container">
    <?php if ($_SESSION['admin'] == 1) { ?>
      <form method="POST" action="">
        <div class="form-group">
          <label for="Parent">Родитель</label>
          <select class="form-select" name="parent" id="Parent">
            <option selected value="0">Родительская категория</option>
            <?php foreach ($posts as $post) {
              $id = $post['id'];
              $name = $post['title'];
            ?>
              <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="InputName">Название</label>
          <input name="name" type="text" class="form-control" id="InputName" placeholder="Название">
        </div>
        <div class="form-group">
          <label for="InputText">Текст</label>
          <textarea rows="15" name="text" type="text" class="form-control" id="InputText" placeholder="Текст"></textarea>
        </div>
        <br />
        <button type="submit" class="btn btn-primary">Опубликовать</button>
      </form>
    <?php } else {
      echo 'Вы - не админ';
    } ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>