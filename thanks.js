var xcordmouse;
var ycordmouse;
var xcord;
var ycord;

function createCanvas() {
    var side = 50;
    var tbody = document.getElementById("tablebody");


    for (var i = 0; i < side; ++i) {
        var row = document.createElement("tr");

        for (var j = 0; j < side; ++j) {
            var cell = document.createElement("td");
            row.appendChild(cell);
        }

        tbody.appendChild(row);
    }

    document.getElementById("canvas").addEventListener(
        "mousemove", processMouseMove, false);
    document.getElementById("canvas").addEventListener(
        "mousedown", processMouseDown, false);
    document.addEventListener(
        "mousemove", processCoordinates, false);
    document.addEventListener(
        "keydown", keyPressed, false);
}

function processMouseMove(e) {
    if (e.target.tagName.toLowerCase() == "td") {
        if (e.ctrlKey) {
            e.target.setAttribute("class", "blue");
        }

        if (e.shiftKey) {
            e.target.setAttribute("class", "red");
        }

        if (e.altKey) {
            e.target.setAttribute("class", "yellow");
        }
    }

}

function processMouseDown(e) {
    if (e.target.tagName.toLowerCase() == "td") {
        e.target.setAttribute("class", "black");

    }
}

function processCoordinates(e) {
    xcordmouse = e.clientX;
    ycordmouse = e.clientY;
    xcord = e.screenX;
    ycord = e.screenY;
}

function keyPressed(e) {
    if (e.keyCode === 17) {
        document.getElementById("mousecoords").innerHTML = "client coords: " + xcordmouse + ", " + ycordmouse;
        document.getElementById("coords").innerHTML = "screen coords: " + xcordmouse + ", " + ycordmouse;
    }
}
window.addEventListener("load", createCanvas, false);