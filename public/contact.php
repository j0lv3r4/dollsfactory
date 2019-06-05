<?php require('./partials/head.php'); ?>

<div class="page-content pt-4 pb-4">
	<div class="container">
		<header class="page-header">
			<h2 class="page-title">Contact</h2>
		</header>

		<div class="page-content">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<p>I do my very best to respond to all questions + inquires within 48 hours. Thank you so much for your patience. I’m looking forward to chatting to you!</p>

					<form class="bg-light border" id="contact-form" action="https://formspree.io/book@dollsfactory.studio" method="post">
						<input type="text" name="_gotcha" style="display:none" />

						<div class="form-group">
							<label for="name">Full name</label>
							<input type="text" class="form-control" id="name" name="name" required>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" required>
						</div>

						<div class="form-group">
							<label for="ocassion">Ocassion</label>
							<select class="form-control" id="ocassionl" name="ocassion" required>
								<option>Photoshoot</option>
								<option>Private makeup and hair session</option>
								<option>Makeup lesson</option>
								<option>Bridesmaid</option>
								<option>Other</option>
							</select>
						</div>

						<div class="form-group">
							<label for="source">How did you hear about me?</label>
							<select class="form-control" id="source" name="source" required>
								<option>Instagram</option>
								<option>Facebook</option>
								<option>Photographer</option>
								<option>Wedding planner</option>
								<option>Personal recommendation</option>
								<option>Other</option>
							</select>
						</div>

						<div class="form-group">
							<label for="date">Date of event (if known)</label>
							<input type="date" class="form-control" id="date" name="date" required>
						</div>

						<div class="form-group">
							<label for="message">Message</label>

							<textarea class="form-control" name="message" id="message" cols="30" rows="4" required></textarea>
						</div>

						<button class="btn btn-primary btn-lg" type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div> <!-- .page-content -->

		<div class="page-decoration">
			<img src="/assets/img/MakeupV2_42.png" alt="" class="page-decoration-img">
		</div> <!-- .page-decoration -->
	</div> <!-- .container -->
</div> <!-- .page-content -->

<?php require('./partials/footer.php'); ?>
