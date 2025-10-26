<?php

namespace Modules\Admin\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Dedoc\Scramble\Attributes\QueryParameter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Admin\Actions\Auth\Refresh;
use Modules\Admin\Http\Resources\Auth\AuthResource;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class RefreshController extends Controller
{
    public function __invoke(Request $request): AuthResource|JsonResponse
    {
        try {
            return Refresh::run($request->refresh_token);
        } catch (TokenInvalidException $e) {
            return response()->json(['error' => __('Invalid token.')], 400);
        } catch (TokenExpiredException $e) {
            return response()->json(['error' => (__('Token has expired.'))], 401);
        } catch (JWTException $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
