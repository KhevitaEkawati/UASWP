<?php
include "header.php";
?>
<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from beli where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
<form method="post" action="update2.php">
<div class="card" align="center">
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Brand</th>
	  <th scope="col">name</th>
	  <th scope="col">Buy</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>
	  <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
	  </td>
	  <td>
	  <input type="text" name="brand" value="<?php echo $d['brand']; ?>">
	  </td>
	   <td>
	  <input type="text" name="name" value="<?php echo $d['name']; ?>">
	  </td>
	   <td>
	  <input type="number" name="buy" value="<?php echo $d['buy']; ?>">
	  </td>
      <td>
		<input type="submit" value="Update">
	  </td>
    </tr>
  </tbody>
</table>
  </div>
</div>
</form>
<?php 
	}
	?>
<?php
include "footer.php";
?>