<?php
include "../config/connect.php";
if(isset($_POST['insert_brands'])){
    $brand=$_POST['brand_name'];
    $select_query="SELECT * FROM `brands` where brand_name='$brand' ";
    $result_select=mysqli_query($conn,$select_query);
    if (mysqli_num_rows($result_select)){
//
        $meeseger="Thương hiệu đã tồn tại!";

    }else{
        $query="INSERT INTO `brands`( `brand_name`) VALUES ('$brand')";
        $result=mysqli_query($conn,$query);
        if ($result){
//
            $meeseger="Thêm thành công!";

        }
    }
}
?>


<h2 class="text-center">Thêm thương hiệu</h2>

<form action="" method="post" class="m-5">
    <h3 class="text-danger"><?php if(!empty($meeseger)){echo $meeseger;} ?></h3>

    <div class="input-group w-90 mb-2 ">
        <input type="text" name="brand_name" id="disabledTextInput" class="form-control"  aria-label="brands" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2">
        <button type="submit" name="insert_brands" class="btn btn-info">Thêm </button>
    </div>
</form>

