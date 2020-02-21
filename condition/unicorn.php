    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>unicorn</title>
    </head>

    <body>
        <form>
            <p>A quelle espèce appartenez vous?</p>
            <input type="radio" id="human" name="sort" value="human">
            <label for="human">human</label>
            <input type="radio" id="cat" name="sort" value="cat">
            <label for="cat">cat</label>
            <input type="radio" id="unicorn" name="sort" value="unicorn">
            <label for="unicorn">unicorn</label>
            


    </body>

    </html>

    <input type="submit" name="submit" value="Soumettre">

    </form>

<?php



if(isset($_GET['sort'])){
    $sort = $_GET['sort'];
    echo $sort=="human" ? "<img src='img/human.webp' alt='human'/>":
    ($sort=="cat"? "<img src='img/cat.webp' alt='cat'/>":
    ($sort=="unicorn"?"<img src='img/unicorn.webp' alt='unicorn'/>":"error"));   
}

?>