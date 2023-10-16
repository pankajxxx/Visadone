<style>
    .image-container {
        position: relative;
        width: 100%;
        max-width: 500px;
        /* Adjust as needed */
        margin: 0 auto;
    }

    #zoomable-image {
        max-width: 100%;
        transition: transform 0.5s;
    }

    .zoom-buttons {
        text-align: center;
        margin-top: 10px;
    }
</style>


<div class="image-container">
    <div class="container">
        <img id="zoomable-image" style="height:200px;width:800px;"
            src="https://www.lightningdesignsystem.com/assets/images/guidelines/builder/zoom/Zoom_Controls_Hero@2x.png"
            alt="Image">

    </div>
    <div class="zoom-buttons">
        <button id="zoom-in">Zoom In</button>
        <button id="zoom-out">Zoom Out</button>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const zoomableImage = document.getElementById('zoomable-image');
        const zoomInButton = document.getElementById('zoom-in');
        const zoomOutButton = document.getElementById('zoom-out');
        let currentScale = 1;

        zoomInButton.addEventListener('click', function() {
            currentScale += 0.1;
            zoomableImage.style.transform = `scale(${currentScale})`;
        });

        zoomOutButton.addEventListener('click', function() {
            if (currentScale > 0.1) {
                currentScale -= 0.1;
                zoomableImage.style.transform = `scale(${currentScale})`;
            }
        });
    });
</script>
