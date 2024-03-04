<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php  include('menubar.php'); ?>
<h1>Registration</h1>

<form>
	Name <span>*</span> : <input type="text" name="name"> 
	<br>
	Email <span>*</span>: <input type="email" name="email">
	<br>
	Contact: <span>*</span><input type="number" name="contact">
	<br>
	Education: 
	<select name="education">
		<option value="be">BE</option>	
		<option value="btech">BTech</option>	
		<option value="bcom">BCom</option>	
		<option value="bca">BCA</option>	
		<option value="mca">MCA</option>	
	</select>
	<br>
	Password <span>*</span>: <input type="password" name="password">
	<br>
	<input type="hidden" name="register" id="register">
	<input type="button" value="Submit" id="saveBtn">
</form>

<script type="text/javascript">
	$(document).on('click','#saveBtn',function(){
		$.ajax({
			url: 'controller.php',
		    type: 'POST',  // http method
		    data: $('form').serialize(),
		    success: function (data) {
		    	//alert(data);
		    	Swal.fire(
				  'Good job!',
				 	data,
				  'success'
				)
		    	$('form')[0].reset();
		    },
		    error: function ( errorMessage) {
		        alert('Error => '+errorMessage);
		    }
		});
	});
</script>