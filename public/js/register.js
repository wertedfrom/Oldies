var nombre, apellido, telefono, email, sexo, password, nacimiento

window.onload = function(){
  singUp = document.querySelector('#singUp');
  console.log(singUp);

  singUp.addEventListener('blur',function(e){
    e.preventDefault();
    document.getElementById('erName').innerHTML = "";
    document.getElementById('erlastName').innerHTML = "";
    document.getElementById('erEmail').innerHTML = "";
    document.getElementById('erPhone').innerHTML = "";
    document.getElementById('erSexo').innerHTML = "";
    document.getElementById('erPass').innerHTML = "";
    document.getElementById('erFecha').innerHTML = "";
    document.getElementById('erTerm').innerHTML = "";
    nombre = document.getElementsByName('nombre')[0].value;
    apellido = document.getElementsByName('apellido')[0].value;
    telefono = document.getElementsByName('telefono')[0].value;
    email = document.getElementsByName('email')[0].value;
    sexo = document.getElementsByName('sexo')[0].value;
    password = document.getElementsByName('password')[0].value;
    nacimiento = document.getElementsByName('nacimiento')[0].value;
    terminos = document.getElementsByName('terminos')[0]
    errores = [];
    expRegMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    expPhone = /^d{7}$/;

    if(nombre == ""){
      errores.push('nombre');
    }
    if(apellido == ""){
      errores.push('apellido');
    }
    if(telefono == ""){
      errores.push('phone');
    }
    if(email == ""){
      errores.push('email');
    }else if(!expRegMail.test(email)){
      errores.push('formato invalido');
    }
    if(sexo == "Gender"){
      errores.push('sexo');
    }
    if(password == ""){
      errores.push('pass');
    }
    if(nacimiento == ""){
      errores.push('fecha');
    }
    if(!terminos.checked){
      errores.push('term');
    }
    if (errores[0]!== undefined) {
      errores.forEach(function(error){
        console.log(error);
        if (error === 'nombre') {
          document.getElementById('erName').innerHTML += "Debe ingresar nombre";
        }
        if (error === 'apellido') {
          document.getElementById('erlastName').innerHTML += "Debe ingresar apellido";
        }
        if (error === 'phone') {
          document.getElementById('erPhone').innerHTML += "Debe ingresar numero de telefono";
        }
        if (error === 'email') {
          document.getElementById('erEmail').innerHTML += "Debe ingresar email";
        }
        if (error === 'formato invalido') {
          document.getElementById('erEmail').innerHTML += "Formato de email invalido";
        }
        if (error === 'sexo') {
          document.getElementById('erSexo').innerHTML += "Debe elegir una opcion";
        }
        if (error === 'pass') {
          document.getElementById('erPass').innerHTML += "Debe ingresar un password";
        }
        if (error === 'fecha') {
          document.getElementById('erFecha').innerHTML += "Debe elegir una fecha";
        }
        if (error === 'term') {
          document.getElementById('erTerm').innerHTML += "debe aceptar los terminos";
        }

        // document.getElementById('erName').innerHTML += error+",<br>";
      });
    }else {

      // var usuario={
      //   nombres: nombre,
      //   apellidos: apellido,
      //   telefonos: telefono,
      //   emails: email,
      //   sexos: sexo,
      //   pass: password,
      //   fecha: nacimiento
      // }
      // var user = Object.keys(usuario).map(function(key){
      //   return encodeURIComponent(key) + '=' + encodeURIComponent(usuario[key]);
      //   }).join('&');
      // // a partir de este punto se hace un llamado para enviar el registro
      // var xmlhttp = new XMLHttpRequest();
      //
      // xmlhttp.onreadystatechange = function(){
      //   if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
      //     console.log(xmlhttp.responseText);
      //     console.log(str);
      //   }
      // };
      //
      // xmlhttp.open("POST", "https://sprint.digitalhouse.com/nuevoUsuario", true);
      // xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      //
      // xmlhttp.send(user);
      //
      // // a partir de este punto se hace un llamado para recibir la cantidad de usuarios registrados
      // var xmlhttp = new XMLHttpRequest();
      //
      // xmlhttp.onreadystatechange = function(){
      //   if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
      //     console.log(xmlhttp.responseText);
      //
      //   var registro = JSON.parse(xmlhttp.responseText);
      //   var nroRegistro = registro.cantidad;
      //   var formulario = document.getElementsByTagName('form');
      //   var thank = document.querySelector('#registrado');
      //   console.log(formulario);
      //   console.log(thank);
      //   console.log(nroRegistro);
      //   formulario[0].style.display = "none";
      //   thank.style.display = "block";
      //   document.querySelector(".numeroUsuario").innerHTML = 'sos el usuario numero: '+nroRegistro;
      //   }
      // }
      // xmlhttp.open("POST", "https://sprint.digitalhouse.com/getUsuarios", true);
      // xmlhttp.send();
  }

    // document.getElementById('errores').innerHTML = '<p>debe ingresar nombre</p>';
});




}
// boton.addEventListener('click', function(evento) {
//     evento.preventDefault();
// }
