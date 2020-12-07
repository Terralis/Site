
const questionNumber = document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");
const answerIndicatorContainer = document.querySelector(".answers-indicator");


let questionCounter = 0;
let currentQuestion;
let availableQuestions = [];
let availableOptions = [];
let correctAnswers = 0;
let attempt = 0;

//push the questions into availableQuestions Array
function setAvailableQuestions(){
	const totalQuestion = quiz.length;

	for(let i=0; i<totalQuestion; i++){
		availableQuestions.push(quiz[i])
	}
}

// set questions number and question ans options
function getNewQuestion(){
	// set question number
	questionNumber.innerHTML = "Questions " + (questionCounter + 1) + " of " + quiz.length;

	// set question text
	// get random question
	const questionIndex = availableQuestions[Math.floor(Math.random() * availableQuestions.length)]
	currentQuestion = questionIndex;
	questionText.innerHTML = currentQuestion.q;
	// get the position of 'questionIndex'  from the availableQuestion Array
	const index1 = availableQuestions.indexOf(questionIndex);
	// remove the 'questionIndex' from the availableQuestion Arrau, so that the questions does not repeat
	availableQuestions.splice(index1,1);

	// console.log(questionIndex)
	// console.log(availableQuestions)

	// set options
	// get the length of options
	const optionLen = currentQuestion.options.length
	// push options into availableOptions Array
	for(let i=0; i<optionLen; i++){
		availableOptions.push(i)
	}

	optionContainer.innerHTML = '';
	let animationDelay = 0.2;
	// create options in html
	for(let i=0; i<optionLen; i++){
		// random option
		const optionIndex = availableOptions[Math.floor(Math.random() * availableOptions.length)];
		// get the position of 'optionIndex' from the availableOptions
		const index2 = availableOptions.indexOf(optionIndex);
		// remove the 'optionIndex' from the availableOptions, so that the options does not repeat
		availableOptions.splice(index2,1);
		// console.log(optionIndex)
		// console.log(availableOptions)
		const option = document.createElement("div");
		option.innerHTML = currentQuestion.options[optionIndex];
		option.id = optionIndex;
		option.style.animationDelay = animationDelay + 's';
		animationDelay = animationDelay + 0.2;
		option.className = "option";
		optionContainer.appendChild(option)
		option.setAttribute("onclick", "getResult(this)");
	}
	questionCounter++
}

// get the result of current attempt question 
function getResult(element){
	const id = parseInt(element.id);
	// console.log(typeof id)
	// get the answer by comparing the id of clicked option
	if(id == currentQuestion.answer){
		// console.log("answer is correct");
		// set the green color to the correct option
		element.classList.add("correct");
		// add the indicator to correct mark
		updateAnswerIndicator("correct");
		correctAnswers++;
	}
	else{
		// console.log("answer is wrong");
		// set the red color to the incorrect option
		element.classList.add("wrong");
		// add the indicator to wrong mark
		updateAnswerIndicator("wrong");

		// if the answer is incorrect the show the correct option by adding green color the correct option
		const optionLen = optionContainer.children.length;
		for(let i = 0; i<optionLen; i++){
			if(parseInt(optionContainer.children[i].id) == currentQuestion.answer){
				optionContainer.children[i].classList.add("correct");
			}
		}

	}
	attempt++;
	unclickableOptions();
}

// make all the options unclickable once the user select a option (RESTRICT THE USER TO CHANGE THE OPTION AGAIN)
function unclickableOptions(){
	const optionLen = optionContainer.children.length;
	for(let i = 0; i<optionLen; i++){
		optionContainer.children[i].classList.add("already-answered");
	}
}

function answerIndicator(){
	const totalQuestion = quiz.length;
	for(let i = 0; i<totalQuestion; i++){
		const indicator = document.createElement("div");
		answerIndicatorContainer.appendChild(indicator);
	}
}

function updateAnswerIndicator(markType){
	answerIndicatorContainer.children[questionCounter-1].classList.add(markType)
}

function next(){
	if(questionCounter === quiz.length){
		console.log("quiz over");
		// quizOver();
	}
	else{
		getNewQuestion();
	}
}

// function quizOver(){

// }

window.onload = function(){
	// first we sill set all questions in availableQuestions Array
	setAvailableQuestions();
	// second we will call getNewQuestions(); function
	getNewQuestion();
	// to create indicator of answers
	answerIndicator();

}