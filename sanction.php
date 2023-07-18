<?php

include("header.php");
?>

<div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title"> Liste des Sanctions <a href="add_presence.html"><button
                                            type="button" class="btn btn-success mb-3">Effectuer une
                                            Sanctions</button></a>
                                </h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2"
                                        style="">
                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="custom-control custom-checkbox text-center">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1"></label>
                                                </div>
                                            </th>
                                            <th scope="col">Montant</th>
                                            <th scope="col">Type sanction</th>

                                            <th scope="col">Date</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Statut</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox text-center">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/user/01.jpg" alt="profile"
                                                    class="img-fluid rounded avatar-40 text-center"></td>
                                            <td>Barb Ackue</td>
                                            <td>IIFL Finance</td>
                                            <td>07 April 2020</td>
                                            <td>
                                                <div class="badge badge-pill badge-primary">Success</div>
                                            </td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="View" href="#"><i
                                                            class="ri-eye-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Edit" href="#"><i
                                                            class="ri-pencil-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Delete" href="#"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox text-center">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/user/02.jpg" alt="profile"
                                                    class="img-fluid rounded avatar-40 text-center"></td>
                                            <td>Ira Membrit</td>
                                            <td>Shubham Housing</td>
                                            <td>10 April 2020</td>
                                            <td>
                                                <div class="badge badge-pill badge-success">Done</div>
                                            </td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="View" href="#"><i
                                                            class="ri-eye-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Edit" href="#"><i
                                                            class="ri-pencil-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Delete" href="#"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox text-center">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck4">
                                                    <label class="custom-control-label" for="customCheck4"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/user/03.jpg" alt="profile"
                                                    class="img-fluid rounded avatar-40 text-center"></td>
                                            <td>Pete Sariya</td>
                                            <td>Achiva Nidhi Limited</td>
                                            <td>12 April 2020</td>
                                            <td>
                                                <div class="badge badge-pill badge-primary">Success</div>
                                            </td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="View" href="#"><i
                                                            class="ri-eye-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Edit" href="#"><i
                                                            class="ri-pencil-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Delete" href="#"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox text-center">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck5">
                                                    <label class="custom-control-label" for="customCheck5"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/user/04.jpg" alt="profile"
                                                    class="img-fluid rounded avatar-40 text-center"></td>
                                            <td>Anna Mull</td>
                                            <td>Marwadi Shares</td>
                                            <td>17 April 2020</td>
                                            <td>
                                                <div class="badge badge-pill badge-info">Pending</div>
                                            </td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="View" href="#"><i
                                                            class="ri-eye-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Edit" href="#"><i
                                                            class="ri-pencil-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Delete" href="#"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox text-center">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck6">
                                                    <label class="custom-control-label" for="customCheck6"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/user/05.jpg" alt="profile"
                                                    class="img-fluid rounded avatar-40 text-center"></td>
                                            <td>Paul Molive</td>
                                            <td>Gruh Finance Limited</td>
                                            <td>20 April 2020</td>
                                            <td>
                                                <div class="badge badge-pill badge-danger">Canceled</div>
                                            </td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="View" href="#"><i
                                                            class="ri-eye-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Edit" href="#"><i
                                                            class="ri-pencil-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Delete" href="#"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
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
    <?php
        include("footer.php");
    ?> 