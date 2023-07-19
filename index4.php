<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style4.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

 
    <header>
        <nav>
            <div class="logo">
         <h1>LOGO</h1>
            <span id="btn"><img src="/img/category.png" alt="" width="50px"></span>
            </div>
   
            <ul id="lists">
                <li>
                    <a href="#home">
                        Home
                    </a>
                </li>
                 <li>
                    <a href="#about">
                        About
                    </a>
                </li>
                 <li>
                    <a href="#service">
                        Service
                    </a>
                </li>
                 <li>
                    <a href="#contact">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>
    </header>



        <div id="home" class="im">
        <img src="img/h.jpg"  width="100%">
    </div> 

     <br id="about"> <br> <br>
    <div class="ab" >
       
        <h1 >About</h1>
    
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo quo et alias quaerat magni neque non veniam consequuntur mollitia consequatur, autem sed voluptates itaque distinctio dolore maiores totam. Labore accusamus quae vero ipsum officiis, omnis saepe modi aliquid dolore magnam consectetur, enim tempora sint suscipit culpa explicabo laborum, voluptas inventore dolorum? Nihil voluptates voluptatibus dolores corrupti dicta. Dolores, vitae aliquid.</p> <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quia modi dolores ut! Saepe libero recusandae atque. Iste, ipsum recusandae. Consequatur, consectetur qui porro sed, exercitationem doloremque ipsam corrupti laudantium minima blanditiis accusamus. Totam optio iste, laboriosam quasi dolores porro. Repellat cupiditate architecto eos dolore labore ratione iste aperiam, magnam quia exercitationem ut repudiandae inventore!  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod iste at optio laborum inventore voluptas aperiam! Debitis, quae facere quas error excepturi temporibus veniam voluptatem aperiam sed unde, eaque eveniet eos, reiciendis sunt ullam voluptates fugiat sequi rerum molestias similique? Exercitationem sequi enim numquam! Ipsa fuga sequi vel dolorum officia excepturi, tempora delectus. Quae modi vero possimus magnam mollitia, explicabo voluptates laborum recusandae magni ut sapiente iste sint tenetur blanditiis!</p>
    </div>

    <br id="service"> <br> <br> <br>
    <div class="hs" >  
        <h1>Service</h1>
    <div class="service">
      
        <div class="b">
            <img src="img/s.jpg" alt="" width="100%">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, voluptatem quis? Tenetur, ratione.</p>
        </div>
          <div class="b">
            <img src="img/s.jpg" alt="" width="100%">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur exercitationem consequatur </p>
        </div>
          <div class="b">
            <img src="img/s.jpg" alt="" width="100%">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, repellat. Lorem ipsum dolor sit amet.</p>
        </div>
          <div class="b">
            <img src="img/s.jpg" alt="" width="100%">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur et molestiae libero, est officiis dolores?</p>
        </div>

    </div>

</div>

  <br id="contact"> <br> <br> <br>
    <div >
        <form action="insert.php" name="myform" method="POST"  > 
            
            <h1>Contact Form</h1>
            <label for="name">FullName</label>
            <input type="text" name="name" id="name" placeholder="nick ...." >
             <span id="nameError" class="error"></span><br>
            <label for="em">Email</label>
            <input type="email" name="email" id="email" placeholder="example@gmail.com" >
             <span id="emailError" class="error"></span><br> 
            <label for="te">Comment</label>
            <textarea name="te" id="text" cols="30" rows="10"  class="tex" placeholder="Write your message here..."  ></textarea> <br>
                <span id="textError" class="error"></span><br>
           <input type="submit" value="send" name="submit" >

           <input type="submit" value="retrieve" name="retr" style="background-color:yellow ; font-size:20px ; color:black" >

           
        </form>

    </div>


    <script>
 

 var btn =document.getElementById("btn");
        var lists = document.getElementById("lists")
        
        btn.onclick = function(){

             if ( lists.style.height === "100%") {
             lists.style.height = "0px";
                     } else {
          lists.style.height = "100%";
             }

       }


function validateForm(event) {
      event.preventDefault(); // Prevent form submission

      // Clear previous error messages
      clearErrors();

      // Get form inputs
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var text = document.getElementById('text').value;

      // Validate name
      if (name === '') {
        document.getElementById('nameError').textContent = 'Name is required';
      }

      // Validate email
      if (email === '') {
        document.getElementById('emailError').textContent = 'Email is required';
      } else if (!validateEmail(email)) {
        document.getElementById('emailError').textContent = 'Invalid email format';
      }

       // Validate text
      if (text === '') {
        document.getElementById('textError').textContent = 'text is required';
      } else if (text.length < 8) {
        document.getElementById('textError').textContent = 'message should be at least 8 characters long';
      }

      // If there are no errors, submit the form
      if (!nameError && !emailError && !textError) {
        document.getElementById('myForm').submit();

        

      }
    }

    function clearErrors() {
      document.getElementById('nameError').textContent = '';
      document.getElementById('emailError').textContent = '';
      document.getElementById('textError').textContent = '';
    }

    function validateEmail(email) {
      // A simple email validation regex
      var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return re.test(email);
    }

    </script>
</body>
<footer>
    <span>&copy; &copy; copy right 2023.</span>
      
    </footer>
</html>

