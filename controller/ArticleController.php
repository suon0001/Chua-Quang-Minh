<?php
$ArticleResult = $conn->query($getArticle);

$allActicles = $conn->query($ArticleModel->allArticles);