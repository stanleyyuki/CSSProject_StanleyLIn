<h1> Using POST </h1>

<form action="handleForm.php" method="POST">

    <label for="username"> <b>Username: </b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <br>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
    <br>
    <label for="passw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passw" required>
    <br>
    
    <label for="jobs"><b>Choose a Job:</b></label>

    <select name="jobs">
    <option value="teacher">Teacher</option>
    <option value="farmer">Farmer</option>
    <option value="lawyer">Lawyer</option>
    </select>
    <br>

    <input type="radio"  name="radio" value="male">
    <label for="radio">Male</label><br>
    <input type="radio" name="radio" value="female">
    <label for="radio">Female</label><br>

    <input type="checkbox"  name="terms" value="Agree" required>
    <label for="terms">Terms & Agreement</label><br>

    <button type="submit">Sign Up</button>
</form>


<br> <br> <br>
<h1> Using GET </h1>

<form action="getForm.php" method="get">

    <label for="username"> <b>Username: </b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <br>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
    <br>
    <label for="passw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passw" required>
    <br>
    
    <label for="jobs"><b>Choose a Job:</b></label>

    <select name="jobs">
    <option value="teacher">Teacher</option>
    <option value="farmer">Farmer</option>
    <option value="lawyer">Lawyer</option>
    </select>
    <br>

    <input type="radio"  name="male" >
    <label for="male">Male</label><br>
    <input type="radio" name="female" >
    <label for="female">Female</label><br>

    <br>
    <input type="checkbox"  name="terms" required>
    <label for="terms">Terms & Agreement</label><br>

   
    <button type="submit">Sign Up</button>
</form>