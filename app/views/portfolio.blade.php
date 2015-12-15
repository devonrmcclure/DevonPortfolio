@extends ('layouts.base')

@section('content')

<!-- Batteries Included Site -->
<div class="material-card">
	<div class="wrapper">
		<h2 class="site">Batteries Included</h2>

		<div class="image"><a href="http://batteriesincluded.ca">{{HTML::image('images/BatteriesIncludedHomePage.png')}}</a></div>

		<div class="description">The site for Batteries Included. After working here for around half a year, I went to my boss asking if I could remake the website. A year and a half later, this is the product. I learned a lot with this project including Laravel 4, Grunt, Bower, jQuery, and a lot more about MySQL. The website is based off the Laravel 4 framework, and uses a little bit of Bootstrap for the mobile responsiveness.</div>

		<div class="links">
			<a href="http://batteriesincluded.ca">Live Site</a> |
			<a href="https://github.com/devonrmcclure/BatteriesIncluded">Github</a>
		</div>
	</div>
</div>

@stop