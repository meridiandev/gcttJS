<div class="card">
    <div class="card-body">
        <form>
<!--            site_title-->
            <div class="form-group mb-3">
                <label for="site_title">site_title:</label>
                <input type="text" class="form-control @error('site_title') is-invalid @enderror" id="site_title" placeholder="Enter site_title" wire:model="site_title">
                @error('site_title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
<!--            site_header-->
            <div class="form-group mb-3">
                <label for="site_header">site_header:</label>
                <input type="text" class="form-control @error('site_header') is-invalid @enderror" id="site_header" placeholder="Enter site_header" wire:model="site_header">
                @error('site_header')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
<!--            site_phone-->
            <div class="form-group mb-3">
                <label for="site_phone">site_phone:</label>
                <input type="text" class="form-control @error('site_phone') is-invalid @enderror" id="site_phone" placeholder="Enter site_phone" wire:model="site_phone">
                @error('site_phone')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
<!--            site_meridian-->
            <div class="form-group mb-3">
                <label for="site_meridian">site_meridian:</label>
                <input type="text" class="form-control @error('site_meridian') is-invalid @enderror" id="site_meridian" placeholder="Enter site_meridian" wire:model="site_meridian">
                @error('site_meridian')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
<!--            site_address-->
            <div class="form-group mb-3">
                <label for="site_address">site_address:</label>
                <input type="text" class="form-control @error('site_address') is-invalid @enderror" id="site_address" placeholder="Enter site_address" wire:model="site_address">
                @error('site_address')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
<!--            site_footer-->
            <div class="form-group mb-3">
                <label for="site_footer">site_footer:</label>
                <input type="text" class="form-control @error('site_footer') is-invalid @enderror" id="site_footer" placeholder="Enter site_footer" wire:model="site_footer">
                @error('site_footer')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
<!--            site_footer_link-->
            <div class="form-group mb-3">
                <label for="site_footer_link">site_footer_link:</label>
                <input type="text" class="form-control @error('site_footer_link') is-invalid @enderror" id="site_footer_link" placeholder="Enter site_footer_link" wire:model="site_footer_link">
                @error('site_footer_link')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
<!--            <div class="form-group mb-3">-->
<!--                <label for="description">Description:</label>-->
<!--                <textarea class="form-control @error('description') is-invalid @enderror" id="description" wire:model="description" placeholder="Enter Description"></textarea>-->
<!--                @error('description')-->
<!--                <span class="text-danger">{{ $message }}</span>-->
<!--                @enderror-->
<!--            </div>-->
            <div class="d-grid gap-2">
                <button wire:click.prevent="storeSetting()" class="btn btn-success btn-block">Save</button>
                <button wire:click.prevent="cancelSetting()" class="btn btn-secondary btn-block">Cancel</button>
            </div>
        </form>
    </div>
</div>
