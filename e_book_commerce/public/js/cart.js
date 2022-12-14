'use strict';

const payAmountBtn = document.querySelector('#payAmount');
const decrementBtn = document.querySelectorAll('#decrement');
const quantityElem = document.querySelectorAll('#quantity');
const incrementBtn = document.querySelectorAll('#increment');
const priceElm = document.querySelectorAll('#price');
const subtotalElem = document.querySelector('#subtotal');
//const taxElem = document.querySelector('#tax');
const totalElem = document.querySelector('#total');
const reductiontotal = document.querySelector('#reduction');
const payementform = document.querySelector('#payement_form');
const payementBtn = document.querySelector('#pay_btn');

for(let i=0; i<incrementBtn.length; i++){
    incrementBtn[i].addEventListener('click', function(){
        let increment = Number(this.previousElementSibling.textContent);
        increment++;
        this.previousElementSibling.textContent = increment;
        totalCalc();
    });
    decrementBtn[i].addEventListener('click', function(){
        let decrement = Number(this.nextElementSibling.textContent);
        decrement <= 1 ? 1: decrement--;
        this.nextElementSibling.textContent = decrement;
        totalCalc();
    });
}
const totalCalc = function(){
    //const tax = 0.05;
    let subtotal = 0;
    //let totaltax = 0;
    let total = 0;

    for(let i=0; i<quantityElem.length; i++){
        subtotal += Number(quantityElem[i].textContent) * Number(priceElm[i].textContent);
    }
    subtotalElem.textContent = subtotal.toFixed(2);
    //totaltax = subtotal * tax;
    //taxElem.textContent = totaltax;
    if(reductiontotal.textContent != null){
        total = subtotal - Number(reductiontotal.textContent);
    }else{
        total = subtotal;
    }
    
    totalElem.textContent = total.toFixed(2);
    payAmountBtn.textContent = total.toFixed(2)
}