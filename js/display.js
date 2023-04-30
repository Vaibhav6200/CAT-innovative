let home = document.querySelector(".home")
let theory = document.querySelector(".theory")
let quiz = document.querySelector(".quiz")
let reference = document.querySelector(".reference")
let about = document.querySelector(".about")
let mentor = document.querySelector(".mentor")
let simulator1 = document.querySelector(".simulator1")
let simulator2 = document.querySelector(".simulator2")


function homeDisplay(){
    home.classList.remove('d-none');
    theory.classList.add('d-none');
    quiz.classList.add('d-none');
    reference.classList.add('d-none');
    about.classList.add('d-none');
    mentor.classList.add('d-none');
    simulator1.classList.add('d-none');
    simulator2.classList.add('d-none');
}

function theoryDisplay(){
    home.classList.add('d-none');
    theory.classList.remove('d-none');
    quiz.classList.add('d-none');
    reference.classList.add('d-none');
    about.classList.add('d-none');
    mentor.classList.add('d-none');
    simulator1.classList.add('d-none');
    simulator2.classList.add('d-none');
}

function procedureDisplay(){
    home.classList.add('d-none');
    theory.classList.add('d-none');
    quiz.classList.add('d-none');
    reference.classList.add('d-none');
    about.classList.add('d-none');
    mentor.classList.add('d-none');
    simulator1.classList.add('d-none');
    simulator2.classList.add('d-none');
}

function quizDisplay(){
    home.classList.add('d-none');
    theory.classList.add('d-none');
    quiz.classList.remove('d-none');
    reference.classList.add('d-none');
    about.classList.add('d-none');
    mentor.classList.add('d-none');
    simulator1.classList.add('d-none');
    simulator2.classList.add('d-none');
}

function referenceDisplay(){
    home.classList.add('d-none');
    theory.classList.add('d-none');
    quiz.classList.add('d-none');
    reference.classList.remove('d-none');
    about.classList.add('d-none');
    mentor.classList.add('d-none');
    simulator1.classList.add('d-none');
    simulator2.classList.add('d-none');
}

function aboutDisplay(){
    home.classList.add('d-none');
    theory.classList.add('d-none');
    quiz.classList.add('d-none');
    reference.classList.add('d-none');
    about.classList.remove('d-none');
    mentor.classList.add('d-none');
    simulator1.classList.add('d-none');
    simulator2.classList.add('d-none');
}

function mentorDisplay(){
    home.classList.add('d-none');
    theory.classList.add('d-none');
    quiz.classList.add('d-none');
    reference.classList.add('d-none');
    about.classList.add('d-none');
    mentor.classList.remove('d-none');
    simulator1.classList.add('d-none');
    simulator2.classList.add('d-none');
}

function simulator1Display(){
    home.classList.add('d-none');
    theory.classList.add('d-none');
    quiz.classList.add('d-none');
    reference.classList.add('d-none');
    about.classList.add('d-none');
    mentor.classList.add('d-none');
    simulator1.classList.remove('d-none');
    simulator2.classList.add('d-none');
}

function simulator2Display(){
    home.classList.add('d-none');
    theory.classList.add('d-none');
    quiz.classList.add('d-none');
    reference.classList.add('d-none');
    about.classList.add('d-none');
    mentor.classList.add('d-none');
    simulator1.classList.add('d-none');
    simulator2.classList.remove('d-none');
}