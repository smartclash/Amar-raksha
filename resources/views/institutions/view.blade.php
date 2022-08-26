@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <section class='section'>
            <div class='column is-half is-offset-3'>
                <div class='mb-6'>
                    <p class='is-size-2'>{{ $institution->name }}'s details</p>
                    <a href="{{ $institution->website }}" target="_blank" class="is-size-5">{{ $institution->website }}</a>
                </div>

                <div class='box mb-6'>
                    <section class='hero is-medium'>
                        <div class='hero-body is-justify-content-center'>
                            <p class='title'>
                                Bing Map
                            </p>
                        </div>
                    </section>
                </div>

                @admin
                    <div class='card'>
                        <div class='card-header'>
                            <p class='card-header-title'>Add Admin</p>
                        </div>
                        <div class='card-content'>
                            <form action='{{ route('institutions.create.admin', $institution) }}' method="post">
                                @csrf

                                <div class='field'>
                                    <label for='name' class='label'>Name</label>
                                    <div class='control'>
                                        <input type='text' class='input' id='name' name="name" required />
                                    </div>
                                </div>
                                <div class='field'>
                                    <label for='email' class='label'>Email</label>
                                    <div class='control'>
                                        <input type='email' class='input' id='email' name="email" required />
                                    </div>
                                </div>
                                <div class='field'>
                                    <label for='title' class='label'>Phone</label>
                                    <div class='control'>
                                        <input type='tel' class='input' id='title' name="phone" required />
                                    </div>
                                </div>
                                <div class='field'>
                                    <label for='password' class='label'>Password</label>
                                    <div class='control'>
                                        <input type='password' class='input' id='password' name="password" required />
                                    </div>
                                </div>
                                <div class='field'>
                                    <div class='control pt-2'>
                                        <input type='submit' value='Submit' class='button is-primary is-outlined is-fullwidth' required />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endadmin

                <div class='card mt-6'>
                    <div class='card-content'>
                        <div class='columns is-half'>
                            <div class='column'>
                                <a class='button is-fullwidth' href="{{ route('institutions.volunteer', $institution) }}">
                                    View Volunteers
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
