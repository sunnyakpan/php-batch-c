<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Request</title>
   <?php
   include_once "./form_css/style.php"
   ?>
</head>

<body>
    <div class="ajax_page_wrapper">
        <h1>
            Ajax Request Form
        </h1>
        <div class="formDiv">
            <div class="form_input_wrapper">
                <label for="name">Name:</label>
                <input type="text" id="name" placeholder="Enter Name">
            </div>

            <div class="form_input_wrapper">
                <label for="email">Email:</label>
                <input type="text" id="email" placeholder="Enter Email">
            </div>

            <div class="form_input_wrapper">
                <label for="password">Password:</label>
                <input type="password" id="password" placeholder="Enter Password">
            </div>

            <button id="submitBtn">Submit</button>

        </div>
        <table class="ajax_table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tableBodyData">
                <tr>
                    <td colspan="4"> Please Load Users</td>
                </tr>
            </tbody>
        </table>
        <button id="loadUsers">Load Users</button>

    </div>

    <script>
        var submitBtn = document.getElementById("submitBtn");
        submitBtn.addEventListener("click", createUser);
        const editUserUrl = "http://localhost/tutorials/niit/ikorodu/batch-c/database/ajax_edit_user.php";
        const deleteUserUrl = "http://localhost/tutorials/niit/ikorodu/batch-c/database/ajax_delete_user.php";

        function createUser() {
            
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var formData = new FormData();
            formData.append("name", name);
            formData.append("email", email);
            formData.append("password", password);

            var addUderUrl = "http://localhost/tutorials/niit/ikorodu/batch-c/database/ajax_createUser.php";
            
            fetch(addUderUrl, {
                    method: 'POST',
                    body: formData
                })
                .then((response) => response.json())
                .then((data) => {
                    if(data.status===200){
                        displayUsers(data.data);
                    }else{
                        alert(data.message);
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            return false;
        }

        var loadUsers = document.getElementById("loadUsers");
        loadUsers.addEventListener("click", getUsers);
        var tableBodyData = document.getElementById("tableBodyData");

        function getUsers() {
            const getUserUrl = "http://localhost/tutorials/niit/ikorodu/batch-c/database/ajax_getusers.php";
            fetch(getUserUrl)
                .then((data) => data.json())
                .then((data) => {
                    if (data.status === 200) {
                        var users = data.data;
                        displayUsers(users);
                    } else {
                        alert(data.message);
                    }
                })
        }

        function displayUsers(users) {
            var tableData = "";
            users.forEach((user,index) => {
                tableData += `<tr>
                    <td>` + (index+1) + `</td>
                    <td>` + user.name + `</td>
                    <td>` + user.email + `</td>
                    <td>
                        <a href="`+editUserUrl+'?id='+user.id+`" class="tb_btn">Edit</a>
                        <a href="`+deleteUserUrl+'?id='+user.id+`" class="tb_btn">Delete</a>
                    </td>
                </tr>`;
            });
            tableBodyData.innerHTML = tableData;
        }

        
    </script>

</body>

</html>