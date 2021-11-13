const loggedinelements = document.querySelectorAll('.logged-in');
const loggedoutelements = document.querySelectorAll('.logged-out');

const setupUI = (user) => {
    if(user) {
        console.log("logged-in");
        loggedinelements.forEach(element => element.style.display = "block");
        loggedoutelements.forEach(element => element.style.display = "none");
    }
    else {
        console.log("logged-out");
        loggedinelements.forEach(element => element.style.display = "none");
        loggedoutelements.forEach(element => element.style.display = "block");
    }
}