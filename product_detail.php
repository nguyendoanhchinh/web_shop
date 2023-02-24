

<?php


include "config/connect.php";
include "functions/general.php";
include "inc/header.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chi tiết sản phẩm</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/style_detail.css">
<!--    <link rel="stylesheet" href="css/style.css">-->



</head>

<body>
<div class="bg-light">
    <h3 class="text-center">SHOPSTORE</h3>
</div>
<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <?php

                        $product_id=$_GET['id'];
                        $select_product= "select * from `products` where product_id='$product_id'";
                        $query=mysqli_query($conn,$select_product);
                        $row=mysqli_fetch_assoc($query);


                    ?>

                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="<?php echo './admin/image/'.$row['product_image'] ;?>" /></div>

                    </div>


                </div>
                <div class="details col-md-6">
                    <h3 class="product-title"><?php echo $row['product_name'] ;?></h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">41 reviews</span>
                    </div>
                    <h5 class="sizes">sizes:
                        <button class="size" data-toggle="tooltip" title="small">38</button>
                        <button class="size" data-toggle="tooltip" title="medium">39</button>
                        <button class="size" data-toggle="tooltip" title="large">40</button>
                        <button class="size" data-toggle="tooltip" title="xtra large">41</button>
                    </h5>
                    <p class="product-description" style="height: 290px;"> <?php echo $row['product_description'] ?></h4>
                    <p class="product-price"> Giá: <span class="text-danger"><?php echo $row['product_price'] ?></span></h4>


                    <br>
                    <div class="action">
                        <button class="add-to-cart btn btn-default" type="button">Thêm vào giỏ hàng</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "inc/footer.php";
?>
</body>
</html>