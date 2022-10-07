@extends('layouts.app')
@section('title')
مهامي 
@endsection
@section('content')
<div class="row">
<div class="col-6">
  @livewire('app-add-tasks')
</div>

<div class="col-6 text-start">
    
       @livewire('app-tasks')
</div>
</div>
@endsection
