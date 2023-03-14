<?php
require("rootPath.php");

require $rootPath . "model/ArticleModel.php";
require $rootPath . "controller/ArticleController.php";

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
                            <th class="text-center"><span>Created</span></th>
                            <th><span>Draft</span></th>
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
                                <a href="#"><?php echo $row['saveDraft'] ?></a>
                            </td>
                            <td style="width: 20%;">
                                <a href="#" class="table-link" onclick="openModal()">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
									</span>
                                </a>
                                <a href="#" class="table-link" >
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
									</span>
                                </a>
                                <a href="#" class="table-link danger">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									</span>
                                </a>
                            </td>
                        </tr>
                            <div id="viewArticle" class="modal">
                                <div class="delete-mail container bg-white">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $row['title'] ?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <p><?php echo $row['paragraph'] ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" onclick="closeModal()">Close</button>
                                    </div>
                                </div>
                            </div>
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