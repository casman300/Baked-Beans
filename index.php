<!DOCTYPE html>
<html lang="en">

<head>
    <?php  
        $pagename = "Home/About";
        $pagedescription = "This is the home of the baked bean project a statistical analysis of baked beans";
        include('includes/header.php');
    ?>
</head>

<body>
    <?php  
        include('includes/menu.php');
    ?>

    <div class="container text-center my-4">
        <div class="row p-4 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg" style="background-image: url('assets/img/bean-bg2.jpg'); background-size: cover;">
          <div class="p-3 p-lg-5 pt-lg-3">
            <h1 class="display-3 fw-bold lh-1 text-white text-shadow">Baked-Bean</h1>
            <h4 class="text-white text-shadow">A statistical analysis of baked beans</h4>
            <h4 class="text-white text-shadow">Variables range from price to viscosity and everything in-between!</h4>
          </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
				<h2>What is this all about?</h2>
					<p>Well.. the statistical analysis of baked beans is a personal project to identify the best baked beans on the planet, the crème de la crème of beans.</p>
				<h2>Why?</h2>
					<p>Why not. There are so many brands of beans from Heinz to ASDA value what is the difference apart from the price?</p>
				<h2>Comparison points</h2>
					<p>To allow us to record beans and data about them, we have made a list of comparison points that we will use when analysing a tin. From the amount of beans in the tin to the price, not forgetting the bean juice viscosity! We believe this will allow us to determine the best beans without being bias towards name brands.</p>
					<ul>
						<li><strong>Brand</strong> - Brand/Company that manufactures the product. (Text)</li>
						<li><strong>Shop</strong> - Place tin was purchased from. (Text)</li>
						<li><strong>Price At Purchase</strong> - Purchase price to allow tracking trends in price change. (Price)</li>
						<li><strong>Weight Of Full Can</strong> - When still sealed and in the tin. (Weight In Grams)</li>
						<li><strong>Weight Of Empty Can</strong> - When empty and after washing. (Weight In Grams)</li>
						<li><strong>Weight Of Beans (Washed)</strong> - After washing. (Weight In Grams)</li>
						<li><strong>Weight Of Liquid</strong> - Determined using 'Full Can'-'Beans'-'Empty Tin'='Liquid' (Weight In Grams)</li>
						<li><strong>Percentage Of Beans To Liquid</strong> - Determined using weight of beans and liquid. (Percentage)</li>
						<li><strong>Bean Count</strong> - The count of beans within a tin. (Numerical Count)</li>
						<li><strong>Taste Rating</strong> - This needs more research. (Undecided)</li>
						<li><strong>Ingredients Listed</strong> - List of the ingredients as show on the tin. (Text)</li>
						<li><strong>Sauce Viscosity</strong> - This needs more research. (Undecided)</li>
						<li><strong>Pull Ring Tin?</strong> - Does the tin have a ring pull or not? (Yes/No)</li>
						<li><strong>Length Of Best Before Date</strong> - Days left until best before on date of purchase. (In Days)</li>
						<li><strong>Average individual bean weight</strong> - Weight of total washed beans divided by the amount of beans. (Weight In Grams)</li>
						<li><strong>PH Level</strong> - The PH Level of the sauce and yes, we bought a PH meter just for this. (PH Level)</li>
						<li><strong>Height Of Can</strong> - Well... we measure the height of the can. (Centimetres)</li>
						<li><strong>Diameter Of Can</strong> - Is this a joke? It's just the can diameter at the widest point in CM. (Centimetres)</li>
						<li><strong>Can Volume</strong> - This is more interesting... Some maths with the width and height. (Centimetres Cubed)</li>
						<li><strong>Pictures Of The Tin & Contents</strong> - Pictures of the tin, ingredients and contents. (Images)</li>
					</ul>
				<h2>When did this start?</h2>
                    <p>We dreamt up this project way back in 2017 as more of a funny concept/project but its now time to crack on and do some research.</p>

				<h2>Can I help?</h2>
					<p>Sure! You can go get our email address from the Contact page and drop me a line. All help is appreciated, whether you spot a spelling error or want to submit some data, just let us know.</p>
            </div>
        </div>
    </div>

    <hr>

    <?php  
        include('includes/footer.php');
    ?>

</body>

</html>
