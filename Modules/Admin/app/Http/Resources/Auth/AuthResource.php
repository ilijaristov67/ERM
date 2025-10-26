<?php

namespace Modules\Admin\Http\Resources\Auth;

use App\Http\Resources\BaseJsonResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Admin\Http\Resources\User\UserResource;
use Modules\Admin\Models\User\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthResource extends BaseJsonResource
{
    private string $accessToken;

    private Carbon $expiresAt;

    private User $user;

    public function __construct($resource, string $accessToken)
    {
        parent::__construct($resource);
        $this->accessToken = $accessToken;
        self::setExpiresAt();
        $this->user = auth()->user();
    }

    public static function fromToken(string $token): self
    {
        return new self(null, $token);
    }

    /** @return array<string, string> */
    public function toArray(Request $request): array
    {
        return [
            'user' => new UserResource($this->user->load([
                'permissions',
                'roles.permissions',
            ])),
            'expires_at' => $this->expiresAt,
            'access_token' => $this->accessToken,
        ];
    }

    private function setExpiresAt(): void
    {
        $this->expiresAt = Carbon::createFromTimestamp(JWTAuth::setToken($this->accessToken)->getPayload()->get('exp'));
    }
}
