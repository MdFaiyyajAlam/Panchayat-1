<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_type',
        'title',
        'slug',
        'description',
        'keywords',
        'visibility',
        'show_right_column',
        'featured',
        'breaking',
        'slider',
        'recommended',
        'show_auth_user',
        'send_subscriber',
        'tags',
        'opt_url',
        'content',
        'post_image_gallery_id',
        'opt_image_url',
        'image_desc',
        'category_id',
        'subcategory_id',
        'author_id',
        'status',
        'scheduled_post_date',
        'view_counts',
    ];

    function postSlider()
    {
        return $this->hasMany(PostImage::class, 'post_id', 'id');
    }

    function postFile()
    {
        return $this->hasMany(PostFile::class, 'post_id', 'id');
    }

    function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    function subCategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id', 'id');
    }

    function author()
    {
        return $this->belongsTo(Admin::class, 'author_id', 'id');
    }

    function mainImage()
    {
        return $this->belongsTo(PostImageGallery::class, 'post_image_gallery_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

}
