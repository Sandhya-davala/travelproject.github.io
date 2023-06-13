<style>
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 70vh;
  background-color: grey;
}

.contact-form {
  width: 500px; 
  height: 400px; 
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  padding: 20px;
  background-color: lightseagreen;
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
  width: 100%; /* Makes the input boxes fill the available width */
  height: 40px; 
  padding: 5px;
  margin-bottom: 10px;
}



</style>
<h2 class="text-center"> CONTACT US</h2>
<div class="container">
  <div class="contact-form">
    <h2 class="text-center">Join US</h2>
    <form action="" method="post">
      <input type="text" name="Name" id="name" placeholder="Enter your name." required><br>
      <input type="text" name="Mobile" id="mobile" placeholder="Mobile Number" required><br>
      <input type="email" name="Email" id="email" placeholder="Email Id" required><br>
      <input type="text" name="Age" id="age" placeholder="Enter Age"><br>
      <input type="text" name="Gender" id="gender" placeholder="Enter Gender"><br>
      <textarea name="Comment" id="message" cols="22" rows="2"></textarea><br>
      <button type="submit" id="submitBtn" style="display: none;">Submit</button>
      <button type="reset">Reset</button>
    </form>
  </div>
</div>
