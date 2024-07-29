/* Hello World Landing Page */
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


