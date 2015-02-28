function user_id() {
	var user = document.getElementById("user_id");
	prompt("test");
	if (user.value.length < 6) {
		alert("Password must be longer than 6 characters");
	}
			
}