<?php

namespace Modules\Admin\Actions\Auth;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Admin\Http\Requests\Auth\LoginRequest;
use Modules\Admin\Http\Resources\Auth\AuthResource;

class Login
{
    use AsAction;

    public function handle(LoginRequest $request): AuthResource
    {
        $credentials = $request->only('username', 'password');
        $token = auth()->attempt($credentials);

        if (! $token) {
            abort('400', 'Wrong credentials.');
        }

        return AuthResource::fromToken($token);
    }
}
