<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = ['title','content','published_at','intro','user_id'];

    protected $dates = ['published_at'];  //作为carbon对象处理  可以使用diffForHumans



    //setTitleAtrribute 对字段预处理，自动调用
     /**
     * attribute 预处理
     * @param $data
     * 方法名组成: set + 字段名 + Attribute
     *
     */
    public function setPublishedAtAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }

    public function scopePublished($query)
    {
    	$query->where('published_at','<=',Carbon::now());
    }


    public function user()
    {
        return $this->belongsTo('App\User');  //$article->user
    }
}
