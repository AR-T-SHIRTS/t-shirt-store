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

    // Add a new document. in collection "cities"db.collection("usuarios").doc(firebase.auth().currentUser.uid).set({
    db.collection("usuarios").doc(firebase.auth().currentUser.uid).set({
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