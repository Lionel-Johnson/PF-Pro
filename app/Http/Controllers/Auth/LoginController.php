<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Domains\User\DTO\LoginDTO;
use Domains\User\Services\AuthService;

class LoginController extends Controller
{
    public function __construct(
        private readonly AuthService $service
    ){}

    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {

        $dto=new LoginDTO(
            email:$request->email,
            password:$request->password,
            remember:$request->boolean('remember')
        );

        if(!$this->service->login($dto))
        {
            return back()
                ->withErrors([
                    'email'=>'Identifiants invalides.'
                ])
                ->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard'));

    }

    public function destroy()
    {

        $this->service->logout();

        return redirect('/');

    }
}