

<?php


include "config/connect.php";
include "functions/general.php";

$product_id=$_GET['id'];
$select_product= "select * from `products` where product_id='$product_id'";
$query=mysqli_query($conn,$select_product);
$row=mysqli_fetch_assoc($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/style_detail.css">
<!--    <link rel="stylesheet" href="css/style.css">-->


    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="css/style_detail.css">
        <title>Web shop</title>
    </head>

<body>
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">SHOPSTORE</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
                    </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Sản phẩm</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Liên hệ</a>
                                            </li>
                                            <button class=" btn-info" id="cart">
                                                <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>

                                            </button>
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Giỏ Hàng</h5>
                                <span class="close">&times;</span>
                            </div>
                            <div class="modal-body">

                                <div class="cart-items">

                                    <div class="cart-items">

                                        <div class="cart-row">
                                            <div class="cart-item cart-column">
                                                <img class="cart-item-image" src="<?php echo './admin/image/'.$row['product_image'] ;?>" width="100" height="100">
                                                <span class="cart-item-title"><?php echo $row['product_name'] ;?></span>
                                            </div>
                                            <span class="cart-price cart-column"><?php echo $row['product_price'] ?></span>
                                            <div class="cart-quantity cart-column">
                                                <input class="cart-quantity-input" type="number" name="number">
                                                <button class="btn btn-danger" type="button">Xóa</button>
                                            </div>
                                        </div>
                                        <div class="cart-total">
                                            <strong class="cart-total-title">Tổng Cộng:</strong>
                                            <span class="cart-total-price">11.100.000VND</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                                <button type="button" class="btn btn-primary order">Thanh Toán</button>
                            </div>
                        </div>
                    </div>


                </ul>


            </div>

        </div>
    </nav>

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

                    <p class="product-description" style="height: 290px;">MÔ TẢ :  <?php echo $row['product_description'] ?></h4>
                    <p class="product-price"> GIÁ: <span class="text-danger"><?php echo $row['product_price'] ?></span></h4>


                    <br>
                    <form method="post">
                        <input class="add-to-cart btn btn-default" type="submit" value="Thêm vào giỏ hàng">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='container mt-5'>

    <div class='d-flex justify-content-between align-items-center mb-3'>

        <span class="text-center" style='font-size: 20px;'>SẢN PHẨM TƯƠNG TỰ</span>
    </div>
</div>
<div class='row'>
<?php
    $select_product1= "select * from `products` order by rand() limit 0,4";
    $query=mysqli_query($conn,$select_product1);
    $row1=mysqli_fetch_assoc($query);
    while ($row1=mysqli_fetch_assoc($query)){
        $product_id1=$row1['product_id'];
        $product_name1=$row1['product_name'];
        $product_description1=$row1['product_description'];
        $product_image1=$row1['product_image'];
        $product_price1=$row1['product_price'];

        echo "
    
        
            <div class='col-md-4'>
                <div class='card'>
                    <div class='text-center'>
                        <img src='./admin/image/$product_image1'  width=250>
                    </div>
                    <div class='text-center'>
                        <h5> $product_name1 </h5>
                        <span class='text-success'> $product_price1</span>
                    </div>
                    </div>
            </div>
       ";
    }


?>

</div>
</div>
</div>

<?php
include "inc/footer.php";
?>
</body>
</html>
<script>
    // giỏ hàng
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("cart");
    var close = document.getElementsByClassName("close")[0];

    var close_footer = document.getElementsByClassName("close-footer")[0];
    var order = document.getElementsByClassName("order")[0];
    btn.onclick = function () {
        modal.style.display = "block";
    }
    close.onclick = function () {
        modal.style.display = "none";
    }
    close_footer.onclick = function () {
        modal.style.display = "none";
    }
    order.onclick = function () {
        alert("Cảm ơn bạn đã thanh toán đơn hàng")
    }
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>