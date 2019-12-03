<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
	<script type="text/javascript">

		function llamar(){

			ajax=new XMLHttpRequest();
			ajax.onreadystatechange = function(){
				if(ajax.readyState == 4){
					if(ajax.status==200){
					document.getElementById('contenido').innerHTML=ajax.responseText;	
					}
				}
			
			}
			ajax.open("GET", 'registrar.php', true);
			ajax.send();

		}

		function pregunta2(){

			ajax=new XMLHttpRequest();
			ajax.onreadystatechange = function(){
				if(ajax.readyState == 4){
					if(ajax.status==200){
					document.getElementById('contenido').innerHTML=ajax.responseText;	
					}
				}
			
			}
			ajax.open("GET", 'pregunta2.html', true);
			ajax.send();

		}

		function cambiarcolor(){
			var num= document.getElementById('numero').value;
			num*=num;
			document.getElementById('resultado').style.background='yellow';
			document.getElementById('resultado').innerHTML= num;

		}

	</script>
<body>
	
		 <input type="button" value="Pregunta1" onclick="llamar()">
		 <input type="button" value="Pregunta2" onclick="pregunta2()">
	
	<br><br>
	<div id="contenido">
		
	</div>


	

</body>
</html>