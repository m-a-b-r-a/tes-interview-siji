<?php

namespace App\Http\Livewire;

use App\Models\TaskItem;
use Livewire\Component;
use App\Models\TaskList as Tlist;
class TaskList extends Component
{
    public $taskList,$archievedList;
    public $listName,$listHex,$listId,$newListName,$newListHex;
    public $pageTitle;
    public $itemList;
    public $itemTitle;
    public $itemDesc;
    public $itemId;
    public $showFormCreateItem,$showFormEditItem,$showFormEditList;

    public function mount(){
        $archieved = Tlist::where('status',2)->pluck('id');
        $this->itemList = TaskItem::where('user_id',auth()->user()->id)
                            ->where('is_done',0)
                            ->whereNotIn('task_list_id',$archieved)
                            ->orderBy('created_at','desc')
                            ->get();
        $this->showFormCreateItem = false;
        $this->showFormEditItem = false;
        $this->showFormEditList = false;
    }
    public function render()
    {
        $archieved = Tlist::where('status',2)->pluck('id');
        if(isset($this->listId)){
            $this->itemList = TaskItem::where('task_list_id',$this->listId)
            ->where('is_done',0)
            ->where('user_id',auth()->user()->id)
            ->get();
        }else{
            $this->itemList = TaskItem::where('user_id',auth()->user()->id)
            ->where('is_done',0)
            ->whereNotIn('task_list_id',$archieved)
            ->orderBy('created_at','desc')
            ->get();
        }
        $this->taskList = Tlist::where('user_id',auth()->user()->id)->where('status',1)->get();
        $this->archievedList = Tlist::where('user_id',auth()->user()->id)->where('status',2)->get();
        return view('livewire.task-list');
    }
    public function archieveList($id){
        $data = Tlist::where('id',$id);
        $data->update([
            'status' => 2,
        ]);
    }
    public function unArchieveList($id){
        $data = Tlist::where('id',$id);
        $data->update([
            'status' => 1,
        ]);
    }
    public function showList($id){
        $this->itemList = TaskItem::where('task_list_id',$id)
                        ->where('user_id',auth()->user()->id)
                        ->where('is_done',0)
                        ->get();
        $this->pageTitle = Tlist::where('id',$id)->first();
        $this->listName = $this->pageTitle->name;
        $this->listHex = $this->pageTitle->hex;
        $this->listId = $this->pageTitle->id;

    }
    public function showFormEditList(){
        $this->newListName = $this->listName;
        $this->newListHex = $this->listHex;
        $this->showFormEditList = true;
    }
    public function updateList(){
        $this->listName = $this->newListName;
        $this->listHex = $this->newListHex;
        $data = Tlist::where('id',$this->pageTitle->id);
        $data->update([
            'name' => $this->newListName,
            'hex' => $this->newListHex,
        ]);
        $this->showFormEditList = false;
    }

    public function showFormCreateItem(){
        $this->showFormCreateItem = true;
    }

    public function storeItem(){
        TaskItem::create([
            'user_id' => auth()->user()->id,
            'task_list_id' => $this->listId,
            'desc' => $this->itemDesc,
            'name' => $this->itemTitle,
        ]);
        $this->reset('itemTitle');
        $this->reset('itemDesc');
        $this->showFormCreateItem = false;
    }
    public function checked($id){
        $data = TaskItem::where('id',$id);
        $data->update([
            'is_done' => 1,
        ]);
    }
    public function deleteItem($id){
        $data = TaskItem::where('id',$id);
        $data->delete();
    }
    public function editItem($id){
        $this->showFormEditItem = true;
        $list = TaskItem::where('id',$id)->first();
        $this->itemTitle = $list->name;
        $this->itemDesc = $list->desc;
        $this->itemId = $list->id;
    }
    public function updateItem(){
        $list = TaskItem::where('id',$this->itemId);
        $list->update([
            'name' => $this->itemTitle,
            'desc' => $this->itemDesc,
        ]);
        $this->reset('itemTitle');
        $this->reset('itemDesc');
        $this->reset('itemId');
        $this->showFormEditItem = false;
    }
}
