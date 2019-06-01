<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id_task';
    public $increments = true;
    public $timestamp = true;
    protected $fillable = ['title','description','priority'];
}
