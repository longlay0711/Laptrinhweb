<?php
	$sql="SELECT * FROM sanpham inner join loai on sanpham.maloai = loai.maloai
	inner join nsx on sanpham.mansx = nsx.mansx " ;
	$query = mysqli_query($conn,$sql);
	include "headerad.php";
 ?>

<div class="container-fluid">
	<div class="card ">
	  <div class="card-header">
	    <h2>Danh sách sản phẩm</h2>
	  </div>
	  <div class="card-body">
	    <table class="table">
	    	<thead calss="thead-dark">
	    		<tr>
		    		<th>#</th>
		    		<th>Tên sản phẩm</th>
		    		<th>Ảnh sản phẩm</th>
		    		<th>Giá</th>
		    		<th>Mô tả</th>
		    		<th>Loại</th>
		    		<th>Thương hiệu</th>
		    		<th>Sửa</th>
		    		<th>Xóa</th>
	    		</tr>
	    	</thead>
	    	<tbody>
	    		<?php
	    		$i=1;
	    			while($row = mysqli_fetch_assoc($query)){ ?>
			    		<tr>
				    		<td><?php echo $i++; ?></td>
				    		<td><?php echo $row['tensp']; ?></td>
				    		<td>
				    			<img style="width:100px;" src="img/<?php echo $row['anh']; ?> ">		
				    		</td>
				    		<td><?php echo $row['gia']; ?></td>
				    		<td><?php echo $row['mota']; ?></td>
				    		<td><?php echo $row['tenloai']; ?></td>
				    		<td><?php echo $row['tennsx']; ?></td>
				    		<td><a href="index.php?page_layout=sua&id=<?php echo $row['masp']; ?>">Sửa</td>
				    		<td><a onclick="return Del ('<?php echo $row['tensp'] ?>')" href="index.php?page_layout=xoa&id=<?php echo $row['masp']; ?>">Xóa</td>
				    	</tr>
	    			<?php } ?>

	    	</tbody>
	    </table>
	    <a class="btn btn-primary" href="index.php?page_layout=them" >THÊM MỚI </a>
	  </div>
	</div>
</div>
<script>
	function Del(name){
		return confirm("Bạn có chắc muốn xóa sản phẩm " + name + "?");
	}
</script>