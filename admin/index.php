<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin </title>


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="grid-container">


    <header class="header ">


                <nav class="navbar navbar-expand-lg navbar-light pr-5">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link text-dark">Welcome Admin</a>
                        </li>
                    </ul>
                </nav>

    </header>
    <!-- End Header -->

    <!-- Sidebar -->
    <aside id="sidebar">
        <div class="sidebar-title">
            <div class="sidebar-brand">
                 SHOPSTORE
            </div>

        </div>

        <ul class="sidebar-list">
            <li class="sidebar-list-item">
                <a href="index.php?insert_product" >
                     Thêm sản phẩm
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="#" >
                      Thông tin sản phẩm
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="index.php?insert_category" >
                    Thêm loại giày
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="#" >
                    Thông tin giày
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="index.php?insert_brands" >
                     Thêm thương hiệu
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="#" >
                     Thông tin thương hiệu
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="#" >
                     Tất cả các đơn đặt hàng
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="#" >
                     Các khoản thanh toán
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="#" >
                     Thông tin người dùng
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="#" >
                     Đăng xuất
                </a>
            </li>
        </ul>
    </aside>
    <!-- End Sidebar -->

    <!-- Main -->
    <main class="main-container">
        <?php
        if(isset($_GET['insert_category'])){
            include "insert_category.php";
        }
        if(isset($_GET['insert_brands'])){
            include "insert_brands.php";
        }
        if(isset($_GET['insert_product'])){
            include "insert_product.php";
        }
        ?>
    </main>
    <!-- End Main -->

</div>

<!-- Scripts -->
<!-- ApexCharts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
<!-- Custom JS -->
<script src="js/scripts.js"></script>
</body>
</html>