<?php
include "./connection_with_db.php";

$uid = $_GET["id"];
$uid = (int)$uid;

$sql = "SELECT id, name, email FROM users  WHERE id=$uid;";
$user = null;
$result = $conn->query($sql);
if ($result->num_rows >0) {
    $user = $result->fetch_assoc();
}else{
    // get referrer url
    $referrer = $_SERVER['HTTP_REFERER'];
    header("Location: $referrer");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <?php
   include_once "./form_css/style.php"
   ?>
</head>
<body>

<div class="ajax_page_wrapper">
        <h1>
            Ajax Edit User
        </h1>
        <div class="formDiv">
            <div class="form_input_wrapper">
                <input type="hidden" id="user_id" value="<?php echo $user['id'] ?>">
                <label for="name">Name:</label>
                <input type="text" id="name" value="<?php echo $user['name'] ?>" placeholder="Enter Name">
            </div>

            <div class="form_input_wrapper">
                <label for="email">Email:</label>
                <input type="text" id="email" value="<?php echo $user['email'] ?>" placeholder="Enter Email">
            </div>

            <div class="form_input_wrapper">
                <a href="http://localhost/tutorials/niit/ikorodu/batch-c/database/ajax_change-password.php?id=<?php echo $user['id'] ?>">
                    Change Password?
                </a>

            </div>


          

            <button id="submitBtn">Submit</button>

        </div>
        
    </div>


    <script>
        var submitBtn = document.getElementById("submitBtn");
        submitBtn.addEventListener("click", editUser);
        const ajaxpageUrl = "http://localhost/tutorials/niit/ikorodu/batch-c/database/ajax.php";
        
        function editUser() {
            
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var user_id = document.getElementById("user_id").value;
            var formData = new FormData();
            formData.append("name", name);
            formData.append("email", email);
            formData.append("uid", user_id);

            var addUderUrl = "http://localhost/tutorials/niit/ikorodu/batch-c/database/ajax_updateUser.php";
            
            fetch(addUderUrl, {
                    method: 'POST',
                    body: formData
                })
                .then((response) => response.json())
                .then((data) => {
                    if(data.status===200){
                        alert(data.message);
                        setTimeout(() => {
                            window.location.href = ajaxpageUrl;
                        }, 2000);
                    }else{
                        alert(data.message);
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            return false;
        }

    </script>
    
</body>
</html>