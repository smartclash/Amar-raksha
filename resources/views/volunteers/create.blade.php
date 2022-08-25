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
                                <div class='field'>
                                    <label class='label'>name</label>
                                    <div class='control'>
                                        <input class='input' type='text' placeholder='Institution name'/>
                                    </div>
                                </div>
                                <div class='field'>
                                    <label class='label'>email</label>
                                    <div class='control'>
                                        <input class='input' type='email' placeholder='Email ID'/>
                                    </div>
                                </div>
                                <div class='field'>
                                    <label class='label'>phone</label>
                                    <div class='control'>
                                        <input class='input' type='tel' placeholder='Phone Number'/>
                                    </div>
                                </div>
                                <div class='field'>
                                    <label class='label'>password</label>
                                    <div class='control'>
                                        <input class='input' type='password' placeholder='Password'/>
                                    </div>
                                </div>

                                <div class='field'>
                                    <div class='control'>
                                        <input type='submit' value='Submit' class='button is-primary is-outlined is-fullwidth' />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
