@extends ('layouts.app')
@section('content')
<div class="container faq-container">
	<header>
		<div class="header-container">
			<h2 class="ta-center featurette-heading">Frequently Asked Questions (FAQs)</h2>
		</div>
	</header>
	<section>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>General Gameplay</h4>
			</div>
			<div class="panel-body">
				<ol>
					<li>What is the game about?
						<ul>
							<li>The dramatic encounter between Homo sapiens and Homo erectus 130,000 years ago. As a player you play as the Homo sapiens</li>
						</ul>
					</li>
					<li>What is the reward for winning?
						<ul>
							<li>Fame and Glory</li>
						</ul>
					</li>
					<li>Is the game free to play?
						<ul>
							<li>Yes, the game can be played entirely for free. Premium boosts can be bought (optional) by players to improve various aspects of the game.</li>
						</ul>
					</li>
					<li>Is there a tutorial or manual on how to play the game?
						<ul>
							<li>Yes. It can be found here. <a href="http://erectus.wiki/index.html" target="_blank">Erectus Wiki</a></li>
						</ul>
					</li>
					<li>Can I play as the erectus?
						<ul>
							<li>No, the erectus are computer controlled</li>
						</ul>
					</li>
				</ol>
			</div>
		</div>
	</section>

	<section>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Registration</h4>
			</div>
			<div class="panel-body">
				<ol>
					<li>I'm getting an error message telling me that my e-mail address is invalid, what do I do?
						<ul>
							<li>You will receive this message when trying to sign up using an e-mail address that is already in our database, please use a different e-mail address.</li>
						</ul>
					</li>
					<li>I did not receive a confirmation email after signing up
						<ul>
							<li>You should receive one soon after the registration. Check your spam folder.</li>
						</ul>
					</li>
					<li>Where can I register?
						<ul>
							<li>At the homepage! <a href="http://www.erectus.world" target="_blank">Click here</a></li>
							<li>If you are a resident of Brunei, Indonesia, Malaysia or Philippines, you can also play on www.erectus.asia and join the tournament.</li>
						</ul>
					</li>
				</ol>
			</div>
		</div>
	</section>

	<section>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Login</h4>
			</div>
			<div class="panel-body">
				<ol>
					<li>I can't login with Facebook.
						<ul>
							<li>You have to have a Facebook account in order to be able to log in using Facebook. Make sure to have your Facebook login details at hand.</li>
						</ul>
					</li>
					<li>I can't login with Google.
						<ul>
							<li>You have to have a Google account in order to be able to log in using Google. Make sure to have your Google login details at hand.</li>
						</ul>
					</li>
					<li>I forgot my password, where can I reset it?
						<ul>
							<li>You can reset your password using the “Forgot password” button on the login screen.</li>
						</ul>
					</li>
				</ol>
			</div>
		</div>
	</section>
</div>
@endsection