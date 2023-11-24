const form = document.getElementById("login-form");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");
const successMessage = document.getElementById("success-message");
const errorMessage = document.getElementById("error-message");

console.log(form);
console.log(emailInput);
console.log(passwordInput);
console.log(successMessage);
console.log(errorMessage);

form.addEventListener("submit", (event) => {
	event.preventDefault();

	const emailValue = emailInput.value;
	const passwordValue = passwordInput.value;

	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	const passwordRegex = /.{8,}/;

	if (!emailRegex.test(emailValue)) {
		errorMessage.textContent = "Por favor, digite um e-mail válido.";
		errorMessage.classList.add("show");
		setTimeout(() => {
			errorMessage.classList.remove("show");
		}, 5000); // 5 segundos
		return;
	}

	if (!passwordRegex.test(passwordValue)) {
		errorMessage.textContent = "Por favor, digite uma senha com pelo menos 8 caracteres.";
		errorMessage.classList.add("show");
		setTimeout(() => {
			errorMessage.classList.classList.remove("show");
		}, 5000); // 5 segundos
		return;
	}

	console.log("Formulário enviado!");
	successMessage.classList.add("show");
	setTimeout(() => {
		successMessage.classList.remove("show");
	}, 5000); // 5 segundos

})