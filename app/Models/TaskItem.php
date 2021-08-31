<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TaskList;

class TaskItem extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function parent(){
        return $this->belongsTo(TaskList::class,'task_list_id','id');
    }
}
