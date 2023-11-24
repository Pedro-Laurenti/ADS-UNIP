const form = document.querySelector('form');

function validarFormulario(event) {
  event.preventDefault();

  const usuario = form.querySelector('#usuario');
  const senha = form.querySelector('#senha');

  if (!usuario.value || !senha.value) {
    exibirMensagemErro('Por favor, preencha todos os campos.');
    return;
  }

  // Verifica se o usuário é válido
  if (usuario.value === 'usuario1' && senha.value === 'senha1') {
    // Redireciona para a página principal se o usuário for válido
    window.location.href = 'loading.php';
  } else if (usuario.value === 'usuario2' && senha.value === 'senha2') {
    // Redireciona para a página de perfil se o usuário for válido
    window.location.href = 'perfil.html';
  } else {
    exibirMensagemErro('Usuário ou senha inválidos.');
  }
}

function exibirMensagemErro(mensagem) {
  const form = document.querySelector('form');
  const errorMessage = document.createElement('div');
  errorMessage.id = 'error-message';
  errorMessage.textContent = mensagem;
  form.prepend(errorMessage);
  errorMessage.classList.add('show');
  setTimeout(function() {
    errorMessage.classList.remove('show');
  }, 5000);
}

form.addEventListener('submit', validarFormulario);