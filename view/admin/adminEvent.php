<?php
require("rootPath.php");

require $rootPath . "model/AdminEventModel.php";
require $rootPath . "controller/AdminEventController.php";

include("view/_partials/adminPanel.php");

?>
<div class="row">
    <button type="submit" class="btn btn-primary btn-sm"><a href="/add-event" class="link-light">Add</a></button>
    <div class="col-lg-12">
        <div class="main-box clearfix">
            <div class="table-responsive">
                <table class="table user-list">
                    <thead>
                    <tr>
                        <th><span>Event</span></th>
                        <th><span>Host</span></th>
                        <th class="text-center"><span>Address</span></th>
                        <th><span>Start</span></th>
                        <th><span>End</span></th>
                        <th><span>Date</span></th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($allEvents as $row) {
                        ?>
                        <tr>
                            <td>
                                <span><?php echo $row['eventName'] ?></span>
                            </td>
                            <td>
                                <span><?php echo $row['host'] ?></span>
                            </td>
                            <td class="text-center">
                                <span><?php echo $row['address'] ?></span>
                            </td>
                            <td>
                                <span><?php echo $row['start'] ?></span>
                            </td>
                            <td>
                                <span><?php echo $row['end'] ?></span>
                            </td>
                            <td>
                                <span><?php echo $row['date'] ?></span>
                            </td>
                            <td style="width: 12%;">
                                <a href="/edit-event?eventID=<?php echo $row['eventID']; ?>" class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
									</span>
                                </a>
                                <a href="#" class="table-link danger">
                                </a>
                                <a href="/admin-article.php?del=1&newsID=<?= $row["eventID"] ?>"
                                   class="table-link danger">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									</span>
                            </td>
                        </tr>
                        <?php
                    } ?>
                    </tbody>
                </table>
            </div>
            <ul class="pagination pull-right">
                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>


<script>

</script>

<style>
    <?php include 'styles/adminArticle.scss'; ?>
</style>