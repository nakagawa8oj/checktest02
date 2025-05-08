<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

  protected $fillable = ['name', 'price', 'seasons','content'];

  public function getDetail()
  {
    $txt = 'ID:'.$this->id . ' ' . $this->name . '(' . $this->price .  '才'.') '.$this->nationality;
    return $txt;
  }

}
