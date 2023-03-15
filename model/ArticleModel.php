<?php
$newsID = $_GET['newsID'];
$getArticle = "SELECT * FROM news n, photo p WHERE n.photoID = p.photoID AND newsID = $newsID";
class ArticleModel
{
    public $allArticles = "SELECT * FROM news n, newsType nt WHERE n.newsTypeID = nt.newsTypeID ORDER BY RAND() LIMIT 5 ";
}

$ArticleModel = new ArticleModel();