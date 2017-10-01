<script type="text/javascript" src="jQuery.js"> </script>

<script type="text/javascript">
	$(document).ready(function()
	{

		$("#c").change(function()
		{
			$.ajax({
				type:"GET",
				url:"result2.php",
				data:{"c" :$("#c").val()},
				success:function(res)
				{
					$("#s").html(res);
				}
			})
		})

	})
</script>

<select id="c">
	<option hidden="hidden">Choose</option>
	<option value="india">India</option>
	<option value="pakistan">pakistan</option>
</select>
<select id="s">
	
</select>