
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

// const selecionado = document.querySelector(".select");
// selecionado.setAttribute("onclick", "select()");

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

	//ocultar botão de voltar da primeira pergunta
	var previous = document.getElementById("previous");
	if (questionCounter === 0) {
		previous.style.display = "none";
	}
	else{
		previous.style.display = "inline";
	}

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
		optionContainer.appendChild(option);
		
		option.setAttribute("onclick", "select(this)");

		option.classList.add("select");

	}
	questionCounter++
}

function setPreviousQuestions(){
	const totalQuestion = quiz.length;

	for(let i=questionCounter; i>=0; i--){
		availableQuestions.push(quiz[i])
	}
}

function getOldQuestion(){
	// set question number
	questionNumber.innerHTML = "Questions " + (questionCounter + 1) + " of " + quiz.length;

	// set question text
	// get random question
	const questionIndex = availableQuestions[Math.floor(Math.random() * availableQuestions.length)]
	currentQuestion = questionIndex - 1;
	questionText.innerHTML = currentQuestion.q;
	// get the position of 'questionIndex'  from the availableQuestion Array
	const index1 = availableQuestions.indexOf(questionIndex);
	// remove the 'questionIndex' from the availableQuestion Arrau, so that the questions does not repeat
	availableQuestions.splice(index1,1);

	//ocultar botão de voltar da primeira pergunta
	var previous = document.getElementById("previous");
	if (questionCounter === 0) {
		previous.style.display = "none";
	}
	else{
		previous.style.display = "inline";
	}

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
		optionContainer.appendChild(option);
		
		option.setAttribute("onclick", "select(this)");

		option.classList.add("select");

	}
	questionCounter++
}

var score = 0;
let cont = 0;

function select(element){
	//const id = parseInt(element.id);

	// for (var i = 0; i <= 1; i++) {
	// 	element.classList.add("selecionado");
	// 	element.id = "selecionado";
	// }
	// if (cont[0] === i) {
	// 	const noselect = document.querySelector(".selecionado");
	// 	noselect.setAttribute("onclick", "noselect(this)");
	// 	i--;
	// }

	while(cont <= 1){
		element.classList.add("selecionado");
		// element.id = "selecionado";
		cont++;
	}

	const noselect = document.querySelector(".selecionado");
	noselect.setAttribute("onclick", "noselect(this)");

	const escolha = parseInt(element.id);

	// console.log(escolha);

	// cont++;
	// if (cont == 1) {
	// 	element.classList.add("selecionado");
	// 	element.id = "selecionado";
	// }
	// else if (true) {}{
	// 	const noselect = document.querySelector(".selecionado");
	// 	noselect.setAttribute("onclick", "noselect(this)");
	// }
	// element.classList.add("selecionado");
	// element.id = "selecionado";

	// const noselect = document.querySelector(".selecionado");
	// noselect.setAttribute("onclick", "noselect(this)");

	// if (element.style.backgroundColor == "#c2c2c2") {
	// 	element.classList.remove("selecionado");
	// }

	//element.style.backgroundColor = "#c2c2c2";

	// if (element.style.backgroundColor = "#f2f2f2") {
	// 	element.style.backgroundColor = "transparent";
	// }
	// else{
	// 	element.style.backgroundColor = "#f2f2f2";	
	// }
	
}

function noselect(element){
	cont--;

	element.classList.remove("selecionado");

	element.setAttribute("onclick", "select(this)");
}

// function confirm(escolha){

// 	// const confirm = document.querySelector(".selecionado");
// 	const id = parseInt(select(escolha));
// 	// const id = parseInt(escolha.id);
// 	console.log(select(escolha));
// 	// console.log(typeof escolha);

// 	// const confirm = document.getElementById("confirm");

// 	// //confirm.id = element.id;

// 	// confirm.setAttribute("onclick", "getResult(this)")

// }

function confirm(){

	var escolhido = [select(this)];
	const id = document.querySelector(".selecionado").id;
	const sel = document.getElementsByClassName('selecionado').class;
	console.log(id);
	console.log(currentQuestion.answer);
	// get the answer by comparing the id of clicked option
	if(id == currentQuestion.answer){
		console.log("acertou");
		document.querySelector(".selecionado").classList.add("correct");
		updateAnswerIndicator("correct");
		correctAnswers++;
		cont = 0;
	}
	else{
		// console.log("answer is wrong");
		// set the red color to the incorrect option
		document.querySelector(".selecionado").classList.add("wrong");
		// add the indicator to wrong mark
		updateAnswerIndicator("wrong");
		cont = 0;
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

// get the result of current attempt question 
function getResult(element){
	const id = parseInt(element.id);
	console.log(typeof id)
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
	cont = 0;
	if(questionCounter === quiz.length){
		console.log("quiz over");
		// quizOver();
	}
	else{
		getNewQuestion();
	}
}

function back(){
	cont = 0;
	getOldQuestion();
	// if(questionCounter === quiz.length){
	// 	console.log("quiz over");
	// 	// quizOver();
	// }
	// else{
	// 	getNewQuestion();
	// }
	
}

// const previousButton = document.getElementByClass('previous-question-btn');

// function previous(){
	
// 	if (currentQuestion === 0) {
// 		previousButton.style.display = 'none';
// 	}
// 	else{
// 		previousButton.style.display = 'inline';
// 	}

// 	if(questionCounter != 1){
// 		console.log("no back");
// 		// quizOver();
// 	}
// 	else{
// 		getOldQuestion();
// 	}
// }
// // function quizOver(){

// // }

window.onload = function(){
	// first we sill set all questions in availableQuestions Array
	setAvailableQuestions();
	// second we will call getNewQuestions(); function
	getNewQuestion();
	// to create indicator of answers
	answerIndicator();

}