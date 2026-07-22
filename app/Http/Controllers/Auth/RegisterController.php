<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use Domains\User\DTO\RegisterDTO;
use Domains\User\Services\AuthService;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct(
        private readonly AuthService $service
    ){}

    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {

        $user=$this->service->register(

            new RegisterDTO(

                name:$request->name,
                email:$request->email,
                password:$request->password

            )

        );

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->route('dashboard');

    }
}