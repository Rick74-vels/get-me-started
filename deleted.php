<?php
//delete.php?id=2
if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location: select.php');
}
$db = new mysqli(
    'localhost',
    'root',
    'password',
    'phpt'
);
$sql = "DELETE FROM tip WHERE id=$id";
$db->query($sql);
echo '<p>User deleted.</p>';
$db->close();
?>
