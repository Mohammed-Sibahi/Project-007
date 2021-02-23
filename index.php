
<?php 
include_once 'header.php';
?>

        <h1>Hello, world! This is Project-007</h1>
        
        
        <?php 

if(isset($_SESSION["useruid"])) {
echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";

}

?>
        


<!--paste content here

Practice jQuery and responsive web.




-->



        
        <?php 
        include_once 'footer.php';
        ?>