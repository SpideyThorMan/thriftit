<!DOCTYPE html>
<html>
    <head>
        <title>Category: Furniture</title>
        <link rel="stylesheet" type="text/css" href="sell.css">
    </head>
    <body>
        <h1>Post your AD</h1>
        <div class="cat">
            <b>
                 Category:
            </b><br>
            <i>Furnishing & Appliances/ Furniture</i> <a href="sell.html">Change</a>
        </div>

        <form action="furnituredb.php" method="post">
            <label>AD Title*</label><br>
             <input type="text" name="ad_title" id="title" required><br>
             <i>Mention the name and key features of your product(brand,type)</i><br><br>

            <label>Description*</label><br>
             <textarea rows="10" cols="60" name="description" required>
             </textarea><br><br>

            <label>Price in Rs*</label><br>
             <input type="number" name="price" id="price" required><br><br>

            <label>Upload Upto 1 Photos*</label><br>
             <input type="file" name="pic" id="pic" required><br>
             <i>This field is mandatory</i><br><br>

            <label>Contact Number</label><br>
                <select id="ph">
                <option>+977</option>
                <OPTION>01</OPTION>
                </select>
              <input type="number" name="Mnumber" id="number" required><br><br>

            <input type="submit" value="Post Ad" id="post">

        </form>

    </body>
</html>