let fun = function () {

    let addButton = document.getElementById("enter");
    addButton.innerText = addButton.innerText === "Войти" ? "Войти" : "Отмена"

    document.getElementById("authform").classList.toggle("hidden")
    document.getElementById("shadow").classList.toggle("hidden")
}

document.getElementById("enter").onclick = fun

document.getElementById("closeFormenter").onclick = fun

document.getElementById("shadow").onclick = fun;

