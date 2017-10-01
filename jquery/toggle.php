<script type="text/javascript" src="jQuery.js"> </script>

<script type="text/javascript">
	$(document).ready(function()
	{

		$("#h").click(function()
		{
			$(".img1").toggle("slow");
		})

	})
</script>

<input type="button" value="show/hide" id="h"/>
<br/>

<img src="a.jpg" style="display: none" width="200px" height="200px" class="img1">
<img src="b.jpg" width="200px" height="200px" class="img1">
<img src="c.jpg" style="display: none" width="200px" height="200px" class="img1">
<img src="d.jpg" width="200px" height="200px" class="img1">                                                                                                                                                                                                                                     