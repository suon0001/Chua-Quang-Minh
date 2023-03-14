<?php

class ArticleModel
{
    public $newsType = "SELECT * FROM NewsType";
    public $photoType = "SELECT * FROM Photo";
    public $saveArticle = "INSERT INTO News (title, author, description, paragraph, timeUpdated, saveDraft, newsTypeID, photoID)
                          VALUE (:title, :author, :description, :paragraph, CURRENT_TIMESTAMP, false, :newsTypeID, :photoID )";
    public $publishArticle = "INSERT INTO News (title, author, description, paragraph, timeUpdated, saveDraft, newsTypeID, photoID)
                          VALUE (:title, :author, :description, :paragraph, CURRENT_TIMESTAMP, true, :newsTypeID, :photoID )";

    public $newsList = "SELECT * FROM News";
}

$ArticleModel = new ArticleModel();