const leftbtn = document.querySelector(".l-btn");
const rightbtn = document.querySelector(".r-btn");

rightbtn.addEventListener('click',function(event){
    const conent = document.querySelector('.product-slide');
    conent.scrollLeft +=1100;
    // event.preventDefault();()=>
});
leftbtn.addEventListener('click',function(event){
    const conent = document.querySelector('.product-slide');
    conent.scrollLeft -=1100;
    
})

const leftbtn1 = document.querySelector(".btn-1b");
const rightbtn1 = document.querySelector(".btn-1a");

rightbtn1.addEventListener('click',function(event){
    const conent = document.querySelector('.product-slide-1');
    conent.scrollLeft +=1100;
});
leftbtn1.addEventListener('click',function(event){
    const conent = document.querySelector('.product-slide-1');
    conent.scrollLeft -=1100;
   
})

const backtop = document.querySelector(".backtop");

backtop.addEventListener("click", function(event){
    window.scrollTo({
        top:0,
        behavior: "smooth"
    });
})
