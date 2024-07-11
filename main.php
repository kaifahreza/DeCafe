<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaiCafe</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/icon/font/bootstrap-icons.min.css">
</head>
<body>

    <!-- Header -->
    <?php include 'layout/header.php'; ?>
    <!-- End Header -->
    <div class="container-lg">
            <div class="row">

            <!-- Sidebar -->
            <?php include 'layout/sidebar.php';?>
            <!-- End Sidebar -->

            <!-- Content -->
            <?php
                include $page;
            ?>
            <!-- End Content -->
        </div>
        <div class="fixed-bottom text-center mb-2">
            Copyright 2024 Kaifahreza
        </div>
    </div>

</body>
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>