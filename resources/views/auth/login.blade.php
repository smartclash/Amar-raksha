@extends('layout.app')

@section('content')
    <section class='section is-fullheight-with-navbar'>
        <div class='body_container'>
            <div class='Main_logo_container'>
                <div class='hero-body column'>
                    <div class='container has-text-centered is-justify-content-space-around'>
                        <img src='{{ Storage::url('logo.jpg') }}' alt='National Disaster Response Force Logo' width="400px" />
                    </div>
                </div>
            </div>
            <div class='Login_box card'>
                <div class='card-content pb-6'>
                    <div class='mt-5 ml-4 mr-4'>
                        <p class='is-size-2 pb-4'>Login</p>

                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <div class='field'>
                                <label class='label' for="phone">Phone</label>
                                <div class='control'>
                                    <input name="phone" class='input is-medium' type='tel' placeholder='1234567890' id="phone" />
                                </div>
                            </div>

                            <div class='field'>
                                <label class='label' for="password">Password</label>
                                <div class='control'>
                                    <input name="password" class='input is-medium' type='password' id="password" />
                                </div>
                            </div>

                            <div class='field'>
                                <div class='control'>
                                    <input class='button is-fullwidth has-text-weight-bold is-primary is-outlined' type="submit" value="Login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    @vite(['resources/css/login.scss'])
@endpush
