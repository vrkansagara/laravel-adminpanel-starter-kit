<?php
namespace App\Repositories\Blog;

use Bosnadev\Repositories\Eloquent\Repository;

class CategoryRepository extends Repository {

    public function model() {
        return 'App\Entity\Blog\Category';
    }
}
