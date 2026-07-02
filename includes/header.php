<?php
require_once __DIR__ . '/../config/site-data.php';
$currentPage = basename($_SERVER['SCRIPT_NAME']);
$pageTitle = isset($pageTitle) ? $pageTitle . ' | ' . $site['name'] : $site['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($site['name'] . ': ' . implode(', ', $site['titles'])) ?>">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<?php include __DIR__ . '/nav.php'; ?>
<main id="main">
