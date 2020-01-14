function actualizarUsuario() {
    var nombre = document.getElementById('firstName').value;
    var apellido = document.getElementById('lastName').value;
    var email = document.getElementById('email').value;
    var passwd = document.getElementById('passwd').value;
    var r_passwd = document.getElementById('rep_passwd').value;
    var via = document.getElementById('street').value;
    var direccion = document.getElementById('address').value;
    var num = document.getElementById('number').value;
    var piso = document.getElementById('floor').value;
    var letra = document.getElementById('letter').value;
    var prov = document.getElementById('country').value;
    var localidad = document.getElementById('state').value;
    var cp = document.getElementById('zip').value;

    var credito = document.getElementById('credit').value;
    var debito = document.getElementById('debit').value;
    var paypal = document.getElementById('paypal').value;

    var titular = document.getElementById('cc-name').value;
    var num_tarjeta = document.getElementById('cc-number').value;
    var f_cad = document.getElementById('cc-expiration').value;
    var CVV = document.getElementById('cc-cvv').value;

    // if (passwd != r_passwd) {
    //     window.alert("Error: las contraseñas no coinciden.");
    // }

    var dir = via + direccion + num + piso + letra;

    var user = firebase.auth().currentUser;

    var uid =  user.uid;
    // Add a new document. in collection "cities"db.collection("usuarios").doc(firebase.auth().currentUser.uid).set({
    db.collection("usuarios").doc(uid).set({
            name: nombre,
            surname: apellido,
            email: email,
            password: passwd,
            dir: dir,
            prov: prov,
            loc: localidad,
            cp: cp,
            credito: credito,
            debito: debito,
            paypal: paypal,
            titular: titular,
            num_tarjeta: num_tarjeta,
            f_cad: f_cad,
            cvv: CVV
        })
        .then(function() {
            console.log("Document. successfully written!");
        })
        .catch(function(error) {
            console.error("Error writing document.: ", error);
        });
}


/**
* Llamada JSON provincias
**/

//function getProvincias() {
  const xhttp = new XMLHttpRequest();
  xhttp.open('GET', 'https://raw.githubusercontent.com/IagoLast/pselect/master/data/provincias.json', true);
  xhttp.send();
  xhttp.onreadystatechange = function() {

    if(this.readyState == 4 && this.status == 200) {

      //console.log(this.responseText);
      let datos = JSON.parse(this.responseText);
      let res = document.getElementById('country');
      res.innerHTML = '<option value="">Elige...</option>';
      for (let item of datos) {
        //console.log(item.nm);
        res.innerHTML += `<option value="${item.id}" class="provincias">${item.nm}</option>`;
      }
    }
  }

var select = document.getElementById('country');
select.addEventListener('change',
  function(){
    var selectedOption = this.options[select.selectedIndex];
    getLocalidades(selectedOption.value);
    //console.log(selectedOption.value + ': ' + selectedOption.text);
  });

function getLocalidades(idProvincia) {
  const xhttp2 = new XMLHttpRequest();
  xhttp2.open('GET', 'https://raw.githubusercontent.com/IagoLast/pselect/master/data/municipios.json', true);
  xhttp2.send();
  xhttp2.onreadystatechange = function() {

    if(this.readyState == 4 && this.status == 200) {

      //console.log(this.responseText);
      let datos = JSON.parse(this.responseText);
      let res = document.getElementById('state');
      res.innerHTML = '';
      for (let item of datos) {
        console.log(item.nm);
        if(item.id.substr(0,2) == idProvincia.substr(0,2)) {
          res.innerHTML += `<option class="localidades" value="${item.id}">${item.nm}</option>`;
        }
      }
    }
  }
}

//}

/**
  Ejemplo llamada API STWOR
*/
/*
  const API_URL = 'https://swapi.co/api/';
  const PEOPLE_URL = 'people/:id';

  const onResponse = ({name}) => {
     console.log(`Hola, mi nombre es ${name}`);
  }
  const opts = {
    crossDomain:true
  }
  var URL, personaje, respuesta;
  URL = `${API_URL}${PEOPLE_URL.replace(':id', 1)}`;
  $.get(URL, opts, onResponse);

  */