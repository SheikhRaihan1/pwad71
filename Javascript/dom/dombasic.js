// ========================================
// DOM BASICS - Important document functions
// ========================================

// selectors : class(.), Id(#), tag(p)

// 1. Select Elements
// // Select elements by class name (returns HTMLCollection)
// // Select elements by name (returns NodeList)
// // Select elements by tag name (returns HTMLCollection)
// // Select all elements that match a CSS selector (returns NodeList)

// console.log(document.location.href);


// console.log(document.getElementById("main-heading"));

// let headline= document.getElementById("main-heading");
// headline.innerText="This is Batch 66";
// headline.style.backgroundColor="red";
// headline.style.color="White";
// headline.style.fontSize="70px";
// console.log("test");



// console.log(document.getElementsByName("username"));
// let input= document.getElementsByName("username");
//     input.value="Hasan";
// console.log(input[0]);



// console.log(document.getElementsByTagName("p"));
// let p= document.getElementsByTagName("p");
// p[1].innerHTML="<h1>Pollob</h1>";

// console.log(document.getElementsByClassName("box"));

// let boxes= document.getElementsByClassName("box");
// boxes[0].innerText="I am box 1";
// boxes[1].innerText="I am box 2";

// console.log(document.querySelector(".box"));

// let box1= document.querySelector(".box");
// box1.style.color="red";

// console.log(document.querySelectorAll(".box"));
// let box2= document.querySelectorAll(".box");
// let box2= document.getElementsByClassName("box");
// box2[0].style.fontWeight="bold";
// box2[0].style.fontSize="50px";



// // box2.forEach((box, index)=>{
// Array.from(box2).forEach((box, index)=>{
//     if (index != 2) {
//     box.style.fontWeight="bold";
//     box.style.fontSize="50px";
//     box.style.color="red";
//     }else{
//          box.style.fontWeight="bold";
//          box.style.fontSize="50px";
//          box.style.color="green";
//     }
   
// });

// Select element by ID
// const title = document.getElementById('hello');
// const tittleClass= document.getElementsByClassName('text')
 



//  const items = document.getElementsByClassName('item');

// // Select elements by tag name (returns HTMLCollection)
// const allParagraphs = document.getElementsByTagName('p');
// allParagraphs[0].innerHTML="<h1>Hasan Mahmud</h1>"
// allParagraphs[0].innerText="<h1>Hasan Mahmud</h1>"
// allParagraphs[0].style.fontSize='20px'
// allParagraphs[0].style.color='green'
// console.log(allParagraphs[0].innerHTML);



// // Select first element that matches a CSS selector
//  const firstButton = document.querySelector('.queryS');
//  console.log(firstButton.nextSibling.nextSibling);
 


// // Select all elements that match a CSS selector (returns NodeList)
//  const allButtons = document.querySelectorAll('.queryS');

// console.log(allButtons);
// // 2. Read or Change Content

// // Read text content
// const text = title.innerText;

// // Change text content
// title.innerText = 'Updated Title';

// // Read HTML content
// const htmlContent = title.innerHTML;

// // Change HTML content
// title.innerHTML = '<span style="color: red;">Red Title</span>';


// // 3. Read or Change Attributes

// // Get attribute
// const imgSrc = document.getElementById('myImage').getAttribute('src');
// const imgSrc = document.getElementById('myImage');
// imgSrc.style.width="100px"
// // console.log(imgSrc);
// let imgdiv=document.getElementById("imgdiv")
// imgdiv.addEventListener("mouseenter", ()=>{
//      imgSrc.style.width="500px";  
// });
// imgdiv.addEventListener("mouseleave", ()=>{
//      imgSrc.style.width="100px";   
// });


// function increaseWidth(){
//   const imgSrc = document.getElementById('myImage');
//   imgSrc.style.width="400px"
// }

// function backToNormalSize(){
//       const imgSrc = document.getElementById('myImage');
//       imgSrc.style.width="100px"
// }

// console.log(imgSrc);


 // Set attribute
//  document.getElementById('myImage').setAttribute('src', 'https://images.unsplash.com/photo-1520209759809-a9bcb6cb3241?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW1nfGVufDB8fDB8fHww');

// // // Remove attribute
//  document.getElementById('myImage').removeAttribute('width');


// // 4. Style Elements

// // Inline styling using style property
// title.style.color = 'blue';
// title.style.fontSize = '24px';

// // Multiple styles can be assigned using cssText
// title.style.cssText = "color: green; background-color: yellow; font-weight: bold;";


// // 5. Create, Add, and Remove Elements

// // Create a new element
// const newParagraph = document.createElement('p');
// newParagraph.innerText = 'This is a new paragraph.';

// // // Add the new element to the body or any container
//   document.body.appendChild(newParagraph);
//   document.body.prepend(newParagraph);



// // 6. Events

// Add event listener

let firstButton= document.querySelector(".firstButton");
// let firstButton= document.getElementsByClassName("firstButton");
// let firstButton= document.querySelectorAll(".firstButton");

// console.log(firstButton);


// firstButton.addEventListener('click', function() {
//   alert('Button was clicked!');
// });

// // // Remove event listener
function handleClick() {
 const box = document.getElementsByClassName('box');
// Add a class
// box[1].classList.add('highlight');

Array.from(box).forEach((b)=>{
    b.classList.toggle("highlight")
});

// alert()
}

let removebackgroud= document.getElementById("event-btn");
removebackgroud.addEventListener("click" , function(){
     const box = document.getElementsByClassName('box');


    Array.from(box).forEach((rashed)=>{
       rashed.classList.remove("highlight")
    });
});


// // 7. Class Manipulation

// const box = document.getElementsByClassName('box');

// // // Add a class
// box[1].classList.add('highlight');

// // Remove a class
// box.classList.remove('active');

// // Toggle a class (add if not present, remove if present)
// box.classList.toggle('active');

// // Check if element has a class
// const hasActiveClass = box.classList.contains('active');


// // 8. Form Elements

const inputField = document.getElementsByName('username');
// console.log(inputField);


// // Get input value
// const inputValue = inputField.value;

// // Set input value
// inputField.value = 'John Doe';

// // Focus an input
// inputField[0].focus();

// // Clear an input
// inputField.value = '';


// // 9. Page Information

// // Get page title
// const pageTitle = document.title;

// // Set page title
// document.title = "New Page Title";

// // Get URL
// const url = document.URL;

// // Get domain
// const domain = document.domain;


// // 10. Scroll and Dimensions

// // Scroll to top
// window.scrollTo(0, 0);

// // Get viewport width and height
// const viewportWidth = window.innerWidth;
// const viewportHeight = window.innerHeight;


// // 11. Timing Events (

// Set timeout
// setTimeout(() => {
//   console.log('Executed after 2 seconds');
// }, 2000);

// // // Set interval
// const intervalID = setInterval(() => {
//   console.log('Executed every 1 second');
// }, 1000);

// // // Clear interval after 5 seconds
// setTimeout(() => {
//   clearInterval(intervalID);
// }, 5000);


// ========================================
// End of DOM Basics
// ========================================


