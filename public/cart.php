<?php
include("inc/top.php");
?>

<?php if(demhangtronggio()==0) { ?>
     <h3 class="text-info">Giỏ Hàng Rỗng </h3>
     <p> Vui Lòng Chọn  Sản Phẩm</p>
     <?php
}
else {
?>
<h3 class="test-info">Giỏ Hàng Của Bạn :</h3>
<form action="index.php">
<table class="table table-hover">
    <tr><th>Hình Ảnh</th><th>Tên Hàng</th><th>Đơn Giá</th><th>Số Lượng</th><th>Thành Tiền</th></tr>   
<?php foreach ($giohang as $id => $mh): ?>
   <tr>
       <td><img width="50" src="../<?php echo $mh["hinhanh"]; ?>"></td>
       <td><?php echo $mh["tenmathang"]; ?></td>
       <td><?php echo number_format($mh["giaban"]); ?></td>
       <td><input type="number" name ="mh[<?php echo $id; ?>]" value="<?php echo $mh["soluong"]; ?>"></td>
       <td><?php echo number_format($mh["thanhtien"]); ?> D </td>     
   </tr>
<?php endforeach; ?>
    <tr>
      <td colspan="3"></td>
      <td class ="fw-bold">Tổng Tiền</td><td class="text-danger fw-bold">
         <?php echo number_format(tinhtiengiohang()); ?>D
      </td> 
    </tr>
</table>
<div class="row">
   <div class="col">
      <a href="index.php?action=xoagiohang">Xóa Tất Cả </a>
   </div>
   <div class="col text-end">
      <input type="hidden" name="action" value="capnhatgio">
      <input type="submit" class="btn btn-info" value="Cập Nhật">
      <a href="index.php?action=thanhtoan" class="btn btn-success">Thanh Toán</a>
   </div>
</div>
</form>   
<?php } ?> 
<?php
include("inc/bottom.php");
?>
