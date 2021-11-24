<form>
    <div class="form-group">
        <input type="hidden" wire:model="post_id">
        <label for="exampleFormControlInput1">Title</label>
        <input type="text" class="form-control" wire:model="title" id="exampleFormControlInput1" placeholder="Enter Title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Content</label>
        <input type="text" class="form-control" wire:model="content" id="exampleFormControlInput2" placeholder="Enter Content">
        @error('content') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">content_main_page</label>
        <input type="text" class="form-control" wire:model="content_main_page" id="exampleFormControlInput2" placeholder="Enter content_main_page">
        @error('content_main_page') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Обновить</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Отменить</button>
</form>
