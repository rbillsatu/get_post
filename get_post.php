<?php
/*
*   Author: Ryan Bills
*   POST Assignment 
*   
*   Using the POST method, create a form which accepts a number. 
*   Using a php function, find and then echo whether the number is a prime number. 
*   Remember, you need to make a php function called Prime that will help you with that.
*
*   CONCLUSION: Struggling with output of $result.  I have tried several variations
*   to output the function back to the below html, but did not have success.
*   The function works, but the page does not refresh to show the output.
*/



function pass($number){
    if(isset($_POST['submit'])){
        $number = $_POST['number'];
        $flag = primeCheck($number);
        if ($flag == 1){
            $result = "Prime";
            echo $result;
            return $result;
        }
        else{
            $result = "Not Prime";
            echo $result;
            return $result;
        }
    }
    else echo " ";
}



// Function to check if number is prime.
function primeCheck($number){
    if ($number == 1)
    return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}


?>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method=POST>
        <div>
            <label for="number">Number: </label>
            <input type="text" name="number">
        </div>

        <input type="button" value="Check for Prime" name="submit">

        <br>

        <div>
            <p>Your number is: <em id="result"><?php echo pass('number');?></em></p>
        </div>

    </form>
</body>