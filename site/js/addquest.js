function addQuest(command, a, b, c, d, e, template)
{
	var formData = new FormData();

	formData.append("command", command);
	formData.append("template", template);
	formData.append("a", a);
	formData.append("b", b);
	formData.append("c", c);
	formData.append("d", d);
	formData.append("e", e);

	var request = new XMLHttpRequest();
	request.open("POST", "php/newquest.php");
	request.send(formData);
	
	request.onreadystatechange = function()
	{
		if (request.readyState == 4)
		{
			var data = request.responseText;
			
			if(data == "true")
			{
				alert("Questão adicionada");
				location.href="addquest.php";
			}
			else
				alert("Erro ao adicionar questão");
		}
	}
}