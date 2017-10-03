<script type="text/javascript">
	function show()
	{
		r=prompt("roll No :");
		if(r)
		{
			window.location="result.php?roll="+r;
		}
	}
</script>

<input type="button" value="register" onclick="show()"/>