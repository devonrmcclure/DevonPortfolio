<!--
    Social media icons by Dawid Dapszus  https://dribbble.com/shots/1209419-20-Social-Media-Icons-Freebie
 -->

@extends ('layouts.base')

@section('content')

<div class="container content">

    <div class="row">
        <div class="col-md-4">
            <img src="{{ URL::asset('images/me.png') }}" class="img-responsive center-block" />
            <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>

        <div class="col-md-8">
            <h1>Want to contact me?</h1>
            <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <div class="contact-icons">
                <ul>
                    <li>
                        <a href="https://twitter.com/DevonRMcClure">
                        <img src="{{ URL::asset('images/twitter.png') }}" class="img-responsive" alt="Twitter"/>
                        </a>
                    </li>

                    <li>
                        <a href="https://ca.linkedin.com/pub/devon-mcclure/a1/b02/a10/">
                        <img src="{{ URL::asset('images/linkedin.png') }}" class="img-responsive" alt="Linked In"/>
                        </a>
                    </li>

                    <li>
                        <a href="https://github.com/devonrmcclure">
                        <img src="{{ URL::asset('images/Github.png') }}" class="img-responsive" alt="Github"/>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop