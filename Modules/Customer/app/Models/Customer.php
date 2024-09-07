<?php

namespace Modules\Customer\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Item\Models\Item;

class Customer extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $guard = "customer";

    protected $fillable = [
        'name',
        'email',
        'password',
        'phoneNumber',
        'address',
        'postal_code',
        'city_id',
        'avatar',
    ];

    // Relationship with City
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    // One-to-Many relationship with Item
    public function items()
    {
        return $this->hasMany(Item::class, 'owner_id');
    }

    // Many-to-Many relationship with Item through CustomerItemLike
    public function likedItems()
    {
        return $this->belongsToMany(Item::class, 'customer_item_likes', 'customer_id', 'item_id')
            ->withTimestamps();
    }
}
