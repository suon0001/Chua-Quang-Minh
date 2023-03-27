<?php
$newsID = $_GET['newsID'];
$getArticle  = "SELECT * FROM News n, NewsType nt WHERE n.newsTypeID = nt.newsTypeID AND  newsID = $newsID";
$allArticles = "SELECT * FROM News n, NewsType nt WHERE n.newsTypeID = nt.newsTypeID AND NOT newsID = $newsID ORDER BY RAND() LIMIT 5 ";
$treding = "SELECT * FROM News n, NewsType nt WHERE n.newsTypeID = nt.newsTypeID AND NOT newsID = $newsID ORDER BY hitCount desc LIMIT 2";
$hitCounter ="UPDATE News SET hitCount = COALESCE(hitCount, 0) + 1 WHERE newsID = $newsID";

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
