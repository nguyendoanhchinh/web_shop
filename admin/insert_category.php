<?php
include "../config/connect.php";
if(isset($_POST['insert_category'])){
    $category_name=$_POST['category_name'];
    $select_query="SELECT * FROM `categories` where category_name='$category_name' ";
    $result_select=mysqli_query($conn,$select_query);
    if (mysqli_num_rows($result_select)){
        $meeseger="Sản phẩm đã có trong cửa hàng!!";
    }else{
    $query="INSERT INTO `categories`( `category_name`) VALUES ('$category_name')";
    $result=mysqli_query($conn,$query);
    if ($result){

        $meeseger="Thêm thành công!";
        }
    }
}
?>

<h2 class="text-center">Thêm loại giày</h2>
<form action="" method="post" class="m-5">
    <h3 class="text-danger"><?php if(!empty($meeseger)){echo $meeseger;} ?></h3>

    <div class="input-group w-90 mb-2 ">
        <input type="text" name="category_name" id="disabledTextInput" class="form-control"  aria-label="category" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2">
        <button type="submit" name="insert_category" class="btn btn-info">Thêm</button>
    </div>
</form>

