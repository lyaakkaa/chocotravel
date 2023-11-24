const form = document.querySelector("#credit-card");

const cardNumber = document.querySelector("#card-number");
const cardHolder = document.querySelector("#name-text");
const cardExpiration = document.querySelector("#valid-thru-text");
const cardCVV = document.querySelector("#cvv-text");

const cardNumberText = document.querySelector(".number-vl");
const cardHolderText = document.querySelector(".name-vl");
const cardExpirationText = document.querySelector(".expiration-vl");
const cardCVVText = document.querySelector(".cvv-vl");

cardNumber.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        cardNumberText.innerText = "1234 5678 9101 1121";
    } else {
        const valuesOfInput = e.target.value.replaceAll(" ", "");

        if (e.target.value.length > 14) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3 $4");
            cardNumberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3 $4");
        } else if (e.target.value.length > 9) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3");
            cardNumberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3");
        } else if (e.target.value.length > 4) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{0,4})/, "$1 $2");
            cardNumberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{0,4})/, "$1 $2");
        } else {
            cardNumberText.innerHTML = valuesOfInput
        }
    }
})

cardHolder.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        cardHolderText.innerHTML = "NOAH JACOB";
    } else {
        cardHolderText.innerHTML = e.target.value.toUpperCase();
    }
})

cardExpiration.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        cardExpirationText.innerHTML = "02/40";
    } else {
        const valuesOfInput = e.target.value.replace("/", "");

        if (e.target.value.length > 2) {
            e.target.value = valuesOfInput.replace(/^(\d{2})(\d{0,2})/, "$1/$2");
            cardExpirationText.innerHTML = valuesOfInput.replace(/^(\d{2})(\d{0,2})/, "$1/$2");
        } else {
            cardExpirationText.innerHTML = valuesOfInput;
        }
    }
})

cardCVV.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        cardCVVText.innerHTML = "123";
    } else {
        cardCVVText.innerHTML = e.target.value;
    }
})






// Устанавливаем начальное время при загрузке страницы
var startTime = new Date();

// Устанавливаем таймер для проверки времени каждые 60 секунд (60000 миллисекунд)
var timer = setInterval(function() {
    // Текущее время
    var currentTime = new Date();

    // Разница во времени (в миллисекундах)
    var timeElapsed = currentTime - startTime;

    // Если прошло более 1 минуты (60 000 миллисекунд)
    if (timeElapsed > 30000) {
        // Сбрасываем данные в форме
        document.getElementById('card-number').value = '';
        document.getElementById('name-text').value = '';
        document.getElementById('valid-thru-text').value = '';
        document.getElementById('cvv-text').value = '';

        // Останавливаем таймер
        clearInterval(timer);

        // Выводим сообщение
        alert('Прошло более 1 минуты. Ваши данные были сброшены.');
    }
}, 60000); // Таймер проверяет каждые 60 секунд

