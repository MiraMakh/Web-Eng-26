
console.log("test from script");
console.error("test from script");

/* console.log("testVar", testVar);
console.log("test", first_name); */
/* test(); */
/* var testVar = 1; */
/* var testVar = 1;
let first_name = "Anna";
const LAST_NAME = "LAST_NAME"; */

function test() {
  //alert("Hello");
 /*  console.log("method test from script"); */
  /* console.log("test", first_name); */
  /* var testVar = 1;
  let first_name = "Anna";
  const LAST_NAME = "LAST_NAME"; */
}
/* console.log("testVar", testVar);
console.log("first_name", first_name);
 */

/* let testFun = function () {
  console.log("testFun");
};

const testFun1 = () => {
  console.log("testFun1");
  console.error("testFun1");
};

testFun();
testFun1(); */

/* let student = {
  name: "Anna",
  lasName: "Smith",
  semester: "8",
};

console.log(
  `Student ${student.name} last name is ${student.lasName}. She is ${student.semester} semester student `
); */

/* let age = prompt("How old are you?", 18);

console.log("age", age); */

/* let num1 = 1;
let num2 = "1";

console.log("type of num1", typeof num1);
console.log("type of num2", typeof num2);
console.log("type of null", typeof null);
console.log("num1 == num2", num1 == num2);
console.log("num1 === num2", num1 === num2);

num1 == num2 && console.log("num1 and num2");
if (num1 == num2) {
  console.log("num1 and num2");
}
 */

/* document.body.style.background = "red";

let nav1 = document.getElementById("nav");
nav1.style.background = "blue";
nav1.classList.add("Anna");
console.log("nav", nav1);
console.log("nav", nav1.childNodes); */


/* let elements = document.querySelectorAll("ul > li");
console.log("elements", elements);
for (let elem of elements) {
  console.log(elem.innerHTML);
  console.log((elem.textContent = "test"));
} */

let nav = document.getElementById("nav");
let div = document.createElement("div");
div.className = "alert";
/* div.classList.add("alert");
div.classList.contains("test"); */
div.innerHTML = "<strong>Hi there!</strong> You've read an important message.";
document.body.prepend(div);
/* node.append(...nodes or strings)
node.prepend(...nodes or strings)
node.before(...nodes or strings)
node.after(...nodes or strings)
node.replaceWith(...nodes or strings) */

/* nav.replaceWith(div); */

/* •	click
•	contextmenu
•	mouseover/ mouseout
•	mousedown/ mouseup
•	mousemove */

nav.addEventListener("mouseover", () => {
  /* nav.style.margin = "500px"; */
  nav.style.background = "pink";
});

nav.addEventListener("mouseout", () => {
  setTimeout(() => {
    /* nav.style.margin = "0"; */
    nav.style.background = "none";
  }, 500);
});

/* setInterval(() => {
  console.log("test");
}, 500); */
