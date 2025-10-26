<?php

namespace Modules\Admin\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Admin\Actions\Auth\Login;
use Modules\Admin\Http\Requests\Auth\LoginRequest;
use Modules\Admin\Http\Resources\Auth\AuthResource;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request): AuthResource
    {
        return Login::run($request);
    }
}
