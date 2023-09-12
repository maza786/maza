document.addEventListener("DOMContentLoaded", function() {
    const hamburger = document.querySelector(".hamburger");
    const dropdownContent = document.querySelector(".dropdown-content");

    hamburger.addEventListener("click", function() {
        dropdownContent.classList.toggle("show");
    });
});


function toggleFAQ(index) {
    var faqItem = document.getElementById('faq-' + index);
    faqItem.classList.toggle('active');
}