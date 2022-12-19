<div class="signup">
        <div class="box">
            <div align="center" >
                <h1>Sign Up</h1>
            </div>  
            <label for="siuname">Name  </label>
            <input type="text" id="siuname" tabindex="1" style="text-transform: uppercase;" >
            <span class="err sinameerr">Enter valid name</span>
            <label for="siuemail">Email  </label>
            <input type="text" tabindex="2" id="siuemail">
            <span class="err siemailErr"> Enter valid email </span>
            <label for="siupassword">Password  </label>
            <input type="password" tabindex="3" id="siupassword" >
            <span class="err sipassErr"> Password must be 6 character or more </span>
            <label for="scpassword">Confirm Password  </label>
            <input type="password" tabindex="4" id="scpassword" >
            <span class="err cpassErr ">Password must be same</span>
            <button tabindex="5" id="signUpSubmission" >Sign Up</button> 
            <p class="already_exist" style="color: red;" > Email already exist </p>
        </div>
    </div>
    <div class="signConfirm">
        <p> <span class="confirmMsg" >  </span> <a class="ok" href="#">Ok</a> </p>
    </div>