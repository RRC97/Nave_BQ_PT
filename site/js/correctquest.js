function correct(id, response)
{
	var formData = new FormData();

	formData.append("idQuest", id);
	formData.append("response", response);

	var request = new XMLHttpRequest();
	request.open("POST", "php/correctquest.php");
	request.send(formData);
	
	request.onreadystatechange = function()
	{
		if (request.readyState == 4)
		{
			var data = request.responseText;
			
			if(data == "true")
				alert("Acertou!");
			else
				alert("Errou! \n" + data);
				
			location.href="quest.php";
		}
	}
}