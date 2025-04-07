document.getElementById('logoutForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const errorElement = document.getElementById('error-message');
    
    if (!name || !email) {
        errorElement.textContent = 'Please fill in all fields';
        errorElement.classList.remove('hidden');
        return;
    }
    
    if (!/^\S+@\S+\.\S+$/.test(email)) {
        errorElement.textContent = 'Please enter a valid email address';
        errorElement.classList.remove('hidden');
        return;
    }
    
    window.location.href = 'success.html';
});