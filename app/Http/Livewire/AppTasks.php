<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AppTasks extends Component
{
    protected $listeners = ['taskAdded' => '$refresh','statusChanged' => '$refresh', 'statusChanged' => '$refresh'];
    public function render()
    {
        $tasks = auth()->user()->tasks()->get();
        return view('livewire.app-tasks',compact('tasks'));
    }

    public function changeStatus($id){


        $task = auth()->user()->tasks()->where('id', $id)->first();

        if($task->status == 0){
        auth()->user()->tasks()->where('id', $id)->update([
            'status' => true,
        ]);
         }else{
        auth()->user()->tasks()->where('id', $id)->update([
            'status' => false,
        ]);
    }
        $this->emit('statusChanged');
    }

    public function deleteTask($id){
        auth()->user()->tasks()->where('id', $id)->delete();

        $this->emit('taskdeleted');
    }

}
