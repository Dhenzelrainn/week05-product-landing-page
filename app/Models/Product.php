<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $fillable = [
        "name",
        "slug",
        "price",
        "unit",
        "image",
        "category",
        "description",
    ];
    protected function casts(): array
    {
        return ["price" => "decimal:2"];
    }
}
