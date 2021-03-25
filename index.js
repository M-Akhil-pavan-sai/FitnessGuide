function handleSubmit() {
	const username =document.getElementById('username').value;
	const passsword =document.getElementById('password').value;

	sessionStorage.setItem("USERNAME",username);
	sessionStorage.setItem("PASSWORD",password);
	return;
}