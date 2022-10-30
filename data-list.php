<!DOCTYPE html>
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

<div class="container">
<div class="page-header">
  <h1>Raw Data List</h1>
</div>
<div class="row">
<div class="col-xs-12">
<table class="table table-striped table-bordered">
      <tbody>
        <tr>
          <th>ID</th>
          <th>Picture</th>
          <th>Brand</th>
          <th>Score</th>
        </tr>
        <tr>
          <td><a href="raw-data.php">Example 1</a></td>
          <td>
            <a href="#" class="thumbnail">
                <img src="..." alt="...">
            </a>
          </td>
          <td>Example</td>
          <td>example 4/5</td>
        </tr>
        <tr>
          <td>BLANK BLANK</td>
          <td>BLANK BLANK</td>
          <td>BLANK BLANK</td>
          <td>BLANK BLANK</td>
        </tr>
        <tr>
          <td>BLANK BLANK</td>
          <td>BLANK BLANK</td>
          <td>BLANK BLANK</td>
          <td>BLANK BLANK</td>
        </tr>
      </tbody>
    </table>
</div>
</div>	
</div>	

	
    <?php  
        include('includes/footer.php');
    ?>
</body>
</html>
