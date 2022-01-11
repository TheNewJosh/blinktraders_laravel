<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'blog_category_id',
        'thumbnail',
        'short_detail',
        'content',
        'status',
    ];

    protected $table = 'blogs';

    protected $primaryKey = 'id';

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
