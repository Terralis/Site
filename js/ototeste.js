(function() {
  const myQuestions = [
    {
      question: "Qual o nome da substância que deixa o tomate vermelho?",
      answers: {
        a: "Ricopeno",
        b: "Licopeno",
        c: "Dicopeno",
        d: "Sicopeno"
      },
      correctAnswer: "b"
    },
    {
      question: "Quando foi a primeira aparição do Coringa?",
      answers: {
        a: "Março de 1970",
        b: "Janeiro de 1939",
        c: "Abril de 1940",
        d: "Julho de 1950"
      },
      correctAnswer: "c"
    },
    {
      question: "Na série Game of Thrones, qual é o nome da atriz da mãe dos dragões?",
      answers: {
        a: "Emilia Clarke",
        b: "Carice Van Houten",
        c: "Lena Headey",
        d: "Gwendoline Christie"
      },
      correctAnswer: "a"
    },
    {
      question: "O brasil faz fronteira com: ",
      answers: {
        a: "7 Países",
        b: "5 Países",
        c: "9 Países",
        d: "10 Países"
      },
      correctAnswer: "d"
    }
  ];

  function buildQuiz() {
    // we'll need a place to store the HTML output
    const output = [];

    // for each question...
    myQuestions.forEach((currentQuestion, questionNumber) => {
      // we'll want to store the list of answer choices
      const answers = [];

      // and for each available answer...
      for (letter in currentQuestion.answers) {
        // ...add an HTML radio button
        answers.push(
          `<label>
             <input type="radio" name="question${questionNumber}" value="${letter}">
              ${letter} :
              ${currentQuestion.answers[letter]}
           </label>`
        );
      }

      // add this question and its answers to the output
      output.push(
        `<div class="slide">
           <div class="question"> ${currentQuestion.question} </div>
           <div class="answers"> ${answers.join("")} </div>
         </div>`
      );
    });

  
    // keep track of user's answers
    let numCorrect = 0;

    // for each question...
    myQuestions.forEach((currentQuestion, questionNumber) => {
      // find selected answer
      const answerContainer = answerContainers[questionNumber];
      const selector = `input[name=question${questionNumber}]:checked`;
      const userAnswer = (answerContainer.querySelector(selector) || {}).value;

      // if answer is correct
      if (userAnswer === currentQuestion.correctAnswer) {
        // add to the number of correct answers
        numCorrect++;

        // color the answers green
        answerContainers[questionNumber].style.color = "green";
      } else {
        // if answer is wrong or blank
        // color the answers red
        answerContainers[questionNumber].style.color = "red";
      }
    });

    // show number of correct answers out of total
    totalContainer.innerHTML = `Acertou ${numCorrect} de ${myQuestions.length}`;
    (numCorrect >=2) ?  resultsContainer.innerHTML = "Passou no teste, chamar o ajax e enviar ao php no email" : resultsContainer.innerHTML = "Não passou no teste" ;
    
  }

  function showSlide(n) {
    slides[currentSlide].classList.remove("active-slide");
    slides[n].classList.add("active-slide");
    currentSlide = n;
    
    if (currentSlide === 0) {
      previousButton.style.display = "none";
    } else {
      previousButton.style.display = "inline-block";
    }
    
    if (currentSlide === slides.length - 1) {
      nextButton.style.display = "none";
      submitButton.style.display = "inline-block";
    } else {
      nextButton.style.display = "inline-block";
      submitButton.style.display = "none";
    }
  }

  function showNextSlide() {
    showSlide(currentSlide + 1);
  }

  function showPreviousSlide() {
    showSlide(currentSlide - 1);
  }

  const quizContainer = document.getElementById("quiz");
  const totalContainer = document.getElementById("total");
  const resultsContainer = document.getElementById("results");
  const submitButton = document.getElementById("submit");

  // display quiz right away
  buildQuiz();

  const previousButton = document.getElementById("previous");
  const nextButton = document.getElementById("next");
  const slides = document.querySelectorAll(".slide");
  let currentSlide = 0;

  showSlide(0);

  // on submit, show results
  submitButton.addEventListener("click", showResults);
  previousButton.addEventListener("click", showPreviousSlide);
  nextButton.addEventListener("click", showNextSlide);
})();  // finally combine our output list into one string of HTML and put it on the page
    quizContainer.innerHTML = output.join("");
  }

  function showResults() {
    // gather answer containers from our quiz
    const answerContainers = quizContainer.querySelectorAll(".answers");
