
let next_btns = document.getElementsByClassName('next-btn')
let back_btns = document.getElementsByClassName('back-btn')
const inputFields = document.querySelectorAll("input");
const submit_btn = document.getElementById("submit-btn");
let step_previous, current_step, step_next
let counter = 1;

const nextAndPrev = () => {
    step_previous = document.getElementById('step-'+ (counter -1))
    current_step = document.getElementById('step-'+ counter)
    step_next = document.getElementById('step-'+ (counter + 1))
}

for (let i = 0 ; i < next_btns.length; i++) {
    next_btns[i].addEventListener('click' , function () {
        nextAndPrev()
        current_step.style.display = 'none'
        step_next.style.display = 'block'
        counter++
    }) ;
}


for (let i = 0 ; i < back_btns.length; i++) {
    back_btns[i].addEventListener('click' , function () {
        nextAndPrev()
        step_previous.style.display = 'block'
        current_step.style.display = 'none'
        counter--
    }) ;
}


Array.from(inputFields).forEach(function (input) {
    input.addEventListener('change', function () {
        const validInputs = Array.from(inputFields).filter( input => input.value !== "");
        if (validInputs.length ===  inputFields.length) {
            submit_btn.disabled = false;
        }
    });
})
