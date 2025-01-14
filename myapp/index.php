<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
    <h2>Welcome to Sweet Delights Bakery</h2>
    <p>Discover the magic of freshly baked goods made with love and tradition. Our family-owned bakery has been serving the community for over 20 years, bringing smiles with every bite.</p>

    <h3>Today's Specials</h3>
    <p>Start your day with our signature croissants, handcrafted sourdough bread, or indulge in our famous chocolate chip cookies. Every item is baked fresh daily using premium ingredients and traditional recipes passed down through generations.</p>

    <h3>Pre-Order for Special Occasions</h3>
    <p>Planning a celebration? From birthday cakes to wedding pastries, we create custom desserts that make your special moments unforgettable. Place your order 48 hours in advance to ensure availability.</p>
    
    <h3>Visit Us</h3>
    <p>Stop by our cozy shop on Main Street to experience the warm aroma of fresh bread and pastries. Enjoy your treats in our charming café area with a cup of freshly brewed coffee.</p>
</div>

<?php include("includes/footer.php");
echo "hello docker3";
include ("DbConnect.php");
$db= new Dbconnection();
$conn=$db->connect();
$db= new Dbconnection();

$conn=$db->connect();
$stm=$conn->prepare("select * from test");
$stm->execute();
$result=$stm->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
echo"</pre>";?>

</body>
</html>