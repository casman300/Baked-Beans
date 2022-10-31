<!DOCTYPE html>
<html lang="en">

<head>
    <?php  
        $pagename = "Record Display";
        $pagedescription = "";
        include('includes/header.php');
    ?>
</head>

<body>
    <?php  
        include('includes/menu.php');
    ?>

<?php 

include 'includes/configuration.php';

if (isset($_GET["id"])) {
    $id = sanitizeString($_GET["id"]);
} else {
    $id = "";
}

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM beandata where id=" . $id . " AND published=1";  //limit one to get max one record?
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Get the first Row.
    $row = $result->fetch_assoc();
    ?>
    
    <div class="container">
<div class="page-header">
  <h1>Individual Results <small class="text-muted"><?php echo $row["productname"]?></small></h1>
</div>
	<div class="row">
		<div class="col-xs-12">
			<a href="#" class="thumbnail">
				<img src="..." alt="...">
			</a>
			<a href="#" class="thumbnail">
				<img src="..." alt="...">
			</a>
		</div>
	</div>
<div class="row">
<div class="col-xs-12">
<table class="table table-striped table-bordered">
      <tbody>
        <tr><th scope="row">ID</th><td><?php echo $row["id"]; ?></td></tr>
        <tr><th scope="row">Test Date</th><td><?php echo $row["testdate"]; ?></td></tr>
        <tr><th scope="row">Barcode</th><td><?php echo $row["barcode"]; ?></td></tr>
        <tr><th scope="row">Batch</th><td><?php echo $row["batch"]?></td></tr>
        <tr><th scope="row">Mass (from packaging)</th><td><?php echo $row["productmass"]?> g</td></tr>      
        <tr><th scope="row">Data URL</th><td><?php echo $row["dataurl"]?></td></tr>
        <tr><th scope="row">Brand</th><td><?php echo $row["brand"]?></td></tr>
        <tr><th scope="row">Shop</th><td><?php echo $row["shop"]?></td></tr>
        <tr><th scope="row">Price at purchase</th><td><?php echo $row["price"]?></td></tr>
        <tr><th scope="row">Weight of full can</th><td><?php echo $row["massfull"]?> g</td></tr>
        <tr><th scope="row">Weight of empty can</th><td><?php echo $row["massempty"]?> g</td></tr>
        <?php $massbeans = $row["massbeans"]; ?>
        <tr><th scope="row">Weight of beans</th><td><?php echo $massbeans; ?> g</td></tr>
        <?php $massjuice = $row["massfull"] - $row["massempty"] - $row["massbeans"]?>
        <tr><th scope="row">Weight of juice</th><td><?php echo $massjuice ?> g</td></tr>
        <?php $perc = ($massbeans + $massjuice)/100; 
              $percb = ceil($massbeans/$perc);
              $percj = floor($massjuice/$perc);
//       Don't have this stored yet
//      <tr><th scope="row">Percentage of beans to liquid</th><td><?php echo $row["beanstoliquid"]
        ?>
		<tr><th scope="row">Percentage of beans to liquid</th><td><?php echo $percb . "% / " . $percj; ?>%</td></tr>

        <tr><th scope="row">Bean count</th><td><?php echo $row["beancount"]?></td></tr>
        <tr><th scope="row">Taste rating</th><td><?php echo $row["tasterating"]?></td></tr>
        <tr><th scope="row">Ingredients listed</th><td><?php echo $row["ingredientlist"]?>K</td></tr>
        <tr><th scope="row">Sauce Viscosity</th><td><?php echo $row["sauceviscosity"]?></td></tr>
        <tr><th scope="row">Pull Ring Tin?</th><td><?php if ($row["pullring"] = 1) { echo "Yes"; } else { echo "No";} ?></td></tr>
        <tr><th scope="row">Purchase Date</th><td><?php echo $row["purchasedate"]?></td></tr>
        <tr><th scope="row">Best Before Date</th><td><?php echo $row["bestbeforedate"]?></td></tr>
        <tr><th scope="row">Length of best before date</th><td><?php
        $days = bbdaysremaining($row["purchasedate"], $row["bestbeforedate"]);
        if ($days[0] > 0) {
            echo $days[0] . " days"; } else if ($debugmode == 1){ echo $days[1]; } ?></td></tr>
        <tr><th scope="row">Extra Info</th><td><?php echo $row["comments"]?></td></tr>
      </tbody>
    </table>	
</div>
</div>	
</div>
<?php
    } else { ?>
        
    <div class="container">
        <div class="page-header">
            <h1>Individual Results <small class="text-muted">Test not found</small></h1>
        </div>
        <p>0 results: This test either does not exist or has not been published yet.</p>
    </div>

    <?php
    }
$conn->close();
?>
	
    <?php  
        include('includes/footer.php');
    ?>
</body>

</html>
