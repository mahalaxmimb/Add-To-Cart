<?php  

$conn = mysqli_connect("localhost","root","","product"); 
 
$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM product_details ORDER BY title ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql);  
?>  
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>title</th>  
<th>body</th>  
</tr>  
<thead>  
<tbody>  
<?php  
while ($row = mysql_fetch_assoc($rs_result)) {  
?>  
            <tr>  
            <td><? echo $row["title"]; ?></td>  
            <td><? echo $row["body"]; ?></td>  
            </tr>  
<?php  
};  
?>  
</tbody>  
</table>  
<?php  
$sql = "SELECT COUNT(id) FROM product_details";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysql_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<a href='index.php?page=".$i."'>".$i."</a>";  
};  
echo $pagLink . "</div>";  
?>