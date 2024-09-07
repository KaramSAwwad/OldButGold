<?php

namespace Modules\Item\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Item\Database\Factories\PicturesFactory;

class pictures extends Model
{
    use HasFactory, softDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'item_id',
        'path'
    ];

    // Belongs to an Item
    public function item()
    {
        return $this->belongsTo(Item::class);
    }


}
