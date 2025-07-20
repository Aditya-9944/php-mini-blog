<?php
// admin/add_post.php
include '../db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    if (!empty($title) && !empty($content)) {
        $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
        if (mysqli_query($conn, $sql)) {
            $message = "Post added successfully!";
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    } else {
        $message = "Title and content cannot be empty.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Post</title>
</head>
<body>
    <h2>Add New Blog Post</h2>
    
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Content:</label><br>
        <textarea name="content" rows="10" cols="50" required></textarea><br><br>

        <button type="submit">Publish Post</button>
    </form>

    <br>
    <a href="../index.php">← Go to Homepage</a>
</body>
</html>
