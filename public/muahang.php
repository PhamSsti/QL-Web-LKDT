<?php
include("inc/top.php");
?>
      <form action="index.php">
      <div class="row">
        <div class="column customer-info">
            <h2>Vui lòng nhập đầy đủ thông tin</h2>
            <form action="process_order.php" method="post">
                <label>Email:</label>
                <input type="email" name="email">
                <label>Họ tên:</label>
                <input type="text" name="name">
                <label>Số điện thoại:</label>
                <input type="tel" name="phone">
                <label>Địa chỉ giao hàng:</label>
                <input type="text" name="address">
                <input type="submit" value="Hoàn tất đơn hàng">
            </form>
        </div>
        <div class="column order-info">
            <h2>Thông tin đơn hàng</h2>
            <!-- Mã PHP để hiển thị sản phẩm trong giỏ hàng -->
        </div>
      </div>
<?php
include("inc/bottom.php");
?>
