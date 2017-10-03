<script type="text/javascript">
	function show()
	{
		p=parseInt(document.getElementById('n').value);

		if(p%2==0)
		{
			r="Even No";
		}
		else
		{
			r="Odd No";
		}

		document.getElementById("dis").innerHTML=r;

	}

	function day()
	{
		d=document.getElementById('j').value;

		switch(d)
		{
			case "mon":
			m="1st Day";
			break;

			case "tue":
			m="2nd Day"
			break;

			default:
			m="invalid day";
			break;
		}

		document.getElementById("dp").innerHTML=m;

	}

	i=1;
	while(i<=10)
	{
		document.write(i+"<br/>");
		i++;
	}
	
	
	arr=new Array(0,12,345,33,45,342);
	for(i in arr)
	{
		document.write(arr[i]+"<br/>");
	}

</script>
<br/><br/>
Enter a Number: <input id="n"></input>
<br/>
<input type="button" value="odd / even" onclick="show()"></input>
<br/>
<h1 id="dis"> </h1>

<br/><br/>

Day: <input id="j"></input>
<br/>
<input type="button" value="Check Day" onclick="day()"></input>
<br/>
<h1 id="dp"> </h1>