@extends ('layouts.base')

@section('content')


	<div class="material-card">
		<div class="left-bar">
			<div class="contact-info">
				<div class="me"></div>

				<div class="contact">
					<div class="section">
						<div class="icon">
							<i class="material-icons">people</i>
						</div>

						<div class="content">
							<h2 class="heading">Social Networks</h2>
							<a href="https://github.com/devonrmcclure">Github</a>
							<a href="https://ca.linkedin.com/pub/devon-mcclure/a1/b02/a10">LinkedIn</a>
							<a href="https://twitter.com/devonrmcclure">Twitter</a>
						</div>
					</div>

					<div class="section">
						<div class="icon">
							<i class="material-icons">mail</i>
						</div>

						<div class="content">
							<h2 class="heading">Emails</h2>
							<a href="mailto:devonrmcclure@gmail.com">Gmail</a>
							<a href="mailto:devon.r.mcclure@outlook.com">Outlook</a>
						</div>
					</div>
				</div>
			</div>

			<div class="skills">
				<div class="section">
					<div class="icon">
							<i class="material-icons">assessment</i>
						</div>

						<div class="content">
							<h2 class="heading">Languages</h2>
							<p class="skill">
								<span class="meter"><span class="fill" style="height: 75%"></span></span>
								PHP
							</p>
							<p class="skill">
								<span class="meter"><span class="fill" style="height: 70%"></span></span>
								MySQL
							</p>
							<p class="skill">
								<span class="meter"><span class="fill" style="height: 30%"></span></span>
								Javascript
							</p>

							<p class="skill">
								<span class="meter"><span class="fill" style="height: 45%"></span></span>
								LESS CSS
							</p>
						</div>
				</div>

				<div class="section">
					<div class="icon">
							<i class="material-icons">assessment</i>
						</div>

						<div class="content">
							<h2 class="heading">Technologies</h2>
							<p class="skill">
								<span class="meter"><span class="fill" style="height: 90%"></span></span>
								Composer
							</p>
							<p class="skill">
								<span class="meter"><span class="fill" style="height: 85%"></span></span>
								Bower
							</p>
							<p class="skill">
								<span class="meter"><span class="fill" style="height: 45%"></span></span>
								NPM
							</p>
							<p class="skill">
								<span class="meter"><span class="fill" style="height: 65%"></span></span>
								MVC Frameworks
							</p>
						</div>
				</div>
			</div>
		</div>

		<div class="resume">

			My name is Devon McClure, I am an aspiring Web Developer based out of White Rock, BC, Canada. I have experience with Laravel 4, Java, PHP, MySQL, and a bunch of other web technologies. I am always looking forward to learning new technologies and best practices to help better myself, and my work. Below is a bit of my experience.

			<div class="experience">
				<h2 class="heading">Experience</h2>

				<div class="job">
					<div class="job-info">
						<span class="job-name">Batteries Included</span>
            			<span class="date">2013 - Present</span>
            			<span class="job-title">Web Developer/Sales Associate</span>
            		</div>

            		<div class="job-description">
						<p>At Batteries Included I have done a variety of things from recreating the <a href="http://batteriesincluded.ca">website</a> to repairing and servicing shavers.</p>

						<ul class="duties">
			                <li>Recreate and maintain store website</li>
			                <li>Replace watch batteries</li>
			                <li>Small appliance repair and servicing</li>
			                <li>Shaver repair and servicing</li>
			                <li>Sales</li>
			                <li>Ordering and cataloging items</li>
			            </ul>
            		</div>
        		</div>

        		<div class="job">
					<div class="job-info">
						<span class="job-name">De Dutch Pannekoek House</span>
            			<span class="date">2013 - 2014</span>
            			<span class="job-title">Dishwasher</span>
            		</div>

            		<div class="job-description">
						<p>At De Dutch I was in charge of cleaning the dishes, doing prep work, and helping the cooks make meals when necessary.</p>

						<ul class="duties">
			                <li>Cleaning dishes</li>
			                <li>Assisting cooks with preparation</li>
			                <li>Bussing tables</li>
			                <li>Maintaining a clean work environment</li>
			                <li>Working with a team to ensure the prompt deliver of food to customers</li>
			            </ul>
            		</div>
        		</div>
			</div>
		</div>
	</div>

@stop