<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'title', 'description', 'body', 'image', 'published_at', 'category_id','user_id','tages'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearched($query){

        $search = request()->query('search');
        $array = explode(" ",$search);
        $array_lent=count ($array);
        if(!$search){
            return $query;
        }
        else{
            if($array_lent == 1){
                return $query->where('tages', 'like', "%$array[0]%");
            } else if($array_lent == 2){
                return $query->where('tages', 'like', "%$array[0]%")
                    ->orWhere('tages', 'like', "%$array[1]%");
            }else{
                return $query->where('tages', 'like', "%$array[0]%")
                    ->orWhere('tages', 'like', "%$array[1]%")
                    ->orWhere('tages', 'like', "%$array[2]%");
            }
        }
//        return $query->search($search)->get();
    }
    public function scopeDes($query,$type){

        $array = explode(" ",$type);
        $array_lent=count ($array);

        if($array_lent == 1){
            return $query->where('tages', 'like', "%$array[0]%");
        }
        else if($array_lent == 2)
        {
            return $query->where('tages', 'like', "%$array[0]%")
                ->orWhere('tages', 'like', "%$array[1]%");
        }
        else
        {
            return $query->where('tages', 'like', "%$array[0]%")
                ->orWhere('tages', 'like', "%$array[1]%")
                ->orWhere('tages', 'like', "%$array[2]%");
        }
    }
}
