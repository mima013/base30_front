<?php include "parts/header.php"; ?>

<div class="main-wrapper">

    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Dashboard</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                    <div class="profile-sidebar">
                        <div class="user-widget">
                            <div class="pro-avatar">
                                <img src="assets/img/user/user9.jpg" class="img-fluid rounded-circle" alt="photo de profil">
                            </div>
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="user-info-cont">
                                <h4 class="usr-name">Jonathan Doe</h4>
                                <p class="mentor-type">English Literature (M.A)</p>
                            </div>
                        </div>
                        <div class="progress-bar-custom">
                            <h6>Complete your profiles ></h6>
                            <div class="pro-progress">
                                <div class="tooltip-toggle" tabindex="0"></div>
                                <div class="tooltip">80%</div>
                            </div>
                        </div>
                        <div class="custom-sidebar-nav">
                            <ul>
                                <li><a href="dashboard.html" class="active"><i class="fas fa-home pe-1"></i>Dashboard <span><i class="fas fa-chevron-right"></i></span></a></li>
                                <li><a href="bookings.html"><i class="fas fa-clock pe-1"></i>Bookings <span><i class="fas fa-chevron-right"></i></span></a></li>
                                <li><a href="chat.html"><i class="fas fa-comments pe-1"></i>Messages <span><i class="fas fa-chevron-right"></i></span></a></li>
                                <li><a href="blog.html"><i class="fab fa-blogger-b pe-1"></i>Blog <span><i class="fas fa-chevron-right"></i></span></a></li>
                                <li><a href="profile-mentee.php"><i class="fas fa-user-cog pe-1"></i>Profile <span><i class="fas fa-chevron-right"></i></span></a></li>
                                <li><a href="login.php"><i class="fas fa-sign-out-alt pe-1"></i>Logout <span><i class="fas fa-chevron-right"></i></span></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-md-12 col-lg-4 dash-board-list blue">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h3>23</h3>
                                    <h6>Members</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 dash-board-list yellow">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i class="fas fa-calendar-check"></i>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h3>33</h3>
                                    <h6>Appointments</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 dash-board-list pink">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i class="fas fa-wallet"></i>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h3>$14</h3>
                                    <h6>Total Earned</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="mb-4">Mentee Lists</h4>
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                            <tr>
                                                <th>BASIC INFO</th>
                                                <th>CREATED DATE</th>
                                                <th class="text-center">TAGS</th>
                                                <th class="text-center">ACTION</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile-mentee.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user2.jpg" alt="User Image"></a>
                                                            <a href="profile-mentee.php">Tyrone Roberts
                                                                <span>emmanuelkisimba2807@gmail.com</span>
                                                            </a>
                                                        </h2>
                                                    </td>
                                                    <td>08 April 2020</td>
                                                    <td class="text-center"><span class="pending">PENDING</span></td>
                                                    <td class="text-center"><a href="profile-mentee.php" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile-mentee.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user3.jpg" alt="User Image"></a>
                                                            <a href="profile-mentee.php">Tyrone Roberts
                                                                <span>emmanuelkisimba2807@gmail.com</span>
                                                            </a>
                                                        </h2>
                                                    </td>
                                                    <td>08 April 2020</td>
                                                    <td class="text-center"><span class="accept">PENDING</span></td>
                                                    <td class="text-center"><a href="profile-mentee.php" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile-mentee.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user4.jpg" alt="User Image"></a>
                                                            <a href="profile-mentee.php">Tyrone Roberts
                                                                <span>emmanuelkisimba2807@gmail.com</span>
                                                            </a>
                                                        </h2>
                                                    </td>
                                                    <td>08 April 2020</td>
                                                    <td class="text-center"><span class="accept">PENDING</span></td>
                                                    <td class="text-center"><a href="profile-mentee.php" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile-mentee.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user7.jpg" alt="User Image"></a>
                                                            <a href="profile-mentee.php">Tyrone Roberts
                                                                <span>emmanuelkisimba2807@gmail.com</span>
                                                            </a>
                                                        </h2>
                                                    </td>
                                                    <td>08 April 2020</td>
                                                    <td class="text-center"><span class="accept">PENDING</span></td>
                                                    <td class="text-center"><a href="profile-mentee.php" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile-mentee.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user6.jpg" alt="User Image"></a>
                                                            <a href="profile-mentee.php">Tyrone Roberts
                                                                <span>emmanuelkisimba2807@gmail.com</span>
                                                            </a>
                                                        </h2>
                                                    </td>
                                                    <td>08 April 2020</td>
                                                    <td class="text-center"><span class="reject">PENDING</span></td>
                                                    <td class="text-center"><a href="profile-mentee.php" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
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

<?php include "parts/footer.php"; ?>
