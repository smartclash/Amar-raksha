@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class='container'>
                <div class='columns'>
                    <div class='column is-half is-offset-3'>
                        <div class='card'>
                            <div class='card-header'>
                                <p class='card-header-title'>Create Blog</p>
                            </div>
                            <div class='card-content'>
                                <form action='{{ route('blogs.store') }}' method="post">
                                    @csrf

                                    <div class='field'>
                                        <label for='title' class='label'>Title</label>
                                        <div class='control'>
                                            <input type='text' class='input' id='title' name="title" />
                                        </div>
                                    </div>
                                    <div class='field'>
                                        <label for='message' class='label'>Message</label>
                                        <div class='control'>
                                            <textarea class='textarea' id='message' rows="15" name="content"></textarea>
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
