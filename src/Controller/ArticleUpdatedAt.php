<?php


namespace App\Controller;


use App\Entity\Article;

class ArticleUpdatedAt
{
    public function __invoke(Article $data): Article
    {
        // TODO: Implement __invoke() method.
        $data->setUpdateAt(new \DateTimeImmutable("now"));

        return $data;
    }
}