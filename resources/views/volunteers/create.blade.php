@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body '>
            <div class='container'>
                <div class='columns'>
                    <div class='column is-half is-offset-3'>
                        <div class='card'>
                            <div class='card-header'>
                                <p class='card-header-title'>Create Volunteers</p>
                            </div>
                            <div class='card-content'>
                                <form action="{{ route('institutions.create.volunteer') }}" method="post">
                                    @csrf
                                    <div class='field'>
                                        <label class='label'>Institution name</label>
                                        <div class='control'>
                                            <input class='input' type='text' placeholder='{{ $institution->name }}' disabled/>
                                        </div>
                                    </div>
                                    <div class='field'>
                                        <label class='label'>Name</label>
                                        <div class='control'>
                                            <input class='input' type='text' name="name" />
                                        </div>
                                    </div>
                                    <div class='field'>
                                        <label class='label'>Email</label>
                                        <div class='control'>
                                            <input class='input' type='email' name="email" />
                                        </div>
                                    </div>
                                    <div class='field'>
                                        <label class='label'>Phone</label>
                                        <div class='control'>
                                            <input class='input' type='tel' name="phone" />
                                        </div>
                                    </div>
                                    <div class='field'>
                                        <label class='label'>Password</label>
                                        <div class='control'>
                                            <input class='input' type='password' name="password" />
                                        </div>
                                    </div>

                                    <div class='field'>
                                        <div class='control'>
                                            <input type='submit' value='Submit' class='button is-primary is-outlined is-fullwidth' />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
