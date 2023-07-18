<?php

include("header.php");
$hote = "localhost";
$username = "root";
$password = "";
$db_name = "sgt";
$port = "3306";

$dbconnect = mysqli_connect($hote, $username, $password, $db_name, $port);

?>


    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Formulaire d'Inscription</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form id="form-wizard1" class="text-center mt-4" action="membre.php" method="post">
                                <ul id="top-tab-list" class="p-0">
                                    <li class="active" id="account">
                                        <a href="javascript:void();">
                                            <i class="ri-lock-unlock-line"></i><span>Compte</span>
                                        </a>
                                    </li>
                                    <li id="personal">
                                        <a href="javascript:void();">
                                            <i class="ri-user-fill"></i><span>Personnel</span>
                                        </a>
                                    </li>

                                    </li>
                                    <li id="confirm">
                                        <a href="javascript:void();">
                                            <i class="ri-check-fill"></i><span>Terminer</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card text-left">
                                        <div class="row">
                                            <div class="col-7">
                                                <h3 class="mb-4">Informations sur le compte:</h3>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Etape 1 - 4</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group" acton>
                                                    <label>Email: *</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Email" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nom : *</label>
                                                    <input type="text" n class="form-control" name="nom" placeholder="Nom" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>password: *</label>
                                                    <input type="password" class="form-control" name="password" placeholder="Mot de passe" />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control mb-3" name="reunion">
                                                        <?php

                                                        $query = "select * from réunion";

                                                        $listeReunion = mysqli_query($dbconnect, $query);

                                                        while ($row = $listeReunion->fetch_assoc()) {
                                                        ?><option value="<?php echo $row["id_reunion"]; ?>"><?php echo $row["nom"]; ?></option><?php
                                                                                                                                                        }


                                                                                                                                                            ?>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Next">Suivant</button>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card text-left">
                                        <div class="row">
                                            <div class="col-7">
                                                <h3 class="mb-4">Information personnelle:</h3>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Etape 2 - 4</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Prénom: *</label>
                                                    <input type="text" class="form-control" name="prenom" placeholder="Prenom" />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Contact: *</label>
                                                    <input type="number" class="form-control" name="contact" placeholder="Contact " />
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>genre: *</label>
                                                    <input type="text" class="form-control" name="genre" placeholder="genre." />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputFonction">Fonction</label>
                                                    <select class="form-control mb-3" name="Fonction">
                                                        <option selected=""></option>
                                                        <option value="Sécrétaire">Sécrétaire</option>
                                                        <option value="Commissaire">Commissaire</option>
                                                        <option value="Président">Président</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Adresse: *</label>
                                                    <input type="adresse" class="form-control" name="fname" placeholder="adresse" />
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Next">Suivant</button>
                                    <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous">Précédent</button>
                                </fieldset>
                                <fieldset>

                                    <button type="submit" name="next" class="btn btn-primary next action-button float-right" value="Submit">Soumettre</button>
                                    <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous">Précédent</button>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h3 class="mb-4 text-left">Terminer:</h3>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Etape 4 - 4</h2>
                                            </div>
                                        </div>
                                        <br><br>
                                        <h2 class="text-success text-center"><strong>SUCCÈS !</strong></h2>
                                        <br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="images/logogael2.png" class="fit-image" alt="fit-image">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5 class="purple-text text-center">Vous vous êtes inscrit avec succès</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
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
            <p>This color combo available inside whole template. You can change on your wish, Even you can create your own
                with limitless possibilities! </p>
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

<!-- Mirrored from templates.iqonic.design/findash/html/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Oct 2022 09:56:58 GMT -->

</html>