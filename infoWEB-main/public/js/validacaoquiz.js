document.addEventListener('DOMContentLoaded', function () {
    const $startGameButton = document.querySelector('.start-quiz');
    const $questionsContainer = document.querySelector('.questions-container');
    const $answersContainer = document.querySelector('.answers-container');
    const $questionText = document.querySelector('.question');
    const $nextQuestionButton = document.querySelector('.next-question');

    let currentQuestionIndex = 0;
    let totalCorrect = 0;

    $startGameButton.addEventListener('click', startGame);
    $nextQuestionButton.addEventListener('click', displayNextQuestion);

    function startGame() {
        console.log('Iniciando quiz...', questions); //Agora aparecerá
        $startGameButton.classList.add('hide');
        $questionsContainer.classList.remove('hide');
        displayNextQuestion();
    }



    function displayNextQuestion() {
        resetState();

        if (questions.length === currentQuestionIndex) {
            return finishGame();
        }

        $questionText.textContent = questions[currentQuestionIndex].question;

        questions[currentQuestionIndex].answers.forEach(answer => {
            const newAnswer = document.createElement('button');
            newAnswer.classList.add('button', 'answer');
            newAnswer.textContent = answer.text;

            if (answer.correct) {
                newAnswer.dataset.correct = answer.correct;
            }

            newAnswer.addEventListener('click', selectAnswer);
            $answersContainer.appendChild(newAnswer);
        });
    }



    function resetState() {
        while ($answersContainer.firstChild) {
            $answersContainer.removeChild($answersContainer.firstChild);
        }
        $nextQuestionButton.classList.add('hide');
    }



    function selectAnswer(event) {
        const answerClicked = event.target;

        if (answerClicked.dataset.correct) {
            totalCorrect++;
        }

        document.querySelectorAll('.answer').forEach(button => {
            button.classList.add(button.dataset.correct ? 'correct' : 'incorrect');
            button.disabled = true;
        });

        $nextQuestionButton.classList.remove('hide');
        currentQuestionIndex++;
    }


    
    function finishGame() {
        const totalQuestion = questions.length;
        const performance = Math.floor(totalCorrect * 100 / totalQuestion);
        let message = '';

        switch (true) {
            case (performance < 33):
                message = '🌱 Iniciante: você está dando os primeiros passos. Que tal aprender mais sobre mundo da tecnolgia e tentar novamente? Cada atitude conta! 📚';
                break;
            case (performance < 67):
                message = '🚀 Intermediário: você já sabe bastante coisa sobre Tecnologia da Informação! Continue assim você está indo muito bem! ✨';
                break;
            case (performance >= 67):
                message = '👑 Especialista: parabéns! Você mostra grande conhecimento sobre o mundo TI. Continue sendo um exemplo e compartilhe essas informações com outras pessoas! 🌐';
                break;
            default:
                message = 'Erro ao calcular desempenho.';
        }

        $questionsContainer.innerHTML = `
            <p class="final-message">
                Você acertou ${totalCorrect} de ${totalQuestion} questões!<br>
                <span>${message}</span>
            </p>
            <button class="button" onclick="window.location.reload()">Refazer teste</button>
        `;
    }
});