<?php

namespace App\Service\User;

use App\Repositories\User\UserRepositoryInterface;
use App\Service\BaseService;

class UserService extends BaseService implements UserServiceInterface
{
    public $repository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->repository = $userRepository;
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
