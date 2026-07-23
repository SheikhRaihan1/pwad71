<li class="nav-item">
    <a href="<?php echo $base_url?>/home" class="nav-link <?php
      echo $_GET["class"] == "home" ? "active":"" ?>">
      <i class="nav-icon fa fa-th"></i>
      <p>
        Dashboard
      </p>
    </a>
</li>


<li class="nav-item">
    <a href="<?php echo $base_url?>warehouse" class="nav-link">
        <i class="nav-icon fa fa-th"></i>
        <p>
          warehouse
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo $base_url?>/logout.php" class="nav-link">
        <i class="nav-icon fa fa-th"></i>
        <p>
          Logout
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo $base_url?>/company" class="nav-link  <?php
      echo $_GET["class"] == "company" ? "active":"" ?>  " >
        <i class="nav-icon fa fa-th"></i>
        <p>
          company
        </p>
    </a>
</li>