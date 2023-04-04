<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use richardfan\widget\JSRegister;

$this->title = 'Test App';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Welcome </h1>

    </div>
    <div><br><br></div>

    <div class="body-content">

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                        <div class="position-relative">
                            <i class="align-middle" data-feather="bell"></i>
                            <span class="indicator">4</span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                        <div class="dropdown-menu-header">
                            4 New Notifications
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-danger" data-feather="alert-circle"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Update completed</div>
                                        <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                        <div class="text-muted small mt-1">30m ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-warning" data-feather="bell"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Lorem ipsum</div>
                                        <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                        <div class="text-muted small mt-1">2h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-primary" data-feather="home"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Login from 192.186.1.8</div>
                                        <div class="text-muted small mt-1">5h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-success" data-feather="user-plus"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">New connection</div>
                                        <div class="text-muted small mt-1">Christina accepted your request.</div>
                                        <div class="text-muted small mt-1">14h ago</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-menu-footer">
                            <a href="#" class="text-muted">Show all notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                        <div class="position-relative">
                            <i class="align-middle" data-feather="message-square"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                        <div class="dropdown-menu-header">
                            <div class="position-relative">
                                4 New Messages
                            </div>
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                    </div>
                                    <div class="col-10 ps-2">
                                        <div class="text-dark">Vanessa Tucker</div>
                                        <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                                        <div class="text-muted small mt-1">15m ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
                                    </div>
                                    <div class="col-10 ps-2">
                                        <div class="text-dark">William Harris</div>
                                        <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                                        <div class="text-muted small mt-1">2h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
                                    </div>
                                    <div class="col-10 ps-2">
                                        <div class="text-dark">Christina Mason</div>
                                        <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                                        <div class="text-muted small mt-1">4h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                                    </div>
                                    <div class="col-10 ps-2">
                                        <div class="text-dark">Sharon Lessman</div>
                                        <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                                        <div class="text-muted small mt-1">5h ago</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-menu-footer">
                            <a href="#" class="text-muted">Show all messages</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                        <i class="align-middle" data-feather="settings"></i>
                    </a>

                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                        <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
        </nav>

        <main class="content">
            <div class="container-fluid p-0">
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                    <div class="col">
                        <div class="card h-100">
                            <img class="card-img-top" src="../views/img/strawberry.png" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Strawberry</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img class="card-img-top" src="../views/img/melon.png" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Melon</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img class="card-img-top" src="../views/img/semangka.png" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Semangka</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img class="card-img-top" src="../views/img/kelapa.png" alt="Carddadwa" />
                            <div class="card-body">
                                <h5 class="card-title">Kelapa</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img class="card-img-top" src="../views/img/mangga.png" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Mangga</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img class="card-img-top" src="../views/img/pisang.png" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Pisang</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Headings</h5>
                                <h6 class="card-subtitle text-muted">Lorem Ipsum</h6>
                            </div>
                            <div class="card-body">
                                <h1>Heading 1</h1>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                                <h2>Heading 2</h2>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                                <h3>Heading 3</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                                <h4>Heading 4</h4>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        <br>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <h6 class="card-subtitle text-muted">lorem Ipsum</h6>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-12 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <h6 class="card-subtitle text-muted">Lorem Ipsum</h6>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet <mark>consectetur</mark> consectetur elit.</p>
                                <p><del>Lorem ipsum dolor sit amet, consectetur adipiscing elit</del></p>
                                <p><ins>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</ins></p>
                                <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit</strong></p>
                                <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit</em></p>
                            </div>
                        </div><br>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <h6 class="card-subtitle text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h6>
                            </div>
                            <div class="card-body">
                                <blockquote>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    </p>
                                    <footer>
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                    </footer>
                                </blockquote>
                                <p class="text-muted m-b-15 m-t-20">
                                    Add <code>.Lorem Ipsum</code> Integer posuere erat a ante.
                                </p>
                                <blockquote class="blockquote-reverse m-b-0">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    </p>
                                    <footer>
                                        Lorem ipsum dolor sit amet <cite title="Source Title">Integer posuere erat a ante.</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <h6 class="card-subtitle text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h6>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <h6 class="card-subtitle text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h6>
                            </div>
                            <div class="card-body">
                                <ol>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>

                <center>
                    <br><br>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-0">Bar Chart</h4>

                                <div class="row text-center mt-4">
                                    <div class="col-4">
                                        <h5 class="mb-0 font-size-18">86541</h5>
                                        <p class="text-muted text-truncate">Activated</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0 font-size-18">2541</h5>
                                        <p class="text-muted text-truncate">Pending</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0 font-size-18">102030</h5>
                                        <p class="text-muted text-truncate">Deactivated</p>
                                    </div>
                                </div>

                                <div id="chart" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                </center>
                <!-- end col -->

                <!-- <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-0">Stacked Area Chart</h4>

                        <div class="row text-center mt-4">
                            <div class="col-4">
                                <h5 class="mb-0 font-size-18">86541</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-18">2541</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-18">102030</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <div id="chart-stacked" dir="ltr"></div>

                    </div>
                </div>
            </div> -->
                <!-- end col -->
            </div>
            <!-- <div class="row pt-2 pb-1">
                <div class="col-lg-4">
                    <h2>Heading</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>

                    <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <h2>Heading</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>

                    <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <h2>Heading</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>

                    <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
                </div>
            </div> -->
            <!-- <div class="row">
                <div class="col-lg-12 b-1">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->

    </div>
</div>
<?php JSRegister::begin() ?>
<script>
    ! function(e) {
        "use strict";

        function t() {}
        t.prototype.init = function() {
            c3.generate({
                    bindto: "#chart",
                    data: {
                        columns: [
                            ["Desktop", 150, 80, 70, 152, 250, 95],
                            ["SmartPhone", 260, 50, 100, 152, 250, 300],
                            ["Mobile", 200, 130, 90, 240, 130, 220],
                            ["Tablet", 300, 200, 160, 400, 250, 250]
                        ],
                        type: "bar",
                        colors: {
                            Desktop: "#f0f1f4",
                            SmartPhone: "#000000",
                            Mobile: "#2f8ee0",
                            Tablet: "#4bbbce"
                        }
                    }
                }),
                //  c3.generate({
                //     bindto: "#combine-chart",
                //     data: {
                //         columns: [
                //             ["SonyVaio", 30, 20, 50, 40, 60, 50],
                //             ["iMacs", 200, 130, 90, 240, 130, 220],
                //             ["Tablets", 300, 200, 160, 400, 250, 250],
                //             ["iPhones", 200, 130, 90, 240, 130, 220],
                //             ["Macbooks", 130, 120, 150, 140, 160, 150]
                //         ],
                //         types: {
                //             SonyVaio: "bar",
                //             iMacs: "bar",
                //             Tablets: "spline",
                //             iPhones: "line",
                //             Macbooks: "bar"
                //         },
                //         colors: {
                //             SonyVaio: "#f0f1f4",
                //             iMacs: "#2f8ee0",
                //             Tablets: "#4bbbce",
                //             iPhones: "#f1463c",
                //             Macbooks: "#6fd08b"
                //         },
                //         groups: [
                //             ["SonyVaio", "iMacs"]
                //         ]
                //     },
                //     axis: {
                //         x: {
                //             type: "categorized"
                //         }
                //     }
                c3.generate({
                    bindto: "#roated-chart",
                    data: {
                        columns: [
                            ["Revenue", 30, 200, 100, 400, 150, 250],
                            ["Pageview", 50, 20, 10, 40, 15, 25]
                        ],
                        types: {
                            Revenue: "bar"
                        },
                        colors: {
                            Revenue: "#f0f1f4",
                            Pageview: "#4bbbce"
                        }
                    },
                    axis: {
                        rotated: !0,
                        x: {
                            type: "categorized"
                        }
                    }
                }), c3.generate({
                    bindto: "#chart-stacked",
                    data: {
                        columns: [
                            ["Revenue", 130, 120, 150, 140, 160, 150, 130, 120, 150, 140, 160, 150],
                            ["Pageview", 200, 130, 90, 240, 130, 220, 200, 130, 90, 240, 130, 220]
                        ],
                        types: {
                            Revenue: "area-spline",
                            Pageview: "area-spline"
                        },
                        colors: {
                            Revenue: "#f0f1f4",
                            Pageview: "#4dbbcd"
                        }
                    }
                }), c3.generate({
                    bindto: "#donut-chart",
                    data: {
                        columns: [
                            ["Desktops", 78],
                            ["SmartPhone", 55],
                            ["Mobiles", 40],
                            ["Tablets", 25]
                        ],
                        type: "donut"
                    },
                    donut: {
                        title: "Candidates",
                        width: 30,
                        label: {
                            show: !1
                        }
                    },
                    color: {
                        pattern: ["#f0f1f4", "#2f8ee0", "#4bbbce", "#8861dd"]
                    }
                }), c3.generate({
                    bindto: "#pie-chart",
                    data: {
                        columns: [
                            ["Desktops", 78],
                            ["SmartPhone", 55],
                            ["Mobiles", 40],
                            ["Tablets", 25]
                        ],
                        type: "pie"
                    },
                    color: {
                        pattern: ["#f0f1f4", "#2f8ee0", "#4bbbce", "#8861dd"]
                    },
                    pie: {
                        label: {
                            show: !1
                        }
                    }
                })
        }, e.ChartC3 = new t, e.ChartC3.Constructor = t
    }(window.jQuery),
    function() {
        "use strict";
        window.jQuery.ChartC3.init()
    }();
</script>
<?php JSRegister::end() ?>