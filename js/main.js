// Hello World Landing Page
const text = "HELLO, WORLD! ";
let index = 0;

function typeText() {
    if (index < text.length) {
        document.getElementById("typed-text").innerHTML += text.charAt(index);
        index++;
        setTimeout(typeText, 150);
    }
}

window.onload = () => {
    typeText();
};

// Toast Submit button
const toastTrigger1 = document.getElementById('message-toast');
const toastLiveExample1 = document.getElementById('liveToast');

if (toastTrigger1) {
  const toastInstance1 = bootstrap.Toast.getOrCreateInstance(toastLiveExample1);
  toastTrigger1.addEventListener('click', (event) => {
    event.preventDefault();
    toastInstance1.show();
  });
}

// Toast Send Message button
const toastTrigger2 = document.getElementById('message2-toast');
const toastLiveExample2 = document.getElementById('liveToast2');

if (toastTrigger2) {
  const toastInstance2 = bootstrap.Toast.getOrCreateInstance(toastLiveExample2);
  toastTrigger2.addEventListener('click', (event) => {
    event.preventDefault();
    toastInstance2.show();
  });
}

