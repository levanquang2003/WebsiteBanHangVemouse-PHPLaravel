<?php

namespace App\Repositories\Brand;

use App\Models\Brand;
use App\Repositories\BaseRepositories;

class BrandRepository extends BaseRepositories implements BrandRepositoryInterface
{
    public function getModel()
    {
        return Brand::class;
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
