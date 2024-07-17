document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let username = document.getElementById('username').value.trim();
    let password = document.getElementById('password').value.trim();
    let errorElement = document.getElementById('error');

    if (username === '' || password === '') {
        errorElement.textContent = 'Παρακαλώ συμπληρώστε όλα τα πεδία.';
    } else {
        errorElement.textContent = '';
        alert('Επιτυχής σύνδεση');
       
    }
});
