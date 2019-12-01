var currentNode;
var idcount = 0;

function highlight(node) {
    currentNode.setAttribute("class", "");
    currentNode = node;
    currentNode.setAttribute("class", "highlight");
    document.getElementById("gbi").value = currentNode.getAttribute("id");
}

function select() {
    var id = document.getElementById("gbi").value;
    var target = document.getElementById(id);
    if (target) {
        highlight(target);
    }
}

function insert() {
    var text = document.getElementById("ins").value;
    var newNode = document.createTextNode("[new" + idcount + "]" + text);
    currentNode.parentNode.insertBefore(newNode, currentNode);
}

function appendNode() {
    var text = document.getElementById("append").value;
    var newNode = createNode("[new" + idcount + "]" + text);
    currentNode.appendChild(newNode);
    highlight(newNode);
}

function replaceCurrent() {
    var text = document.getElementById("replace").value;
    var newNode = createNode("[new" + idcount + "] " + text);
    currentNode.parentNode.replaceChild(newNode, currentNode);
    highlight(newNode);
}

function remove() {
    newNode = currentNode.parentNode;
    currentNode.parentNode.removeChild(currentNode);
    highlight(newNode);
}

function changeBackgroundColor() {
    var color = document.getElementById("color").value;
    currentNode.style.background = color;
    //currentNode.setAttribute("style", "background-color: " + color)       // można to zrobic tak, ale usunie to inne przywary stylu
}

function changeTextColor() {
    var color = document.getElementById("textColor").value;
    currentNode.style.color = color;
}

function changeFont() {
    var font = document.getElementById("fontlist").value;
    currentNode.setAttribute("style", "font-family: " + font);
}

function createNode(text) {
    var newNode = document.createElement("p");
    newNode.setAttribute("id", "new" + idcount++);
    newNode.appendChild(document.createTextNode(text));
    return newNode;
}

function start() {
    document.getElementById("selectButton").addEventListener(
        "click", select, false);
    document.getElementById("insertButton").addEventListener(
        "click", insert, false);
    document.getElementById("appendButton").addEventListener(
        "click", appendNode, false);
    document.getElementById("replaceButton").addEventListener(
        "click", replaceCurrent, false);
    document.getElementById("removeButton").addEventListener(
        "click", remove, false);
    document.getElementById("backgroundColorButton").addEventListener(
        "click", changeBackgroundColor, false);
    document.getElementById("textColorButton").addEventListener(
        "click", changeTextColor, false);
    document.getElementById("fontlist").addEventListener(
        "change", changeFont, false);
    currentNode = document.getElementById("index1");
}

window.addEventListener("load", start, false);