<?php


namespace Zickcrow\ModelLog\Policies;


use Illuminate\Foundation\Auth\User;
use Zickcrow\ModelLog\Models\ModelLog;

class ModelLogPolicy
{
    public function browse(User $user)
    {
        return $user->hasPermission('browse_model_log');
    }

    public function clear(User $user){
        return $user->hasPermission('clear_model_log');
    }
}
