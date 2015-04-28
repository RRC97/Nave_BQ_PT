function sign(name, email, pass)
{
	var formData = new FormData();

	formData.append("name", name);
	formData.append("email", email);
	formData.append("password", pass);

	var request = new XMLHttpRequest();
	request.open("POST", "php/newuser.php");
	request.send(formData);
	
	request.onreadystatechange = function()
	{
		if (request.readyState == 4)
		{
			var data = request.responseText;
			
			if(data == "true")
				location.href="index.php";
			else
				alert("Erro ao cadastrar");
		}
	}
}