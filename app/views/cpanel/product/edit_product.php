<?php
if (!empty($_GET['msg'])) {
  $msg = unserialize(urldecode($_GET['msg']));
  foreach ($msg as $key => $value) {
    echo '<span style="color:blue;font-weight:bold">' . $value . '</span>';
  }
}

?>


<h2 style="text-align: center;">Cập nhật sản phẩm</h2>
<div class="col-md-9">
    <?php
    foreach($productbyid as $key=>$pro){

?>
  <form action="<?php echo BASE_URL ?>/product/update_product/<?php echo $pro['id_product']?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Tên sản phẩm</label>
      <input type="text" value="<?php echo $pro['title_product']?>" name="title_product" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Hình ảnh sản phẩm</label>
      <input type="file" name="image_product" class="form-control">
      <p><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['image_product']?>" height="100" width="100"></p>
    </div>

    <div class="form-group">
      <label for="email">Giá sản phẩm</label>
      <input type="text" value="<?php echo $pro['price_product']?>" name="price_product" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Số lượng sản phẩm</label>
      <input type="text" value="<?php echo $pro['quantity_product']?>" name="quantity_product" class="form-control">
    </div>
    <div class="form-group">
      <label for="pwd">Miêu tả sản phẩm</label>
      <textarea type="text" rows="5"  name="desc_product" class="form-control"><?php echo $pro['desc_product']?></textarea>
    </div>
    <div class="form-group">
      <label for="pwd">Danh mục sản phẩm</label>
      <select name="category_product" class="form-control">
        <?php
          foreach($category as $key=>$cate){    
        ?>
        <option <?php if($pro['id_category_product']==$cate['id_category_product']){echo 'selected';}  ?> value="<?php echo $cate['id_category_product'] ?>"><?php echo $cate['title_category_product'] ?></option>
         <?php }
        ?>
      </select>
    </div>
    <button type="submit" class="btn btn-default">Cập nhật sản phẩm</button>
  </form>
  <?php
    }
    ?>
</div>