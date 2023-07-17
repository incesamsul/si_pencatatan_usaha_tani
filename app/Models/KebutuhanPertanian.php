<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KebutuhanPertanian extends Model
{
    use HasFactory;
    protected $table = 'kebutuhan_pertanian';
    protected $guarded = [''];

    public function petani()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
