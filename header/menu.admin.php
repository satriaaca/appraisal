<?php
  function generateURI($slug){
    echo "dashboard.php?".$slug;
  }
?>

<div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php generateURI('page=main'); ?>" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="<?php generateURI('page=about'); ?>" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="<?php generateURI('page=profiles'); ?>" class="nav-link">Profile</a>
          </li>
          <li class="nav-item">
            <a href="<?php generateURI('page=history'); ?>" class="nav-link">History</a>
          </li>
          <li class="nav-item dropdown">
            <a id="Appraisal" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Appraisal</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?php generateURI('page=add-appraisal'); ?>" class="dropdown-item">Create New </a></li>
              <li><a href="<?php generateURI('page=view-appraisal'); ?>" class="dropdown-item">View Appraisal </a></li>
              <li><a href="<?php generateURI('page=strength-weakness'); ?>" class="dropdown-item">Strength & Weakness </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a id="Appraisal" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Questions</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?php generateURI('page=add-question'); ?>" class="dropdown-item">Create New </a></li>
              <li><a href="<?php generateURI('page=view-question'); ?>" class="dropdown-item">View Questtion </a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/objectives.html" class="nav-link">Objectives</a>
          </li>
</ul>
