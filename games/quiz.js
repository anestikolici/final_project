var questions
var score = 0
var currentQuestion = 0
var totalQuestions = 10;

fetch('https://opentdb.com/api.php?amount=20&category=15')
    .then(response => response.json())
    .then(data => {
        questions = data.results
        console.log(questions)
        startQuiz()
    })


function startQuiz() {
    currentQuestion = 0
    score = 0
    document.getElementById('score').innerHTML = ''
    displayQuestion()
}

function displayQuestion() {
    let allAnswers = [...questions[currentQuestion].incorrect_answers]
    allAnswers.push(questions[currentQuestion].correct_answer)

    allAnswers.sort((a, b) => Math.random() - 0.5)
    console.log("ALL: " + allAnswers)

    let txt = ''
    txt = questions[currentQuestion].question

    for(let i = 0; i < allAnswers.length; i++) {
        txt += '<br><input type="radio" name="answer" value="' +
            allAnswers[i] +
            '">' + allAnswers[i]
    }
    txt += '<br><button id="buttonSubmit" onclick="checkResponse()">Submit</button>'
    document.getElementById('quiz').innerHTML = txt
}

function checkResponse() {

    let answers = document.getElementsByName('answer')
    for(let i = 0; i < answers.length; i++) {
        if(answers[i].checked) {
            console.log(answers[i].value)
            if(answers[i].value == questions[currentQuestion].correct_answer) {
                score++
            }
            break;
        }
    }

    currentQuestion++
    if(currentQuestion < totalQuestions) {
        displayQuestion()
    }
    else {
        document.getElementById('quiz').innerHTML = ''
        document.getElementById('score').innerHTML = "<h1>Score: " + score + "/10</h1>" +
            "<button onclick='startQuiz()'>start again</button>"

    }
}
