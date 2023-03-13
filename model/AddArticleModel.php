<?php

class AddArticleModel
{
public $addArticle = "INSERT INTO news (title, author, description, paragraph, timeUpdated, saveDraft, newsTypeID, photoID)
                          VALUE (:title, :author, :description, :paragraph, :timeUpdated, :saveDraft, :newsTypeID, :photoID )";

}
$AddArticleModel = new AddArticleModel();