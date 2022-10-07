<div>
    <div class="mb-3 text-center">
      <label for="exampleInputEmail1" class="form-label"> <p>إضافة مهمة</p> </label>
      <input type="text" class="form-control transparent" wire:model="title">
      @error('title')   <span class="error text-danger">{{ $message }}</span>  @enderror
    </div>
      <div class="mb-3">
    <button wire:click.prevent="addTask" class="btn c-btn ">إرسال</button>
</div>
</div>
