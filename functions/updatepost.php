<?php if (isset($_POST['parent']) && isset($_POST['name']) && isset($_POST['text'])) {
    try {
        $query = "UPDATE `posts` SET `title`=:title,`text`=:text,`parent_id`=:parent_id WHERE id=:id";
        $params = [
            ':parent_id' => $_POST['parent'],
            ':title' => $_POST['name'],
            ':text' => $_POST['text'],
            ':id' => $_POST['id'],
        ];
        $stmt = $conn->prepare($query);
        $stmt->execute($params);
    } catch (PDOException $e) {
        echo "Ошибка обновления: " . $e->getMessage();
    }
}
