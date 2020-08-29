
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b style="font-size: 20px;">MICO <span>DOCTORS APPOINTMENT SYSTEM</span></b></a>
      <!--logo end-->
  
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a><?php echo $row['firstname'];?></a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="bookform.php">
              <i class="fa fa-desktop"></i>
              <span>make appointment</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Message</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>View profile information</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>about</span>
              </a>
            
          </li>

           <li class="sub-menu">
            <a href="logout.php">
              <i class="fa fa-power-off"></i>
              <span>logout</span>
              </a>
            
          </li>
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>