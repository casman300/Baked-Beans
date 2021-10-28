<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top<?php if ($pagename !== "Home/About") {echo " navbar-dark";}?>">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Baked-Bean</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php if ($pagename == "Home/About") {echo " active";}?>">
                    <a href="index.php">Home / About</a>
                </li>
                <!--<li>
                    <a href="graphs.php">Graphs</a>
                </li>
                <li>
                    <a href="raw-data.php">Raw Data</a>
                </li>--->
                <li class="<?php if ($pagename == "Analysis") {echo " active";}?>">
                    <a href="analysis.php">Analysis Process</a>
                </li>
                <li>
                    <a href="https://github.com/casman300/Baked-Beans">View on GitHub</a>
                </li>
                <li class="<?php if ($pagename == "Contact") {echo " active";}?>">
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
