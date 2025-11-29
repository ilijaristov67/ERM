<?php

namespace Modules\Admin\Actions\Auth;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Admin\Http\Resources\Auth\AuthResource;
use Tymon\JWTAuth\Facades\JWTAuth;

class Refresh
{
    use AsAction;

    public function handle(string $oldToken): AuthResource
    {
        JWTAuth::setToken($oldToken);

        $token = JWTAuth::refresh();

        JWTAuth::setToken($token)->toUser();

        return AuthResource::fromToken($token);
    }
}
