<?php
if($_SESSION["isWho"] == "hospital"){
    ?>

    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title"> 
                        <span>Main Menu</span>
                    </li>
                    <li class="active"> 
                        <a href="index.html"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fas fa-hotel"></i> <span> Patients</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="students.html">Add Patients</a></li>
                            <li><a href="student-details.html">View Patients</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fas fa-building"></i> <span> Staffs</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="students.html">Add Staffs</a></li>
                            <li><a href="student-details.html">View Staffs</a></li>
                        </ul>
                    </li>
    
    
                    <li class="menu-title"> 
                        <span>Settings</span>
                    </li>
                    <li> 
                        <a href="login.php"><i class="fas fa-power-off"></i> <span>Logout</span></a>
                    </li>
    
                    <li class="menu-title"> 
                        <span>Upcoming feature</span>
                    </li>
    
    
                </ul>
            </div>
        </div>
    </div>
        <?php
}else if($_SESSION["isWho"] == "agency"){
    ?>

    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title"> 
                        <span>Main Menu</span>
                    </li>
                    <li class="active"> 
                        <a href="index.html"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fas fa-hotel"></i> <span> Hospitals</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="students.html">Add Hospitals</a></li>
                            <li><a href="student-details.html">View Hospitals</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fas fa-building"></i> <span> Patients</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="students.html">Add Patients</a></li>
                            <li><a href="student-details.html">View Patients</a></li>
                        </ul>
                    </li>

                    <li class="menu-title"> 
                        <span>Auto Reports</span>
                    </li>
                    <li> 
                        <a href="components.html"><i class="fas fa-vector-square"></i> <span>Patients report</span></a>
                    </li>
    
    
                    <li class="menu-title"> 
                        <span>Settings</span>
                    </li>
                    <li> 
                        <a href="login.php"><i class="fas fa-power-off"></i> <span>Logout</span></a>
                    </li>
    
                    <li class="menu-title"> 
                        <span>Upcoming feature</span>
                    </li>
    
    
                </ul>
            </div>
        </div>
    </div>
        <?php
}else{
    ?>

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> 
                    <span>Main Menu</span>
                </li>
                <li class="active"> 
                    <a href="index.html"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-hotel"></i> <span> Hospitals</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="students.html">Add Hospitals</a></li>
                        <li><a href="student-details.html">View Hospitals</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-building"></i> <span> Agencies</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="students.html">Add Agencies</a></li>
                        <li><a href="student-details.html">View Agencies</a></li>
                    </ul>
                </li>


                <li class="menu-title"> 
                    <span>Settings</span>
                </li>
                <li> 
                    <a href="components.html"><i class="fas fa-vector-square"></i> <span>Administrators</span></a>
                </li>
                <li> 
                    <a href="login.php"><i class="fas fa-power-off"></i> <span>Logout</span></a>
                </li>

                <li class="menu-title"> 
                    <span>Upcoming feature</span>
                </li>


            </ul>
        </div>
    </div>
</div>
    <?php
}
?>