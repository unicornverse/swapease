// Navbar Script
const btn = document.querySelector('#btn');
const crossbtn = btn.querySelectorAll('svg');
const menu = document.querySelector('#mobile-menu');
function toggleMenu() {
    crossbtn.forEach((cb) => {
        if (cb.classList.contains('hidden')) {
            cb.classList.remove('hidden');
        }
        else {
            cb.classList.add('hidden');
        }
    }

    );
}
btn.addEventListener('click', (e) => {
    e.preventDefault();

    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
    }
    else {
        menu.classList.add('hidden');
    }
    toggleMenu();
});

// eye toggle for login

const x = document.querySelector('#pass1');
const y = document.querySelector('#hide1');
const z = document.querySelector('#hide2');

function hidepassword() {
    if (x.type === 'password') {
        x.type = 'text';
        y.classList.remove('hidden');
        z.classList.add('hidden');
    }
    else {
        x.type = 'password';
        y.classList.add('hidden');
        z.classList.remove('hidden');
    }
}




//pop-up login modal

const overlay = document.querySelector('#overlay');
const delbtn1 = document.querySelector('#del-btn1');
const delbtn2 = document.querySelector('#del-btn2');


const closebtn = document.querySelector('#close-modal');

const togglemodal = () => {
    overlay.classList.toggle('hidden')
    overlay.classList.toggle('flex')
}


delbtn1.addEventListener('click', togglemodal)
delbtn2.addEventListener('click', togglemodal)
closebtn.addEventListener('click', togglemodal)


