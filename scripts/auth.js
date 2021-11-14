// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.4.1/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.4.1/firebase-analytics.js";
import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.4.1/firebase-auth.js";
import { getFirestore } from "https://www.gstatic.com/firebasejs/9.4.1/firebase-firestore.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDpt47xqILXmwu4AEE7gL3JTPkee2B4tKY",
  authDomain: "webd-project-68ebf.firebaseapp.com",
  projectId: "webd-project-68ebf",
  storageBucket: "webd-project-68ebf.appspot.com",
  messagingSenderId: "383655882635",
  appId: "1:383655882635:web:36fb18e13e7ed1fb44098e",
  measurementId: "G-JL8E9517PG"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth(app);
const db = getFirestore(app);

const loggedinelements = document.querySelectorAll('.logged-in');
const loggedoutelements = document.querySelectorAll('.logged-out');

const setupUI = (userCredential) => {
    if(userCredential) {
        console.log("setupui user");
        console.log(userCredential);
        //const dropdownmenu = document.getElementById('dropdownMenuLink');
        //const curr = userCredential.displayName;
        //console.log(curr);
        //dropdownmenu.innerHTML = curr;
        console.log("logged-in");
        console.log(loggedinelements);
        console.log(loggedoutelements);
        loggedinelements.forEach(element => element.style.display = "block");
        loggedoutelements.forEach(element => element.style.display = "none");
    }
    else {
        console.log("logged-out");
        loggedinelements.forEach(element => element.style.display = "none");
        loggedoutelements.forEach(element => element.style.display = "block");
    }
}

auth.onAuthStateChanged(user =>{
  setupUI(user);
})

const signupForm = document.querySelector('#signupform');

signupForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const name = signupForm['floatingName'].value;
  const email = signupForm['floatingInput'].value;
  const password = signupForm['floatingPassword1'].value;

  console.log(name);
  console.log(email);
  console.log(password);

  createUserWithEmailAndPassword(auth, email, password).then((userCredential) => {
  // Signed in 
  const user = userCredential.user;
  user.displayName = name;
  const dropdownmenu = document.getElementById('dropdownMenuLink');
  dropdownmenu.innerHTML = name;
  console.log(user.displayName);
  console.log(userCredential);
  console.log("sign up done");


  const modal = document.querySelector('#exampleModal2');
  console.log(modal);
  M.Modal.instance(modal).close();
  signupForm.reset();
  // ...
  }).catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
    console.log(errorCode, errorMessage);
    // ..
  });
})


const logout = document.querySelector('#logoutbutton');

logout.addEventListener('click', (e) => {
  e.preventDefault();
  auth.signOut().then(() => {
    console.log('signed out');
  });
})


const loginForm = document.querySelector('#loginform');
loginForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const email = loginForm['floatingInput'].value;
  const password = loginForm['floatingPassword'].value;

  signInWithEmailAndPassword(auth, email, password)
  .then((userCredential) => {
    // Signed in 
    console.log(userCredential);
    //const user = userCredential.user;
    //const dropdownmenu = document.getElementById('dropdownMenuLink');
    //dropdownmenu.innerHTML = user.displayName;
    // ...
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
  });
})