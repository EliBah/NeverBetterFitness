function signUp() {	
	//Sets up and creates the email field
	var divholder = document.getElementById("email_holder");
	var check = document.getElementById('email');
	if(!check){
		var createform = document.createElement('input');	
		createform.setAttribute("type", "email");
		createform.setAttribute("name", "email");
		createform.setAttribute("id", "email");
		createform.setAttribute("required", "required");
		createform.setAttribute("class", "formList");
		
		//Creates the email label
		var createlabel = document.createElement('label');
		createlabel.innerHTML = "E-Mail: ";
		createlabel.setAttribute("for", "email");
		createlabel.setAttribute("class", "formList");
		createlabel.setAttribute("id", "email_label");

		//Creates the line break
		var linebreak = document.createElement('br');
		linebreak.setAttribute("id", "email_br");
		
		//Adds all the objects to the page
		divholder.appendChild(createlabel);
		divholder.appendChild(linebreak);
		divholder.appendChild(createform)
		}	
}

function logIn() {
	var parent = document.getElementById("email_holder");
	var field = document.getElementById("email");
	var label = document.getElementById("email_label");
	var br = document.getElementById("email_br");
	parent.removeChild(field);
	parent.removeChild(label);
	parent.removeChild(br);
	
}