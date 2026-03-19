 <?php

require './config/db.php';

$col  = $_REQUEST['col']  ?? 'name';
$name = $_REQUEST['name'] ?? '';

/*
 Vulnerable column handling
*/
$col = '`' . str_replace('`', '``', $col) . '`';

$stmt = $pdo->prepare("SELECT $col FROM fruit WHERE name = ?");

$stmt->execute([$name]);

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($data);
echo "</pre>";