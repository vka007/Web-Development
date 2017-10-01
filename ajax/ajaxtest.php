<script type="text/javascript" src="jQuery.js"> </script>

<script type="text/javascript">
	$(document).ready(function()
	{

		$("#b1").click(function()
		{
			$.ajax({
				type:"GET",
				url:"result.php",
				data:{"roll" :$("#r").val()},
				success:function(res)
				{
					$("#dis").html(res);
				}
			})
		})

	})
</script>


roll: <input type="text" id="r"/>
<br/>

<input type="submit" value="find" id="b1">
 
<h1 id="dis"></h1>

