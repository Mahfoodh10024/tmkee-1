const btn = document.getElementById('btnd');
const dialog = document.getElementById('dia');

const ag = document.getElementById('agree');


ag.addEventListener('click' , ()=>{
    dialog.style.display = 'flex';
});

btn.addEventListener("click" ,()=>{    
    dialog.style.display = 'none';
});