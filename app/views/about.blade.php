<!--
    Social media icons by Dawid Dapszus  https://dribbble.com/shots/1209419-20-Social-Media-Icons-Freebie
 -->

@extends ('layouts.base')

@section('content')

<div class="container content">

    <div class="row">
        <div class="col-md-4">
            <img src="{{ URL::asset('images/me.png')}}" width="220px" height="180px" class="img-responsive center-block" />
            <p class="text">
                My name is Devon McClure, I am an aspiring Web Developer based out of White Rock, BC, Canada. I have experience with Laravel 4, Java, PHP, MySQL, and a bunch of other web technologies. I am always looking forward to learning new technologies and best practices to help better myself, and my work.
            </p>
        </div>

        <div class="col-md-8">
            <h1>Want to contact me?</h1>
            <p class="text">
                The easiest way to contact me is by Email at <a href="mailto:devon.r.mcclure@gmail.com">devon.r.mcclure@gmail.com</a>. However I can also be contacted through Twitter, LinkedIn, and Github.
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