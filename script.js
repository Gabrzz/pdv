document.getElementById('scroll').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('#checkout').scrollIntoView({
        behavior: 'smooth'
    });
});