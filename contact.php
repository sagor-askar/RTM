<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contact Us</title>
  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
      text-align: center;
      background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url("image/back.jpg");
      background-size: cover;
      background-position: center;
      font-family: sans-serif;
    }
    .contact-title {
      margin-top: 100px;
      color: #fff;
      text-transform: uppercase;
      transition: all 4s ease-in-out;
    }
    .contact-title h1 {
      font-size: 32px;
      line-height: 10px;
    }
    .form-control {
      width: 600px;
      background: transparent;
      border: none;
      outline: none;
      border-bottom: 1px solid gray;
      color: #fff;
      font-size: 18px;
      margin-bottom: 16px;
    }
    .input {
      height: 45px;
    }
    form .submit {
      background: #ff5722;
      border-color: transparent;
      color: #fff;
      font-size: 20px;
      font-weight: bold;
      letter-spacing: 2px;
      height: 50px;
      margin-top: 20px;
    }
    form .submit:hover {
      background-color: #f44336;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="contact-title">
    <h1>Contact Us</h1> 
  </div>

  <div class="contact-form">
    <form id="contact-form" method="post" action="">
      <input type="name" name="name" class="form-control" placeholder="Your name" required> <br>
      <input type="email" name="email" class="form-control" placeholder="Your email"><br>
      <textarea name="message" class="form-control" placeholder="Message" row="4"></textarea><br>
      <input type="submit" class="form-control submit" value="SEND MESSAGE">
    </form>
  </div>

</body>
</html>

<!-- just design er kaj ta kore rekhechi, baki ta pore sir er sathe kotha bole ses kore nibo -->