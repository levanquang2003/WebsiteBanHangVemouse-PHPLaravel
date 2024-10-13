<?php

namespace App\Repositories\ProductCategory;

use App\Models\ProductCategory;
use App\Repositories\BaseRepositories;
use App\Service\BaseService;

class ProductCategoryRepository extends BaseRepositories implements ProductCategoryRepositoryInterface
{
    public function getModel()
    {
        return ProductCategory::class;
    }

    public function has(string $name)
    {
        // TODO: Implement has() method.
    }

    public function get(string $name)
    {
        // TODO: Implement get() method.
    }

    public function set(string $name, string $value)
    {
        // TODO: Implement set() method.
    }

    public function clear(string $name)
    {
        // TODO: Implement clear() method.
    }
}
