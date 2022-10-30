<?php
//  This file lists the published tests by date and/or product name and provides a way to click to the test itself
//  Todo: 1)  Data downloads  2) There are no page size or paging options as there are not many records yet!
?><!DOCTYPE html>
<html lang="en">

<head>
    <?php  
        $pagename = "Data List";
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

//Check for or set a sequence
if (isset($_GET["seq"])) {
    $seq = sanitizeString($_GET["seq"]);
} else {
    $seq = "10";
}

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Work out the sequencing here.  There are only a couple of field displayed, so we have a lazy select....

switch ($seq) {
    default:
    case 10:
        $ordersql = "`beandata`.`testdate`";
        $ordertxt = "in date order";
        $ordurl = "seq=11";
        break;
    case 11:
        $ordersql = "`beandata`.`testdate` DESC";
        $ordertxt = "in reverse date order";
        $ordurl = "seq=10";
        break;
    case 20:
        $ordersql = "`beandata`.`productname`";
        $ordertxt = "in Product alphabetical order";
        $ordurl = "seq=21";
        break;
    case 21:
        $ordersql = "`beandata`.`productname` DESC";
        $ordertxt = "in Product reverse alphabetical order";
        $ordurl = "seq=20";
        break;        
}


//$sql = "SELECT * FROM beandata where id=" . $id . " AND published=1";  //limit one to get max one record?
$sql = "SELECT * FROM `beandata` WHERE published=1 ORDER BY " . $ordersql; //Get all the records 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Table Header and title Row
    ?>
    <div class="container">
    <div class="page-header">
    <h1>Test List <small>All the tests - <?php echo $ordertxt ?></small></h1>
    </div>
    <div class="row">
    <div class="col-xs-12">
    <table class="table table-striped table-bordered">
    <tbody>
    <tr><th scope="row">Test Date <a href="RecordList.php?seq=11">&lt</a><a href="RecordList.php?seq=10">&gt</a></th><th>Product Details <a href="RecordList.php?seq=21">&lt</a><a href="RecordList.php?seq=20">&gt</th></tr>
    <?php 
    
    while($row = $result->fetch_assoc()) {
        // do something with the $row
        ?> 
        <tr><td scope="row"><a href="RecordDisplay.php?id=<?php echo $row["id"] ?>"><?php echo $row["testdate"]?></a></td><td><?php echo $row["productname"]?></td></tr>
        <?php }
        
//    }
//   $row = $result->fetch_assoc();
    ?>
       
    
      </tbody>
    </table>	
</div>
</div>	
</div>
<?php
    } else { ?>
        
        <div class="container">
        <div class="page-header">
        <h1>Individual Results <small><?php echo $row["productname"]?></small></h1>
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
        
    0 results: We don't have any tests to list, or maybe it they are not published yet.
    <?php
    }
$conn->close();
?>

	
    <?php  
        include('includes/footer.php');
    ?>
</body>
</html>
