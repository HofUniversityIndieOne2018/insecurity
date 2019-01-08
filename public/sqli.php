<?php
use Doctrine\DBAL\DriverManager;
require_once '../vendor/autoload.php';

$connection = DriverManager::getConnection([
    'url' => 'mysql://db:db@db/db'
]);

if (empty($_GET)) {
    header('Location: ?id=1');
    exit;
}

$contentId = $_GET['id'] ?? 1;
$statement = $connection->query($q="
  SELECT header,bodytext FROM tt_content
  WHERE uid='$contentId'
");
$content = $statement->fetch();


if (empty($content)) {
    die('No content found');
}

echo <<< END
    <div>
        <h1>{$content['header']}</h1>
        <p>{$content['bodytext']}</p>
    </div>
END;
