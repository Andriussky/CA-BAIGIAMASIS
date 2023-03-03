<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $order_id
 * @property string $shelf_content_name
 * @property int $shelf_content_id
 * @property int $quantity
 * @property string $price
 * @property int $status_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 */
class OrderDetails extends Model
{
    use HasFactory;

    protected $guarded = [
        'status_id',
    ];

    protected $fillable = [
        'order_id',
        'shelf_content_name',
        'shelf_content_id',
        'quantity',
        'price',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function shelf_content(): BelongsTo
    {
        return $this->belongsTo(Shelf::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Shelf::class);
    }

    public function __toString(): string
    {
        return $this->shelf_content_name;
    }
}
