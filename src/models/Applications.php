<?php
namespace BetterBeing\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Applications extends Eloquent
{
    public function user()
    {
        return $this->hasOne('BetterBeing\Models\User');
    }
}