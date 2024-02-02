<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Form</title>
  <style>
    
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.navigation {
    display: flex;
    width: 100%;
    height: 80px;
    border: solid 1px black;
    justify-content: space-around;
    background-color: black;
}

.navigation ul {
    display: flex;
    gap: 20px;
}

.navigation ul,
li,
a {
    color: white;
    text-decoration: none;
    list-style: none;
    text-transform: uppercase;
    font-size: 16px;
    transition: ease-in-out 1ms;
    margin-top: 13px;
}

.navigation ul,
li,
a:hover {
    color: red;
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.text1 {
    text-align: center;
    background-color: #222;
    color: #fff;
    padding: 12px;
    margin-bottom: 10px;
}

h3 {
    color: white;
    margin-top: 25px;
}

img {
    margin-top: 8px;
    width: 60px;
    height: 60px;
}

body {
    font-family: Arial, sans-serif;
}

form {
    max-width: 400px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-bottom: 10px;
}

button:hover {
    background-color: #45a049;
}

footer {
    background-color: #222;
    color: #fff;
    padding: 30px 0;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    padding: 0 50px;
}

.footer-links, .social-media, .contact-info {
    text-align: left;
}

h2 {
    font-size: 18px;
    margin-bottom: 10px;
}

ul {
    list-style-type: none;
    padding: 0;
}

.footer-bottom {
    margin-top: 10px;
    background-color: #111;
    padding: 20px 0;
    text-align: center;
}

/* Media Queries */

@media only screen and (max-width: 768px) {
    .navigation ul {
        gap: 10px;
    }

    .container {
        padding: 10px;
    }

    .img1 {
        width: 90px;
        height: 90px;
    }
}

@media only screen and (max-width: 576px) {
    .navigation ul {
        flex-direction: column;
    }

    .navigation ul li {
        margin-top: 10px;
    }

    .navigation ul li:last-child {
        margin-bottom: 10px;
    }

    .container {
        padding: 5px;
    }

    .img1 {
        width: 70px;
        height: 70px;
    }

    form {
        width: 90%;
    }
}

  </style>
</head>
<body>
    <header>
        <nav class="navigation">
            <img src="data:image/jpeg;base64,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"
                alt="">
                <h3><a href="#">Bad News Eagles</a></h3>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="Lojtaret.html">Lojtaret</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="LogIn.html">Log-in</a></li>
            </ul>
        </nav>
    </header>
    <h3 class="text1">Sheno posht te dhenat e juaja sipas kerkesave te me poshtme</h3>

  <form id="orderForm">
    <label for="fullName">Full Name:</label>
    <input type="text" id="fullName" name="fullName" required>

    <label for="postalCode">Postal Code:</label>
    <input type="text" id="postalCode" name="postalCode" required>

    <label for="mobileNumber">Mobile Number:</label>
    <input type="tel" id="mobileNumber" name="mobileNumber" required>

    <label for="Adress">Adress:</label>
    <input type="text" id="Adress" name="Adress" required>

    <label for="Email">Email:</label>
    <input type="email" id="email" name="email" required>

    <button type="button" onclick="submitForm()">Submit Order</button>
  </form>

  <footer>
    <div class="footer-container">
        <div class="footer-links">
            <h2>Sponsors</h2>
            <ul>
                <li><a href="#">Hellcase</a></li>
                <li><a href="">MadTech</a></li>
                <li><a href="#">Hummels</a></li>
                <li><a href="#">Gjirafa</a></li>
                <li><a href="#">Sky Broadband</a></li>
            </ul>
        </div>
        <div class="social-media">
            <h2>Social Media</h2>
            <ul>
                <li><a href="https://www.facebook.com/BadNewsEagles"><img src="https://www.unipile.com/wp-content/uploads/2022/06/logo-facebook-noir.png" alt=""></a></li>
                <li><a href="https://twitter.com/_badnewseagles"><img src="https://seeklogo.com/images/T/twitter-icon-circle-black-logo-35827D553B-seeklogo.com.png" alt=""></a></li>
               
            </ul>
        </div>
        <div class="contact-info">
            <h2>Contact Info</h2>
            <ul>
                <li>Email: info@badnews.com</li>
                <li>Phone: +383 43 730 558</li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2022 Bad News Eagles. All rights reserved.</p>
    </div>
</footer>

  <script>
    function submitForm() {
      var fullName = document.getElementById("fullName").value;
      var postalCode = document.getElementById("postalCode").value;
      var mobileNumber = document.getElementById("mobileNumber").value;
      var Adress=document.getElementById("Adress").value;
      var email=document.getElementById("email").value;

      
      alert("Thank You for your order!\nOrder is in process now\n\nFull Name: " + fullName + "\nPostal Code: " + postalCode + "\nMobile Number: " + mobileNumber +"\nAdress: "+ Adress +"\nEmail: "+email);
    }
  </script>

</body>
</html>
