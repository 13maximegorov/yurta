<div class="row">
    @if (count($errors) > 0)
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    @if (\Illuminate\Support\Facades\Session::has('success'))
    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{\Illuminate\Support\Facades\Session::get('success')}}
            <button type="button" class="close py-1" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
                                    </div>
                                @endif
    <div class="col-md-12 col-xl-12">
        <form id="contact-form" name="contact-form" method="post" action="/feedback">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <label for="name" class="">
                            Укажите ваши инициалы
                        </label>
                        <input type="text" required id="name" name="inits" class="form-control" placeholder="ФИО">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <label for="name" class="">
                            Укажите ваш возраст
                        </label>
                        <input type="text" required id="name" name="old" class="form-control" placeholder="Возраст">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <label for="email" class="">
                            Ваш электронный адрес
                        </label>
                        <input type="email" required id="email" name="email" class="form-control" placeholder="Email">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <label for="tel" class="">
                            Ваш номер телефона
                        </label>
                        <input type="text" required id="tel" name="tel" class="form-control" placeholder="+7(___) ___-__-__">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <label for="message1">
                            Опишите подробнее
                        </label>
                        <textarea required type="text" id="message1" name="dis" rows="2" class="form-control md-textarea"
                            placeholder="Хронические заболевания"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <label for="message2">
                            Коментарии к проблеме
                        </label>
                        <textarea required type="text" id="message2" name="com" rows="2" class="form-control md-textarea"
                            placeholder="Жалобы"></textarea>
                    </div>
                </div>
            </div>
            <div class="center-on-small-only mb-4">
                <button type="submit" class="btn btn-default">
                    Отправить
                </button>
            </div>
        </form>
    </div>
</div>
