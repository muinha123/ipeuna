<?php


namespace App\Http\Repositories\Auth;


use App\Models\SystemProfile;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterRepository
{
    public function register($params)
    {
        try {
            $params['system_profile_id'] = SystemProfile::SYSTEM_PROFILE_USER;
            $params['password'] = Hash::make($params['password']);

            $user = User::create($params);

            return $user;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
