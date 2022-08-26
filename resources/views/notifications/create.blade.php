@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class='container'>
                <div class='columns'>
                    <div class='column is-half is-offset-3'>
                        <div class='card'>
                            <div class='card-header'>
                                <p class='card-header-title'>Create Notification</p>
                            </div>

                            <div class='card-content'>
                                <form action='{{ route('notifications.store') }}' method="post">
                                    @csrf

                                    <div class='field'>
                                        <label for='title' class='label'>Title</label>
                                        <div class='control'>
                                            <input type='text' class='input' id='title' name="title" />
                                        </div>
                                    </div>
                                    <div class='field'>
                                        <div class='field mb-5'>
                                            <label class='label'>Notification Spread Level</label>
                                            <div class='control'>
                                                <div class='select is-fullwidth'>
                                                    <select name="level">
                                                        <option value='L3'>L3 - Just sends notification</option>
                                                        <option value='L2'>L2 - Sends email and SMS</option>
                                                        <option value='L1'>L1 - Makes a voicecall and plays the
                                                            message
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <div class='field mb-5'>--}}
{{--                                            <label class='label has-text-danger'>⚠️ This notification make a emergency--}}
{{--                                                call to everyone ⚠️</label>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class='field'>
                                        <label class='label'>Message</label>
                                        <div class='control'>
                                            <textarea class='textarea' placeholder='Express your thought'
                                                      rows="10" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class='field'>
                                        <div class='control'>
                                            <input type='submit' value='Submit'
                                                   class='button is-primary is-outlined is-fullwidth'/>
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
