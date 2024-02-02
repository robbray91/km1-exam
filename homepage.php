<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for fonts and colors -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }
        h1 {
            color: #007bff;
            font-size: 24px;
        }
        .chapter-list {
            list-style-type: none;
            padding: 0;
        }
        .chapter-list li {
            margin-bottom: 10px;
        }
        .chapter-list a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
        }
        .chapter-list a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>

<!-- Container for Content -->
<div class="container mt-4">
    <!-- Homepage Content -->
    <h1 class="mb-4">Chapters</h1>
    <ul class="chapter-list">
        <!-- Links to chapters 1 to 14 -->
        <?php for ($i = 1; $i <= 14; $i++) { ?>
            <li><a href="chap-<?php echo $i; ?>.php">Chapter <?php echo $i; ?></a></li>
        <?php } ?>
        <li><a href="glossary.php">Glossary of Terms</a></li>
    </ul>
</div>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
