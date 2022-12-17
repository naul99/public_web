<h2 style="text-align: center;">Liệt Kê Đơn Hàng Chi Tiết</h2>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Nội dung</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        $i=0;
        
        foreach ($order_info as $key => $ord) {
           
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $ord['name']?></td>
                <td><?php echo $ord['email']?></td>
                <td><?php echo $ord['sodienthoai']?></td>
                <td><?php echo $ord['diachi']?></td>
                <td><?php echo $ord['noidung']?></td>
                
                <td></td>

            </tr>
        <?php
        }
        ?>
        
    </tbody>
</table>
<h2 style="text-align: center;">Danh Sách Sản Phẩm</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        $i=0;
        $total=0;
        foreach ($order_detail as $key => $ord) {
            $total += $ord['product_quantity'] * $ord['price_product'];
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $ord['title_product']?></td>
                <td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $ord['image_product'] ?>" height="50" width="50"></td>
                <td><?php echo $ord['product_quantity']?></td>
                <td><?php echo number_format($ord['price_product'],0,",",".").'vnđ'?></td>
                <td><?php echo number_format($ord['product_quantity']*$ord['price_product'],0,",",".").'vnđ'?></td>
                <td></td>

            </tr>
        <?php
        }
        ?>
        <form method="POST" action="<?php echo BASE_URL?>/order/order_confirm/<?php echo $ord['order_code'] ?>">
        <tr>
            <td><input type="submit" name="update_order" value="Xử lý" class="btn btn-primary"></td>
            <td align="right" colspan="6" style="font-weight:bold; font-size:20px;">Tổng tiền: <?php echo number_format($total,0,",",".").'vnđ'?></td>
        </tr>
        </form>
        
    </tbody>
</table>