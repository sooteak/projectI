<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $guarded=[];
    protected $attribute = [
        'category' => 0
    ];

    public function getCategoryAttribute($attribute){

        // return [
        //     0 => 'Student Union/ Student Society',
        //     1 => 'Sport Society',
        //     2 => 'Performance Society',
        //     3 => 'Religion / Charity Society',
        //     4 => ' Language / Cultural / Art',
        //     5 => 'Others',

        // ][$attribute];

        return $this->categoryOptions()[$attribute];
    }

    // public function category01($query)
    // {
    //     return $query->where('category', 0);
    // }
    // public function category02($query)
    // {
    //     return $query->where('category', 1);
    // }
    // public function category03($query)
    // {
    //     return $query->where('category', 2);
    // }
    // public function category04($query)
    // {
    //     return $query->where('category', 3);
    // }
    // public function category05($query)
    // {
    //     return $query->where('category', 4);
    // }
    // public function category06($query)
    // {
    //     return $query->where('category', 5);
    // }



    public function categoryOptions(){
        return [
            0 => 'Student Union/ Student Society',
            1 => 'Sport Society',
            2 => 'Performance Society',
            3 => 'Religion / Charity Society',
            4 => 'Language / Cultural / Art',
            5 => 'Others',
        ];

    }
}
