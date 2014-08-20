<!--
    Social media icons by Dawid Dapszus  https://dribbble.com/shots/1209419-20-Social-Media-Icons-Freebie
 -->

@extends ('layouts.base')

@section('content')

<div class="container content">

    <div class="row">
        <div class="col-md-3">
            <img src="http://placehold.it/200x200" class="img-responsive center-block" />
            <p class="text">
                Hi there. My name is Devon McClure. I am an aspiring Web Developer living in White Rock, British Columbia. I am currently working on a website for my current place of employment, Batteries Included.
            </p>
        </div>

        <div class="col-md-9">
            <h1>Want to contact me?</h1>
            <p class="text">
                I am able to be contacted through multiple different websites. Feel free to contact me in the way that suits you best.
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
                        <a href="https://github.com/Phinocio">
                        <img src="{{ URL::asset('images/Github.png') }}" class="img-responsive" alt="Github"/>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop