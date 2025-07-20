<?php
// post.php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $post = mysqli_fetch_assoc($result);
    } else {
        echo "Post not found!";
        exit;
    }
} else {
    echo "Invalid request!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $post['title']; ?></title>
</head>
<body>
    <h1><?php echo $post['title']; ?></h1>
    <p><?php echo nl2br($post['content']); ?></p>
    <a href="index.php">← Go Back</a>
</body>
</html>
