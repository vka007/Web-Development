<script type="text/javascript">
	function show(i)
	 {
		ch=i.which;

		if(ch>=48 && ch<=57)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
</script>

age : <input onkeypress="return show(event)"></input>