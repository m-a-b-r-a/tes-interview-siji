<?php

namespace App\Http\Livewire;

use App\Models\TaskItem;
use Livewire\Component;
use App\Models\TaskList as Tlist;
class TaskList extends Component
{
    public $taskList,$archievedList;
    public $listName,$listHex,$listId;
    public $pageTitle;
    public $itemList;
    public $itemTitle;
    public $itemDesc;
    public $showFormCreateItem;

    public function mount(){
        $this->itemList = TaskItem::where('user_id',auth()->user()->id)
                            ->where('is_done',0)
                            ->orderBy('created_at','desc')
                            ->get();
        $this->showFormCreateItem = false;
    }
    public function render()
    {
        if(isset($this->listId)){
            $this->itemList = TaskItem::where('task_list_id',$this->listId)
            ->where('is_done',0)
            ->where('user_id',auth()->user()->id)
            ->get();
        }else{
            $this->itemList = TaskItem::where('user_id',auth()->user()->id)
            ->where('is_done',0)
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
    public function updateList(){
        $data = Tlist::where('id',$this->listId);
        $data->update([
            'name' => $this->listName,
            'hex' => $this->listHex,
        ]);
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
        $this->showFormCreateItem = true;
        $list = TaskItem::where('id',$id)->first();
        $this->itemTitle = $list->name;
        $this->itemDesc = $list->desc;
    }
    public function updateItem($id){
        $list = TaskItem::where('id',$id);
        $list->update([
            'name' => $this->itemTitle,
            'desc' => $this->itemDesc,
        ]);
        $this->reset('itemTitle');
        $this->reset('itemDesc');
        $this->showFormCreateItem = false;
    }
}
