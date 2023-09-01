let textBlock = document.querySelector('#text');
const content = 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.';
const contentCompleted = content.split('');

contentCompleted.forEach((char) => {
    let newElement = document.createElement('span');
    newElement.classList.add('char');
    newElement.innerText = char;
    
    textBlock.appendChild(newElement);
});

document.addEventListener('keydown', function(event) {
    const char = document.querySelector('span.char');
    const charText = char.innerText.toLowerCase();

    if(charText == event.key) {
        char.classList.remove('char');
        char.classList.add('char-completed');
    } else {
        document.body.classList.add('lostAttempt');
        setTimeout(() => {
            document.body.classList.remove('lostAttempt');
        }, 100);
    }
});