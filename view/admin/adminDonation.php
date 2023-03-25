<?php
require("rootPath.php");


include("view/_partials/adminPanel.php");

require $rootPath . "model/AdminDonationModel.php";
require $rootPath . "controller/AdminDonationController.php";

?>

<div class="row">
    <div class="col-xl-12">
            <div class="card-body">
                <h5 class="header-title pb-3 mt-0">Payments</h5>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                        <tr class="align-self-center">
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone Number</th>
                            <th>Donations</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($memberList as $row) {
                        ?>
                        <tr>
                            <td><?php echo $row['firstName'] ?></td>
                            <td><?php echo $row['lastName'] ?></td>
                            <td><?php echo $row['phone'] ?></td>
                            <td><a href="/admin-member?memberID=<?php echo $row['memberID']; ?>">click</a></td>
                        </tr>
                            <?php
                        } ?>
                        </tbody>
                    </table>
                </div>
                <!--end table-responsive-->
                <div class="pt-3 border-top text-right"><a href="#" class="text-primary">View all <i class="mdi mdi-arrow-right"></i></a></div>
            </div>
    </div>
</div>

<style>
    .table th {
        font-weight: 500;
        color: #827fc0;
    }
    .table thead {
        background-color: #f3f2f7;
    }
    .table>tbody>tr>td, .table>tfoot>tr>td, .table>thead>tr>td {
        padding: 14px 12px;
        vertical-align: middle;
    }
    .table tr td {
        color: #8887a9;
    }
    .thumb-sm {
        height: 32px;
        width: 32px;
    }
    .badge-soft-warning {
        background-color: rgba(248,201,85,.2);
        color: #f8c955;
    }

    .badge {
        font-weight: 500;
    }
    .badge-soft-primary {
        background-color: rgba(96,93,175,.2);
        color: #605daf;
    }
</style>
