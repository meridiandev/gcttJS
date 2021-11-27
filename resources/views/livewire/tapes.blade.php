<div>
    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
    <table class="table table-bordered mt-5">
        <thead>
        <tr>
            <th>No.</th>
            <th>Заголовок</th>
            <th>Заголовок слайдера</th>
            <th>Описание</th>

            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tapes as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->content }}</td>
                <td>{{ $value->content_main_page }}</td>
                <td>
                    <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Редактировать</button>
                    <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Удалить</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
