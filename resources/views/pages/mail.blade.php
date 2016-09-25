@extends('pages.layout')
@section('content')
<!-- //portfolio-bg -->
<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3>How To Find Us</h3>
			<p class="qui">Voluptate velit esse quam nihil</p>
			<div class="w3ls_map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48306.05339877067!2d-74.245183970742!3d40.825144655510556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2555646a723a1%3A0x449f3366d017b214!2sMontclair%2C+NJ%2C+USA!5e0!3m2!1sen!2sin!4v1465991700675" style="border:0"></iframe>
			</div>
			<div class="w3l_contact_form">
				<h4>Contact Form</h4>
				<form action="#" method="post">
					<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
					<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
<!-- //mail -->
@stop
