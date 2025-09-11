<?php 

    // Load and parse the JSON data
    $json_data = file_get_contents('photo_list.json');
    $photos = json_decode($json_data, true);
    
    // Get the first photo for default display
    $default_photo = $photos[0];

?>

<?php include_once("template-parts/header.php"); ?>

    <div class="main-content">
        
        <section class="photo---element--container">

            <div id="photos">

                <?php // parse the main image ?>
                <img src="<?php echo htmlspecialchars($default_photo['filepath']); ?>" alt="<?php echo htmlspecialchars($default_photo['caption']); ?>">

            </div>

            <div class="photo---caption">
                <?php echo htmlspecialchars($default_photo['caption']); ?> <span>(<?php echo htmlspecialchars($default_photo['caption']); ?>)</span>
            </div>

        </section>

        <aside id="url---list">
            
            <ul>
                <?php foreach($photos as $photo): ?>
                <li><a href="#" data-image="<?php echo htmlspecialchars($photo['filepath']); ?>" data-caption="<?php echo htmlspecialchars($photo['caption']); ?>" data-scientific="<?php echo htmlspecialchars($photo['caption']); ?>"><?php echo htmlspecialchars($photo['caption']); ?></a></li>
                <?php endforeach; ?>
            </ul>

        </aside>
    </div>
   
<?php include_once("template-parts/footer.php"); ?>