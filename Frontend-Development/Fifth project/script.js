let slideData = [
    {   backgroundColor: 'purple',
        text: 'This is the fourth slide',
        textColor: 'white'
    },
    {
        backgroundColor: 'blue',
        text: 'This is the fifth slide',
        textColor: 'yellow'
    }
];

console.log(slideData)

const fulldiv = document.querySelector('.slider');
let slides = document.querySelectorAll('.slider > div'); // Initially selecting all slides
let currentSlide = 0;
const btn1 = document.getElementById('btn1');
const btn2 = document.getElementById('btn2');
const btn3 = document.getElementById('btn3');

btn2.addEventListener('click', function() {
    if(currentSlide < slides.length - 1) {
        currentSlide++;
    } else {
        currentSlide = 0;
    }
    fulldiv.style.transform = `translateX(-${currentSlide * 100}vw)`;
});

btn1.addEventListener('click', function() {
    if(currentSlide > 0) {
        currentSlide--;
    } else {
        currentSlide = slides.length - 1;
    }
    fulldiv.style.transform = `translateX(-${currentSlide * 100}vw)`;
});

let currentDataIndex = 0; // To track the current slide to be added

btn3.addEventListener('click', function() {
     if (slideData.length > 0) {
        const newSlide = document.createElement('div');
        newSlide.classList.add('slide'); // General class for slides
        newSlide.style.backgroundColor = slideData[0].backgroundColor;
        newSlide.style.minWidth = '100vw';
        newSlide.style.minHeight = '40vh';
        newSlide.innerHTML = `<h1 style="text-align: center; font-size: 80px; color: ${slideData[0].textColor};">
                                ${slideData[0].text}
                            </h1>`;
        
        fulldiv.appendChild(newSlide); // Append the new slide
        slides = document.querySelectorAll('.slider > div'); // Update the NodeList of slides
        slideData.splice(0, 1);
        alert(`added slides to add! and slide length is ${slideData.length}`);

    } else {
        alert(`No more slides to add! and slide length is ${slideData.length}`);
    }
});