<script type="text/javascript" src="jQuery.js"> </script>

<script type="text/javascript">
	$(document).ready(function()
	{

		$("#s").click(function()
		{
			$("#img1").show("slow");
		})

		$("#h").click(function()
		{
			$("#img1").hide(1000);
		})


	})
</script>

<input type="button" value="hide" id="h"/>
<input type="button" value="show" id="s"/>
<br/>

<img src="a.jpg" width="200px" height="200px" id="img1">