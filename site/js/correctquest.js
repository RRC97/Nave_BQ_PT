function correct(id, response)
{
	var formData = new FormData();

	formData.append("idQuest", id);

	var request = new XMLHttpRequest();
	request.open("POST", "php/correctquest.php");
	request.send(formData);
	
	request.onreadystatechange = function()
	{
		if (request.readyState == 4)
		{
			var data = request.responseText;
			
			if(data == response)
				alert("Acertou!");
			else
				alert("Errou!");
				
			location.href="index.php";
		}
	}
}