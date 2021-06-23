<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Welcome <?php echo(isset($_SESSION["isWho"]))? $_SESSION["isWho"] : "Admin";?>!</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <!-- Overview Section -->
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card bg-one">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="db-info">
                            <h3>505</h3>
                            <h6>Patients</h6>
                        </div>										
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card bg-two">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <div class="db-info">
                            <h3>5</h3>
                            <h6>Hospitals</h6>
                        </div>										
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card bg-three">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="db-info">
                            <h3>3</h3>
                            <h6>Agencies</h6>
                        </div>										
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card bg-four">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <div class="db-info">
                            <h3>$105</h3>
                            <h6>Chimoney GiveAway</h6>
                        </div>										
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Overview Section -->				

                        
    <div class="row">
        <div class="col-md-6 d-flex">						
            <!-- Star Students -->
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title">Active Hospitals</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th class="text-center">State</th>
                                    <th class="text-center">State</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-nowrap">
                                        <div>001</div>
                                    </td>
                                    <td class="text-nowrap">John Smith Hospitals</td>
                                    <td class="text-center">Nasarawa State</td>
                                    <td class="text-right">
                                        <a href="">View</a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Star Students -->							
        </div>

        <div class="col-md-6 d-flex">						
            <!-- Feed Activity -->
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title">Agencies Activities</h5>
                </div>
                <div class="card-body">
                    <ul class="activity-feed">
                        <li class="feed-item">
                            <div class="feed-date">Nil</div>
                            <span class="feed-text">No activity has been recorded</span>
                        </li>
                        <!-- <li class="feed-item">
                            <div class="feed-date">Mar 21</div>
                            <span class="feed-text"><a>Justin Lee</a> participated in <a href="invoice.html">"Carrom"</a></span>
                        </li> -->
                    </ul>
                </div>
            </div>
            <!-- /Feed Activity -->							
        </div>
    </div>
</div>