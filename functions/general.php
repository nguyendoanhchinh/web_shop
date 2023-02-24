<?php
include "config/connect.php";

function getproduct(){
    global $conn;

    if(!isset($_GET['category'])){
        if (!isset($_GET['brand'])){


    $select_product= "select * from `products` order by rand() ";
    $query=mysqli_query($conn,$select_product);
    while ($row=mysqli_fetch_assoc($query)){

        $product_id=$row['product_id'];
        $product_name=$row['product_name'];
        $product_description=$row['product_description'];
        $product_image=$row['product_image'];
        $product_price=$row['product_price'];
        $category_id=$row["category_id"];
        $brand_id=$row["brand_id"];
        echo "
                        <div  class='col-md-4 mb-2'>
                        <div class='card' >
                            <img style='width: 300px ;height: 300px; ' src='./admin/image/$product_image' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title text-center'> $product_name </h5>
                                <p class='card-text small'>$product_description</p>
                                <p class='card-text small'>Giá :$product_price</p>
                                <a href='#' class='btn btn-info'>Thêm </a>
                                <a href='product_detail.php?id=$product_id' class='btn btn-secondary  '>Chi tiết</a>
                            </div>
                        </div>
                    </div>
                        ";
    }
}
    }
}

function getunique_category(){
    global $conn;

    if(isset($_GET['category'])){

        $category_id=$_GET['category'];
            $select_product= "select * from `products` where category_id='$category_id'";
            $query=mysqli_query($conn,$select_product);
            while ($row=mysqli_fetch_assoc($query)){

                $product_id=$row['product_id'];
                $product_name=$row['product_name'];
                $product_description=$row['product_description'];
                $product_image=$row['product_image'];
                $product_price=$row['product_price'];
                $category_id=$row["category_id"];
                $brand_id=$row["brand_id"];
                echo "
                        <div class='col-md-4 mb-2'>
                        <div class='card' >
                            <img style='width: 300px;height: 300px;' src='./admin/image/$product_image' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title text-center'> $product_name </h5>
                                <p class='card-text small'>$product_description</p>
                                <p class='card-text small'>Giá :$product_price</p>
                                <a href='#' class='btn btn-info'>Thêm </a>
                                <a href='product_detail.php?id=$product_id' class='btn btn-secondary  '>Chi tiết</a>
                            </div>
                        </div>
                    </div>
                        ";
            }
        }
}

function getunique_brand(){
    global $conn;

    if(isset($_GET['brand'])){

        $brand_id=$_GET['brand'];
        $select_product= "select * from `products` where brand_id='$brand_id'";
        $query=mysqli_query($conn,$select_product);
        while ($row=mysqli_fetch_assoc($query)){

            $product_id=$row['product_id'];
            $product_name=$row['product_name'];
            $product_description=$row['product_description'];
            $product_image=$row['product_image'];
            $product_price=$row['product_price'];
            $category_id=$row["category_id"];
            $brand_id=$row["brand_id"];
            echo "
                        <div class='col-md-4 mb-2'>
                        <div class='card' >
                            <img style='width: 300px;height: 300px;' src='./admin/image/$product_image' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title text-center'> $product_name </h5>
                                <p class='card-text small'>$product_description</p>
                                <p class='card-text small'>Giá :$product_price</p>
                                <a href='#' class='btn btn-info'>Thêm </a>
                                <a href='product_detail.php?id=$product_id' class='btn btn-secondary  '>Chi tiết</a>
                            </div>
                        </div>
                    </div>
                        ";
        }
    }
}


function getbrand(){
    global $conn;
    $select_brands="SELECT * FROM `brands` ";
    $result=mysqli_query($conn,$select_brands);

    while ( $row=mysqli_fetch_assoc($result)){
        $brand_name=$row['brand_name'];
        $brand_id=$row['brand_id'];
        echo " <ul class='navbar-nav me-auto text-center'>
                    <li class='btn btn-secondary  '><a href='index.php?brand=$brand_id' class='nav-link text-white'>$brand_name</a></li>
                </ul>";
    }
}

function getcategories(){
    global $conn;
    $select_category="SELECT * FROM `categories` ";
    $result=mysqli_query($conn,$select_category);

    while ( $row=mysqli_fetch_assoc($result)){
        $category_id=$row['category_id'];
        $category_name=$row['category_name'];
        echo " <ul class='navbar-nav me-auto text-center'>
                    <li class='btn btn-secondary  '><a href='index.php?category=$category_id' class='nav-link text-white'>$category_name</a></li>
                </ul>";
    }

}




