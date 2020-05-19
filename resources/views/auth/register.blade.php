@extends('layouts.auth')

@section('content')


<section class="body-sign">
    <div class="center-sign">
        <a href="/" class="logo pull-left">
            <img src="assets/images/logo.png" height="54" alt="Porto Admin" />
        </a>

        <div class="panel panel-sign">
            <div class="panel-title-sign mt-xl text-right">
                <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group mb-lg">
                        <label>Аты</label>
                        <input name="first_name" type="text" class="form-control input-lg" />
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group mb-lg">
                        <label>Жөні</label>
                        <input name="last_name" type="text" class="form-control input-lg" />
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group mb-lg">
                        <label>E-mail</label>
                        <input name="email" type="email" class="form-control input-lg" />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group mb-none">
                        <div class="row">
                            <div class="col-md-6">
                                <select data-plugin-selectTwo name="role" class="form-control populate" required>
                                    <option>Студент</option>
                                    <option>Жеке мекеме</option>
                                </select>
                            </div>
                            @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-none">
                        <div class="row">
                            <div class="col-sm-6 mb-lg">
                                <label>Құпия сөз</label>
                                <input name="password" type="password" class="form-control input-lg" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-lg">
                                <label>Құпия сөзді қайталаңыз</label>
                                <input name="password_confirmation" type="password" class="form-control input-lg" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 text-right">
                            <button type="submit" class="btn btn-primary hidden-xs">Тіркелу</button>
                            <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Тіркелу</button>
                        </div>
                    </div>
                    <p class="text-center">Аккаунт бар ма? <a href="/login">Кіру!</a>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection
