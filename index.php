<?php
   session_start();
   if(isset($_SESSION['unique_id'])){
    header("location: users.php");
   }
?>

<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype = "multipart/form-data" >
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label >First Name</label>
                        <input type="text" placeholder="First name" name="fname" required>
                    </div>
                    <div class="field input">
                        <label >Last Name</label>
                        <input type="text" placeholder="Last name" name="lname">
                    </div>
                </div>
                    <div class="field input">
                        <label >Email</label>
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div class="field input">
                        <label >Password</label>
                        <input type="password" placeholder="Password" name="password">
                        <i class="fa-solid fa-eye-slash" ></i>
                    </div>
                    <div class="field image">
                        <label >Select image</label>
                        <input type="file" placeholder="Choose file" name="image" >
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat" >
                    </div>
            </form>
            <div class="link">Already signed up ? <a href="login.php">Login Now</a></div>
        </section>
    </div>

    <!-- js code for password -->
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/sign.js"></script>

</body>
</html>