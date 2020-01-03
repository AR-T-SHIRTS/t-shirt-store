const analytics = firebase.analytics();

async function signIn() {
    const user = await firebase.auth().signInWithEmailAndPassword(inputEmail, inputPassword);
    const method = user.credential.signInMethod;

    analytics.logEvent('login', { method });
// :)))))))))
}