<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
    <title>Challenge5</title>
</head>
<body>

<div class="row">
    <div class="col-m-4" id="sidebar">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Challenge 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="challenge2.php">Challenge 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="challenge3.php">Challenge 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="challenge4.php">Challenge 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="challenge5.php">Challenge 5</a>
            </li>
        </ul>
    </div>

<div class="container">
    <div class="jumbotron">
        <h1>Javascript Challenge 5</h1>
        <p>program that takes two strings as input, and outputs the common characters/letters that they share.</p>
    </div>



    <form name="myForm" id="myForm" class="col-m-8">
        <div class="form-group">
            <label for="string1">String 1</label>
            <input type="text" class="form-control" id="string1" aria-describedby="string1" placeholder="Enter string 1">
        </div>
        <div class="form-group">
            <label for="string2">String 2</label>
            <input type="text" class="form-control" id="string2" aria-describedby="string2" placeholder="Enter string 2">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>

<script type="text/javascript">

    document.getElementById("myForm").onsubmit = function() {
        const str1 = document.getElementById("string1").value;
        const str2 = document.getElementById("string2").value;
        let letters = [];
        for (let i = 0; i < str1.length; i++){
            for (let j = 0; j < str2.length; j++){
                if (str1[i] === str2[j] && letters.indexOf(str1[i]) == -1) {
                    // console.log(str1[i] + " is a common letter!!!");
                    letters.push(str1[i]);
                }
            }
        }
        alert("Common letters are: " + letters);
        return letters;
    }

</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>