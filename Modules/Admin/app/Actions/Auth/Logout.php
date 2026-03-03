<?php

namespace Modules\Admin\Actions\Auth;

use Lorisleiva\Actions\Concerns\AsAction;
use Tymon\JWTAuth\Facades\JWTAuth;

class Logout
{
    use AsAction;

    public function handle(): void
    {
        $token = JWTAuth::parseToken();
        // @phpstan-ignore-next-line
        JWTAuth::invalidate($token);
    }
}
