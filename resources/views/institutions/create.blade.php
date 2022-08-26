@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class='container'>
                <div class='columns'>
                    <div class='column is-half is-offset-3'>
                        <div class='card'>
                            <div class='card-header'>
                                <p class='card-header-title'>Create Institutions</p>
                            </div>
                            <div class='card-content'>
                                <div class='field'>
                                    <label class='label'>Name</label>
                                    <div class='control'>
                                        <input class='input' type='text' placeholder='Institution name'/>
                                    </div>
                                </div>
                                <div class='field'>
                                    <label class='label'>Address</label>
                                    <div class='control'>
                                        <input class='input' type='text' placeholder='Search Insitution'/>
                                    </div>
                                </div>
                                <div class='field'>
                                    <label class='label'>Website</label>
                                    <div class='control'>
                                        <input class='input' type='text' placeholder='website Link'/>
                                    </div>
                                </div>
                                <div class='field pt-2'>
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
