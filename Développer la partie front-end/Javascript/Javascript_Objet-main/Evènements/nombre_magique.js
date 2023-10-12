let randomNumber = Math.floor(Math.random() * 256) + 1;
const guesses = document.querySelector('.guesses');
const lastResult = document.querySelector('.lastResult');
const lowOrHi = document.querySelector('.lowOrHi');
const guessSubmit = document.querySelector('.guessSubmit');
const guessField = document.querySelector('.guessField');
let guessCount = 1;
let resetButton;

console.log(randomNumber);

function checkGuess() {
  let userGuess = Number(guessField.value);

  if (userGuess === randomNumber) {
    alert('Congratulations! You got it right!');
  } else {
    if(userGuess < randomNumber) {
      alert('Last guess was too low!');
    } else if(userGuess > randomNumber) {
      alert('Last guess was too high!');
    }
  }
  guessCount++;
  guessField.value = '';
  guessField.focus();
}
guessSubmit.addEventListener('click', checkGuess);