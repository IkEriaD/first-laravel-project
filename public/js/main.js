document.addEventListener("DOMContentLoaded", function() {
    const questionsContainer = document.querySelector('#questions');



    // Render questions dynamically
    questions.map((question, index) => {
        questionsContainer.innerHTML += `<div class="w-full min-h-40 px-32 py-12 bg-slate-100 rounded space-y-2">
            <div class="w-full flex items-center justify-between">
                <h3 class="text-2xl font-semibold tracking-wider">Question ${index + 1}</h3>
                <button class="w-10 h-10 rounded-lg hover:bg-slate-50 outline-none">
                    <i class="bx bx-x text-xl"></i>
                </button>
            </div>

            <div class="w-full">
                <input class="w-full px-2 py-3 text-sm bg-white border rounded outline-none" value="${question.text}" type="text"/>
            </div>

            <div class="w-full space-y-2">
                ${Object.keys(question.options).map(key => `
                <div class="w-full flex items-center">
                    <small class="w-9 h-9 block flex items-center justify-center shrink-0">${key}</small>
                    <input class="w-full p-2 text-sm bg-white border rounded outline-none" value="${question.options[key]}" type="text"/>
                    <div class="w-fit flex items-center gap-1">
                        <button class="w-9 h-9 flex items-center justify-center ${key === question.correct_option ? 'bg-green-300 text-green-100' : 'bg-green-100 text-green-400'} shrink-0">
                            <i class="bx bx-check"></i>
                        </button>
                        <button class="w-9 h-9 flex items-center justify-center shrink-0 bg-slate-50">
                            <i class="bx bx-x"></i>
                        </button>
                    </div>
                </div>
                `).join('')}
            </div>
        </div>`;
    });
});

// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


document.addEventListener("DOMContentLoaded", function () {
    // Render questions initially
    showQuestions();

    // Add event listener to the Add Question button
    const addQuestionButton = document.querySelector('#addQuestionButton');
    addQuestionButton.onclick = () => {
        questions.push({
            text: "",
            correct_option: "",
            options: {}
        });
        showQuestions();
    };
});

