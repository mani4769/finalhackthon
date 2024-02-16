<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Text to Image</title>
  <style>
    /* Navbar styling */
    .navbar {
      background-color: #333;
      overflow: hidden;
    }

    .navbar a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }

    /* Main content styling */
    #main-content {
      padding: 20px;
    }

    #imageContainer {
      display: flex;
      flex-wrap: wrap;
    }

    img {
      width: 200px;
      height: 200px;
      margin: 5px;
      cursor: pointer;
    }

    /* Footer styling */
    .footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px;
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <a href="#">Home</a>
    <!-- Add more navbar links as needed -->
  </div>

  <!-- Main content -->
  <div id="main-content">
    <input type="text" id="searchInput" placeholder="Enter text">
    <button onclick="searchImages()">Search</button>
    <div id="imageContainer"></div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <p>Copyright © 2024. All rights reserved.</p>
  </div>

  <script>
    function searchImages() {
      const searchText = document.getElementById('searchInput').value.toLowerCase(); // Convert text to lowercase
      const imageContainer = document.getElementById('imageContainer');
      imageContainer.innerHTML = ''; // Clear previous images

      // List of available images
      const availableImages = {
        'thumbs down': 'thumbsdown.jpg',
        'thumbs up': 'thumbs up.jpg',
        'love you': 'love you.jpg',
        // Add more images and their corresponding keywords here
      };

      // Check if an image exists for the entered text
      if (availableImages.hasOwnProperty(searchText)) {
        const img = document.createElement('img');
        img.src = availableImages[searchText];
        img.alt = searchText;
        img.onclick = function() {
          window.open(img.src, '_blank');
        };
        imageContainer.appendChild(img);
      } else {
        alert('No image found for the entered text.');
      }
    }
  </script>
</body>
</html>
