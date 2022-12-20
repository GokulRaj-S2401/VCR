<?php
    if(!isset($_COOKIE['user'])){
        header('Location:/VCR/index.php?menu=about');
    }
    $userData = json_decode($_COOKIE['user']);
?>


<div class="classContainer">
    <div class="class" align="right" > 
        <button id="createClass" > create class </button>
    </div>
</div>
<div class="overlay">
    
</div>
