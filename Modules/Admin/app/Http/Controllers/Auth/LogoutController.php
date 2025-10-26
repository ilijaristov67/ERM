<?php

namespace Modules\Admin\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessfulOperationMessageResource;
use Symfony\Component\HttpFoundation\Response;

use Modules\Admin\Actions\Auth\Logout;

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
