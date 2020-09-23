// let fun = function () {

//     let addButton = document.getElementById("addButton");
//     addButton.innerText = addButton.innerText === "Убрать" ? "Добавить" : "Убрать"

//     document.getElementById("addForm").classList.toggle("hidden")
//     document.getElementById("shadow").classList.toggle("hidden")
// }

// document.getElementById("addButton").onclick = fun

// document.getElementById("closeFormButton").onclick = fun

// document.getElementById("shadow").onclick = fun;

// let fun = function () {
//
//     let addButton = document.getElementById("addButton");
//     addButton.innerText = addButton.innerText === "Убрать" ? "Добавить" : "Убрать"
//
//     document.getElementById("addForm").classList.toggle("hidden")
//     document.getElementById("shadow").classList.toggle("hidden")
// }
//
// document.getElementById("addButton").onclick = fun
//
// document.getElementById("closeFormButton").onclick = fun

// document.getElementById("shadow").onclick = fun;


let fun = function () {

    let addButton = document.getElementById("addButton");
    addButton.innerText = addButton.innerText === "Close" ? "Add exercise" : "Close"

    document.getElementById("addForm").classList.toggle("hidden")
    document.getElementById("shadow").classList.toggle("hidden")
}

if (document.getElementById("addButton") && document.getElementById("closeFormButton") && document.getElementById("shadow")) {

    document.getElementById("addButton").onclick = fun

    document.getElementById("closeFormButton").onclick = fun

    document.getElementById("shadow").onclick = fun
}