const form = document.querySelector("form")

form.addEventListener('submit', e => {
    if (!form.checkValidity()) {
        e.preventDefault()
    }
    
    form.classList.add('was-validated')
})

const text = "HELLO WORLD!";
let index = 0;

function typeText() {
    if (index < text.length) {
        document.getElementById("typed-text").innerHTML += text.charAt(index);
        index++;
        setTimeout(typeText, 150); // Adjust the speed here
    }
}

// Start the typing effect when the window loads
window.onload = () => {
    typeText();
};