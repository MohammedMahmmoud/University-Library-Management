<html>
    <head>
        <title>book</title>
    </head>
    <body>
        <h1> Welcome to University Library Management System </h1>
        <form action="BookServer.php" method="POST">
            <input name="bookname" placeholder="Book Name" type="text"><br><br>

            <input name="author" placeholder="Author" type="text"><br><br>
           
            <input name="year" placeholder="Publication Year" type="text" ><br><br>

            <input name="numberofbooks" placeholder="Number of Copies" type="text" ><br><br>

            <input name="pdf" type="file" value="Choose File"><br><br>

            <input name="cover" type="file" value="choose file"><br><br>
            
            <input  name="submit"  type="submit" value="Save Book">
        </form>
    </body>
</html>