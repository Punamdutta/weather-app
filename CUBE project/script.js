const colors = ["red", "green", "blue", "yellow", "purple"];
let targetColor = generateRandomColor();

function generateRandomColor() {
    const randomIndex = Math.floor(Math.random() * colors.length);
    return colors[randomIndex];
}

function checkGuess() {
    const guessInput = document.getElementById("guessInput");
    const userGuess = guessInput.value.toLowerCase();
    const result = document.getElementById("result");
    const cube = document.getElementById("cube");

    if (colors.includes(userGuess)) {
        if (userGuess === targetColor) {
            result.textContent = "Congratulations! You guessed the correct color.";
            cube.style.backgroundColor = userGuess;
        } else {
            result.textContent = "Wrong guess. Try again!";
        }
    } else {
        result.textContent = "Invalid color. Please enter a valid color.";
    }

    guessInput.value = ""; // Clear input after guess
}

// Initialize the cube color
document.getElementById("cube").style.backgroundColor = targetColor;
