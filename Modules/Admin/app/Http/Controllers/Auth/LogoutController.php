<?php

namespace Modules\Admin\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessfulOperationMessageResource;
use Modules\Admin\Actions\Auth\Logout;
use Symfony\Component\HttpFoundation\Response;

class LogoutController extends Controller
{
    public function __invoke(): SuccessfulOperationMessageResource
    {
        Logout::run();

        return SuccessfulOperationMessageResource::make([
            'message' => __('Successfully logged out.'),
            'code' => Response::HTTP_OK,
        ]);
    }
}
