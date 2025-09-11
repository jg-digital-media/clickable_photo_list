console.log("app.js - connected - 09-09-2025 - 15:51");

// Photo switching functionality
document.addEventListener('DOMContentLoaded', function() {
    
    // Get references to the image element, caption container, and all photo links
    const photoImage = document.querySelector('#photos img');
    const photoCaptionContainer = document.querySelector('.photo---caption');
    const photoLinks = document.querySelectorAll('#url---list a');
    
    // Function to update active link highlighting
    function setActiveLink(activeLink) {
        // Remove active class from all links
        photoLinks.forEach(function(link) {
            link.classList.remove('active');
        });
        
        // Add active class to the clicked link
        if (activeLink) {
            activeLink.classList.add('active');
        }
    }
    
    // Set the first link as active by default
    if (photoLinks.length > 0) {
        setActiveLink(photoLinks[0]);
    }
    
    // Add click event listeners to all photo links
    photoLinks.forEach(function(link, index) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            
            // Update the active link highlighting
            setActiveLink(this);
            
            // Update the current photo index for keyboard navigation
            currentPhotoIndex = index;
            
            // Get the image data from the clicked link's data attributes
            const newImageSrc = this.getAttribute('data-image');
            const newImageCaption = this.getAttribute('data-caption');
            const newImageScientific = this.getAttribute('data-scientific');
            
            // Update the displayed image and caption
            if (photoImage && newImageSrc && newImageCaption && newImageScientific) {
                photoImage.src = newImageSrc;
                photoImage.alt = newImageCaption;
                
                // Update the caption with common name and scientific name in span
                if (photoCaptionContainer) {
                    photoCaptionContainer.innerHTML = newImageCaption + ' <span>(' + newImageScientific + ')</span>';
                }
                
                // Optional: Add a subtle fade effect
                photoImage.style.opacity = '0.7';
                setTimeout(function() {
                    photoImage.style.opacity = '1';
                }, 150);
            }
        });
    });
    
    // Optional: Add keyboard navigation (arrow keys)
    let currentPhotoIndex = 0;
    
    document.addEventListener('keydown', function(event) {
        if (event.key === 'ArrowRight' || event.key === 'ArrowLeft' || event.key === 'ArrowUp' || event.key === 'ArrowDown') {

            event.preventDefault();
            
            if (event.key === 'ArrowRight') {
                currentPhotoIndex = (currentPhotoIndex + 1) % photoLinks.length;
            } else if (event.key === 'ArrowLeft') {
                currentPhotoIndex = (currentPhotoIndex - 1 + photoLinks.length) % photoLinks.length;
            } else if (event.key === 'ArrowDown') {
                currentPhotoIndex = (currentPhotoIndex + 1) % photoLinks.length;
            } else if (event.key === 'ArrowUp') {
                currentPhotoIndex = (currentPhotoIndex - 1 + photoLinks.length) % photoLinks.length;
            }
            
            // Trigger click on the new photo link
            photoLinks[currentPhotoIndex].click();
        }
    });
    
});