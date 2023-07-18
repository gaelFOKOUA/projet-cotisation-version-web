<?php


$hote = "localhost";
$username = "root";
$password = "";
$db_name = "sgt";
$port = "3306";

$dbconnect = mysqli_connect($hote, $username, $password, $db_name, $port);

session_start();
//session_destroy();
?>

  


<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/findash/html/dashboard-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Oct 2022 09:56:28 GMT -->

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>E-tontine</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="images/favicon.ico" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="css/typography.css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
   <!-- loader Start -->
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>
   <!-- loader END -->
   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar  -->
      <div class="iq-sidebar">
         <div class="iq-navbar-logo d-flex justify-content-between">
            <a href="index.html" class="header-logo">
               <img src="images/logogael2.png" class="img-fluid rounded" alt="">

            </a>
            <div class="iq-menu-bt align-self-center">
               <div class="wrapper-menu">
                  <div class="main-circle"><i class="ri-menu-line"></i></div>
                  <div class="hover-circle"><i class="ri-close-fill"></i></div>
               </div>
            </div>
         </div>
         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li class="active">
                     <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">

                        <li class="active"><a href="listereunion.php"><i class="lab la-bandcamp"></i> Reunion</a></li>
                        <li class="active"><a href="listesmembre.php"><i class="lab la-bandcamp"></i> Membres</a></li>
                        <li class="active"><a href="listepresence.php"><i class="lab la-bandcamp"></i>Presences</a></li>
                        <li class="active"><a href="listecotisation.php"><i class="lab la-bandcamp"></i>Cotisations</a></li>
                        <li class="active"><a href="listepret.php"><i class="lab la-bandcamp"></i>Prets</a></li>
                        <li class="active"><a href="listevenement.php"><i class="lab la-bandcamp"></i>Evenements</a></li>
                        <li class="active"><a href="listepargne.php"><i class="lab la-bandcamp"></i>Epargne</a></li>
                        <li class="active"><a href="listetaux.php"><i class="lab la-bandcamp"></i>Taux</a></li>
                        <li class="active"><a href="listebanque.php"><i class="lab la-bandcamp"></i>Banque</a></li>


                     </ul>
                  </li>










            </nav>
            <div class="p-3"></div>

         </div>
      </div>
      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               <div class="iq-menu-bt d-flex align-items-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="ri-menu-line"></i></div>
                     <div class="hover-circle"><i class="ri-close-fill"></i></div>
                  </div>
                  <div class="iq-navbar-logo d-flex justify-content-between ml-3">
                     <a href="index.html" class="header-logo">
                        <img src="images/logogael2.png" class="img-fluid rounded" alt="">

                     </a>
                  </div>
               </div>


               <div class="iq-sub-dropdown">
                  <div class="iq-card shadow-none m-0">
                     <div class="iq-card-body p-0 ">
                        <div class="bg-primary p-3">
                           <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                        </div>
                        <a href="#" class="iq-sub-card">
                           <div class="media align-items-center">
                              <div class="">
                                 <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                              </div>
                              <div class="media-body ml-3">
                                 <h6 class="mb-0 ">Emma Watson Barry</h6>
                                 <small class="float-right font-size-12">Just Now</small>
                                 <p class="mb-0">95 MB</p>
                              </div>
                           </div>
                        </a>
                        <a href="#" class="iq-sub-card">
                           <div class="media align-items-center">
                              <div class="">
                                 <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                              </div>
                              <div class="media-body ml-3">
                                 <h6 class="mb-0 ">New customer is join</h6>
                                 <small class="float-right font-size-12">5 days ago</small>
                                 <p class="mb-0">Cyst Barry</p>
                              </div>
                           </div>
                        </a>
                        <a href="#" class="iq-sub-card">
                           <div class="media align-items-center">
                              <div class="">
                                 <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                              </div>
                              <div class="media-body ml-3">
                                 <h6 class="mb-0 ">Two customer is left</h6>
                                 <small class="float-right font-size-12">2 days ago</small>
                                 <p class="mb-0">Cyst Barry</p>
                              </div>
                           </div>
                        </a>
                        <a href="#" class="iq-sub-card">
                           <div class="media align-items-center">
                              <div class="">
                                 <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                              </div>
                              <div class="media-body ml-3">
                                 <h6 class="mb-0 ">New Mail from Fenny</h6>
                                 <small class="float-right font-size-12">3 days ago</small>
                                 <p class="mb-0">Cyst Barry</p>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               </li>

               <div class="iq-sub-dropdown">
                  <div class="iq-card shadow-none m-0">
                     <div class="iq-card-body p-0 ">
                        <div class="bg-primary p-3">
                           <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                        </div>
                        <a href="#" class="iq-sub-card">
                           <div class="media align-items-center">
                              <div class="">
                                 <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                              </div>
                              <div class="media-body ml-3">
                                 <h6 class="mb-0 ">Barry Emma Watson</h6>
                                 <small class="float-left font-size-12">13 Jun</small>
                              </div>
                           </div>
                        </a>
                        <a href="#" class="iq-sub-card">
                           <div class="media align-items-center">
                              <div class="">
                                 <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                              </div>
                              <div class="media-body ml-3">
                                 <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                 <small class="float-left font-size-12">20 Apr</small>
                              </div>
                           </div>
                        </a>
                        <a href="#" class="iq-sub-card">
                           <div class="media align-items-center">
                              <div class="">
                                 <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                              </div>
                              <div class="media-body ml-3">
                                 <h6 class="mb-0 ">Why do we use it?</h6>
                                 <small class="float-left font-size-12">30 Jun</small>
                              </div>
                           </div>
                        </a>
                        <a href="#" class="iq-sub-card">
                           <div class="media align-items-center">
                              <div class="">
                                 <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                              </div>
                              <div class="media-body ml-3">
                                 <h6 class="mb-0 ">Variations Passages</h6>
                                 <small class="float-left font-size-12">12 Sep</small>
                              </div>
                           </div>
                        </a>
                        <a href="#" class="iq-sub-card">
                           <div class="media align-items-center">
                              <div class="">
                                 <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                              </div>
                              <div class="media-body ml-3">
                                 <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                 <small class="float-left font-size-12">5 Dec</small>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               </li>
               </ul>
         </div>
         <ul class="navbar-list">
            <li class="line-height">
               <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                  <img src="images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                  <div class="caption">
                     <h6 class="mb-0 line-height"><?php echo $_SESSION["nom"]; ?></h6>
                     <p class="mb-0"><?php echo $_SESSION["fonction"]; ?></p>
                  </div>
               </a>
               <div class="iq-sub-dropdown iq-user-dropdown">
                  <div class="iq-card shadow-none m-0">
                     <div class="iq-card-body p-0 ">
                        <div class="bg-primary p-3">
                           <h5 class="mb-0 text-white line-height">FOKOUA KENGNE gael</h5>
                           <span class="text-white font-size-12">disponible</span>
                        </div>
                        <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                           <div class="media align-items-center">
                              <div class="rounded iq-card-icon iq-bg-primary">
                                 <i class="ri-file-user-line"></i>
                              </div>
                              <div class="media-body ml-3">
                                 <h6 class="mb-0 ">My Profile</h6>
                                 <p class="mb-0 font-size-12">View personal profile details.</p>
                              </div>
                           </div>
                        </a>
                        <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                           <div class="media align-items-center">
                              <div class="rounded iq-card-icon iq-bg-primary">
                                 <i class="ri-profile-line"></i>
                              </div>
                              <div class="media-body ml-3">
                                 <h6 class="mb-0 ">Edit Profile</h6>
                                 <p class="mb-0 font-size-12">Modify your personal details.</p>
                              </div>
                           </div>
                        </a>
                        <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                           <div class="media align-items-center">
                              <div class="rounded iq-card-icon iq-bg-primary">
                                 <i class="ri-account-box-line"></i>
                              </div>
                              <div class="media-body ml-3">
                                 <h6 class="mb-0 ">Account settings</h6>
                                 <p class="mb-0 font-size-12">Manage your account parameters.</p>
                              </div>
                           </div>
                        </a>
                        <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                           <div class="media align-items-center">
                              <div class="rounded iq-card-icon iq-bg-primary">
                                 <i class="ri-lock-line"></i>
                              </div>
                              <div class="media-body ml-3">
                                 <h6 class="mb-0 ">Privacy Settings</h6>
                                 <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                              </div>
                           </div>
                        </a>
                        <div class="d-inline-block w-100 text-center p-3">
                           <a class="bg-primary iq-sign-btn" href="deconnexion.php" role="button">Déconnexion<i class="ri-login-box-line ml-2"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
         </ul>
         </nav>
      </div>
   </div>
   <!-- TOP Nav Bar END -->