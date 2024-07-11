
            <!-- Content -->
            <?php
            if (isset($_GET['x']) && $_GET['x'] == 'home') {
                $page = 'content/home.php';
                include 'main.php';
            }elseif(isset($_GET['x']) && $_GET['x'] == 'order'){
                $page = 'content/order.php';
                include 'main.php';
            }elseif(isset($_GET['x']) && $_GET['x'] == 'product'){
                $page = 'content/product.php';
                include 'main.php';
            }elseif(isset($_GET['x']) && $_GET['x'] == 'customer'){
                $page = 'content/customer.php';
                include 'main.php';
            }elseif(isset($_GET['x']) && $_GET['x'] == 'report'){
                $page = 'content/report.php';
                include 'main.php';
            }elseif(isset($_GET['x']) && $_GET['x'] == 'login'){
                include 'login.php';
            } else {
                include 'main.php';
            }
            ?>
            <!-- End Content -->
        