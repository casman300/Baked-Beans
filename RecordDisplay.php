<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Charlie Seaman">

    <title>Baked Bean Project - Individual Data: BLANK</title>
	<link rel="icon" type="image/png" href="favicon.ico">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top navbar-dark">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.html">Baked Beans</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../index.html">Home / About</a>
                    </li>
                    <li>
                        <a href="../graphs.html">Graphs</a>
                    </li>
                    <li>
                        <a href="../data-pages/index.html">Raw Data</a>
                    </li>
                    <li>
                        <a href="../contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 

include 'inc/configuration.php';

$id = htmlspecialchars($_GET["id"]);

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
<div class="row">
<div class="col-xs-12">
<table class="table table-striped table-bordered">
      <tbody>
        <tr><th scope="row">ID</th><td><?php echo $row["id"]?></td></tr>
        <tr><th scope="row">Test Date</th><td><?php echo $row["testdate"]?></td></tr>
        <tr><th scope="row">Barcode</th><td><?php echo $row["barcode"]?></td></tr>
        <tr><th scope="row">Batch</th><td><?php echo $row["batch"]?></td></tr>
        <tr><th scope="row">Mass (from packaging)</th><td><?php echo $row["productmass"]?> g</td></tr>      
        <tr><th scope="row">Data URL</th><td><?php echo $row["dataurl"]?></td></tr>
        <tr><th scope="row">Brand</th><td><?php echo $row["brand"]?></td></tr>
        <tr><th scope="row">Shop</th><td><?php echo $row["shop"]?></td></tr>
        <tr><th scope="row">Price at purchase</th><td><?php echo $row["price"]?></td></tr>
        <tr><th scope="row">weight of full can</th><td><?php echo $row["massfull"]?> g</td></tr>
        <tr><th scope="row">Weight of empty can</th><td><?php echo $row["massempty"]?> g</td></tr>
        <tr><th scope="row">weight of beans</th><td><?php echo $row["massbeans"]?> g</td></tr>
        <tr><th scope="row">Percentage of beans to liquid</th><td><?php echo $row["beanstoliquid"]?></td></tr>
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
        
    0 results, we don't have a recod of that test
    <?php
    }
$conn->close();
?>




	
    <footer>
                    <p class="copyright text-muted">Copyright &copy; Charlie Seaman 2018 <a href="../humans.txt"><img src="../img/humanstxt.gif" alt="Humans.txt" width="88" height="31"></a></p>
    </footer>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/clean-blog.min.js"></script>

</body>

</html>
