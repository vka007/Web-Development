<script type="text/javascript" src="jQuery.js"> </script>

<script type="text/javascript">
	$(document).ready(function()
	{

		$("#b1").click(function()
		{
			i=parseInt($("#f").val());
			j=parseInt($("#s").val());
			r=i+j;
			$("#dis").html(r);
		})

	})
</script>


Fno: <input type="text" id="f"/><br/>
Sno: <input type="text" id="s"/><br/>

<input type="submit" value="add" id="b1"/>
<br/>
<h1 id="dis"></h1>

