<input id="t" type="text" value="Welcome"></input>

<script type="text/javascript">
	
	document.getElementById('t').value="YOYO";
	document.getElementById('t').type="button";
	document.getElementById('t').style.color="red";
	document.getElementById('t').disabled=true;


</script><br/>

<script type="text/javascript">
	function show(){
		
	
	
	document.getElementById('s').value="haha";
	document.getElementById('s').type="button";
	document.getElementById('s').style.color="red";
	document.getElementById('s').disabled=true;
}

</script><br/>
<input type="text" id="s" value="welcome"></input>
<input type="button" onclick="show()" value="click me"></input>