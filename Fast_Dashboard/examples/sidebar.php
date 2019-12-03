<?php 

require_once('../examples/connection.php');
$idd=$_SESSION['user_role_id'];
?>

<div class="sidebar" data-color="white" data-active-color="danger">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="../assets/img/logo-small.png">
            </div>
        </a>
        <a href="#" class="simple-text logo-normal">
        FAST- KHI 
            <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
        <?php
		if($idd ==1){
            ?>
            
            <li>
                <a href="./dashboard.php">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="./teachers.php">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Teachers</p>
                </a>
            </li>
            
            <li>
                <a href="./departments.php">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Departments</p>
                </a>
            </li>
            <li>
                <a href="./user.php">
                    <i class="nc-icon nc-single-02"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li>
                <a href="./typography.html">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Batch</p>
                </a>
            </li>
            
            <?php
        };
		if($idd == 1 ||$idd == 2||$idd == 3){
            ?>

<?php
		if($idd !=3){
            ?>
            <li>
                <a href="./students.php">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Students</p>
                </a>
            </li>
        <?php }; ?>
            <li>
                <a href="./proposal.php">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Proposals</p>
                </a>
            </li>
            <li>
                <a href="../login/login.php?logout=true">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Logout</p>
                </a>
            </li>
            <?php }; ?>

           
            <!-- <li class="active-pro">
            <a href="./upgrade.html">
              <i class="nc-icon nc-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
    </div>
</div>