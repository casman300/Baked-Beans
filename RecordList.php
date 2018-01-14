<?php
//  This file lists the published tests by date and/or product name and provides a way to click to the test itself
//  Todo: 1)  Data downloads  2) There are no page size or paging options as there are not many records yet!
?><!DOCTYPE html>
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

// get the sequence
$seq = intval(htmlspecialchars($_GET["seq"]));

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
