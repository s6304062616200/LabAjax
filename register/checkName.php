<?php
isset( $_POST['keyword'] ) ? $keyword = $_POST['keyword'] : $keyword = "";
$con=mysqli_connect("localhost","root","","blueshop");

$sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
$objQuery = mysqli_query($con,$sql);
?>
<table border="1">
<?php while($row = mysqli_fetch_assoc($objQuery)): ?>
    <tr>
    <td><?php echo "ชื่อ " .$row["name"]."<br>"; ?></td>
    <td><?php echo "ที่อยู่ " .$row["address"]."<br>"; ?></td>
    <td><?php echo "อีเมล์ " .$row["email"]."<br>"; ?></td>
    </tr>
<?php endwhile;?>
</table>