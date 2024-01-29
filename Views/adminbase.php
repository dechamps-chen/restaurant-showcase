<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link href="./output.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>

        <main>
            <?php echo $content ?>
        </main>

        <footer class="text-center">
            <p>© XBL 2024</p>
        </footer>
    </div>
</body>

</html>

<?php
