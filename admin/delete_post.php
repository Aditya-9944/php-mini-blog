<?php
// admin/delete_post.php
include '../db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Delete query
    $sql = "DELETE FROM posts WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Post deleted successfully. <a href='index.php'>Go Back</a>";
    } else {
        echo "Error deleting post: " . mysqli_error($conn);
    }
} else {
    echo "No post ID provided.";
}
?>
