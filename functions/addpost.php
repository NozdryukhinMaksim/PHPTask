<?php 
//Запись в БД
if (isset($_POST['parent']) && isset($_POST['name'])) {
    try {
        $query = "INSERT INTO `posts`(`parent_id`, `title`, `text`) VALUES (:parent_id, :title, :text)";
        $params = [
            ':parent_id' => $_POST['parent'],
            ':title' => $_POST['name'],
            ':text' => $_POST['text']
        ];
        $stmt = $conn->prepare($query);
        $stmt->execute($params);
    } catch (PDOException $e) {
        echo "Ошибка записи: " . $e->getMessage();
    }
} else {
}
