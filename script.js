function scrollToPortfolio() {
    document.getElementById('portfolio').scrollIntoView({ behavior: 'smooth' });
}


document.addEventListener("DOMContentLoaded", function() {
    const textPlaceholder = document.getElementById("text-placeholder");
    const roles = ["an Engineer", "a Researcher", "a Teacher", "DIY guy"];
    let currentIndex = 0;

    function updateText() {
        textPlaceholder.textContent = roles[currentIndex];
        currentIndex = (currentIndex + 1) % roles.length;
    }

    setInterval(updateText, 1000); // Change text every 1 seconds
});


