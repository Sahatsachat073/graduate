<?php 
    session_start();
    session_id();
    require_once( "./db_connect.php" );
    $mysqli = connect();
    $query = "SELECT * FROM student_info WHERE stu_id = 1";
    $result = mysqli_query($mysqli,$query);
    
    ?>
<!DOCTYPE html>

<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Account</title>

    <?php include "./header.php" ?>
    
    <style>
        .button{
            background-color: #f3a500;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
            width: 20%;
          
        }
    </style>
  </head>

  <body>
   
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                
                <img src="../assets/img/logo/logo-icon.png" width="200" height="80">
                
              </span>
              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
              
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <li class="menu-item ">
              <a href="index.php" class="menu-link">
                <!-- <i class="material-symbols-outlined"></i> -->
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Analytics"> ????????????????????????</div>
              </a>
            </li>
            <!-- Dashboard -->
            <li class="menu-item active ">
              <a href="pages-account-settings-account.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Analytics"> ??????????????????????????????</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-school"></i>
                <div data-i18n="Layouts">??????????????????</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="./appoint-adviser.php" class="menu-link">
                    <div data-i18n="Without menu">???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-without-navbar.html" class="menu-link">
                    <div data-i18n="Without navbar">???????????????????????????????????????</div>
                  </a>
                </li>
                
              </ul>


              <li class="menu-item">
                <a href=".html" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-task"></i>
                  <div data-i18n="Layouts"> ???????????????????????????</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="tuition.html" class="menu-link">
                  <i class="menu-icon tf-icons bx bxl-paypal"></i>
                  <div data-i18n="Layouts"> ????????????????????????????????????????????????</div>
                </a>
              </li>
              <li class="menu-item">
                <a href=".html" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-money"></i>
                  <div data-i18n="Layouts"> ?????????</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="advisorreport.html" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-support"></i>
                  <div data-i18n="Layouts"> ????????????????????????????????????????????????</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="./layout examination-report-Admin.html" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Layouts"> ?????????????????????????????????</div>
                </a>
              </li>
              <li class="menu-item">
                <a href=".html" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                  <div data-i18n="Layouts"> ??????????????????????????????????????????</div>
                </a>
              </li>
              <li class="menu-item">
                <a href=".html" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-edit-alt"></i>
                  <div data-i18n="Layouts"> ??????????????????????????????</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="language-exam.html" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-receipt"></i>
                  <div data-i18n="Layouts"> ??????????????????????????? & Skill</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="./journal-Add.html" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-book-bookmark"></i>
                  <div data-i18n="Layouts"> ??????????????????</div>
                </a>
              </li>
              <li class="menu-item">
                <a href=".html" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-graduation"></i>
                  <div data-i18n="Layouts"> ??????????????????????????????????????????</div>
                </a>
              </li> 
          </ul>
        </aside>
        <!-- / Menu -->


        
          <!-- Navbar -->
          <?php include "./headbar.php" ?>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">????????????????????? /</span> ????????????????????????????????????????????????????????????</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link " href="pages-account-settings-account.php"
                        ><i class="bx bx-user me-1"></i> ????????????????????????????????????</a
                      >
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link " href="page-report-account.php"
                        ><i class="bx bxs-data"></i> ?????????????????????????????????</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="./order_education.php"
                        ><i class="bx bx-list-check"></i> ????????????????????????????????????????????????????????????</a
                      >
                    </li>
                    
                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header">????????????????????????????????????????????????????????????</h5>
                    <!-- Account -->
                    <?php while($row = $result->fetch_assoc()): ?>
                    
                    
                      
                      <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                          <div class="row">
                            <div class="mb-3 row"> 
                                <div class="table-responsive text-nowrap">
                                    <table class="table" >
                                        <thead class="table-info" align="center">
                                        <tr>
                                            <th>?????????????????????????????????????????????</th>
                                            <th>check list</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0" align="center">
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>?????????????????????????????????????????????????????????</strong></td>
                                            <td>
                                                <input class="form-check-input" type="checkbox" id="defaultCheck1" checked="">
                                            </td>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>????????????????????????????????????????????????????????????????????????</strong></td>
                                            <td>
                                                <input class="form-check-input" type="checkbox" id="defaultCheck1" checked="">
                                            </td>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>?????????????????????????????????</strong></td>
                                            <td>
                                                <input class="form-check-input" type="checkbox" id="defaultCheck1" checked="">
                                            </td>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>??????????????????????????????????????????</strong></td>
                                            <td>
                                                <input class="form-check-input" type="checkbox" id="defaultCheck1" checked="">
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>??????????????????????????????</strong></td>
                                            <td>
                                                <input class="form-check-input" type="checkbox" id="defaultCheck1" checked="">
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>???????????? Pre-T3</strong></td>
                                            <td>
                                                <input class="form-check-input" type="checkbox" id="defaultCheck1" checked="">
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>???????????????????????????????????????</strong>
                                            </td>
                                            <td>
                                                <input class="form-check-input" type="checkbox" id="defaultCheck1" checked="">
                                            </td>
                                            
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                            </div>
                            <div class="mt-2">
                                <center><button  type="button" class="button" >???????????????????????????</button></center>
                            </div>
                                   
                          </div>
                          
                        </form>
                      </div>
                    
                      <!-- /Account -->
                    <?php endwhile ?>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php include "./footer.php" ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        
        
      </div>

      
  </body>
</html>




