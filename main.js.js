main.js

function calculateLoan() {
    const doseisValue = parseFloat(document.getElementById("doseis").value);
    const prokatavoliValue = parseFloat(document.getElementById("prokatavoli").value);

    const doseisMessages = {
        150: "Δε βρέθηκε αποτέλεσμα με βάση τα στοιχεία αυτά",
        200: "Βρέθηκαν 8 αγγελίες",
        300: "Βρέθηκαν 15 αγγελίες",
        400: "Βρέθηκαν 24 αγγελίες",
        // Προσθέστε εδώ άλλα μηνύματα ανάλογα με τις δόσεις που επιθυμείτε
    };

    if (doseisMessages[doseisValue]) {
        alert(doseisMessages[doseisValue]);
    } else {
        alert("Δε βρέθηκε αποτέλεσμα με βάση τα στοιχεία αυτά");
    }
}


function toggleAnswer(questionNumber) {
    var answer = document.getElementById('answer' + questionNumber);
    answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';
  }
  

let search = document.querySelector('.search-box');

document.querySelector('#search-icon').onclick = ()  => {
    search.classList.toggle('active');
    menu.classList.remove('active');
}

let menu = document.querySelector('.navbar');

document.querySelector('#menu-icon').onclick = ()  => {
    menu.classList.toggle('active');
    search.classList.remove('active');
}

// Hide Menu And Search Box On Scroll
window.onscroll = () => {
    menu.classList.remove('active');
    search.classList.remove('active');

}

//header
let header = document.querySelector('header');


window.addEventListener('scroll', () => {
    header.classList.toggle('shadow', window.scrollY > 0);
    
});





