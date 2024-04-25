<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=info', 'mohammed', '1429015');
$stmt = $pdo->query("SELECT * FROM image");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<script>console.log('Debug Objects: " . $rows[1]['img_src'] . "' );</script>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.x {
    width: 80%;
    
}
    </style>
</head>
<body>
    <img class="x" src="<?php echo $rows[1]['img_src'] ?>">
</body>
</html>

