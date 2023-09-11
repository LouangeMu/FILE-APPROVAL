<!doctype html>
<html class="no-js" lang="en">

<?php include 'includes/header.php' ?>
<link rel="stylesheet" href="../css/c3.min.css">

<body class="materialdesign">

    <?php include 'includes/sidebar.php' ?>
    <?php include 'includes/topbar.php' ?>

    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Department Reports</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->

    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30 des-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Department Reports</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->

    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1><i class="fa big-icon fa-bar-chart"></i> Department Reports</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">

                                <div class="row">
                                    <div class="col-lg-4">
                                    <table data-toggle="table">
                                            <thead>
                                                <tr>
                                                    <th>Department</th>
                                                    <th>Files</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Department 1</td>
                                                    <td>25</td>
                                                </tr>
                                                <tr>
                                                    <td>Department 2</td>
                                                    <td>55</td>
                                                </tr>
                                                <tr>
                                                    <td>Department 3</td>
                                                    <td>15</td>
                                                </tr>
                                                <tr>
                                                    <td>Department 4</td>
                                                    <td>30</td>
                                                </tr>
                                                <tr>
                                                    <td>Department 5</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <td>Department 6</td>
                                                    <td>29</td>
                                                </tr>
                                                <tr>
                                                    <td>Department 7</td>
                                                    <td>54</td>
                                                </tr>
                                                <tr>
                                                    <td>Department 8</td>
                                                    <td>34</td>
                                                </tr>
                                                <tr>
                                                    <td>Department 9</td>
                                                    <td>45</td>
                                                </tr>
                                                <tr>
                                                    <td>Department 10</td>
                                                    <td>64</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="sparkline8-list shadow-reset">
                                            <div class="sparkline8-hd">
                                                <div class="main-sparkline8-hd">
                                                    <h1>Number of file by Department</h1>
                                                </div>
                                            </div>
                                            <div class="sparkline8-graph">
                                                <div id="stocked"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->
    </div>
    </div>


    <?php include 'includes/footer.php' ?>
    <script src="../js/c3-charts/d3.min.js"></script>
    <script src="../js/c3-charts/c3.min.js"></script>
    <script src="../js/c3-charts/c3-active.js"></script>
</body>

</html>