<?php

namespace App\Http\Controllers;

use App\Repository\Eloquent\UserRepository;
use App\Repository\UserRepositoryInterface;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->all();

        return view('users.index', [
            'users' => $users
        ]);
    }
}
