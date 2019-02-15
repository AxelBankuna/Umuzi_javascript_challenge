<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" />
    <title>Challenge1</title>
</head>
<body>

<div class="row">
    <div class="col-m-4" id="sidebar">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Challenge 1</a>
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
                <a class="nav-link" href="challenge5.php">Challenge 5</a>
            </li>
        </ul>
    </div>

    <div class="container">
        <div class="jumbotron">
            <h1>Javascript Challenge 1</h1>
            <p>65 Checker.</p>
        </div>



        <form name="myForm" id="myForm" class="col-m-8">
            <div class="form-group">
                <label for="string1">Integer 1</label>
                <input type="text" class="form-control col-4" id="int1" aria-describedby="int1" placeholder="Enter integer 1">
            </div>
            <div class="form-group">
                <label for="string2">Integer 2</label>
                <input type="text" class="form-control col-4" id="int2" aria-describedby="int2" placeholder="Enter integer 2">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<script type="text/javascript">

    document.getElementById("myForm").onsubmit = function() {
        const a = parseInt(document.getElementById("int1").value);
        const b = parseInt(document.getElementById("int2").value);

        if (a === 65 || b === 65 || (a + b) === 65)
            alert("65 detected: true");
        else
            alert("false");
    }

</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>