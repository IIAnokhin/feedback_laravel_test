<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Bid extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setStatus()
    {
        $this->status = 0;
        $this->save();
    }

    public function setAnswered()
    {
        $this->status = 1;
        $this->save();
    }

    public function toggleStatus($value)
    {
        if ($value == null)
        {
             return $this->setStatus();
        }

         return $this->setAnswered();
    }
}
