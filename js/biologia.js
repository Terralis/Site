var questao1 = document.getElementById('questao1').innerHTML;

var myQuestions = [

	{
		question: questao1,
		answers: {
			a: 'alternativa a <br />',
			b: 'alternativa b <br />',
			c: 'alternativa c <br />',
			d: 'alternativa d <br /><br />',
		},
		correctAnswer: 'b'
	}

];

var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');

generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);

function generateQuiz(questions, quizContainer, resultsContainer, submitButton){

	function showQuestions(questions, quizContainer){

		var outputs = [];
		var answers;

		for (var i = 0; i < questions.length; i++) {
			answers = [];

			for(letter in questions[i].answers){

				answers.push(

					'<label>'
					+ '<input type="radio" name"question'+i+'" value="'+letter+'">'

					+questions[i].answers[letter]

					+ '</label>'

				);
			}
		}

		output.push(
				'<div class="question">' + questions[i].question + '</div>'
				+ '<div class="respostas">' + answers.join('') + '</div>'
			);

showQuestions(questions, quizContainer);

	}

}