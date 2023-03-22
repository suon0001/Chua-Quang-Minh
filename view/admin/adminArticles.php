<?php
require("rootPath.php");

require $rootPath . "model/AdminArticleModel.php";
require $rootPath . "controller/AdminArticleController.php";

include("view/_partials/adminPanel.php");

?>
<div class="container">
    <div class="row">
        <button type="submit" class="btn btn-primary"><a href="/add-article">Add</a></button>
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <div class="table-responsive">
                    <table class="table user-list">
                        <thead>
                        <tr>
                            <th><span>Title</span></th>
                            <th><span>Author</span></th>
                            <th class="text-center"><span>Updated</span></th>
                            <th><span>Status</span></th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        foreach ($listOfNews as $row) {
                            ?>
                            <tr>
                                <td>
                                    <span class="user-subhead"><?php echo $row['title'] ?></span>
                                </td>
                                <td>
                                    <?php echo $row['author'] ?>
                                </td>
                                <td class="text-center">
                                    <span class="label label-default"><?php echo $row['timeUpdated'] ?></span>
                                </td>
                                <td>
                                    <p>
                                        <?php echo $row['saveDraft'] ? 'Publish' : 'Draft'; ?>
                                    </p>
                                </td>
                                <td style="width: 12%;">
                                    <a href="../../index.php" class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
									</span>
                                    </a>
                                    <a href="../../index.php"
                                       class="table-link danger">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									</span>
                                    </a>
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
</div>

<script>
    function openModal() {
        document.getElementById("viewArticle").style.display = "block";
    }

    function closeModal() {
        document.getElementById("viewArticle").style.display = "none";
    }
</script>

<style>
    <?php include 'styles/adminArticle.scss'; ?>
</style>