// =============================
// DOM BASICS CHEAT SHEET
// =============================

// Selectors
// var a = document.getElementById("main-heading")
// var a = document.getElementsByClassName("box")  // (HTML Collection Array.from())
var a = document.getElementsByTagName("p")      // (HTML Collection)
var a = document.getElementsByName("username")  //   (NodeList)
var a=  document.querySelector(".box")      // first match
var a=  document.querySelectorAll(".box")   // all match (NodeList)


// // Traversing
 const child = document.getElementById("child");
 
 var a= child.parentElement
 var a= child.nextElementSibling
 var a= child.previousElementSibling
 var a= document.getElementById("list").children
//  console.log(a);



// Loop through children
Array.from(document.getElementById("list").children)
.forEach((el, i )=> {
   if(i == 1){
      el.style.color = "red";
      el.style.fontWeight = "bold";
   }else{
      el.style.color = "green";
      el.style.fontWeight = "bold";
   }

});


// // Create & Add Elements
// const newItem = document.createElement("li");
// newItem.textContent = "Item 4";
// document.getElementById("list").appendChild(newItem);


// // Modify Content
document.getElementById("main-heading").textContent = "Updated Heading";
document.getElementById("list").innerHTML += "<li>Item 5</li>";


// // Replace & Remove
// const newItem = document.createElement("li");
// newItem.textContent = "Item 4";
// let list = document.getElementById("list");
// let oldElement= list.children[1]
// list.replaceChild(newItem, oldElement);
// list.removeChild(list.children[0]);


// // Clone Element
// const copy = list.children[1].cloneNode(true);
// list.appendChild(copy);


// // Attributes
let el= document.querySelector("#main-heading");
let b = el.getAttribute("id");

// console.log(b);


// el.setAttribute("data-role", "header");
// el.hasAttribute("data-role");
// el.removeAttribute("data-role");


// // Styles
// el.style.color = "blue";
// el.style.backgroundColor = "lightgray";
// el.style.fontSize = "50px";

// el.style.cssText = "color: green; font-size: 30px;";
// var a= getComputedStyle(el).color;
// console.log(a);



// // Class Manipulation
// el.classList.add("active");
// el.classList.remove("active");

// function inactive(){
//    el.classList.toggle("active");

// }




// // Events
// document.getElementById("btn").addEventListener("click", (e) => {
//   console.log("Clicked!", e.type);
// });


// Event Delegation (Bubbling)
document.getElementById("list").addEventListener("click", (e) => {
  console.log(e.target.textContent);
});


// // Timers
// setTimeout(() => console.log("Hello"), 1000);

// setInterval(() => {
//   console.log("Repeating...");
// }, 1000);





