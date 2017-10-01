<script type="text/javascript" src="jQuery.js"> </script>

<script type="text/javascript">
	$(document).ready(function()
	{

		$("#s").click(function()
		{
			$("#img1").slideUp("slow");
		})

		$("#h").click(function()
		{
			$("#img1").slideDown(1000);
		})


	})
</script>

<input type="button" value="slide Down" id="h"/>
<input type="button" value="slide Up" id="s"/>
<br/>

<img src="a.jpg" width="200px" height="200px" id="img1">