<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'city',
        'house',
        'apartment',
        'user_id',
        'price',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getOrderStatusAttribute()
    {
        $status = 'В обработке';

        switch ($this->status) {
            case 'canceled':
                $status = 'Отменен';
                break;
            case 'success':
                $status = 'Завершен';
                break;

            case 'build':
                $status = 'Собирается';
                break;

            case 'delivered':
                $status = 'Отправлен';
                break;
            default:
                $status = 'В обработке';
        }

        return $status;
    }
}
