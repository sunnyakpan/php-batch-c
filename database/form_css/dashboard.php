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
</style>