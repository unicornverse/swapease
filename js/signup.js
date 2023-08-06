function hidepassword2() {
    if (pass2.type === 'password') {
        pass2.type = 'text';
        hide3.classList.remove('hidden');
        hide4.classList.add('hidden');
    }
    else {
        pass2.type = 'password';
        hide3.classList.add('hidden');
        hide4.classList.remove('hidden');
    }
}


function hidepassword3() {
    if (pass3.type === 'password') {
        pass3.type = 'text';
        hide5.classList.remove('hidden');
        hide6.classList.add('hidden');
    }
    else {
        pass3.type = 'password';
        hide5.classList.add('hidden');
        hide6.classList.remove('hidden');
    }
}


const overlay = document.querySelector('#overlay');
const delbtn3 = document.querySelector('#del-btn3');



const closebtn = document.querySelector('#close-modal');

const togglemodal = () => {
    overlay.classList.toggle('hidden')
    overlay.classList.toggle('flex')
}


delbtn3.addEventListener('click', togglemodal)
closebtn.addEventListener('click', togglemodal)