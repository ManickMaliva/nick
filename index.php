<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <div class="header">
            <p>EVENT REGISTRATION FORM</p>
        </div>
        <form  id="registration-form" action="con.php" method="post" > 
            <div class="form-group1">
                <div>
                    <p> <b> Name</b></p>
                </div>

                <div> <input type="text" id="first-name" name="first_name" required> <br>
                    <small>First name</small>
                </div>
                <div>
                    <input type="text" id="last-name" name="last_name" required> <br>
                    <small>Last name</small>
                </div>


            </div>

            <div class="form-group2">
                <label for="company"> <b>Company</b> </label>
                <input type="text" id="company" name="company" required>
            </div>
            <div class="form-group2">
                <label for="email"> <b>Email</b></label>
                <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
            </div>
            <div class="form-group3">
                <label for="phone"> <b>Phone</b></label>
                <div>
                    <input type="tel1" id="area-code" name="area" required> <br>
                    <small>Area code</small>
                </div>
                <div>
                    <input type="tel" id="phone-number" name="phone" required> <br>
                    <small>Phone Number</small>
                </div>

            </div>
            <div class="form-group2">
                <label for="subject"> <b>Subject</b></label>
                <select id="subject" name="subject" required>
                    <option value="">Choose option</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                </select>
            </div>
            <div class="form-group">
                <label style="margin-bottom: 20px; ">Are you an existing customer?</label>
                <br>
                <input type="radio" name="r1" id="yes" class="checkbox-round"> <label for="">Yes</label>
                <input type="radio" name="r1" id="no" class="checkbox-round"> <label for="">No</label>


            </div>
            <div class="form-group">

                <input type="submit"  value="Register">
            </div>

        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>