<div>
    <div class="col-md-8 mb-2">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('error') }}
            </div>
        @endif
        @if($addSetting)
            @include('livewire.setting.create')
        @endif
        @if($updateSetting)
            @include('livewire.setting.update')
        @endif
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                @if(!$addSetting)
                    <button wire:click="addSetting()" class="btn btn-primary btn-sm float-right">Add New Setting</button>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>site_title</th>
                            <th>site_header</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (isset($settings) > 0)
                            @foreach ($settings as $setting)
                                <tr>
                                    <td>
                                        {{$setting->site_title}}
                                    </td>
                                    <td>
                                        {{$setting->site_header}}
                                    </td>
                                    <td>
                                        <button wire:click="editSetting({{$setting->id}})" class="btn btn-primary btn-sm">Edit</button>
                                        <button onclick="deleteSetting({{$setting->id}})" class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" align="center">
                                    No Settings Found.
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
