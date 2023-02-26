<?php
include "config/connect.php";
include "functions/general.php";
include "inc/header.php";


?>

<!--       <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">-->
<!--        <ul class="navbar-nav me-auto ">-->
<!---->
<!--            <li  class="nav-item d-flex">-->
<!--                <a href="#" class="nav-link">Đăng nhập</a>-->
<!--            </li>-->
<!--        </ul>-->
<!--        </nav>-->

        <div class="bg-light">
              <h3 class="text-center">Sản phẩm bán chạy</h3>
        </div>

        <div class="row">
            <div class="col-md-2 bg-secondary p-0">
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item  bg-info "><a href="index.php" class="nav-link text-white"><h5>Thương hiệu</h5></a></li>
                </ul>
                <?php
                getbrand();
                ?>

                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item  bg-info "><a href="index.php" class="nav-link text-white"><h5>Loại giày</h5></a></li>
                </ul>
                <?php
                getcategories();
                ?>

            </div>

            <div class="col-md-10">

                <div class="row">
                <?php

                getproduct();
                getunique_category();
                getunique_brand();
                ?>


                </div>
            </div>
<?php
include "inc/footer.php";
?>