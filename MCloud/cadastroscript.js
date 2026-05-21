const nickname = document.querySelector('#nickname');
const password = document.querySelector('#password');
const passwordConfirm = document.querySelector('#passwordConfirm');
const email = document.querySelector('#email');
const registerButton = document.querySelector('#register');
const strongLogin = document.querySelector('#click')

var textError = document.createElement('span');
var msgForca = document.querySelector('#msg');

let todosUsuarios = [];
const armazenamentoLocal = localStorage.getItem('usuariosCadastrados')
if(armazenamentoLocal){
    todosUsuarios = JSON.parse(armazenamentoLocal)
}

strongLogin.addEventListener('click', () => {
    window.location.href = 'login.html'
})
function senhaForca(){
    const senha = password.value;
    const senhaEspecial = /[^A-Za-z0-9]/.test(senha);
    const senhaM = /[A-Z]/.test(senha)
    const senham = /[a-z]/.test(senha)
    //console.log(senha.replace(/o/ig, 'teste'))

    if(senhaEspecial || senhaM || senham){     
    msgForca.innerText = 'senha um pouco forte, mas pode melhorar!'

    } 
     if(senhaEspecial && senhaM || senhaEspecial && senham || senhaM && senham){
        msgForca.innerText = 'senha forte!!'

    } 
    if(senhaEspecial && senhaM && senham){
        msgForca.innerText = 'senha muito forte e segura!!!'
    }
    if(senha == ''){
        msgForca.innerText = ''
    }
}

function cadastrar(){
    if(email.value.length == '' || password.value.length == ''|| passwordConfirm.value.length == '' || nickname.value.length == ''){
        email.value = ''
        password.value = ''
        passwordConfirm.value = ''
        nickname.value = ''
            textError.innerText = 'Não se esqueça de preencher todos os campos!!'
            textError.id = 'textError'
        document.body.append(textError);
    }
   else if(password.value !== passwordConfirm.value){
        textError.innerText = 'Senha inconsistente'
        textError.id = 'textError'
        document.body.append(textError)
    }
    else if(email.value.includes('@') == false){
        textError.innerText = 'Email inválido'
        textError.id = 'textError'
        document.body.append(textError)
    }
    else{
        if(textError.innerText !== ''){
            textError.innerText = ''
        }

    user = {
        nickname : nickname.value,
        password : password.value,
        email : email.value
    }
    todosUsuarios.push(user);
    localStorage.setItem('usuariosCadastrados', JSON.stringify(todosUsuarios));
    window.location.href="login.html"
    }
}

const botaoteste = document.createElement('button');
document.body.append(botaoteste)
botaoteste.addEventListener('click', () =>{
    console.log(armazenamentoLocal);
})

registerButton.addEventListener('click', () => cadastrar())
password.addEventListener('input', () => senhaForca())