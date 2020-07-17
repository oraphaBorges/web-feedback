@extends("layouts.app", ["view_name" => "Login"])

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-8 col-md-5 col-xl-4">
                <div class="card mt-5">
                    <div class="card-body">

                        <div class="card-media">
                            <img src="https://practice.uffs.cc/images/logo.png" alt="practice-logo" 
                                 class="practice-logo"
                            >
                        </div>
                        
                        <form action="" method="post" class="form">
                            @csrf
                            <div class="form__field mb-3">
                                <label for="username" class="form__label">
                                    idUFFS
                                </label>
                                <input id="username" type="text" name="username" value="{{ old('username') }}"
                                        placeholder="Ex. fulano.silva" required autofocus autocomplete="off"
                                        class="@error('username') is-invalid @enderror field__input shadow-focus" 
                                />
                            </div>

                            <div class="form__field mb-4">
                                <label for="password" class="form__label">
                                    Senha
                                </label>
                                <input id="password" type="password" 
                                        class="@error('password') is-invalid @enderror field__input shadow-focus"
                                        name="password" placeholder="Digite sua senha" required
                                        autocomplete="current-password"
                                >
                            </div>

                            <div class="form__field mb-3">
                                <input type="submit" value="Login" class="btn field__submit shadow-focus" />
                            </div>
                        </form>

                        @if ($errors->any()) 
                            <div class="alert alert-error text-center" role="alert">
                                <i class="fa fa-times" aria-hidden="true"></i>
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="banner">
                <img src="{{ asset('img/banner-practice.png') }}" 
                    alt="practice-banner" class="banner__img"
                >
            </div>
        </div>
    </div>
@endsection