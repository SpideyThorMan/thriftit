<html>
    <head>
        <title>Category: Women's Clothing</title>
        <link rel="stylesheet" type="text/css" href="sell.css">
    </head>
    <body>
        <h1>Post your AD</h1>
        <div class="cat">
            <b>
                 Category:
            </b><br>
            <i>Fashion/ Women's Clothing</i> <a href="sell.php">Change</a>
        </div>

        <form action="womenclothingdb.php" method="post" >
            <label>AD Title*</label><br>
             <input type="text" name="ad_title" id="title" required><br>
             <i>Mention the name and key features of your product(brand,type)</i><br><br>

            <label>Description*</label><br>
             <textarea rows="10" cols="60" name="description" required>
             </textarea><br><br>
            <label>Condition of the item: </label><br>
              <input type="radio" name="condition" id="brandnew">Brand new
              <input type="radio" name="condition" id="Like new">Like new
              <input type="radio" name="condition" id="good">Good
              <input type="radio" name="condition" id="bad">Can still be worn<br><br>

            <label>Price in Rs*</label><br>
             <input type="number" name="price" id="price" required><br><br>

            <label>Upload Upto 4 Photos*</label><br>
             <input type="file" name="pic" id="pic" required><br>
             <i>This field is mandatory</i><br><br>

            <label>Contact Number</label><br>
                <select id="ph">
                <option>+977</option>
                <OPTION>01</OPTION>
                </select>
              <input type="number" name="Mnumber" id="Mnumber" required><br><br>

            <input type="submit" value="Post Ad">

        </form>

    </body>
</html>