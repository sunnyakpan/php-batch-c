<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root{
    --primary-color: #5614a1;
    --secondary-color: #f4f4f4;
    --text-color: #333;
    --font-family: 'Poppins', sans-serif;
}
a{
    text-decoration: none;
    color: inherit;
}
body{
    font-family: 'Poppins', sans-serif;
    background-color: #f4f4f4;
}
ul{
    list-style: none;
}
h1{
    font-size: 2rem;
    color: #333;
}
header{
    width: 100%;
    height: 80px;
    background-color: var(--primary-color);
    color: white;
    display: flex; 
    justify-content: space-between;
    align-items: center;
    padding: 10px 70px;
}
header .brand{
    font-size: 1.5rem;
    font-weight: bold;
}
header .navbar ul{
    display: flex;
    gap: 20px;
}
header .navbar ul li a{
    color: white;
    font-size: 1.2rem;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}
header .navbar ul li a:hover{
    background-color: rgba(255, 255, 255, 0.2);
}
header .navbar ul li.active a{
    background-color: rgba(255, 255, 255, 0.2);
}
header .navbar ul li.active a:hover{
    background-color: rgba(255, 255, 255, 0.4);
}
header .navbar ul li:last-child a{
    background-color: red;
    color: white;
}
header .navbar ul li:last-child a:hover{
    background-color: darkred;
}

.page_content{
    width: 100%;
    height: auto;
    padding: 20px 70px;
    background-color: var(--secondary-color);
    margin: 30px auto;
}

</style>