<?php
require("rootPath.php");


include("view/_partials/adminPanel.php");

require $rootPath . "model/AdminMemberModel.php";
require $rootPath . "controller/AdminMemberController.php";

?>
<?php
while ($row = $memberResult->fetch(PDO::FETCH_ASSOC)) {
?>
<h2><?php echo $row['firstName'] ?> <?php echo $row['lastName'] ?></h2>
    <?php
} ?>
<div class="card-body p-0">
    <!-- Billing history table-->
    <div class="table-responsive table-billing-history">
        <table class="table mb-0">
            <thead>
            <tr>
                <th class="border-gray-200" scope="col">Transaction ID</th>
                <th class="border-gray-200" scope="col">Project</th>
                <th class="border-gray-200" scope="col">Date</th>
                <th class="border-gray-200" scope="col">Amount</th>
                <th class="border-gray-200" scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = $donationResult->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td>#<?php echo $row['donationID'] ?></td>
                <td><?php echo $row['project'] ?></td>
                <td><?php echo $row['latestDonation'] ?></td>
                <td><?php echo $row['amount'] ?> DKK</td>
                <td><span class="badge bg-light text-dark">Pending</span></td>
            </tr>
                <?php
            } ?>
            </tbody>
        </table>
    </div>
</div>
