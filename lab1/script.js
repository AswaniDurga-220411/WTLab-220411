
// Task 1: Variables

var companyName = "Tech Startup";
let founder = "Durga";
const year = 2026;

console.log(companyName, founder, year);

// Task 2: Functions


// Normal function
function greet() {
    console.log("Welcome to " + companyName);
}
greet();

// Arrow function
const sayHello = () => {
    console.log("Hello User!");
};
sayHello();

// Math functions
function addNumbers() {
    let n1 = Number(document.getElementById("num1").value);
    let n2 = Number(document.getElementById("num2").value);
    document.getElementById("result").innerText = "Result: " + (n1 + n2);
}

const subtractNumbers = () => {
    let n1 = Number(document.getElementById("num1").value);
    let n2 = Number(document.getElementById("num2").value);
    document.getElementById("result").innerText = "Result: " + (n1 - n2);
};


// Task 3: Built-in functions
function askName() {
    let name = prompt("Enter your name:");
    alert("Hello " + name + "!");
    console.log("User entered name:", name);
}

// Task 4: HTML Manipulation
function changeText() {
    document.getElementById("desc").innerText = "We build amazing products!";
}

// Task 5: Styling

function toggleStyle() {
    document.body.classList.toggle("dark-mode");
}

// Task 6: Events

function hoverIn() {
    document.getElementById("hoverBox").style.backgroundColor = "orange";
}

function hoverOut() {
    document.getElementById("hoverBox").style.backgroundColor = "lightblue";
}


// Task 7: Form Validation

function validateForm() {
    let name = document.getElementById("username").value;
    let email = document.getElementById("email").value;

    if (name === "" || email === "") {
        alert("All fields are required!");
        return false;
    }

    console.log("Form Submitted:", name, email);
    return true;
}

function printPage() {
    window.print();
}