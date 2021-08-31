<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function taskItem(){
        $this->hasMany(TaskItem::class,'task_item_id');
    }
}
