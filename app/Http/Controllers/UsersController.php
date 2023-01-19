<?php

namespace App\Http\Controllers;

use App\Models\Login;
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

        // $users = User::query()
        //     ->with('company')
        //     ->orderBy('name')
        //     ->simplePaginate();

        // $users = User::query()
        //     ->with('lastLogin')
        //     ->orderBy('name')
        //     ->paginate();

        // return view('users.index2', [
        //     'users' => $users
        // ]);

        // L7
        $users = User::query()
            ->with('company')
            // ->search(request('search'))
            ->paginate();

        return view('users.index4', ['users' => $users]);
    }
}
