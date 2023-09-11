<div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                <a href="#"><img src="../img/default-user-icon-4 (1).jpg" alt="" />
                    </a>
                    <h3><?php echo $_SESSION['username']?></h3>
                    <p> User</p>
                    <strong>FM</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav navbar-expand-lg left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="index.php" ><i class="fa big-icon fa-tachometer"></i> <span class="mini-dn">Dashboard</span> </span></a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa big-icon fa-folder-open"></i> <span class="mini-dn">Projects</span> </span></a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="upload-files.php">Add New</a>
                        </li>
                        <li>
                            <a href="files.php">Open projects</a>
                        </li>
                        <li>
                            <a href="custoclose.php">Closed projects</a>
                        </li>
                       
                        
                    </ul>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="approve.php" ><i class="fa big-icon fa-thumbs-up"></i> <span class="mini-dn">Approved Files</span> </span></a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="pending.php" ><i class="fa big-icon fa-file"></i> <span class="mini-dn">Pending Files</span> </span></a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="for-review.php" ><i class="fa big-icon fa-eye"></i> <span class="mini-dn">For Review Files</span> </span></a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </div>
