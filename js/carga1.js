const letters = document.querySelectorAll('span');

const reverseLetters = [].slice.call(letters, 0).reverse()

// console.log(reverseLetters)

for(let i = 0; i < reverseLetters.length-1; i++){
  reverseLetters[i].style.animation = `showLetter ${(8)}s linear ${0.2+(1/3* i)}s infinite`;
}
