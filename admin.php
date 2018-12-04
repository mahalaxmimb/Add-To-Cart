<?php include('header.php')?>
<br>
<div id=div1>
<hr style="width: 1100px">
<p style="position: relative; text-align: center;font-family: serif;">Admin Panel</p>
<hr style="width: 1100px">
<CENTER>
<div style="border-radius: 10px; border:1px solid black;">
	<form action="insert.php" name="f1" method="post" enctype="multipart/form-data">
		<table>
		<tr>
			<td>Product Name</td>
			<td><input type="text" name="proname"></td>
		</tr>
		<tr>
			<td>Product Type</td>
			<td>
				<select name="protype">
					<option value="Accesories">Accesories</option>
					<option value="Mobiles">Mobiles</option>
					<option value="Home appliances">Home appliances</option>
				</select>
			</td>
		</tr> 
		<tr>
		<tr>
			<td>Brand Type</td>
			<td>
				<select name="brandType" id="select2"> 
					<option value="Samsung">Samsung</option>
					<option value="Oppo">Oppo</option>
					<option value="Vivo">Vivo</option>
					<option value="Redmi">Redmi</option>
				</select>
			</td>
		</tr> 
			<td>Upload Image</td>
			<td><input type="file" name="image" accept="image/*"></td>
		</tr>
		<tr>
			<td>Product Desc</td>
			<td><input type="textarea" name="prodesc"></td>
		</tr>
		<tr>
			<td>Cost</td>
			<td><input type="text" name="cost"></td>
		</tr>
		<tr>
			<td><input type="submit" name="addpro" value="Add Product"></td>
			<td><input type="reset" name="reset" value="Reset"></td>
		</tr>
	</table>
	</form>
</div>
</CENTER>
<br><br>