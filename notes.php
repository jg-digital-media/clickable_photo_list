<?php 

    // echo "<p>notes.php</p>";

?>

<?php include_once("template-parts/header.php"); ?>

    <div class="notes-container">

        <section class="notes-content">

            <h2>Development Notes <a href="index.php" id="goback">Back</a></h2>

            <article class="technical-summary">

                <h3>Clickable Photo List - Technical Summary</h3>

                <div class="summary-section">
                    <h4>Purpose</h4>
                    <p>Interactive photo gallery with dynamic image switching and navigation.</p>
                </div>

                <div class="summary-section">
                    <h4>Architecture</h4>
                    <ul>
                        <li><strong>Backend:</strong> PHP loads JSON data (photo_list.json) containing image URLs and captions</li>
                        <li><strong>Frontend:</strong> JavaScript handles click events and keyboard navigation (arrow keys)</li>
                        <li><strong>Styling:</strong> SASS/SCSS with responsive design and CSS variables</li>
                    </ul>
                </div>

                <div class="summary-section">
                    <h4>Key Features</h4>
                    <ul>
                        <li><strong>Dynamic content:</strong> Photo list generated from JSON data</li>
                        <li><strong>Image switching:</strong> Click links or use arrow keys to change displayed photo</li>
                        <li><strong>Active state highlighting:</strong> Visual feedback shows currently selected photo</li>
                        <li><strong>Overlay captions:</strong> Image titles appear as overlays at bottom of photos</li>
                        <li><strong>Responsive layout:</strong> Flexbox-based sidebar + main content area</li>
                        <li><strong>Viewport-aware sizing:</strong> Images constrained to prevent header/footer cutoff</li>
                    </ul>
                </div>

                <div class="summary-section">
                    <h4>File Structure</h4>
                    <ul>
                        <li><code>index.php</code> - Main page with PHP templating</li>
                        <li><code>photo_list.json</code> - Data source for photos and captions</li>
                        <li><code>app.js</code> - Client-side interactivity and navigation</li>
                        <li><code>_main.scss</code> - Styling with CSS variables and responsive breakpoints</li>
                    </ul>
                </div>

                <div class="summary-section">
                    <h4>Technologies</h4>
                    <p>PHP, JavaScript (vanilla), SASS, Flexbox, JSON data binding</p>
                </div>

                <div class="summary-section future-notes">
                    <h4>Future Development</h4>
                    <p>More photos to be added later.</p>
                </div>

            </article>

        </section>
    </div>
   