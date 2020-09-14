let fun = function () {

    let addButton = document.getElementById("signup");
    addButton.innerText = addButton.innerText === "Войти" ? "Войти" : "Отмена"

    document.getElementById("signupform").classList.toggle("hidden")
    document.getElementById("shadow").classList.toggle("hidden")
}

document.getElementById("signup").onclick = fun

document.getElementById("closeFormenter").onclick = fun

document.getElementById("shadow").onclick = fun;

