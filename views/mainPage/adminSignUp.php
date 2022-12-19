<div class="superAdmin">
        <div class="box">
            <div align="center" >
                <h1>Admin Sign Up</h1>
            </div>  
            <label for="asname"> Name  </label>
            <input type="text" id="asname">
            <span class="asnameerr err" >Enter valid user name</span>
            <label for="asemail">Email  </label>
            <input type="text" id="asemail">
            <span class="asemailerr err" >Enter valid email</span>
            <label for="aspassword">Password  </label>
            <input type="password" id="aspassword" >
            <span class="aspassworderr err" >password should be atleast 6 character</span>
            <label for="ascpassword">Confirm Password  </label>
            <input type="password" id="ascpassword" >
            <span class="ascpassworderr err" >password is must be same</span>
            <label for="assecret">Secret Key  </label>
            <input type="password" id="assecret" >
            <span class="assecreterr err" > Invalid Secret Key </span>
            <p class="already_exist" style="color: red;" > Email already exist </p>
            <div class="flexBtn">
                <button id="superAdminAuth" >Sign Up</button> 
            </div>
        </div>
    </div>
    <div class="signConfirm">
        <p> <span class="confirmMsg" >  </span> <a class="ok" href="#">Ok</a> </p>
    </div>