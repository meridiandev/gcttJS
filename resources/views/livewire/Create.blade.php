<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Content</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="content" placeholder="Enter content">
        @error('content') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">content_main_page</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="content_main_page" placeholder="Enter content_main_page">
        @error('content_main_page') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Сохранить</button>
</form>
