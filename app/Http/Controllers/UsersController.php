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

        $users = User::query()
            // ->withLastLoginAt()
            ->addSelect(['last_login_at' => Login::select('created_at')
                ->whereColumn('user_id', 'users.id')
                ->latest()
                ->take(1)])
            ->orderBy('name')
            ->paginate();

        return view('users.index2', [
            'users' => $users
        ]);
    }
}
