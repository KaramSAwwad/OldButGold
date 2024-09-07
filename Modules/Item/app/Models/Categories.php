<?php

namespace Modules\Item\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Item\Database\Factories\CategoriesFactory;

class categories extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
    ];

    // One-to-Many relationship with Item
    public function items()
    {
        return $this->hasMany(Item::class, 'item_category_id');
    }

}
