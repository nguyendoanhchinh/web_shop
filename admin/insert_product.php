<?php

include "../config/connect.php";
if (isset($_POST['insert_product'])){
    $product_name=$_POST['product_name'];
    $product_desciption=$_POST['product_desciption'];
    $product_key=$_POST['product_key'];
    $product_brand=$_POST['product_brand'];
    $product_category=$_POST['product_category'];
    $product_price=$_POST['product_price'];
    $product_status=true;

// image

    $image = $_FILES['product_image']['name'];
    $tmp_image = $_FILES['product_image']['tmp_name'];
    if($product_name=='' || $product_desciption==''|| $product_key=='' ||$product_brand==''||$product_category=='' ||$product_price=='' ||$image==''){
        $mess="Bạn cần nhập đầy đủ thông tin";
    }else{
        move_uploaded_file($tmp_image,"./image/$image");
        $query="INSERT INTO `products`(`product_name`, `product_description`, `product_key`, `category_id`, `brand_id`, `product_image`, `product_price`, `date`, `status`) 
        VALUES ('$product_name','$product_desciption','$product_key','$product_brand','$product_category','$image','$product_price',NOW(),'$product_status')";

        $result_query=mysqli_query($conn,$query);
        if($result_query){
            $mess="Thêm thành công";
        }else{
            $mess="Thêm thất bại";
        }

    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="container mt-3">
    <div class="form-row">
        <h2 class="btn text-danger"><?php if(!empty($mess)){echo $mess;}


            ?></h2>
        <div class="form-group col-md-6">
            <label for="product_name">Tên sản phẩm</label>
            <input type="text" class="form-control" id="product_name" placeholder="" name="product_name">
        </div>        <br>
        <div class="form-group col-md-6">
            <label for="description">Mô tả sản phẩm</label>
            <input type="text" class="form-control" id="description" name="product_desciption">
        </div>
    </div>        <br>
    <div class="form-group col-md-6">
        <label for="product_key">Mã sản phẩm</label>
        <input type="text" class="form-control" id="product_key"  name="product_key">
    </div>
        <br>
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="product_brand">Thương hiệu</label>
            <select id="product_brand" class="form-control" name="product_brand">
                <option selected>--lựa chọn--</option>
                <?php
                $query="select * from brands";
                $result=mysqli_query($conn,$query);
                while ($row=mysqli_fetch_array($result)){
                    $brand_name=$row['brand_name'];
                    $brand_id=$row['brand_id'];
                    echo "<option value='$brand_id'>$brand_name</option>";
                }
                ?>

            </select>
        </div>

    </div>
        <br>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="product_category">Loại giày</label>
                <select id="product_category" class="form-control" name="product_category">
                    <option selected>--lựa chọn--</option>
                    <?php
                    $query="select * from categories";
                    $result=mysqli_query($conn,$query);
                    while ($row=mysqli_fetch_array($result)){
                        $category_name=$row['category_name'];
                        $category_id=$row['category_id'];
                        echo "<option value='$category_id'>$category_name</option>";
                    }
                    ?>
                </select>
            </div>

        </div>
        <br>
        <div class="form-group col-md-6">
            <label for="product_image" class="form-lable">Ảnh sản phẩm</label>
            <input type="file" class="form-control" id="product_image"  name="product_image">
        </div>

        <br>
        <div class="form-group col-md-6">
            <label for="product_price">Gía tiền</label>
            <input type="text" class="form-control" id="product_price"  name="product_price">
        </div>
        <br>

        <button type="submit" class="btn btn-primary" name="insert_product">Thêm </button>
    </div>




</form>