<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function undoneTaskItem(){
        return $this->hasMany(TaskItem::class,'task_list_id')->where('is_done',0);
    }
}
