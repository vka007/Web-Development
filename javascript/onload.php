<script type="text/javascript">
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

<body onload="show()">
	
</body>