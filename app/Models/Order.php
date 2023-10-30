<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'orders';

    public $fillable = [
        'customer_id',
        'part_id'
    ];

    protected $casts = [];

    public static array $rules = [
        'customer_id' => 'required',
        'part_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    protected $appends = ['total'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function parts()
    {
        return $this->belongsToMany(Part::class, 'orders_parts', 'order_id', 'part_id')->withPivot('quantity');
    }

    public function getTotalAttribute()
    {
        return $this->parts->sum(function ($part) {
            return $part->pivot->quantity * $part->price;
        });
    }
}
