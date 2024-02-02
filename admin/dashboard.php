<?php
include("other_inc/head.php")
?>


<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav w-100">
                    <li class="nav-item w-100">
                        <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                            <input type="text" class="form-control" placeholder="Search products">
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">



                    <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                            <div class="navbar-profile">
                                <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                                <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                            <h6 class="p-3 mb-0">Profile</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Settings</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-logout text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Log out</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">Advanced settings</p>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card corona-gradient-card">
                            <div class="card-body py-0 px-0 px-sm-3">
                                <div class="row align-items-center">
                                    <div class="col-4 col-sm-3 col-xl-2">
                                        <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                                    </div>
                                    <div class="col-5 col-sm-7 col-xl-9 p-0">
                                        <h4 class="mb-1 mb-sm-0">"Kim bir Müslümanın ihtiyacını giderirse, Allah da onun ihtiyacını giderir. Kim de bir Müslümanın bir sıkıntısını hafifletirse, Allah da onun sıkıntısını hafifletir." </br> (Buhari, Cihad, 6)</h4>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>Revenue</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">$32123</h2>
                                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>Sales</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">$45850</h2>
                                            <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>Purchase</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">$2039</h2>
                                            <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dernek Üyeleri</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>

                                                <th> Adı </th>
                                                <th> Soyadı </th>
                                                <th> Telefon Numarası </th>
                                                <th> Görevi </th>
                                                <th> Üye Olma Tarihi </th>
                                                <th> Üye Olma Tarihi </th>
                                                <th> Durumu </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>
                                                    <img src="assets/images/faces/face1.jpg" alt="image" />
                                                    <span class="pl-2">Henry Klein</span>
                                                </td>
                                                <td> 02312 </td>
                                                <td> $14,500 </td>
                                                <td> Dashboard </td>
                                                
                                                <td> 04 Dec 2019 </td>
                                                <td>
                                                    <div class="badge badge-outline-success">Approved</div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <img src="assets/images/faces/face2.jpg" alt="image" />
                                                    <span class="pl-2">Estella Bryan</span>
                                                </td>
                                                <td> 02312 </td>
                                                <td> $14,500 </td>
                                                <td> Website </td>
                                                
                                                <td> 04 Dec 2019 </td>
                                                <td>
                                                    <div class="badge badge-outline-warning">Pending</div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <img src="assets/images/faces/face5.jpg" alt="image" />
                                                    <span class="pl-2">Lucy Abbott</span>
                                                </td>
                                                <td> 02312 </td>
                                                <td> $14,500 </td>
                                                <td> App design </td>
                                                
                                                <td> 04 Dec 2019 </td>
                                                <td>
                                                    <div class="badge badge-outline-danger">Rejected</div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <img src="assets/images/faces/face3.jpg" alt="image" />
                                                    <span class="pl-2">Peter Gill</span>
                                                </td>
                                                <td> 02312 </td>
                                                <td> $14,500 </td>
                                                <td> Development </td>
                                                
                                                <td> 04 Dec 2019 </td>
                                                <td>
                                                    <div class="badge badge-outline-success">Approved</div>
                                                </td>
                                               
                                            </tr>
                                            <tr>

                                                <td>
                                                    <img src="assets/images/faces/face4.jpg" alt="image" />
                                                    <span class="pl-2">Sallie Reyes</span>
                                                </td>
                                                <td> 02312 </td>
                                                <td> $14,500 </td>
                                                <td> Website </td>
                                                
                                                <td> 04 Dec 2019 </td>
                                                <td>
                                                    <div class="badge badge-outline-success">Approved</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row justify-content-between">
                                    <h4 class="card-title">Messages</h4>
                                    <p class="text-muted mb-1 small">View all</p>
                                </div>
                                <div class="preview-list">
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <img src="assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                                        </div>
                                        <div class="preview-item-content d-flex flex-grow">
                                            <div class="flex-grow">
                                                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                    <h6 class="preview-subject">Leonard</h6>
                                                    <p class="text-muted text-small">5 minutes ago</p>
                                                </div>
                                                <p class="text-muted">Well, it seems to be working now.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <img src="assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                                        </div>
                                        <div class="preview-item-content d-flex flex-grow">
                                            <div class="flex-grow">
                                                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                    <h6 class="preview-subject">Luella Mills</h6>
                                                    <p class="text-muted text-small">10 Minutes Ago</p>
                                                </div>
                                                <p class="text-muted">Well, it seems to be working now.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <img src="assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                                        </div>
                                        <div class="preview-item-content d-flex flex-grow">
                                            <div class="flex-grow">
                                                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                    <h6 class="preview-subject">Ethel Kelly</h6>
                                                    <p class="text-muted text-small">2 Hours Ago</p>
                                                </div>
                                                <p class="text-muted">Please review the tickets</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <img src="assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                                        </div>
                                        <div class="preview-item-content d-flex flex-grow">
                                            <div class="flex-grow">
                                                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                    <h6 class="preview-subject">Herman May</h6>
                                                    <p class="text-muted text-small">4 Hours Ago</p>
                                                </div>
                                                <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Portfolio Slide</h4>
                                <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                                    <div class="item">
                                        <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/dashboard/Img_5.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/dashboard/img_6.jpg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex py-4">
                                    <div class="preview-list w-100">
                                        <div class="preview-item p-0">
                                            <div class="preview-thumbnail">
                                                <img src="assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="preview-item-content d-flex flex-grow">
                                                <div class="flex-grow">
                                                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                        <h6 class="preview-subject">CeeCee Bass</h6>
                                                        <p class="text-muted text-small">4 Hours Ago</p>
                                                    </div>
                                                    <p class="text-muted">Well, it seems to be working now.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted">Well, it seems to be working now. </p>
                                <div class="progress progress-md portfolio-progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">To do list</h4>
                                <div class="add-items d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                                    <button class="add btn btn-primary todo-list-add-btn">Add</button>
                                </div>
                                <div class="list-wrapper">
                                    <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                                        <li>
                                            <div class="form-check form-check-primary">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Create invoice </label>
                                            </div>
                                            <i class="remove mdi mdi-close-box"></i>
                                        </li>
                                        <li>
                                            <div class="form-check form-check-primary">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                                            </div>
                                            <i class="remove mdi mdi-close-box"></i>
                                        </li>
                                        <li class="completed">
                                            <div class="form-check form-check-primary">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                                            </div>
                                            <i class="remove mdi mdi-close-box"></i>
                                        </li>
                                        <li>
                                            <div class="form-check form-check-primary">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                                            </div>
                                            <i class="remove mdi mdi-close-box"></i>
                                        </li>
                                        <li>
                                            <div class="form-check form-check-primary">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                                            </div>
                                            <i class="remove mdi mdi-close-box"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Visitors by Countries</h4>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <i class="flag-icon flag-icon-us"></i>
                                                        </td>
                                                        <td>USA</td>
                                                        <td class="text-right"> 1500 </td>
                                                        <td class="text-right font-weight-medium"> 56.35% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <i class="flag-icon flag-icon-de"></i>
                                                        </td>
                                                        <td>Germany</td>
                                                        <td class="text-right"> 800 </td>
                                                        <td class="text-right font-weight-medium"> 33.25% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <i class="flag-icon flag-icon-au"></i>
                                                        </td>
                                                        <td>Australia</td>
                                                        <td class="text-right"> 760 </td>
                                                        <td class="text-right font-weight-medium"> 15.45% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <i class="flag-icon flag-icon-gb"></i>
                                                        </td>
                                                        <td>United Kingdom</td>
                                                        <td class="text-right"> 450 </td>
                                                        <td class="text-right font-weight-medium"> 25.00% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <i class="flag-icon flag-icon-ro"></i>
                                                        </td>
                                                        <td>Romania</td>
                                                        <td class="text-right"> 620 </td>
                                                        <td class="text-right font-weight-medium"> 10.25% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <i class="flag-icon flag-icon-br"></i>
                                                        </td>
                                                        <td>Brasil</td>
                                                        <td class="text-right"> 230 </td>
                                                        <td class="text-right font-weight-medium"> 75.00% </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div id="audience-map" class="vector-map"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<?php
include("other_inc/footer.php")
?>