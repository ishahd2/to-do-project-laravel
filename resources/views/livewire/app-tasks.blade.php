<div>
    <ul class="list-group list-group-flush">
        @foreach($tasks as $task)
        <li class="list-group-item">
            <div class="form-check">
                <input wire:click.prevent='changeStatus("{{$task->id}}")' type="checkbox" class="form-check-input" {{ ($task->status == 1 ? ' checked' : '') }} id="exampleCheck1">
                <label class="form-check-label dis" for="exampleCheck1">{{$task->title}}</label>
                <i wire:click.prevent='deleteTask("{{$task->id}}")' class="bi bi-x position-absolute bottom-0 end-0"></i>
              </div>
        </li>
        @endforeach
    </ul>  
</div>