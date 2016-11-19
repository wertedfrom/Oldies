var singIn;

window.onload = function(){
  singIn = document.querySelector('#singIn');
  console.log(singIn);

  singIn.addEventListener('click',function(e){
    e.preventDefault();
    document.getElementById('erEmail').innerHTML = "";
    document.getElementById('erPass').innerHTML = "";
    email = document.getElementsByName('email')[0].value;
    password = document.getElementsByName('pass')[0].value;
    recordarme = document.getElementById('recordame');
    console.log(recordarme);
    errores = [];
    expRegMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (recordarme.checked) {
      console.log('vamos a recordarlo');
      // se deberia de agregar una cookie para recordarlo
    }else {
      console.log('el usuario no quiere ser recordado');
    }
    if(email == ""){
      errores.push('email');
    }else if(!expRegMail.test(email)){
      errores.push('formato invalido');
    }
    if(password == ""){
      errores.push('pass');
    }
    if (errores[0]!== undefined) {
      errores.forEach(function(error){
        console.log(error);
        if (error === 'email') {
          document.getElementById('erEmail').innerHTML += "Debe ingresar email";
        }
        if (error === 'formato invalido') {
          document.getElementById('erEmail').innerHTML += "Formato de email invalido ";
        }
        if (error === 'pass') {
          document.getElementById('erPass').innerHTML += "Debe ingresar un password";
        }
      });
    }
});
}
