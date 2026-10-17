<?php
$pageTitle = $pageTitle ?? 'Home';
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> | Stillword</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<header class="site-header">
    <a class="brand" href="index.php">
        <span class="brand-icon">✦</span>
        <span>stillword</span>
    </a>

    <nav class="main-nav" aria-label="Main navigation">
        <a href="index.php"
           class="<?= $currentPage === 'index.php' ? 'active' : '' ?>">
            Home
        </a>

        <a href="books.php"
           class="<?= $currentPage === 'books.php' ? 'active' : '' ?>">
            Read
        </a>

        <a href="search.php"
           class="<?= $currentPage === 'search.php' ? 'active' : '' ?>">
            Search
        </a>

        <a href="saved.php"
           class="<?= $currentPage === 'saved.php' ? 'active' : '' ?>">
            Saved
        </a>

        <a href="journal.php"
           class="<?= $currentPage === 'journal.php' ? 'active' : '' ?>">
            Journal
        </a>
    </nav>
</header>

<div class="page-container">
