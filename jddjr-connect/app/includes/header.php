<?php
$activePage = $activePage ?? '';
$pageTitle = $pageTitle ?? 'JDDJR Connect';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#10182b"><title><?= htmlspecialchars($pageTitle) ?> | JDDJR Connect</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header"><div class="header-inner"><a href="index.php" class="brand" aria-label="JDDJR Connect home"><span class="brand-mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M7 3.75h7l4 4V20a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4.75a1 1 0 0 1 1-1Z" stroke="currentColor" stroke-width="1.8"/><path d="M14 4v4h4M9 12h6M9 15h6M9 18h4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg></span><span><strong>JDDJR</strong> <em>Connect</em></span></a>
<nav class="main-nav" aria-label="Main navigation"><a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="index.php">Home</a><a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="about.php">About</a><a class="<?= $activePage === 'services' ? 'active' : '' ?>" href="services.php">Services</a><a class="<?= $activePage === 'contact' ? 'active' : '' ?>" href="contact.php">Contact</a></nav>
<div class="header-actions"><a class="signin" href="login.php">Sign In</a><a class="btn btn-primary header-cta" href="register.php">Get Started</a><button class="menu-toggle" type="button" aria-label="Toggle menu" aria-expanded="false"><span></span><span></span><span></span></button></div></div></header>
