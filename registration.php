<?php
    session_start();
    include('includes/header.php');
    
    // if ((empty($_SESSION['username']) && $_SESSION['logged_in'] == false)) {
    //     // user is not logged in, send them to login page
    //     header('Location: login.php');
    // }
?>

<form name="myform" method="POST" onsubmit="return formSubmit();" action="process.php">
        <div class="rightpanel">
            <h2><u>Registration Information</u></h2>
            <!--Name Input-->
            <div class="divinput">
                <label for="txtname" class="label">Student Name :</label>
                <input type="text" id="txtname" placeholder="Name" name="name">
            </div>
            <!-- <label id="nameerror" name="nameerror" class="error"></label> -->

            
            <div class="divinput">
                <label for="txtemail" class="label">Student Email :</label>
                <input type="text" id="txtemail" placeholder="abc@gmail.com" name="email">
            </div>
            <!-- <label id="phoneerror" class="error"></label> -->

            <!--Password Input--> 
            <div class="divinput">
                <label for="txtpassword" class="label">Password :</label>
                <input type="password" id="txtpassword" placeholder="" name="password">
            </div>

            <!--College Name Input-->
            <div class="divinput">
                <label for="txtcollegename" class="label">College Name :</label>
                <input type="text" id="txtcollegename" placeholder="" name="collegename">
            </div>

            <!--College Address Input-->
            <div class="divinput">
                <label for="txtaddress" class="label">College Address :</label>
                <input type="text" id="txtaddress" placeholder="" name="address">
            </div>

            <!--City Input-->
            <div class="divinput">
                <label for="txtcity" class="label">City :</label>
                <input type="text" id="txtcity" placeholder="City" name="city">
            </div>

            <!--Province-->
            <div class="divinput">
                <label for="province" class="label">Province :</label>
                <select id="province" name="province">
                    <option value="">--Select--</option>
                    <option value="ON">Ontario</option>
                    <option value="QC">Quebec</option>
                    <option value="BC">British Columbia</option>
                </select>
            </div>

             <!--Project Title Input-->
             <div class="divinput">
                <label for="txtprojecttitle" class="label">Project Title :</label>
                <input type="text" id="txtprojecttitle" placeholder="Project title" name="projecttitle">
            </div>

            <!-- Submit Button -->
            <div class="divbutton">
                <input type="submit" id="buttonsubmit" value="Register" class="btn">
            </div>
        </div>
    </section>
</form>
</main>


<?php
    include('includes/footer.php');
?>