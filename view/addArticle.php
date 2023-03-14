<?php
require("rootPath.php");

require $rootPath . "model/ArticleModel.php";
require $rootPath . "controller/ArticleController.php";

include("view/_partials/adminPanel.php");

?>


<div class="container-fluid">
    <h3>Article</h3>
    <hr>
    <div class="row">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-9">
                    <div class="form-group">
                        <label for="title">Author</label>
                        <input type="text" name="author" class="form-control" id="author" placeholder="Author">
                    </div>
                    <div class="form-group">
                        <label for="title">Description</label>
                        <textarea class="form-control" name="description" id="textAreaExample1" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">Paragraph</label>
                        <textarea class="form-control" name="paragraph" id="textAreaExample1" rows="20"></textarea>
                    </div>
                </div>
                <div class="col-xs-5 col-md-3">
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <?php
                        while ($row = $newsOption->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="newsTypeID" value="<?php echo $row["newsTypeID"]; ?>">
                                    <?php echo $row['typeName'] ?>
                                </label>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="form-group">
                            <select type="category" name="photoID" class="form-control" required>
                                <?php
                                while ($row = $imageOption->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <option value="<?php echo $row["photoID"]; ?>"><?php echo $row["alt"]; ?><img
                                                src="<?php echo $row["photo"]; ?>" alt=""></option>
                                <?php  } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="save" class="btn btn-primary">Save Draft</button>
                            <button type="submit" name="publish" class="btn btn-primary">Publish</button>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
