<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class AppAddTasks extends Component
{
    public $title;
    public function render()
    {
        return view('livewire.app-add-tasks');
    }


 
    protected $rules = [
        'title' => 'required|min:6',
    ];
    public function addTask()
    {
        $this->validate();
        auth()->user()->tasks()->create([
            'title' => $this->title,
            'status' => false,
        ]);

        $this->title = '';
        $this->emit('taskAdded');
    }
}
