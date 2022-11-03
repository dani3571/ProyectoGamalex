const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input'); //accedemos a todos los inputs del formulario
const expresiones = {
   nombre: /^[a-zA-ZÁ]{1,40}$/, //Letras permitidas
   contraseña: /^.{4,12}$/, //4 a 12 digitos maximos
   telefono: /^\d{7,14}$/ // 7 a 14 numeros
}
const validarFormulario = (e) => { 
   switch(e.target.name){ //seleccionamos el name del input
      case "nombreProducto":
         if(expresiones.nombre.test(e.target.value)){ //devuelve verdadero si la expresion es correcta

         }
         else{
            document.getElementById('grupo__nombreProducto');
         }
      break;
      case "descripcion":
         console.log("funciona");
        break;
        case "":
         console.log("cantidad");
        break;
      
   }
    
}
inputs.forEach((input) =>{
   //este evento se activara cada vez que dejemos de pulsar una tecla
   //para que pueda ser verificada 
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
})
formulario.addEventListener('submit', (e) =>{
    e.preventDefault();
});