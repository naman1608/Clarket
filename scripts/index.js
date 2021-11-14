const loggedinelements = document.querySelectorAll('.logged-in');
const loggedoutelements = document.querySelectorAll('.logged-out');

const setupUI = (userCredential) => {
    if(userCredential) {
        console.log("setupui user");
        console.log(userCredential);
        const dropdownmenu = document.getElementById('dropdownMenuLink');
        const curr = auth.currentUser();
        dropdownmenu.innerHTML = userCredential.displayName;
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