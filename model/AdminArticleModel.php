<?php

class AdminArticleModel
{
    public $newsType = "SELECT * FROM NewsType";
    public $saveArticle = "INSERT INTO News (title, author, description, paragraph, timeUpdated, saveDraft, banner, newsTypeID)
                          VALUE (:title, :author, :description, :paragraph, CURRENT_TIMESTAMP, false, :banner, :newsTypeID )";
    public $publishArticle = "INSERT INTO News (title, author, description, paragraph, timeUpdated, saveDraft, banner, newsTypeID)
                          VALUE (:title, :author, :description, :paragraph, CURRENT_TIMESTAMP, true, :banner, :newsTypeID )";

    public $newsList = "SELECT * FROM News";

    public $deleteArticle = "DELETE FROM News WHERE newsID = :newsID";
}

$AdminArticleModel = new AdminArticleModel();