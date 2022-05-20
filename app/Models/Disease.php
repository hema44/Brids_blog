<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = ['Symptoms', 'name'];

    public function scopeDes($query,$type){
        $array = explode(" ",$type);
        $array_lent=count ($array);

        if($array_lent == 1){
            return $query->where('Symptoms', 'like', "%$array[0]%")->get();
        }
        else if($array_lent == 2)
        {
            return $query->where('Symptoms', 'like', "%$array[0]%")
                ->orWhere('Symptoms', 'like', "%$array[1]%")->get();
        }
        else
        {
            return $query->where('Symptoms', 'like', "$array[0]%")
                ->orWhere('Symptoms', 'like', "%$array[1]%")
                ->orWhere('Symptoms', 'like', "%$array[2]%")->get();
        }
    }
}
