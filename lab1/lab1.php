<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2>Application name: AAST_BIS class registration</h2>
    <span>* Required field.</span>
    <br>
    <br>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <table>
            <tbody>
                <tr>
                    <td><label for="name">Name: </label></td>
                    <td><input type="text" name="name" value="<?php if(!empty($_POST["name"]) && !empty($_POST["email"])  && isset($_POST["gender"]) && isset($_POST["agree"])  ){
                                echo "";
                            }elseif(isset($_POST["submit"])){
                                if(isset($_POST["name"]))
                            {
                               if(!empty($_POST["name"])){
                                echo $_POST["name"];
                               }
                            }
                            } ?>">


                        <span> * </span>
                        <?php  
if(isset($_POST["submit"])){
    if(empty($_POST["name"]))
{
    echo "<span>Name is required.</span>";
}
}
?>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email: </label></td>
                    <td><input type="email" name="email" value="<?php if(!empty($_POST["name"]) && !empty($_POST["email"])  && isset($_POST["gender"]) && isset($_POST["agree"])  ){
    echo "";
}elseif(isset($_POST["submit"])){
    if(isset($_POST["email"])){
   if(!empty($_POST["email"])){
    echo $_POST["email"];
   }
}
}?>">

                        <span> * </span> <?php  
if(isset($_POST["submit"])){
    if(empty($_POST["email"]))
{
    echo "<span>Email is required.</span>";
}
}
?>
                    </td>

                </tr>
                <tr>


                    <td><label for="group">Group #:</label> </td>
                    <td><input type="number" name="group" value="<?php if(!empty($_POST["name"]) && !empty($_POST["email"])  && isset($_POST["gender"]) && isset($_POST["agree"])  ){
    echo "";
}elseif(isset($_POST["submit"])){
    if(isset($_POST["group"]))
{
   if(!empty($_POST["group"])){
    echo $_POST["group"];
   }
}
} ?>"></td>

                </tr>
                <tr>
                    <td><label for="details">Class details: </label> </td>
                    <td> <textarea name="details" id="details" cols="30" rows="5"><?php if(!empty($_POST["name"]) && !empty($_POST["email"])  && isset($_POST["gender"]) && isset($_POST["agree"])  ){
    echo "";
}elseif(isset($_POST["submit"])){
    if(isset($_POST["details"]))
{
   if(!empty($_POST["details"])){
    echo $_POST["details"];
   }
}
} ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td>
                        <input type="radio" name="gender" id="female" value="Female" <?php if(!empty($_POST["name"]) && !empty($_POST["email"])  && isset($_POST["gender"]) && isset($_POST["agree"])  ){
    echo "";
}elseif(isset($_POST["submit"])){
    if(isset($_POST["gender"])){
        if(!empty($_POST["gender"]) && $_POST["gender"] == "Female"){
            echo "checked";
        }
    }
    } ?>>
                        <label for="female"> Female</label>
                        <input type="radio" name="gender" id="male" value="Male" <?php if(!empty($_POST["name"]) && !empty($_POST["email"])  && isset($_POST["gender"]) && isset($_POST["agree"])  ){
    echo "";
}elseif(isset($_POST["submit"])){
    if(isset($_POST["gender"])){
        if(!empty($_POST["gender"]) && $_POST["gender"] == "Male"){
            echo "checked";
        }
    }
    } ?>>
                        <label for="male"> Male</label>
                        <span> *</span>
                        <?php  
if(isset($_POST["submit"])){
    if(!isset($_POST["gender"]))
{   
    echo "<span>Gender is required.</span>";
}
}
?>
                    </td>



                </tr>
                <tr>

                    <td>Select Courses: </td>
                    <td><select name="courses[]" id="courses" multiple size="5">
                            <option value="PHP" <?php if(!empty($_POST["name"]) && !empty($_POST["email"])  && isset($_POST["gender"]) && isset($_POST["agree"])  ){
    echo "";
}elseif(isset($_POST["submit"])){
    if(isset($_POST["courses"]) ){
        foreach($_POST["courses"] as $course){
            if($course == "PHP"){
                echo "selected";
            }
        }
    }
}  ?>>PHP</option>
                            <option value="JavaScript" <?php if(!empty($_POST["name"]) && !empty($_POST["email"])  && isset($_POST["gender"]) && isset($_POST["agree"])  ){
    echo "";
}elseif(isset($_POST["submit"])){
    if(isset($_POST["courses"]) ){
        foreach($_POST["courses"] as $course){
            if($course == "JavaScript"){
                echo "selected";
            }
        }
    }
} ?>>JavaScript</option>
                            <option value="MySQL" <?php if(!empty($_POST["name"]) && !empty($_POST["email"])  && isset($_POST["gender"]) && isset($_POST["agree"])  ){
    echo "";
}elseif(isset($_POST["submit"])){
    if(isset($_POST["courses"]) ){
        foreach($_POST["courses"] as $course){
            if($course == "MySQL"){
                echo "selected";
            }
        }
    }
}  ?>>MySQL</option>
                            <option value="HTML" <?php if(!empty($_POST["name"]) && !empty($_POST["email"])  && isset($_POST["gender"]) && isset($_POST["agree"])  ){
    echo "";
}elseif(isset($_POST["submit"])){
    if(isset($_POST["courses"]) ){
        foreach($_POST["courses"] as $course){
            if($course == "HTML"){
                echo "selected";
            }
        }
    }
}  ?>>HTML</option>
                            <option value="CSS" <?php if(!empty($_POST["name"]) && !empty($_POST["email"])  && isset($_POST["gender"]) && isset($_POST["agree"])  ){
    echo "";
}elseif(isset($_POST["submit"])){
    if(isset($_POST["courses"]) ){
        foreach($_POST["courses"] as $course){
            if($course == "CSS"){
                echo "selected";
            }
        }
    }
}  ?>>CSS</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="agree">Agree</label></td>
                    <td><input type="checkbox" id="agree" name="agree"> <span> * </span> <?php  
if(isset($_POST["submit"])){
    if(!isset($_POST["agree"]))
{   
    echo "<span>You must agree to terms.</span>";
}
}
?></td>


                </tr>

                <tr>
                    <td><input type="submit" value="Submit" name="submit"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>


</html>





<?php 
if(!empty($_POST["name"]) && !empty($_POST["email"]) && isset($_POST["gender"]) && isset($_POST["agree"])){
    echo "<h3>Your given values are as: </h3>";
echo "Name: ".$_POST["name"]. "<br>";

echo "Email: ".$_POST["email"]. "<br>";
if(!empty($_POST["group"])){
    echo "Group: ".$_POST["group"]. "<br>";
}
if(!empty($_POST["details"])){
    echo "Class details: ".$_POST["details"]. "<br>";
}

echo "Gender: ". $_POST["gender"]. "<br>";
if(!empty($_POST["courses"])){
    echo "Courses: " ;
    foreach($_POST["courses"] as $course){
        print_r($course);
        echo " ";
    }
}

}

?>