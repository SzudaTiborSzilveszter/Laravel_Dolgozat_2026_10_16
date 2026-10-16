<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['time','product_id','user_id'])]
class Basket extends Model
{
    /** @use HasFactory<\Database\Factories\BasketFactory> */
    use HasFactory;
}
