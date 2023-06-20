function login() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
  
    if (username === 'BANK' && password === '123456') {
     
      window.location.href = 'index.php';
    } else {
      
      alert('Invalid username or password. Please try again.');
    }
  }
  