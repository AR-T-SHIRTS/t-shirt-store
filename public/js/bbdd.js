(function () {

    //Obtener elementos
    const inputEmail = document.getElementById('inputEmail');
    const inputPassword = document.getElementById('inputPassword');
    const btnLogin = document.getElementById('btnLogin');
    const btnSignUp = document.getElementById('btnSignUp');

    //Añadir evento login

    btnLogin.addEventListener('click', e => {
        const email = inputEmail.value;
        const pass = inputPassword.value;
        const auth = firebase.auth();

        //Inicio
        const promise = auth.signInWithEmailAndPassword(email, pass);
        promise.catch(e => console.log(e.message));
    });


    //Añadir evento signup
    btnSignUp.addEventListener('click', e => {
        const email = inputEmail.value;
        const pass = inputPassword.value;
        const auth = firebase.auth();

        //Inicio
        const promise = auth.createUserWithEmailAndPassword(email, pass);
        promise.catch(e => console.log(e.message));
    });


}());