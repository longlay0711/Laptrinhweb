<?php 
include "headerad.php";
	$sql_brand = "SELECT * FROM loai";
	$sql_local = "SELECT * FROM nsx";
	$squery_brand = mysqli_query($conn,$sql_brand);
	$squery_local = mysqli_query($conn,$sql_local);
	if(isset($_POST['sbm'])){
		$tensp=$_POST['tensp'];

		$anh=$_FILES['anh']['name'];
		$anh_tmp=$_FILES['anh']['tmp_name'];


		$gia=$_POST['gia'];
		$mota=$_POST['mota'];
		$maloai=$_POST['maloai'];
		$mansx=$_POST['mansx'];

		$sql= "INSERT INTO sanpham (tensp,gia,anh,mota,maloai,mansx) VALUES ('$tensp','$gia','$anh','$mota','$maloai','$mansx')";
		$query = mysqli_query($conn,$sql);
		move_uploaded_file($anh_tmp,'./img/'.$anh);
		header('location:index.php?page_layout=danhsach');
	}
 ?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Thêm sản phẩm</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data" accept-charset="utf-8" >
				<div class="form-group">
					<label for="">Tên sản phẩm</label>
					<input type="text" name="tensp" class="form-control" required="">
				</div>

				<div class="form-group">
					<label for="">Ảnh sản phẩm</label>
					<input type="file" name="anh" >
				</div>

				<div class="form-group">
					<label for="">Giá sản phẩm</label>
					<input type="number" name="gia" class="form-control" required="">
				</div>

				<div class="form-group">
					<label for="">Mô tả sản phẩm</label>
					<input type="text" name="mota" class="form-control" >
				</div>

				<div class="form-group">
					<label for="">Loại</label>
					<select class="form-control" name="maloai" >
						<?php 
							while ($row_brand = mysqli_fetch_assoc($squery_brand)) { ?>
								<option value="<?php echo $row_brand['maloai']; ?>" ><?php echo $row_brand['tenloai']; ?></option>
							<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<label for="">Thương hiệu</label>
					<select class="form-control" name="mansx" >
						<?php 
							while ($row_local = mysqli_fetch_assoc($squery_local)) { ?>
								<option value="<?php echo $row_local['mansx']; ?>" ><?php echo $row_local['tennsx']; ?></option>
							<?php } ?>
					</select>
				</div>

				<button name="sbm" class="btn btn-success" type="submit" >Thêm</button>
			</form>
		</div>
	</div>
</div>