<?php
$articleResult = $conn->query($getArticle);

$allActicles = $conn->query($ArticleModel->allArticles);