<?php

namespace Modules\Item\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Customer\Models\Customer;
use Modules\Item\Database\Factories\ItemFactory;

class Item extends Model
{
    use HasFactory, softDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'description',
        'price',
        'item_category_id',
        'owner_id'
    ];

    // Belongs to a Customer (Owner)
    public function owner()
    {
        return $this->belongsTo(Customer::class, 'owner_id');
    }

    // Belongs to a Category
    public function category()
    {
        return $this->belongsTo(Categories::class, 'item_category_id');
    }

    // Many-to-Many relationship with Customer through CustomerItemLike
    public function likedByCustomers()
    {
        return $this->belongsToMany(Customer::class, 'customer_item_likes', 'item_id', 'customer_id')
            ->withTimestamps();
    }
    // Relationship with Picture
    public function pictures()
    {
        return $this->hasMany(Pictures::class);
    }
}
