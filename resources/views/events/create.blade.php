@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class='container'>
                <div class='columns'>
                    <div class='column is-half is-offset-3'>
                        <div class='card'>
                            <div class='card-header'>
                                <p class='card-header-title'>Create Event</p>
                            </div>
                            <div class='card-content'>
                                <div class='field'>
                                    <label class='label'>Title</label>
                                    <div class='control'>
                                        <input class='input' type='text' />
                                    </div>
                                </div>

                                <div class='field'>
                                    <label class='label'>Sub Title</label>
                                    <div class='control'>
                                        <input class='input' type='text' />
                                    </div>
                                </div>

                                <div class='field'>
                                    <label class='label'>Location</label>
                                    <div class='control'>
                                        <input class='input' type='text' />
                                    </div>
                                </div>

                                <div class='field'>
                                    <label class='label'>Type</label>
                                    <div class='control is-expanded'>
                                        <div class='select is-fullwidth'>
                                            <select>
                                                <option>Disaster</option>
                                                <option>Contest</option>
                                                <option>Fundraising</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class='field'>
                                    <label class='label'>Message</label>
                                    <div class='control'>
                                        <textarea class='textarea'></textarea>
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
