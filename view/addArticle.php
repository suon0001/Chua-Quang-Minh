<?php
require("rootPath.php");

require $rootPath . "model/AddArticleModel.php";
require $rootPath . "controller/AddArticleController.php";

?>

<div class="container-fluid">
    <h1>Article</h1>
    <div class="row">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-9">
                    <div class="form-group">
                        <label for="title">Description</label>
                        <textarea class="form-control" id="textAreaExample1" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">Paragraph</label>
                        <textarea class="form-control" id="textAreaExample1" rows="20"></textarea>
                    </div>
                </div>
                <div class="col-xs-5 col-md-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Save Draft</button>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                    <div class="form-group">
                        <label for="created">Created</label>
                        <input type="text" class="form-control" id="created" placeholder="<?php echo date("Y/m/d");?>">
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Category 1
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Category 2
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="metakeywords">Metakeywords</label>
                            <textarea placeholder="Metakeywords" name="metakeywords" class="form-control"
                                      rows="2"></textarea>
                            <p class="help-block">Separe the words with comma</p>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control"/>
                            <p class="help-block">Image definitions</p>
                        </div>
                        <a href="#" class="thumbnail">
                            <img src="http://fakeimg.pl/300/">
                        </a>
                    </div>
                </div>
        </form>
    </div>
</div>

<style>
    <?php include 'styles/index.css'; ?>
</style>
