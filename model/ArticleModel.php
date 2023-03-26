<?php
$newsID = $_GET['newsID'];
$getArticle  = "SELECT * FROM News n, NewsType nt WHERE n.newsTypeID = nt.newsTypeID AND  newsID = $newsID";
$allArticles = "SELECT * FROM News n, NewsType nt WHERE n.newsTypeID = nt.newsTypeID AND NOT newsID = $newsID ORDER BY RAND() LIMIT 5 ";

class ArticleModel
{
    public $newsType = "SELECT * FROM NewsType";
    public $editSave = " UPDATE News SET `title` = :title, `author` = :author, `description` = :description, `paragraph` = :paragraph, 
                            `timeUpdated` = CURRENT_TIMESTAMP, `saveDraft` = false, `banner` = :banner
                            WHERE News.`newsID` = :newsID";
    public $editPublish = " UPDATE News SET `title` = :title, `author` = :author, `description` = :description, `paragraph` = :paragraph, 
                            `timeUpdated` = CURRENT_TIMESTAMP, `saveDraft` = true, `banner` = :banner
                            WHERE News.`newsID` = :newsID";
}

$ArticleModel = new ArticleModel();