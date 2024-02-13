<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link href="http://localhost/applications/projet-xbl/public/output.css" type="text/css" rel="stylesheet">
    <script src="http://localhost/applications/projet-xbl/public/error.js"></script>
</head>

<body>
    <div class="container mx-auto">
        <main class="relative">
            <div class="hidden flex m-auto left-0 right-0 absolute bg-red-100 p-5 w-full sm:w-1/2" id="errorMessage"></div>
            <?php echo $content ?>
        </main>

        <footer class="text-center">
            <p>© XBL 2024</p>
        </footer>
    </div>
</body>

</html>

<?php
