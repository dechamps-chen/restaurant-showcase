<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link href="http://localhost/applications/projet-xbl/public/output.css" type="text/css" rel="stylesheet">
</head>

<body class="h-full relative">
    <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8 relative">
        <?php echo $content ?>
    </main>

    <footer class="text-center bottom-0 left-0 right-0 absolute">
        <p>© XBL 2024</p>
    </footer>
</body>

</html>

<?php
