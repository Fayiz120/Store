function validate() {
    let username = document.getElementById('username').value
    let password = document.getElementById('password').value


    if (username == '') {
        alert("Enter username")
    } else if (password === '') {
        alert("Enter password")
    } else {
        alert("You have login succesfuly")
    }
}
loginbtn.addEventListener('click', validate);
