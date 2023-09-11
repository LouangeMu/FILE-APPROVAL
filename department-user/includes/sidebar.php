<div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                <a href="#"><img src="../img/default-user-icon-4 (1).jpg" alt="" />
                    </a>
                    <h3><?php echo $_SESSION['username']?></h3>
                    <p>Engineer</p>
                    <strong>FM</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="index.php" ><i class="fa big-icon fa-tachometer"></i> <span class="mini-dn">Dashboard</span> </span></a>
                        </li>
                        <li class="nav-item">
                            <a href="files.php" ><i class="fa big-icon fa-folder-open"></i> <span class="mini-dn">Open Projects</span> </span></a>
                        </li>

                        <li class="nav-item">
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa big-icon fa-file"></i> <span class="mini-dn">Report</span> </span></a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                       
                        <li>
                            <a href="engclosed.php">Closed projects</a>
                        </li>

                        <!-- <li>
                            <a href="closedpro.php">Completed projects</a>
                        </li>

                        <li>
                            <a href="asshist.php">Assign History</a>
                        </li> -->
                       
                        
                    </ul>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="upload-files.php" ><i class="fa big-icon fa-file"></i> <span class="mini-dn">Upload Files</span> </span></a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </div>
