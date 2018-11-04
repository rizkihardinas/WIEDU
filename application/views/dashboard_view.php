<?php 
$this->load->view('parts/header');
$this->load->view('parts/menu');
 ?>
<!--Sidebar End-->
<div class="has-sidebar-left">
    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
              <div class="search-bar">
                  <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                         placeholder="start typing...">
              </div>
              <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                 aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
          </div>
      </div>
    </div>
    <div class="sticky">
        <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
            <div class="relative">
                <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                    <i></i>
                </a>
            </div>
            <!--Top Menu Start -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages-->
                    <li class="dropdown custom-dropdown messages-menu">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                               <i class="icon-message "></i>
                               <span class="badge badge-success badge-mini rounded-circle">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu pl-2 pr-2">
                                    <!-- start message -->
                                    <li>
                                        <a href="#">
                                            <div class="avatar float-left">
                                                <img src="assets/img/dummy/u4.png" alt="">
                                                <span class="avatar-badge busy"></span>
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <!-- start message -->
                                    <li>
                                        <a href="#">
                                            <div class="avatar float-left">
                                                <img src="assets/img/dummy/u1.png" alt="">
                                                <span class="avatar-badge online"></span>
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <!-- start message -->
                                    <li>
                                        <a href="#">
                                            <div class="avatar float-left">
                                                <img src="assets/img/dummy/u2.png" alt="">
                                                <span class="avatar-badge idle"></span>
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <!-- start message -->
                                    <li>
                                        <a href="#">
                                            <div class="avatar float-left">
                                                <img src="assets/img/dummy/u3.png" alt="">
                                                <span class="avatar-badge busy"></span>
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                            </li>
                            <li class="footer s-12 p-2 text-center"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications -->
                    <li class="dropdown custom-dropdown notifications-menu">
                        <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                            <i class="icon-notifications "></i>
                            <span class="badge badge-danger badge-mini rounded-circle">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon icon-data_usage text-success"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon icon-data_usage text-danger"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon icon-data_usage text-yellow"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer p-2 text-center"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
                           aria-controls="navbarToggleExternalContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                            <i class=" icon-search3 "></i>
                        </a>
                    </li>
                    <!-- Right Sidebar Toggle Button -->
                    <li>
                        <a class="nav-link ml-2" data-toggle="control-sidebar">
                            <i class="icon-tasks "></i>
                        </a>
                    </li>
                    <!-- User Account-->
                    <li class="dropdown custom-dropdown user user-menu ">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="assets/img/dummy/u8.png" class="user-image" alt="User Image">
                            <i class="icon-more_vert "></i>
                        </a>
                        <div class="dropdown-menu p-4 dropdown-menu-right">
                            <div class="row box justify-content-between my-4">
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Apps</div>
                                    </a>
                                </div>
                                <div class="col"><a href="#">
                                    <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                    <div class="pt-1">Profile</div>
                                </a></div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Settings</div>
                                    </a>
                                </div>
                            </div>
                            <div class="row box justify-content-between my-4">
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-star light-green lighten-1 avatar  r-5"></i>
                                        <div class="pt-1">Favourites</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-save2 orange accent-1 avatar  r-5"></i>
                                        <div class="pt-1">Saved</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-perm_data_setting grey darken-3 avatar  r-5"></i>
                                        <div class="pt-1">Settings</div>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="row box justify-content-between my-4">
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Apps</div>
                                    </a>
                                </div>
                                <div class="col"><a href="#">
                                    <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                    <div class="pt-1">Profile</div>
                                </a></div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Settings</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Dashboard
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="icon icon-home2"></i>Hari ini</a>
                    </li>
                </ul>
                <a class="btn-fab absolute fab-right-bottom btn-primary" data-toggle="control-sidebar">
                    <i class="icon icon-menu"></i>
                </a>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <!--Today Tab Start-->
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="row my-3">
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-note-list text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title">Penjualan</div>
                                <h5 class="sc-counter mt-3">1228</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-mail-envelope-open s-48"></span>
                                </div>
                                <div class="counter-title ">Profit</div>
                                <h5 class="sc-counter mt-3">1228</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-stop-watch3 s-48"></span>
                                </div>
                                <div class="counter-title">Potongan</div>
                                <h5 class="sc-counter mt-3">1228</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-inbox-document-text s-48"></span>
                                </div>
                                <div class="counter-title">Total Pendapatan</div>
                                <h5 class="sc-counter mt-3">550</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white p-5 r-5">
                            <div class="card-title">
                                <h5> Kopi yang terjaul hari ini</h5>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-3">
                                    <div class="my-3 mt-4">
                                        <h5>Sales <span class="red-text">+203.48</span></h5>
                                        <span class="s-24">$2652.07</span>
                                        <p>It's time to accompany your busy life, with a cup of ice coffee will make your days more relaxed, believe me. 
The Best Es Kopi Susu In Cianjur City.</p>
                                    </div>
                                    <div class="row no-gutters bg-light r-3 p-2 mt-5">
                                        <div class="col-md-6 b-r p-3">
                                                <h5>Net Sales</h5>
                                                <span>$2351.08 </span>
                                        </div>
                                        <div class="col-md-6 p-3">
                                            <div class="">
                                                <h5>Costs <span class="amber-text">+87.4</span></h5>
                                                <span>$900.09</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9" style="height: 350px">
                                  <div class="table-responsive">
                                          <table class="table table-hover earning-box">
                                              <thead class="bg-light">
                                              <tr>
                                                  <th colspan="2">Client Name</th>
                                                  <th>Item Purchased</th>
                                                  <th>Price</th>
                                              </tr>
                                              </thead>
                                              <tbody>
                                              <tr>
                                                  <td class="w-10">
                                                      <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                          <img src="assets/img/dummy/u6.png" alt="">
                                                      </a>
                                                  </td>
                                                  <td>
                                                      <h6>Sara Kamzoon</h6>
                                                      <small class="text-muted">Marketing Manager</small>
                                                  </td>
                                                  <td>25</td>
                                                  <td>$250</td>
                                              </tr>
                                              <tr>
                                                  <td class="w-10">
                                                      <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                          <img src="assets/img/dummy/u7.png" alt="">
                                                      </a>
                                                  </td>
                                                  <td>
                                                      <h6>Sara Kamzoon</h6>
                                                      <small class="text-muted">Marketing Manager</small>
                                                  </td>
                                                  <td>25</td>
                                                  <td>$250</td>
                                              </tr>
                                              <tr>
                                                  <td class="w-10">
                                                      <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                          <img src="assets/img/dummy/u9.png" alt="">
                                                      </a>
                                                  </td>
                                                  <td>
                                                      <h6>Sara Kamzoon</h6>
                                                      <small class="text-muted">Marketing Manager</small>
                                                  </td>
                                                  <td>25</td>
                                                  <td>$250</td>
                                              </tr>
                                              <tr>
                                                  <td class="w-10">
                                                      <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                          <img src="assets/img/dummy/u11.png" alt="">
                                                      </a>
                                                  </td>
                                                  <td>
                                                      <h6>Sara Kamzoon</h6>
                                                      <small class="text-muted">Marketing Manager</small>
                                                  </td>
                                                  <td>25</td>
                                                  <td>$250</td>
                                              </tr>
                                              <tr>
                                                  <td class="w-10">
                                                      <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                          <img src="assets/img/dummy/u12.png" alt="">
                                                      </a>
                                                  </td>
                                                  <td>
                                                      <h6>Sara Kamzoon</h6>
                                                      <small class="text-muted">Marketing Manager</small>
                                                  </td>
                                                  <td>25</td>
                                                  <td>$250</td>
                                              </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-eq-height">
                    <!-- Chat Widget Start -->
                    <div class="col-md-4">
                        <div class="card my-3 no-b r-5">
                            <div class="card-header white no-b">
                                <h6><span class="badge badge-danger r-3 mr-2">5</span>New Chats </h6>
                            </div>
                            <div class="card-body chat-widget  p-3 r-5 slimScroll" data-height="435">
                                <ul class="list-unstyled">
                                    <li class="by-me">
                                        <div class="avatar float-left">
                                            <img src="assets/img/dummy/u1.png" alt="" class="img-responsive">
                                            <span class="avatar-badge has-indicator busy"></span>
                                        </div>
                                        <div class="chat-content">
                                            <!-- In meta area, first include "name" and then "time" -->
                                            <div class="chat-meta">Sent
                                                <span class="float-right">3 hours ago</span>
                                            </div>
                                            Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                                        </div>
                                    </li>
                                    <!-- Chat by other. Use the class "by-other". -->
                                    <li class="by-other">
                                        <!-- Use the class "float-right" in avatar -->
                                        <div class="avatar float-right">
                                            <!-- Online or offline -->
                                            <b class="c-off"></b>
                                            <img src="assets/img/dummy/u4.png" alt="" class="img-responsive">
                                            <span class="avatar-badge has-indicator idle"></span>
                                        </div>
                                        <div class="chat-content">
                                            <!-- In the chat meta, first include "time" then "name" -->
                                            <div class="chat-meta">3 hours ago
                                                <span class="float-right">Received</span>
                                            </div>
                                            Vivamus diam elit diam, consectetur elit.
                                        </div>
                                    </li>
                                    <li class="by-me">
                                        <div class="avatar float-left">
                                            <b class="c-on"></b>
                                            <img src="assets/img/dummy/u5.png" alt="" class="img-responsive">
                                            <span class="avatar-badge has-indicator online"></span>
                                        </div>
                                        <div class="chat-content">
                                            <div class="chat-meta">Seen
                                                <span class="float-right">4 hours ago</span>
                                            </div>
                                            Lorem dolor sit sit amet dolo.
                                        </div>
                                    </li>
                                    <li class="by-other">
                                        <!-- Use the class "float-right" in avatar -->
                                        <div class="avatar float-right">
                                            <b class="c-off"></b>
                                            <img src="assets/img/dummy/u4.png" alt="" class="img-responsive">
                                            <span class="avatar-badge has-indicator online"></span>
                                        </div>
                                        <div class="chat-content">
                                            <!-- In the chat meta, first include "time" then "name" -->
                                            <div class="chat-meta">3 hours ago
                                                <span class="float-right">Undelivered</span>
                                            </div>
                                            Vivamus diam elit diam, consectetur.
                                        </div>
                                    </li>
                                    <li class="by-me">
                                        <div class="avatar float-left">
                                            <b class="c-on"></b>
                                            <img src="assets/img/dummy/u3.png" alt="" class="img-responsive">
                                            <span class="avatar-badge has-indicator bust"></span>
                                        </div>
                                        <div class="chat-content">
                                            <div class="chat-meta">Audio
                                                <span class="float-right">4 hours ago</span>
                                            </div>
                                            Vivamus diam eget, Vivamus consectetur.
                                        </div>
                                    </li>
                                    <li class="by-other">
                                        <!-- Use the class "float-right" in avatar -->
                                        <div class="avatar float-right">
                                            <b class="c-off"></b>
                                            <img src="assets/img/dummy/u2.png" alt="" class="img-responsive">
                                            <span class="avatar-badge has-indicator online"></span>
                                        </div>
                                        <div class="chat-content">
                                            <!-- In the chat meta, first include "time" then "name" -->
                                            <div class="chat-meta">3 hours ago
                                                <span class="float-right">Image</span>
                                            </div>
                                            Duis dolor sit eut purus dolor feugius diam elit diamt.
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer white">
                                <!-- Chat button -->
                                <form>
                                    <div class="input-group">
                                        <input class="form-control s-12 bg-light r-30 mr-3"
                                               placeholder="Type your message..." type="text">
                                        <span class="input-group-btn">
                                                        <button type="submit" class="btn-fab btn-danger p-0 s-14"><i
                                                                class="icon-subdirectory_arrow_left"></i></button>
                                                    </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Followers -->
                    <div class="col-md-3">
                        <div class="card no-b r-5 my-3">
                            <div class="card-body">
                                <h5 class="card-title">Cup Terjual <span class="badge badge-success r-3">5+</span>
                                </h5>
                                <p>Cup terjual adalah <b>5</b> cup</p>
                                <div class="avatar-group">
                                    <figure class="avatar">
                                        <img src="assets/img/dummy/u4.png" alt=""></figure>
                                    <figure class="avatar">
                                        <span class="avatar-letter avatar-letter-l circle"></span>
                                    </figure>
                                    <figure class="avatar">
                                        <img src="assets/img/dummy/u5.png" alt=""></figure>
                                    <figure class="avatar">
                                        <img src="assets/img/dummy/u6.png" alt=""></figure>
                                    <figure class="avatar">
                                        <img src="assets/img/dummy/u7.png" alt="">
                                    </figure>
                                    <figure class="avatar">
                                        <span class="avatar-letter avatar-letter-a circle"></span>
                                    </figure>
                                    <figure class="avatar">
                                        <span class="avatar-letter avatar-letter-b circle"></span>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="card no-b r-5 my-3">
                            <div class="bg-primary text-white lighten-2 r-5">
                                <div class="pt-5 pb-0 pl-4 pr-4">
                                    <div class="lightSlider masonry-container" data-item="1" data-item-md="1"
                                         data-item-sm="1" data-auto="true" data-pause="6000" data-pager="false" data-controls="false" data-loop="true">
                                        <div>
                                            <h5 class="font-weight-normal s-14">Followers Increased</h5>
                                            <div class="my-5">
                                                  <span>
                                               Today 30%</span>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="my-5">
                                                  <span>
                                               Yesterday 10%</span>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <canvas width="378" height="140" data-chart="spark" data-chart-type="bar"
                                                data-dataset="[[28,530,200,430,28,530,200,430,28,530,200,430,28,530,200,430,28,530,200,430]]"
                                                data-labels="['a','b','c','d','a','b','c','d','a','b','c','d','a','b','c','d','a','b','c','d']"
                                                data-dataset-options="[
                                                        { borderColor:  'rgba(54, 162, 235, 1)', backgroundColor: 'rgba(54, 162, 235,1)'},
                                                        ]">
                                        </canvas>
                                        </div>
                                        <div>
                                            <h5 class="font-weight-normal s-14">Followers Increased</h5>
                                            <div class="my-5">
                                                  <span>
                                               Today 30%</span>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="my-5">
                                                  <span>
                                               Yesterday 10%</span>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <canvas width="378" height="140" data-chart="spark" data-chart-type="line"
                                                    data-dataset="[[28,530,200,430,28,530,200,430,28,530,200,430,28,530,200,430,28,530,200,430]]"
                                                    data-labels="['a','b','c','d','a','b','c','d','a','b','c','d','a','b','c','d','a','b','c','d']"
                                                    data-dataset-options="[
                                                        { borderColor:  'rgba(54, 162, 235, 1)', backgroundColor: 'rgba(54, 162, 235,1)'},
                                                        ]">
                                            </canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Daily Sale Report-->
                    <div class="col-md-5">
                        <div class="card my-3 no-b ">
                            <div class="card-header white b-0 p-3">
                                <div class="card-handle">
                                    <a data-toggle="collapse" href="#salesCard" aria-expanded="false"
                                       aria-controls="salesCard">
                                        <i class="icon-menu"></i>
                                    </a>
                                </div>
                                <h4 class="card-title">Top Customer</h4>
                                <small class="card-subtitle mb-2 text-muted">Best customer ever :).</small>
                            </div>
                            <div class="collapse show" id="salesCard">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover earning-box">
                                            <thead class="bg-light">
                                            <tr>
                                                <th colspan="2">Client Name</th>
                                                <th>Item Purchased</th>
                                                <th>Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="assets/img/dummy/u6.png" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="assets/img/dummy/u7.png" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="assets/img/dummy/u9.png" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="assets/img/dummy/u11.png" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                        <img src="assets/img/dummy/u12.png" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6>Sara Kamzoon</h6>
                                                    <small class="text-muted">Marketing Manager</small>
                                                </td>
                                                <td>25</td>
                                                <td>$250</td>
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
            <!--Yesterday Tab Start-->
        </div>
    </div>
</div>
<?php 
$this->load->view('parts/footer');
 ?>