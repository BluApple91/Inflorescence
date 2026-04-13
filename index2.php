<?php include 'top.php'; ?>

<?php
$conn = new mysqli(
  "host",
  "database",
  "database_password",
  "database_name"
);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$limit = 10;
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$totalResult = $conn->query("SELECT COUNT(*) AS total FROM updates");
$totalRow = $totalResult->fetch_assoc();
$totalPages = ceil($totalRow['total'] / $limit);

$sql = "SELECT * FROM updates ORDER BY post_id DESC LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

echo "Updates<br><br>";

while ($row = $result->fetch_assoc()) {
  echo "<div class='content'>
        {$row['message']}<br>
        #{$row['post_id']} {$row['name']} {$row['datetime']}
        </div><br>";
}
?>

<!-- PAGE NUMBERS -->
<div class="pagination">
<?php
for ($i = 1; $i <= $totalPages; $i++) {
  if ($i == $page) {
    echo "$i";
  } else {
    echo "<a href='?page=$i'>$i</a> ";
  }
}
?>
</div>
<?php
require 'db.php';

$pdo->query("UPDATE counter SET visits = visits + 1 WHERE id = 1");

$stmt = $pdo->query("SELECT visits FROM counter WHERE id = 1");
$visits = $stmt->fetchColumn();
?>

<p>Visits: <?= $visits ?></p>
<?php
$conn->close();
include 'bottom.php';
?>
