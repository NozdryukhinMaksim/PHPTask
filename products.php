<?php if (isset($_COOKIE['PHPSESSID'])) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require 'functions/bdconfig.php'; ?>
    <?php require 'functions/posts.php';
    require 'functions/updatepost.php';
    require 'functions/deletepost.php';
    $post = getPost();
    $posts = getPosts();
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <?php include 'assets/header.php'; ?>

    <?php if ($_SESSION['admin'] == 1) { ?>
        <div class="container">
            <div class="row">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="Parent">Родитель</label>
                        <select class="form-select" name="parent" id="Parent">
                            <option selected>Выберите родительскую категорию</option>
                            <?php foreach ($posts as $pos) {
                                $id = $pos['id'];
                                $name = $pos['title'];
                            ?>
                                <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="InputTitle">Название</label>
                        <input name="name" type="text" class="form-control" id="InputTitle" placeholder="Название" value="<?php echo $post['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="InputText">Описание</label>
                        <textarea rows="15" name="text" type="text" class="form-control" id="InputText" placeholder="Описание"><?php echo $post['text']; ?></textarea>
                    </div>
                    <input style="display:none" name="id" type="text" class="hide" id="id" value="<?php echo $post['id']; ?>">
                    <button type="submit" class="btn btn-primary">Обновить</button>

                </form>
            </div>
            <div class="row">
                <form method="POST" action="">
                    <input style="display:none" name="id" type="text" class="hide" id="id" value="<?php echo $post['id']; ?>">
                    <button type="submit" class="btn btn-danger">Удалить эту и дочерние записи</button>
                    <div class="form-check">
                        <input name="delete" type="checkbox" class="form-check-input" id="delete">
                        <label class="form-check-label" for="delete">Отметьте этот чекбокс, чтобы удалить запись</label>
                    </div>

                </form>
            </div>
        </div>
    <?php } else { ?>
        <div class="container">
            <div class="row">
                <h1 class="centertext"> <?php echo $post['title']; ?> </h1>
            </div>
            <div class="row">
                <p class="centertext"> <?php echo $post['text']; ?> </p>
            </div>
        <?php } ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>