import './bootstrap';


const btn = document.getElementById('div3');


btn.addEventListener('mouseover', ()=>{
    btn.innerHTML = '+';
});

btn.addEventListener('mouseleave', ()=>{
    btn.innerHTML = 'إضافة مشروع';
});


// add project

const nextbtn1 = document.getElementById('level1');
const level1 = document.getElementById('l1');


nextbtn1.addEventListener("click" , ()=>{
        console.log('levle');
});
