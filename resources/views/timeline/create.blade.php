@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body '>
            <div class='container'>
                <div class='columns'>
                    <div class='column is-half is-offset-3'>
                        <div class='card'>
                            <div class='card-header'>
                                <p class='card-header-title'>Create timeline</p>
                            </div>
                            <div class='card-content'>
                                <div class='card-content'>
                                    <div class='field'>
                                        <label class='label'>Title</label>
                                        <div class='control'>
                                            <input class='input' type='text' />
                                        </div>
                                    </div>
                                    <div class='field'>
                                        <label class='label'>Message</label>
                                        <div class='control'>
                                            <input class='input' type='text' />
                                        </div>
                                    </div>
                                    <div class='field'>
                                        <label class='label'>Start at</label>
                                        <div class='control'>
                                            <input class='input' type='time' />
                                        </div>
                                    </div>
                                    <div class='field'>
                                        <label class='label'>Ends at</label>
                                        <div class='control'>
                                            <input class='input' type='time' />
                                        </div>
                                    </div>
                                    <div class='field pt-2'>
                                        <div class='control'>
                                            <input type='submit' value='Add Timeline' class='button is-primary is-outlined is-fullwidth' />
                                        </div>
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
