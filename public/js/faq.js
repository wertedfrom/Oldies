function hacerVisible(){
  var padre = this.parentNode;
  var respuesta = padre.children.item(1);
  console.log(padre);
  console.log(respuesta);


  if (respuesta.style.display !== "block") {
    respuesta.style.display = "block";
  }else {
    respuesta.style.display = "none";
  }
}

window.onload = function(){
  var faqs = document.querySelectorAll("#faq");
  var preguntas = faqs.item(0).children;

  console.log(preguntas);
  faqs.item(0).children.item(0).addEventListener('click', hacerVisible);
  faqs.item(1).children.item(0).addEventListener('click', hacerVisible);
  faqs.item(2).children.item(0).addEventListener('click', hacerVisible);
  faqs.item(3).children.item(0).addEventListener('click', hacerVisible);
  faqs.item(4).children.item(0).addEventListener('click', hacerVisible);
  faqs.item(5).children.item(0).addEventListener('click', hacerVisible);

};
