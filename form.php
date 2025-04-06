<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="myForm" action="./save_form.php" method="POST"
    enctype="multipart/form-data"
    >
        <div id="response_from_backend" class="response_from_backend  <?php echo isset($_SESSION["response"])? $_SESSION["response"]['status']:''; ?>">
                <?php
                    if(isset($_SESSION["response"])){
                        echo $_SESSION["response"]['message'];
                        
                    }
                ?>
        </div>
        <div class="form_group">
            <label for="">Name:</label>
            <input type="text" name="name" id="name" class="form_input"
            value="<?php echo isset($_SESSION['response']['data']['name'])?$_SESSION['response']['data']['name']:''?>"
            >
        </div>
        <div class="form_group">
            <label for="">Email:</label>
            <input type="email" name="email" id="email" class="form_input"
            value="<?php echo isset($_SESSION['response']['data']['email'])?$_SESSION['response']['data']['email']:''?>"
            >
        </div>
        <div class="form_group">
            <label for="">Phone Number:</label>
            <input type="tel" name="phone_number" id="phone_number" class="form_input"
            value="<?php echo isset($_SESSION['response']['data']['phone'])?$_SESSION['response']['data']['phone']:''?>"
            >
        </div>


        <div class="form_group">
            <label for="">Profile Image:</label>
            <input type="file" name="profile_image" id="profile_image" class="form_input">
        </div>



        <div class="form_btn">
            <button type="submit">
                Submit
            </button>
           
        </div>
    </form>
   <div id="profile_preview" class="profile_preview <?php echo isset($_SESSION['response']) && $_SESSION['response']['status']=='success'? '':'d-none'?>">
        <img src="<?php echo isset($_SESSION['response']['data']['image'])?$_SESSION['response']['data']['image']:''?>" id="profile_image_preview" alt="Profile Image">
        <ul class="profile_list">
            <li>
                <b>Name: </b> 
                <span><?php echo isset($_SESSION['response']['data']['name'])? $_SESSION['response']['data']['name']:''?></span>
            </li>

            <li>
                <b>Email: </b> 
                <span><?php echo isset($_SESSION['response']['data']['email'])?$_SESSION['response']['data']['email']:''?></span>
            </li>

            <li>
                <b>Phone Number: </b> 
                <span><?php echo isset($_SESSION['response']['data']['phone'])? $_SESSION['response']['data']['phone'] :''?></span>
            </li>

          
        </ul>
    </div>

    <?php if(isset($_SESSION["response"])){unset($_SESSION["response"]);} ?>

    <script>
        var nameId = document.getElementById("name");
        var emailId = document.getElementById("email");
        var phone_numberId = document.getElementById("phone_number");
        var profile_imagId = document.getElementById("profile_image");
        var response_from_backendId = document.getElementById("response_from_backend");
    
    nameId.addEventListener('input',function(){
            var name = this.value;
            if(response_from_backendId.classList.contains('error')){
                response_from_backendId.innerHTML = "";
                response_from_backendId.classList.remove("error");
            }
        });

        
    emailId.addEventListener('input',function(){
            
            if(response_from_backendId.classList.contains('error')){
                response_from_backendId.innerHTML = "";
                response_from_backendId.classList.remove("error");
            }
        });
        
    phone_numberId.addEventListener('input',function(){
    
            if(response_from_backendId.classList.contains('error')){
                response_from_backendId.innerHTML = "";
                response_from_backendId.classList.remove("error");
            }
        });
    </script>
</body>
</html>