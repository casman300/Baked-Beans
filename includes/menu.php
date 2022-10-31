<nav class="navbar navbar-expand-lg bg-light navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Baked-Bean</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link<?php if ($pagename == "Home/About") {echo " active";}?>" href="index.php">Home/About</a>
        <a class="nav-link<?php if ($pagename == "Data List") {echo " active";}?>" href="RecordList.php">Test Data List</a>
        <a class="nav-link<?php if ($pagename == "Analysis") {echo " active";}?>" href="analysis.php">Analysis Process</a>
        <a class="nav-link<?php if ($pagename == "Contact") {echo " active";}?>" href="contact.php">Contact</a>
      </div>
    </div>
  </div>
</nav>
