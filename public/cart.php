<?php
include("inc/top.php");
?>

<?php if(demhangtronggio()==0) { ?>
     <h3 class="text-info">Gio Hang Rong </h3>
     <p> Vui Long Chon San Pham</p>
     <?php
}
else {
?>
<h3 class="test-info">Gio Hang Cua Ban :</h3>
<form action="index.php">
<table class="table table-hover">
    <tr><th>Hinh anh</th><th>Ten hang</th><th>Don gia</th><th>So luong</th><th>Thanh Tien</th></tr>	
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
    	<td class ="fw-bold">tong tien</td><td class="text-danger fw-bold">
    		<?php echo number_format(tinhtiengiohang()); ?>D
    	</td>	
    </tr>
</table>
<div class="row">
   <div class="col">
      <a href="index.php?action=xoagiohang">xoa tat ca </a>
      (xoa 1 mat hang nhap so luong bang khong)
   </div>
   <div class="col text-end">
      <input type="hidden"	name="action" value="capnhatgio">
      <input type="submit"	class="btn btn-info" value="cap nhat">
      <a href="index.php?action=thanhtoan" class="btn btn-success">Thanh Toan</a>
   </div>
</div>
</form>   
<?php } ?> 
<?php
include("inc/bottom.php");
?>
