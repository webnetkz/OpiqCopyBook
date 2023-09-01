const sound = new Audio('/public/audios/fail/fail.mp3');
const sound1 = new Audio('/public/audios/type/1.mp3');
const sound2 = new Audio('/public/audios/type/2.mp3');
const sound3 = new Audio('/public/audios/type/3.mp3');
const sound4 = new Audio('/public/audios/type/4.mp3');

function playSound(sound) {
    sound.currentTime = 0; // Сбросить текущее время звука
    sound.play();
}

// Создаем массив со звуками
const sounds = [sound1, sound2, sound3, sound4];

// Функция для воспроизведения случайного звука
function playRandomSound() {
  const randomIndex = Math.floor(Math.random() * sounds.length);
  const randomSound = sounds[randomIndex];
  playSound(randomSound);
}

