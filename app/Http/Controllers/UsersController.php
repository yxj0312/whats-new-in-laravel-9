<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repository\UserRepositoryInterface;

class UsersController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        // $users = $this->userRepository->all();

        $users = User::query()
            ->with('company')
            ->orderBy('name')
            ->simplePaginate();
        
        // dd($users);

        return view('users.index', [
            'users' => $users
        ]);
    }
}
