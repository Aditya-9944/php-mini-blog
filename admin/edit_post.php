<?php
// admin/edit_post.php
include '../db.php';

$message = '';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Fetch post to edit
    $sql = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) === 1) {
        $post = mysqli_fetch_assoc($result);
    } else {
        die("Post not found!");
    }
} else {
    die("No post ID provided.");
}

// Update post
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    $update_sql = "UPDATE posts SET title='$title', content='$content' WHERE id=$id";

    if (mysqli_query($conn, $update_sql)) {
        $message = "Post updated successfully!";
        // Refresh data
        $post['title'] = $title;
        $post['content'] = $content;
    } else {
        $message = "Update failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h2>Edit Blog Post</h2>

    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Title:</label><br>
        <input type="text" name="title" value="<?php echo htmlspecialchars($post['title']); ?>" required><br><br>

        <label>Content:</label><br>
        <textarea name="content" rows="10" cols="50" required><?php echo htmlspecialchars($post['content']); ?></textarea><br><br>

        <button type="submit">Update Post</button>
    </form>

    <br>
    <a href="../index.php">← Go to Homepage</a>
</body>
</html>
