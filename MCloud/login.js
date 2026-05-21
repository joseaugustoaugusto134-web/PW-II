const strong = document.querySelector('#click');
const nome = document.querySelector('#nickname');
const senha = document.querySelector('#password');
const loginButton = document.querySelector('#login')
const msgError = document.querySelector('#msgError')
let logado = []
const ifUsuariologado = localStorage.getItem('usuarioLogado');
if(ifUsuariologado){
    logado = JSON.parse(ifUsuariologado);
    console.log(logado)
    window.location.href = 'main.html'
}
const armazenamentoLocal = localStorage.getItem('usuariosCadastrados')
const usuariosCadastrados = JSON.parse(armazenamentoLocal)
strong.addEventListener('click', () =>{
    window.location.href = 'cadastro.html'
})

function logar(){
    const loginSucesso = usuariosCadastrados.find(e => e.nickname == nome.value && e.password == senha.value)
    if(loginSucesso !== undefined){
        localStorage.setItem('usuarioLogado', JSON.stringify(loginSucesso))
        window.location.href = 'main.html'
    }

}
loginButton.addEventListener('click', () => logar())
