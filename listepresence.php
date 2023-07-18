<?php
include("header.php");

$hote = "localhost";
$username = "root";
$password = "";
$db_name = "sgt";
$port = "3306";

$dbconnect = mysqli_connect($hote, $username, $password, $db_name, $port);

$query = "select * from presence where id_reunion = " . $_SESSION["id_reunion"] . "";
$result = mysqli_query($dbconnect, $query);

?>

<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title"> Liste des présences <a href="add_presence.html"><button type="button" class="btn btn-success mb-3">Selectionner les présents
                                        pret</button></a>
                            </h4>
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
                                        <th>
                                            <div class="custom-control custom-checkbox text-center">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </th>



                                        <th scope="col">montants</th>
                                        <th scope="col">date_presence</th>
                                        <th scope="col">etat</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                      while ($row = $result->fetch_assoc()) {
                              /*
                              liste des de tous les présences dans tous les reunion
                                    $query = "select * from presence";

                                    $listePresence = mysqli_query($dbconnect, $query);

                                    while ($row = $listePresence->fetch_assoc()) {*/
                                    ?>

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox text-center">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2"></label>
                                                </div>
                                            </td>
                                            <td><?php echo $row["montants"]; ?></td>
                                            <td><?php echo $row["date_presence"]; ?></td>
                                            <td>

                                                <?php

                                                if ($row["etat"] == "present") {
                                                    echo '<div class="badge badge-pill badge-success">' . $row["etat"] . '</div>';
                                                } else if ($row["etat"] == "absent") {
                                                    echo '<div class="badge badge-pill badge-warning">' . $row["etat"] . '</div>';
                                                } else {
                                                    echo '<div class="badge badge-pill badge-primary">' . $row["etat"] . '</div>';
                                                }

                                                ?></td>

                                            
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="ri-eye-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr><?php
                                            }


                                                ?>





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