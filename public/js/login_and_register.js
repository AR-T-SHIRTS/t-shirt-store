firebase.auth().onAuthStateChanged(function (user) {
    if (user) {
        // document.getElementById("loggedOut").style.display = "block";
        // document.getElementById("loggedIn").style.display = "none";
        // User is signed in.
        // var displayName = user.displayName;
        // var email = user.email;
        // var emailVerified = user.emailVerified;
        // var photoURL = user.photoURL;
        // var isAnonymous = user.isAnonymous;
        // var uid = user.uid;
        // var providerData = user.providerData;
        // ...
    } else {
        // User is signed out.
        // ...
        // document.getElementById("loggedOut").style.display = "none";
        // document.getElementById("loggedIn").style.display = "block";
    }
});

function login() {

    var inputEmail = document.getElementById('inputEmail').value;
    var inputPassword = document.getElementById('inputPassword').value;

    firebase.auth().signInWithEmailAndPassword(inputEmail, inputPassword).catch(function (error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        window.alert("Error: " + errorMessage);

        // ...
    });

    window.alert("HOLI");

}

function register() {

    var inputEmail = document.getElementById('inputEmail').value;
    var inputPassword = document.getElementById('inputPassword').value;

    firebase.auth().createUserWithEmailAndPassword(inputEmail, inputPassword).catch(function (error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;

        window.alert("Error: " + errorMessage);
        // ...
    }); email - password.html

}