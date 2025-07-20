<?php
// admin/index.php
include '../db.php';

$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        th { background-color: #f4f4f4; }
        a { text-decoration: none; margin-right: 10px; }
    </style>
</head>
<body>

<h2>Admin Dashboard</h2>
<a href="add_post.php">➕ Add New Post</a>
<br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Created At</th>
        <th>Actions</th>
    </tr>
    <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($post = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $post['id']; ?></td>
                <td><?php echo htmlspecialchars($post['title']); ?></td>
                <td><?php echo $post['created_at']; ?></td>
                <td>
                    <a href="edit_post.php?id=<?php echo $post['id']; ?>">✏️ Edit</a>
                    <a href="delete_post.php?id=<?php echo $post['id']; ?>" onclick="return confirm('Delete this post?')">🗑️ Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr><td colspan="4">No posts found.</td></tr>
    <?php endif; ?>
</table>

<br>
<a href="../index.php">← Go to Homepage</a>

</body>
</html>
