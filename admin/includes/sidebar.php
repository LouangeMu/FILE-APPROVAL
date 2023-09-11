
<div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="../img/admin.jpg" alt="" />
                    </a>
                    <h3><?php echo $_SESSION['username']?></h3>
                    <p>Administrator</p>
                    <strong>STMP</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="index.php" ><i class="fa big-icon fa-tachometer"></i> <span class="mini-dn">Dashboard</span> </span></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="department.php" ><i class="fa big-icon fa-building"></i> <span class="mini-dn">Department</span> </span></a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="category.php" ><i class="fa big-icon fa-windows"></i> <span class="mini-dn">Category</span> </span></a>
                        </li> -->
                        <li class="nav-item">
                            <a href="manager-customers.php" ><i class="fa big-icon fa-users"></i> <span class="mini-dn">Clients</span> </span></a>
                        </li>
                        <li class="nav-item">
                            <a href="approver-user.php" ><i class="fa big-icon fa-user"></i> <span class="mini-dn">Engineers</span> </span></a>
                        </li>
                        <li class="nav-item">
                            <a href="files.php" ><i class="fa big-icon fa-folder"></i> <span class="mini-dn">New Projects</span> </span></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="comments.php" ><i class="fa big-icon fa-file"></i> <span class="mini-dn">Reports</span> </span></a>
                        </li> -->
                        <li class="nav-item">
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa big-icon fa-file"></i> <span class="mini-dn">Report</span> </span></a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                       
                        <li>
                            <a href="openpro.php">Open projects</a>
                        </li>

                        <li>
                            <a href="closedpro.php">Completed projects</a>
                        </li>

                        <li>
                            <a href="asshist.php">Assign History</a>
                        </li>
                       
                        
                    </ul>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="settings.php" ><i class="fa big-icon fa-cog"></i> <span class="mini-dn">Settings</span> </span></a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="department-report.php" ><i class="fa big-icon fa-bar-chart"></i> <span class="mini-dn">Department Reports</span> </span></a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="status-report.php" ><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Status Reports</span> </span></a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </div>
