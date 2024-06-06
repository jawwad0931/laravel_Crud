<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _customer extends Model
{
    use HasFactory;
    protected $table = '_customer';
    protected $primarykey = 'id';

    // Mutator for Name column
    // when "name" will save, it will convert into lowercase
    // public function setNameAttribute($value)
    // {
    //     $this->attributes['name'] = strtoupper($value);
    // }

    // Define the accessor for the grade attribute
    // public function getGradeAttribute($value)
    // {
    //     return $this->toRoman($value);
    // }

    // Function to convert number to Roman numeral
    // public function toRoman($num)
    // {
    //     // yeh interval variable ko integer mai convert kar raha hai
    //     $n = intval($num);
    //     $result = '';

    //     $lookup = ['M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1];

    //     foreach ($lookup as $roman => $value) {
    //         $matches = intval($n / $value);
    //         $result .= str_repeat($roman, $matches);
    //         $n = $n % $value;
    //     }

    //     return $result;
    // }
}
