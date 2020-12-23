<?php 
include "headerad.php";
	$id=$_GET['id'];

	$sql_brand = "SELECT * FROM loai";
	$sql_local = "SELECT * FROM nsx";
	$squery_brand = mysqli_query($conn,$sql_brand);
	$squery_local = mysqli_query($conn,$sql_local);



	$sql_up = "SELECT * FROM sanpham WHERE masp = $id";
	$squery_up = mysqli_query($conn,$sql_up);
	$row_up = mysqli_fetch_assoc($squery_up);

	if(isset($_POST['sbm'])){
		$tensp=$_POST['tensp'];

		if($_FILES['anh']['name']==''){
			$anh = $row_up['anh'];
		}else{
			$anh = $_FILES['anh']['name'];
			$anh_tmp = $_FILES['anh']['tmp_name'];
			move_uploaded_file($anh_tmp,'./img/'.$anh);
		}

		$gia=$_POST['gia'];
		$mota=$_POST['mota'];
		$maloai=$_POST['maloai'];
		$mansx=$_POST['mansx'];

		$sql= "UPDATE sanpham SET tensp = '$tensp' ,gia = '$gia' ,anh = '$anh' ,mota = '$mota',maloai = '$maloai' ,mansx = '$mansx' WHERE masp = $id ";
		$query = mysqli_query($conn,$sql);
		
		header('location:index.php?page_layout=danhsach');
	}
 ?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Sửa sản phẩm</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data" accept-charset="utf-8">
				<div class="form-group">
					<label for="">Tên sản phẩm</label>
					<input type="text" name="tensp" class="form-control" required value="<?php echo $row_up['tensp']; ?> ">
				</div>

				<div class="form-group">
					<label for="">Ảnh sản phẩm</label>
					<input type="file" name="anh" >
				</div>

				<div class="form-group">
					<label for="">Giá sản phẩm</label>
					<input type="number" name="gia" class="form-control" required value="<?php echo $row_up['gia'];?>">
				</div>
				<div class="form-group">
					<label for="">Mô tả sản phẩm</label>
					<input type="text" name="mota" class="form-control" required value="<?php echo $row_up['mota'];?>">
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

				<button name="sbm" class="btn btn-success" type="submit" >Sửa</button>
			</form>
		</div>
	</div>
</div>