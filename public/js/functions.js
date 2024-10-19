function showQuestions() {
    const questionsContainer = document.querySelector('#questions');
    questionsContainer.innerHTML = ''; // Clear container before rendering

    questions.map((question, index) => {
        questionsContainer.innerHTML += `
        <div class="w-full min-h-40 px-32 py-12 bg-slate-100 rounded space-y-2">
            <!-- Question title -->
            <div class="w-full flex items-center justify-between">
                <h3 class="text-2xl font-semibold tracking-wider">Question ${index + 1}</h3>

                <!-- Delete question button -->
                <button onclick="deleteQuestion(${index})" class="w-10 h-10 rounded-lg hover:bg-slate-50 outline-none">
                    <i class="bx bx-x text-xl"></i>
                </button>
            </div>

            <!-- Question input -->
            <div class="w-full">
                <input class="w-full px-2 py-3 text-sm bg-white border rounded outline-none"
                       onblur="showQuestions()"
                       oninput="updateQuestion(${index}, this.value)"
                       value="${question.text}" placeholder="Question goes here" type="text"/>
            </div>

            <!-- Options -->
            <div class="w-full space-y-2" id="question${index}">
                ${renderOptions(index, question)}
            </div>

            <!-- Add option button -->
            <div class="w-full flex justify-end">
                <button onclick="addOption(${index})" class="text-sm tracking-wider text-sky-500">Add option</button>
            </div>
        </div>`;
    });
}

// Render the options of each question
function renderOptions(questionIndex, question) {
    const optionKeys = Object.keys(question.options);
    let optionsHtml = '';
    optionKeys.forEach((optionKey, pos) => {
        optionsHtml += `
        <div class="w-full flex items-center">
            <small class="w-9 h-9 block flex items-center justify-center shrink-0">${optionLetters[pos]}</small>
            <input class="w-full p-2 text-sm bg-white border rounded outline-none"
                   oninput="updateOption(${questionIndex}, '${optionKey}', this.value)"
                   value="${question.options[optionKey]}"
                   placeholder="Option ${optionLetters[pos]}" type="text"/>
            <div class="w-fit flex items-center gap-1">
                <button onclick="updateCorrectOption(${questionIndex}, '${optionKey}')"
                        class="w-9 h-9 flex items-center justify-center ${question.correct_option === optionKey ? 'bg-green-300' : 'bg-green-100'} text-green-400 shrink-0">
                    <i class="bx bx-check"></i>
                </button>
                <button onclick="deleteOption(${questionIndex}, '${optionKey}')"
                        class="w-9 h-9 flex items-center justify-center shrink-0 bg-slate-50">
                    <i class="bx bx-x"></i>
                </button>
            </div>
        </div>`;
    });
    return optionsHtml;
}

// Update the question text
function updateQuestion(index, value) {
    questions[index].text = value;
}

// Update the option text
function updateOption(questionIndex, optionKey, value) {
    questions[questionIndex].options[optionKey] = value;
}

// Set the correct option for the question
function updateCorrectOption(questionIndex, optionKey) {
    questions[questionIndex].correct_option = optionKey;
    showQuestions(); // Re-render to update the correct option visually
}

// Add an option to the question
function addOption(questionIndex) {
    const optionKey = optionLetters[Object.keys(questions[questionIndex].options).length]; // A, B, C...
    questions[questionIndex].options[optionKey] = ""; // Empty option
    showQuestions(); // Re-render to show new option
}

// Remove a question
function deleteQuestion(index) {
    questions.splice(index, 1); // Remove question at given index
    showQuestions(); // Re-render questions
}

// Remove a specific option from a question
function deleteOption(questionIndex, optionKey) {
    delete questions[questionIndex].options[optionKey]; // Remove option by key
    showQuestions(); // Re-render to reflect changes
}



