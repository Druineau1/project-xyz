<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class InvitationCode extends Model
{
    public function generateCode(): string
    {
        return Str::upper(Str::random(4)) . '-' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT) . '-' . Str::upper(Str::random(4));
    }
}
