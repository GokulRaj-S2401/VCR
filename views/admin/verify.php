<?php

include('../../model/databaseConnection.php');

$qry = "SELECT * FROM users WHERE user_role='NONE'";

$result = $connection->query($qry);



?>

<div class="tableContainer">
    <table >
        <thead>
            <tr>
                <th>S.No</th>
                <th>Staff ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $i =1;
        if($result->num_rows >=1){
            while($row=$result->fetch_assoc()){
                echo"
                            <tr class='vList' id='".$row['user_id']."' >
                                <td align='center' > $i </td>
                                <td align='center' >". $row['user_id'] ."</td>
                                <td>". $row['user_name'] ."</td>
                                <td>". $row['user_email'] ."</td>                                
                            </tr>
                            <tr class='rowcollapse' id='".$row['user_id']."hide' >
                                <td colspan='4' >
                                <label>Department:  <label>
                                    <select id='department' >
                                        <option value='NONE' > None </option>
                                        <option value='BBA' >BBA</option>
                                        <option value='COMPUTER_SCIENCE' >Computer Science</option>
                                        <option value='B.Com' >B.Com</option>
                                        <option value='BA.Eng' >BA.Eng</option>
                                        <option value='Bsc.Maths' >Bsc.Maths</option>
                                    </select>
                                    <label>Role:  <label>
                                    <select id='Role' >
                                        <option value='None' > None </option>
                                        <option value='AST_PROFESSOR' >AST PROFESSOR</option>
                                        <option value='HOD' >HOD</option>
                                        <option value='OFFICE_STAFF' >OFFICE STAFF</option>
                                        <option value='LAB_STAFF' >LAB STAFF</option>
                                    </select>
                                    <button id='verify' > verify </button>
                                </td>
                            </tr>
                ";
                $i++;
            }
        }
        ?>  
        </tbody>
    </table>
</div>