<div class="col-lg-6">
                <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    <div class="row">
                        <div class="col form-group">
                            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'error' : '' }}" id="name" placeholder="Ваше имя" required>
                            @if ($errors->has('name'))
                                <div class="error">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="Ваш Email" required>
                            @if ($errors->has('email'))
                                <div class="error">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" placeholder="Ваш телефон для связи с вами" required>
                        @if ($errors->has('phone'))
                            <div class="error">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject" placeholder="Вопрос" required>
                        @if ($errors->has('subject'))
                            <div class="error">
                                {{ $errors->first('subject') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" rows="5" placeholder="Сообщение" required></textarea>
                        @if ($errors->has('message'))
                            <div class="error">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                    </div>
{{--                    <input type="submit" name="send" value="Submit" class="text-center">--}}
                    <div class="text-center"><button type="submit" name="send">Отправить</button></div>
                </form>
</div>
