<div>
    @livewireStyles
    @if(!empty($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif

    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                <p>Шаг первый: данные ученика</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <p>Шаг второй: данные родителей</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}">3</a>
                <p>Шаг третий: выбор направления</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-circle {{ $currentStep != 4 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">4</a>
                <p>Проверка данных и отправка заявления</p>
            </div>
        </div>
    </div>

    <div class="row setup-content {{ $currentStep != 1 ? 'd-none' : '' }}" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Шаг первый: данные ученика</h3>
                <div class="form-group">
                    <label for="inputsCertificate">inputsCertificate:</label>
                    <input type="text" wire:model="inputsCertificate" class="form-control" />
                    @error('inputsCertificate') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="first_name">first_name:</label>
                    <input type="text" wire:model="first_name" class="form-control" />
                    @error('first_name') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="surname">surname:</label>
                    <input type="text" wire:model="surname" class="form-control" />
                    @error('surname') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="patronymic">patronymic:</label>
                    <input type="text" wire:model="patronymic" class="form-control" />
                    @error('patronymic') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="gender">gender:</label>
{{--                    <input type="text" wire:model="gender" class="form-control" id="gender"/>--}}
                    <label class="radio-inline"><input type="radio" wire:model="gender" value="0" {{{ $gender == '0' ? "checked" : "" }}}> Девочка</label>
                    <label class="radio-inline"><input type="radio" wire:model="gender" value="1" {{{ $gender == '1' ? "checked" : "" }}}> Мальчик</label>
                    @error('gender') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="data_of_birth">home_address_1:</label>
                    <input type="date" wire:model="home_address_1" class="form-control" />
                    @error('home_address_1') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="patronymic">home_address_2:</label>
                    <input type="text" wire:model="home_address_2" class="form-control" />
                    @error('home_address_2') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="class_education">class_education:</label>
                    <input type="text" wire:model="class_education" class="form-control" />
                    @error('class_education') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="class_education">location_education:</label>
                    <input type="text" wire:model="location_education" class="form-control" />
                    @error('location_education') <span class="error">{{ $message }}</span> @enderror
                </div>

{{--                <div class="form-group">--}}
{{--                    <label for="description">Product Description:</label>--}}
{{--                    <textarea type="text" wire:model="description" class="form-control" id="taskDescription">{{{ $description ?? '' }}}</textarea>--}}
{{--                    @error('description') <span class="error">{{ $message }}</span> @enderror--}}
{{--                </div>--}}

                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" >Продолжить</button>
            </div>
        </div>
    </div>

    <div class="row setup-content {{ $currentStep != 2 ? 'd-none' : '' }}" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Шаг второй: данные родителей</h3>

{{--                <div class="form-group">--}}
{{--                    <label for="description">Product Status</label><br/>--}}
{{--                    <label class="radio-inline"><input type="radio" wire:model="status" value="1" {{{ $status == '1' ? "checked" : "" }}}> Active</label>--}}
{{--                    <label class="radio-inline"><input type="radio" wire:model="status" value="0" {{{ $status == '0' ? "checked" : "" }}}> DeActive</label>--}}
{{--                    @error('status') <span class="error">{{ $message }}</span> @enderror--}}
{{--                </div>--}}

                <div class="form-group">
                    <label for="parents">parents</label>
                    <input type="text" wire:model="parents" class="form-control" />
                    @error('parents') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="email_address_0">email_address_0</label>
                    <input type="text" wire:model="email_address_0" class="form-control" />
                    @error('email_address_0') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="telephone_mobile">telephone_mobile</label>
                    <input type="text" wire:model="telephone_mobile" class="form-control" />
                    @error('telephone_mobile') <span class="error">{{ $message }}</span> @enderror
                </div>

                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Продолжить</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Назад</button>
            </div>
        </div>
    </div>

        <div class="row setup-content {{ $currentStep != 3 ? 'd-none' : '' }}" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Шаг третий: выбор направления</h3>

                    {{--                <div class="form-group">--}}
                    {{--                    <label for="description">Product Status</label><br/>--}}
                    {{--                    <label class="radio-inline"><input type="radio" wire:model="status" value="1" {{{ $status == '1' ? "checked" : "" }}}> Active</label>--}}
                    {{--                    <label class="radio-inline"><input type="radio" wire:model="status" value="0" {{{ $status == '0' ? "checked" : "" }}}> DeActive</label>--}}
                    {{--                    @error('status') <span class="error">{{ $message }}</span> @enderror--}}
                    {{--                </div>--}}

                    <div class="form-group">
                        <label for="arrows">arrows</label>
                        <input type="text" wire:model="arrows" class="form-control" />
                        @error('arrows') <span class="error">{{ $message }}</span> @enderror
                    </div>

                                    <div class="form-group">
                                        <label for="comments">comments:</label>
                                        <textarea type="text" wire:model="comments" class="form-control" id="comments">{{{ $comments ?? '' }}}</textarea>
                                        @error('comments') <span class="error">{{ $message }}</span> @enderror
                                    </div>

                    <div class="form-group">
                        <label for="old_arrow">old_arrow</label>
                        <input type="text" wire:model="old_arrow" class="form-control" />
                        @error('old_arrow') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Продолжить</button>
                    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Назад</button>
                </div>
            </div>
        </div>
    <div class="row setup-content {{ $currentStep != 4 ? 'd-none' : '' }}" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Результат заявления: проверте данные и нажмите "Отправить"</h3>

                <table class="table">
{{--                    <tr>--}}
{{--                        <td>Product Name:</td>--}}
{{--                        <td><strong>{{$name}}</strong></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>Product Amount:</td>--}}
{{--                        <td><strong>{{$amount}}</strong></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>Product status:</td>--}}
{{--                        <td><strong>{{$status ? 'Active' : 'DeActive'}}</strong></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>Product Description:</td>--}}
{{--                        <td><strong>{{$description}}</strong></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>Product Stock:</td>--}}
{{--                        <td><strong>{{$stock}}</strong></td>--}}
{{--                    </tr>--}}
                </table>

                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Отправить!</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Назад</button>
            </div>
        </div>
    </div>
    <script src="/livewire/livewire.js"></script>
</div>


