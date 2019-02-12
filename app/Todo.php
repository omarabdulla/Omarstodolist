<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // setup default values
  protected $attributes = [
    'title'     => 'todo item',
    'content'   => '',
    'archived'  => false,
  ];
}
