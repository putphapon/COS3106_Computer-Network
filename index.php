<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>SMTP Test || COS3106</title>
</head>
<body>


<div class="container">

    <div class="row mt-5 mb-3">
        <h1>กรุณากรอกอีเมล</h1>  
    </div>    

    <div class="row">
        <div class="col">
            <form method="POST" action="textphpmailer2.php">
                <div class="form-group">    
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" placeholder="name@example.com"  class="form-control" >
                </div>
                <div class="form-group"> 
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="First name Last name"  class="form-control" >
                </div>
                <div class="form-group"> 
                    <label for="text">Subject:</label>
                    <input type="text" name="subject" id="subject"  class="form-control" >
                </div>
                <div class="form-group"> 
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" rows="3" class="form-control" ></textarea>
                </div>
                <div class="form-group"> 
                    <input type="submit" value="Send" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="testphpmailer.php">
            <button type="button" class="btn btn-warning btn-block">ทดสอบส่งอีเมล</button></a>
        </div>
    </div>   


</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>