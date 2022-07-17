<?php

namespace App\Models;

class AdminGroup extends BaseModel
{
    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
}
