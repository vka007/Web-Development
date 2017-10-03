<script type="text/javascript">
	function show(i)
	{
		if(i.checked)
		{
			document.getElementById('d1').disabled=false;
		}
		else
		{
			document.getElementById('d1').disabled=true;
		}
	}

	arr=new Array("red","green","blue","yellow");
	i=0;

	function show()
	{
		document.body.bgColor=arr[i];
	 	i++;
	 	if(i==4)
	 	{
	 		i=0;
	 	}
		setTimeout("show()",1000);
	}

</script>

user Id: <input></input>
<br/>
Other if
<br/>
<input type="checkbox" onclick="show(this)"></input>I agree
<br/>
<input type="button" id="d1" disabled="disabled" value="register">
</input>

<body onload="show()">
	
</body>