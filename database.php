<?php
include('header.php');
   if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 6;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $conn=mysqli_connect("localhost","root","","product");
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM product_details";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM product_details LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);?>
        <div class="container">
            <div class="row">
        <?php while($row = mysqli_fetch_array($res_data)){
          ?>    
      <div class="col-sm-6 col-md-4 col-lg-3 col-xs-offset-3 col-xs-6 col-sm-offset-0" style="border:1px solid black; border-radius: 20px;height: 400px;margin-right: 20px; margin-top: 10px; width: 260px">
        <img src="images/<?php echo $row['upload_img']; ?>">
            <h2><?php echo $row['pname'] ?></h2>
            <p><h3><?php echo $row['p_desc'] ?></h3></p>
            <a style="float: right" href="mycart.php?id=<?php echo $row['id']; ?>">Add to Cart</a>
      </div>

<?php } ?>
</div>
</div>
<?php mysqli_close($conn); 

    include ('pagination_footer.php');
?>
