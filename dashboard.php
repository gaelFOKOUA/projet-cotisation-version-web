<?php

include("header.php");

$query = "select * from membres where id_reunion = " . $_SESSION["id_reunion"] . "";
$resultat = mysqli_query($dbconnect, $query);
$nbMembre = mysqli_num_rows($resultat);

$query = "select * from evenements where id_reunion = " . $_SESSION["id_reunion"] . "";
$res = mysqli_query($dbconnect, $query);
$nbEvenement = mysqli_num_rows($res);

$query = "select * from epargne where id_reunion = " . $_SESSION["id_reunion"] . "";
$rq = mysqli_query($dbconnect, $query);
$nbEpargne = mysqli_num_rows($rq);

$query = "select SUM(montants) AS montant_cotisation from cotisation where id_reunion = " . $_SESSION["id_reunion"] . "";
$som1 = mysqli_query($dbconnect, $query);

$recup = 0; 
$recupP = 0;
$recu = 0;
$rec = 0;
$re = 0;
while ($row = $som1->fetch_assoc()) {
   $recup = $row["montant_cotisation"];
}


$query = "select SUM(montants) AS montant_presence from presence where id_reunion = " . $_SESSION["id_reunion"] . "";
$som2 = mysqli_query($dbconnect, $query);
while ($row = $som2->fetch_assoc()) {
   $recupP = $row["montant_presence"];
}
$query = "select SUM(montants) AS montant_pret from pret where id_reunion = " . $_SESSION["id_reunion"] . "";
$som3 = mysqli_query($dbconnect, $query);
while ($row = $som3->fetch_assoc()) {
   $recu = $row["montant_pret"];
}
$query = "select SUM(montants) AS montant_cotisevenement from cotisevenement where id_reunion = " . $_SESSION["id_reunion"] . "";
$som4 = mysqli_query($dbconnect, $query);
while ($row = $som4->fetch_assoc()) {
   $rec = $row["montant_cotisevenement "];
}
$query = "select SUM(montants) AS montant_epargne from epargne where id_reunion = " . $_SESSION["id_reunion"] . "";
$som5 = mysqli_query($dbconnect, $query);
while ($row = $som5->fetch_assoc()) {
   $re = $row["montant_epargne"];
}
$nbFond_total = null;


$total = $recup + $recupP + $recu + $rec + $re ;

?>





<!-- Page Content  -->
<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height bg-primary rounded">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="icon iq-icon-box rounded iq-bg-primary rounded shadow" data-wow-delay="0.2s">
                        <i class="las la-users"></i>
                     </div>
                     <div class="iq-text">
                        <h6 class="text-white">Membres actifs</h6>
                        <h3 class="text-white"><?php echo $nbMembre;  ?></h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height bg-warning rounded">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="icon iq-icon-box rounded iq-bg-warning rounded shadow" data-wow-delay="0.2s">
                        <i class="lab la-product-hunt"></i>
                     </div>
                     <div class="iq-text">
                        <h6 class="text-white">évènements en cours</h6>
                        <h3 class="text-white"><?php echo $nbEvenement;  ?></h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height bg-success rounded">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="icon iq-icon-box rounded iq-bg-success rounded shadow" data-wow-delay="0.2s">
                        <i class="las la-user-tie"></i>
                     </div>
                     <div class="iq-text">
                        <h6 class="text-white">Fond_caisse</h6>
                        <h3 class="text-white"><?php echo $total;  ?></h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height bg-danger rounded">
               <div class="iq-card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="icon iq-icon-box rounded iq-bg-danger rounded shadow" data-wow-delay="0.2s">
                        <i class="lab la-buffer"></i>
                     </div>
                     <div class="iq-text">
                        <h6 class="text-white">Epargne</h6>
                        <h3 class="text-white"><?php echo $nbEpargne; ?></h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title"> Product Management </h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton-four" data-toggle="dropdown">
                           <i class="ri-more-fill"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-four" style="">
                           <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                           <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                           <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                           <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                           <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div id="iq-product-chart" class="amcharts-chart-div" style="height: 450px;"></div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title"> Activity </h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                           <i class="ri-more-fill"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1" style="">
                           <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                           <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                           <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                           <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                           <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div id="iq-activety-chart"></div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 d-flex flex-wrap p-0">
            <div class="col-md-6">
               <div class="iq-card iq-card-block iq-card-stretch">
                  <div class="iq-card-body">
                     <div class="text-center">
                        <h5>Income Budget</h5>
                        <div class="progress-round income-progress mx-auto mt-3" data-value="80">
                           <span class="progress-left">
                              <span class="progress-bar border-primary"></span>
                           </span>
                           <span class="progress-right">
                              <span class="progress-bar border-primary"></span>
                           </span>
                           <div class="progress-value w-100 h-100 rounded d-flex align-items-center justify-content-center text-center">
                              <div class="h4 mb-0">75%</div>
                           </div>
                        </div>
                        <p class="mb-0 mt-3">Lorem Ipsum is simply dummy text.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="iq-card iq-card-block iq-card-stretch">
                  <div class="iq-card-body">
                     <div class="text-center">
                        <h5>Stock</h5>
                        <div class="progress-round income-progress mx-auto mt-3" data-value="70">
                           <span class="progress-left">
                              <span class="progress-bar border-danger"></span>
                           </span>
                           <span class="progress-right">
                              <span class="progress-bar border-danger"></span>
                           </span>
                           <div class="progress-value w-100 h-100 rounded d-flex align-items-center justify-content-center text-center">
                              <div class="h4 mb-0">70%</div>
                           </div>
                        </div>
                        <p class="mb-0 mt-3">Lorem Ipsum is simply dummy text.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="iq-card iq-card-block iq-card-stretch">
                  <div class="iq-card-body">
                     <div class="text-center">
                        <h5>Outcome Budget</h5>
                        <div class="progress-round income-progress mx-auto mt-3" data-value="65">
                           <span class="progress-left">
                              <span class="progress-bar border-success"></span>
                           </span>
                           <span class="progress-right">
                              <span class="progress-bar border-success"></span>
                           </span>
                           <div class="progress-value w-100 h-100 rounded d-flex align-items-center justify-content-center text-center">
                              <div class="h4 mb-0">65%</div>
                           </div>
                        </div>
                        <p class="mb-0 mt-3">Lorem Ipsum is simply dummy text.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="iq-card iq-card-block iq-card-stretch">
                  <div class="iq-card-body">
                     <div class="text-center">
                        <h5>Demand</h5>
                        <div class="progress-round income-progress mx-auto mt-3" data-value="30">
                           <span class="progress-left">
                              <span class="progress-bar border-info"></span>
                           </span>
                           <span class="progress-right">
                              <span class="progress-bar border-warning"></span>
                           </span>
                           <div class="progress-value w-100 h-100 rounded d-flex align-items-center justify-content-center text-center">
                              <div class="h4 mb-0">30%</div>
                           </div>
                        </div>
                        <p class="mb-0 mt-3">Lorem Ipsum is simply dummy text.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title"> Ticket </h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <ul class="tikit-lists m-0 p-0">
                     <li class="d-flex mb-4 align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                           <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded avatar-40"></div>
                           <div class="media-support-info ml-3">
                              <h6>Paul Molive</h6>
                              <p class="mb-0 font-size-12">Lorem Ipsum is</p>
                           </div>
                        </div>
                        <span>01-04-2020</span>
                     </li>
                     <li class="d-flex mb-4 align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                           <div class="user-img img-fluid"><img src="images/user/02.jpg" alt="story-img" class="rounded avatar-40"></div>
                           <div class="media-support-info ml-3">
                              <h6>Anna Sthesia</h6>
                              <p class="mb-0 font-size-12">Lorem Ipsum is</p>
                           </div>
                        </div>
                        <span>05-04-2020</span>
                     </li>
                     <li class="d-flex mb-4 align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                           <div class="user-img img-fluid"><img src="images/user/03.jpg" alt="story-img" class="rounded avatar-40"></div>
                           <div class="media-support-info ml-3">
                              <h6>Paige Turner</h6>
                              <p class="mb-0 font-size-12">Lorem Ipsum is</p>
                           </div>
                        </div>
                        <span>07-04-2020</span>
                     </li>
                     <li class="d-flex mb-4 align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                           <div class="user-img img-fluid"><img src="images/user/04.jpg" alt="story-img" class="rounded avatar-40"></div>
                           <div class="media-support-info ml-3">
                              <h6>Barb Ackue</h6>
                              <p class="mb-0 font-size-12">Lorem Ipsum is</p>
                           </div>
                        </div>
                        <span>10-04-2020</span>
                     </li>
                     <li class="d-flex mb-4 align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                           <div class="user-img img-fluid"><img src="images/user/05.jpg" alt="story-img" class="rounded avatar-40"></div>
                           <div class="media-support-info ml-3">
                              <h6>Greta Life</h6>
                              <p class="mb-0 font-size-12">Lorem Ipsum is</p>
                           </div>
                        </div>
                        <span>10-04-2020</span>
                     </li>
                     <li class="d-flex mb-4 align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                           <div class="user-img img-fluid"><img src="images/user/06.jpg" alt="story-img" class="rounded avatar-40"></div>
                           <div class="media-support-info ml-3">
                              <h6>Ira Membrit</h6>
                              <p class="mb-0 font-size-12">Lorem Ipsum is</p>
                           </div>
                        </div>
                        <span>12-04-2020</span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-8">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title"> Product Earnings </h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div id="iq-product-activity"></div>
               </div>
            </div>
         </div>
         <div class="col-lg-9">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title"> Product Details </h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown">
                           <i class="ri-more-fill"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2" style="">
                           <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                           <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                           <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                           <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                           <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <table class="table mb-0 table-borderless">
                        <thead>
                           <tr>
                              <th scope="col">Product Id</th>
                              <th scope="col">Product</th>
                              <th scope="col">Product Cost</th>
                              <th scope="col">Payment Mode</th>
                              <th scope="col">Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>P-0001</td>
                              <td>Dell 16 inch Laptop Backpack </td>
                              <td>$4500</td>
                              <td>Cash On delivered</td>
                              <td>
                                 <div class="badge badge-pill badge-primary">Available</div>
                              </td>
                           </tr>
                           <tr>
                              <td>P-0002</td>
                              <td>Tim Hawk Zeiss Pre-Moistened </td>
                              <td>$9680</td>
                              <td>Online Payment</td>
                              <td>
                                 <div class="badge badge-pill badge-primary">Available</div>
                              </td>
                           </tr>
                           <tr>
                              <td>P-0003</td>
                              <td>Sealed Lead Acid Battery </td>
                              <td>$7500</td>
                              <td>Cash On delivered</td>
                              <td>
                                 <div class="badge badge-pill badge-danger">Out Of Stock</div>
                              </td>
                           </tr>
                           <tr>
                              <td>P-0004</td>
                              <td>Veto FM Extension Cord 10 Meter Wire </td>
                              <td>$2550</td>
                              <td>Cash On delivered</td>
                              <td>
                                 <div class="badge badge-pill badge-info">Limited</div>
                              </td>
                           </tr>
                           <tr>
                              <td>P-0005</td>
                              <td>KANICT Dotted Finished Soft Skin Rubbersied</td>
                              <td>$6000</td>
                              <td>Online Payment</td>
                              <td>
                                 <div class="badge badge-pill badge-danger">Out Of Stock</div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title"> Market </h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton3" data-toggle="dropdown">
                           <i class="ri-more-fill"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton3" style="">
                           <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                           <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                           <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                           <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                           <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <table class="table mb-0 table-borderless">
                        <thead>
                           <tr>
                              <th scope="col">Market</th>
                              <th scope="col">Price</th>
                              <th scope="col">Change</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><i class="ri-bit-coin-line text-primary font-size-24 line-height"></i></td>
                              <td>0.001256</td>
                              <td>15.25%</td>
                           </tr>
                           <tr>
                              <td><i class="ri-copper-diamond-line text-danger font-size-24 line-height"></i></td>
                              <td>0.056256</td>
                              <td>18.30%</td>
                           </tr>
                           <tr>
                              <td><i class="ri-at-fill text-secondary font-size-24 line-height"></i></td>
                              <td>0.008569</td>
                              <td>10.25%</td>
                           </tr>
                           <tr>
                              <td><i class="ri-stack-line text-info font-size-24 line-height"></i></td>
                              <td>0.008569</td>
                              <td>25.50%</td>
                           </tr>
                           <tr>
                              <td><i class="ri-exchange-dollar-fill text-success font-size-24 line-height"></i></td>
                              <td>0.02356</td>
                              <td>16.20%</td>
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
<!-- Wrapper END -->
<!-- Footer -->
<footer class="iq-footer">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <ul class="list-inline mb-0">
               <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
               <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
            </ul>
         </div>
         <div class="col-lg-6 text-right">
            Copyright 2020 <a href="#">FinDash</a> All Rights Reserved.
         </div>
      </div>
   </div>
</footer>
<!-- Footer END -->
<!-- color-customizer -->
<div class="iq-colorbox color-fix">
   <div class="buy-button"> <a class="color-full" href="#"><i class="fa fa-spinner fa-spin"></i></a> </div>
   <div class="clearfix color-picker">
      <h3 class="iq-font-black">FinDash Awesome Color</h3>
      <p>This color combo available inside whole template. You can change on your wish, Even you can create your own with limitless possibilities! </p>
      <ul class="iq-colorselect clearfix">
         <li class="color-1 iq-colormark" data-style="color-1"></li>
         <li class="color-2" data-style="iq-color-2"></li>
         <li class="color-3" data-style="iq-color-3"></li>
         <li class="color-4" data-style="iq-color-4"></li>
         <li class="color-5" data-style="iq-color-5"></li>
         <li class="color-6" data-style="iq-color-6"></li>
         <li class="color-7" data-style="iq-color-7"></li>
         <li class="color-8" data-style="iq-color-8"></li>
         <li class="color-9" data-style="iq-color-9"></li>
         <li class="color-10" data-style="iq-color-10"></li>
         <li class="color-11" data-style="iq-color-11"></li>
         <li class="color-12" data-style="iq-color-12"></li>
         <li class="color-13" data-style="iq-color-13"></li>
         <li class="color-14" data-style="iq-color-14"></li>
         <li class="color-15" data-style="iq-color-15"></li>
         <li class="color-16" data-style="iq-color-16"></li>
         <li class="color-17" data-style="iq-color-17"></li>
         <li class="color-18" data-style="iq-color-18"></li>
         <li class="color-19" data-style="iq-color-19"></li>
         <li class="color-20" data-style="iq-color-20"></li>
      </ul>
      <a target="_blank" class="btn btn-primary d-block mt-3" href="#">Purchase Now</a>
   </div>
</div>
<!-- color-customizer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Appear JavaScript -->
<script src="js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="js/wow.min.js"></script>
<!-- Apexcharts JavaScript -->
<script src="js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="js/smooth-scrollbar.js"></script>
<!-- lottie JavaScript -->
<script src="js/lottie.js"></script>
<!-- am core JavaScript -->
<script src="js/core.js"></script>
<!-- am charts JavaScript -->
<script src="js/charts.js"></script>
<!-- am animated JavaScript -->
<script src="js/animated.js"></script>
<!-- am kelly JavaScript -->
<script src="js/kelly.js"></script>
<!-- am maps JavaScript -->
<script src="js/maps.js"></script>
<!-- am worldLow JavaScript -->
<script src="js/worldLow.js"></script>
<!-- Style Customizer -->
<script src="js/style-customizer.js"></script>
<!-- Chart Custom JavaScript -->
<script src="js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from templates.iqonic.design/findash/html/dashboard-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Oct 2022 09:56:29 GMT -->

</html>
include("footer.php");
?>