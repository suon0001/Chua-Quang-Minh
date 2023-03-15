<?php
$newsID = $_GET['newsID'];
$getArticle = "SELECT * FROM News WHERE newsID = $newsID";
class ArticleModel
{
    public $allArticles = "SELECT * FROM News n, newsType nt WHERE n.newsTypeID = nt.newsTypeID ORDER BY RAND() LIMIT 5 ";

    public $newsType = "SELECT * FROM NewsType";
    public $editSave = " UPDATE News SET `title` = :title, `author` = :author, `description` = :description, `paragraph` = :paragraph, 
                            `timeUpdated` = CURRENT_TIMESTAMP, `saveDraft` = false, `banner` = :banner, `newsTypeID` = :newsTypeID
                            WHERE News.`newsID` = :newsID";
}

$ArticleModel = new ArticleModel();