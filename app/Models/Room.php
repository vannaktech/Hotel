<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'roomnumber',
        'roomtypeid',
        'roomname',
    ];

    public function roomType(){
        return $this->BelongsTo(RoomType::class, 'roomtypeid', 'id');
    }

}
