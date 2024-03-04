<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<style type="text/css">
	ul li{
		list-style: none;
	}
	ul{
		width: 131px;
    background: #d3d3d387;
	}
	#result{
		margin-top: -15px;
	}
</style>
<h1>Ajax Autocomplete</h1>

<input type="text" name="keyword" placeholder="Enter any key" id="autocomplete">
<div id="result"></div>

<script type="text/javascript">
	$(document).on('keyup','#autocomplete',function(){
		var val = $(this).val();
		$.ajax({
			url: 'controller.php?user_search='+val,
		    type: 'GET',  // http method
		    success: function (data) {
		    	console.log(data);
		    	$('#result').html(data);
		    },
		    error: function ( errorMessage) {
		        alert('Error => '+errorMessage);
		    }
		});
	})
</script>