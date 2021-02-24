<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;
use App\Entities\Statistic;

class Category extends Model
{
    // protected $fillable = [
    //     'name', 'thumbnail', 'parent_id'
    // ];
    protected $guarded = [];
    protected $appends = ['total_views_last_week'];

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function statistics()
    {
        return $this->hasManyThrough(Statistic::class, News::class, 'category_id', 'statisticable_id');
    }

    public function getTotalViewsLastWeekAttribute()
    {
        return $this->statistics->where('name', Statistic::COUNT_VIEWS)->where('day_id', '>', Carbon::now()->subDay(7)->format('Ymd'))->sum('value');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parent()
    {
        return $this->hasMany(self::class, 'id', 'parent_id');
    }

}
