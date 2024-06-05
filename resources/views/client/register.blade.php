@extends('layouts.pages')

@section('content')

    <div class="register-client">
        <div class="head">
            <p>{{ __('Create a new Account') }}</p>
            <p>{{ __('Join us and enjoy a new Astian privacy and security.') }}</p>
        </div>
        <div class="body">
            <form action="/register" method="post">
                @csrf
                <div class="item">
                    <label for="name">{{ __('Name') }}</label>
                    <input type="text" id="name" name="name" placeholder="{{ __('Name') }}"
                        value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        @foreach ($errors->get('name') as $item)
                            <span class="errors">{{ $item }}</span>
                        @endforeach
                    @endif
                </div>
                <div class="item">
                    <label for="name">{{ __('Last Name') }}</label>
                    <input type="text" id="last_name" name="last_name" placeholder="{{ __('Last Name') }}"
                        value="{{ old('last_name') }}">
                    @if ($errors->has('last_name'))
                        @foreach ($errors->get('last_name') as $item)
                            <span class="errors">{{ $item }}</span>
                        @endforeach
                    @endif
                </div>
                <div class="item">
                    <label for="name">{{ __('Email') }}</label>
                    <input type="email" id="email" name="email" placeholder="{{ __('Email') }}"
                        value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        @foreach ($errors->get('email') as $item)
                            <span class="errors">{{ $item }}</span>
                        @endforeach
                    @endif
                </div>

                <div class="item">
                    <label for="birthday">{{ __('Date of birth') }}</label>
                    <input type="date" id="birthday" name="birthday" placeholder="{{ __('Birthday') }}"
                        value="{{ old('birthday') }}">
                    @if ($errors->has('birthday'))
                        @foreach ($errors->get('birthday') as $item)
                            <span class="errors">{{ $item }}</span>
                        @endforeach
                    @endif
                </div>
                <div class="item">
                    <label for="name">{{ __('Password') }}</label>
                    <input type="password" id="password" name="password" placeholder="{{ __('Password') }}">
                    @if ($errors->has('password'))
                        @foreach ($errors->get('password') as $item)
                            <span class="errors">{{ $item }}</span>
                        @endforeach
                    @endif
                </div>
                <div class="item">
                    <label for="name">{{ __('Repeat password') }}</label>

                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="{{ __('Password Confirmation') }}">
                    @if ($errors->has('password_confirmation'))
                        @foreach ($errors->get('password_confirmation') as $item)
                            <span class="errors">{{ $item }}</span>
                        @endforeach
                    @endif
                </div>
                <div class="buttons">
                    <button type="submit">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
