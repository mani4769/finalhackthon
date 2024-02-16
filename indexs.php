<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Text to Image</title>
  <style>
    *{
        margin:0;
        padding: 0;
    }
    body {
    height: 100vh;
    display: flex;
    flex-direction: column;
    background: #b7e3f9;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #005580;
    padding: 10px 20px;
    color: white;
}

.logo img {
    width: 100px;

    height: auto;
}
.container1 {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            padding-top: 30%;
        }

        .image-container {
            float: right;
            display: flex;
            justify-content: space-between; 
            margin-bottom: 20px; 
            width: 80%;
            height: auto;
        }

        .image-container img {
            width: 80%; 
        }


.nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
}

.nav-links a {
    text-decoration: none;
    color: #005580;
    transition: color 0.3s ease-in;
}
footer {
    margin-top: 200px;
    background-color: #005580;
    color: #b7e3f9;
    padding: 20px;
}

.footer-links {
    display: flex;
    justify-content: space-around;
}

.footer-links ul {
    list-style-type: none;
    padding: 20px;
}

.footer-links ul li {
    margin-bottom: 10px;
}

.footer-links ul li a {
    text-decoration: none;
    color: #b7e3f9;
    transition: color 0.3s ease-in;
}

.footer-links ul li a:hover {
    color: black;
}

.footer-links ul li a h1 {
    color: aqua;
}
.btn {
    background: #b7e3f9;
    border-radius: 999px;
    box-shadow: #ffffff 0 10px 20px -10px;
    box-sizing: border-box;
    color: #005580;
    cursor: pointer;
    font-family: Inter, Helvetica, "Apple Color Emoji", "Segoe UI Emoji", NotoColorEmoji, "Noto Color Emoji", "Segoe UI Symbol", "Android Emoji", EmojiSymbols, -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", sans-serif;
    font-size: 16px;
    font-weight: 700;
    line-height: 24px;
    opacity: 1;
    outline: 0 solid transparent;
    padding: 8px 18px;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    width: fit-content;
    word-break: break-word;
    border: 0;
}

.btn:hover {
    transform: scale(1.05) rotate(-1deg);
}
     
    /* Main content styling */
    #main-content {
      padding: 20px;
    }

    #imageContainer {
        width: 60%;
      display: flex;
      float: right;
      flex-wrap: wrap;
    }
    .image-container img {
    width: auto ; /* Adjust as needed */
    height: auto; /* This maintains aspect ratio */
}

#searchInput{
    padding: 10px;
}
.btn2 {
    background: #005580;
    border-radius: 999px;
    box-shadow: #ffffff 0 10px 20px -10px;
    box-sizing: border-box;
    color:#b7e3f9;
    cursor: pointer;
    font-family: Inter, Helvetica, "Apple Color Emoji", "Segoe UI Emoji", NotoColorEmoji, "Noto Color Emoji", "Segoe UI Symbol", "Android Emoji", EmojiSymbols, -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", sans-serif;
    font-size: 16px;
    font-weight: 700;
    line-height: 24px;
    opacity: 1;
    outline: 0 solid transparent;
    padding: 8px 18px;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    width: fit-content;
    word-break: break-word;
    border: 0;
}
 

  
  </style>
</head>
<body>
<nav class="navbar">
        <div class="logo">
            <img src="banevolent.jpg" alt="">
        </div>
        <div>
            <H1>BENEVOLENT MINDS</H1>
        </div>
        <ul class="nav-links">
           <button class="btn" role="button"><li><a href="userpage.php">Home</a></li></button>
           <button class="btn" role="button"><li><a href="about.php">About</a></li></button>
           <button class="btn" role="button"><li><a href="whatis.php">whatis?</a></li></button>
           <button class="btn" role="button"><li><a href="motivation.php">Motivation</a></li></button>
           <button class="btn" role="button"><li><a href="signup.php">Logout</a></li></button> 

        </ul>
    </nav>

  </div>

  <!-- Main content -->
  <div id="main-content">
    <input type="textfield" id="searchInput" placeholder="Enter text"><br><br><br>
   <div width=20px> <button class="btn2" onclick="searchImages()">Search</button></div>
    <div id="imageContainer">

    </div>
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
        'goodnight': 'goodnight.jpg',
        'a': 'a.jpg',
        'A': 'a.jpg',
        'b': 'b.jpg',
        'B':'b.jpg',
        'c':'c.jpg',
        'C':'c.jpg',
        'd':'d.jpg',
        'D': 'd.jpg',
        'e':'e.jpg',
        'E':'e.jpg',
        'f':'f.jpg',
        'F':'f.jpg',
        'g':'g.jpg',
        'G':'g.jpg',
        'g':'g.jpg',
        'h':'h.jpg',
        'H':'h.jpg',
        'i':'i.jpg',
        'I':'i.jpg',
        'j':'j.jpg',
        'J':'j.jpg',
        'k':'k.jpg',
        'K':'k.jpg',
        'l':'l.jpg',
        'L':'l.jpg',
        'm':'m.jpg',
        'M':'m.jpg',
        'n':'n.jpg',
        'N':'n.jpg',
        'o':'o.jpg',
        'O':'O.jpg',
        'p':'p.jpg',
        'P':'p.jpg',
        'q':'q.jpg',
        'Q':'q.jpg',
        'r':'r.jpg',
        'R':'r.jpg',
        's':'s.jpg',
        'S':'S.jpg',
        't':'t.jpg',
        'T':'t.jpg',
        'u':'u.jpg',
        'U':'u.jpg',
        'V':'v.jpg',
        'v':'v.jpg',
        'x':'x.jpg',
        'X':'x.jpg',
        'y':'y.jpg',
        'Y':'y.jpg',
        'z':'z.jpg',
        'Z':'z.jpg',
        'happy':'happy.jpg',
        'HAPPY':'happy.jpg',
        'goodmorning':'goodmorning.jpg',
        'GOODMORNING':'goodmorning.jpg',
        'goodafternoon':'goodafternoon.jpg',
        'GOODAFTERNOON':'goodafternoon.jpg',
        'goodnight':'goodnight.jpg',
        'GOODNIGHT':'goodnight.jpg',
        'sorry':'sorry.jpg',
        'Sorry':'sorry.jpg'

        
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
  <footer >
    <div class="footer-links">
        <div class="footer-links">
            <ul>
                <li><a href="#"><h1>About Us</h1></a></li>
                <li><a href="teammembers.php">TEAM MEMBERS</a></li>
                <li><a href="teamwork.php">TEAM WORK</a></li>
                <li><a href="workassigning.php">WORK ASSIGNING</a></li>
                <li><a href="ideaimplementation.php">IDEA IMPLEMENTATION</a></li>
            </ul>
            <ul>
                <li><a href="#"><h1>Learnings</h1></a></li>
                <li><a href="https://simple.wikipedia.org/wiki/American_Sign_Language">ASL</a></li>
                <li><a href="https://ieeexplore.ieee.org/document/9489209">HAND GESTURES</a></li>
                <li><a href="https://www.ijraset.com/research-paper/deaf-and-dumb-gesture-recognition-system">VISUAL SIGNAL</a></li>
                <li><a href="https://www.sciencedirect.com/science/article/pii/S1877050915021675/pdf?crasolve=1&r=8547b73cef707f7d&ts=1707771150869&rtype=https&vrr=UKN&redir=UKN&redir_fr=UKN&redir_arc=UKN&vhash=UKN&host=d3d3LnNjaWVuY2VkaXJlY3QuY29t&tsoh=d3d3LnNjaWVuY2VkaXJlY3QuY29t&rh=d3d3LnNjaWVuY2VkaXJlY3QuY29t&re=X2JsYW5rXw%3D%3D&ns_h=d3d3LnNjaWVuY2VkaXJlY3QuY29t&ns_e=X2JsYW5rXw%3D%3D&rh_fd=rrr)n%5Ed%60i%5E%60_dm%60%5Eo)%5Ejh&tsoh_fd=rrr)n%5Ed%60i%5E%60_dm%60%5Eo)%5Ejh&iv=a377cde4c1937c748cc6463330f92128&token=66363733316435336361333131373132633362663135393933316435303766396463623134656661306566373330623238663861633436633233393966373866363065383834313231643836343839323131653639656461366438663a613566633837353535323430386266653462666636306666&text=1395364dcdeee08ba801294cc77eedd85451d47e626ad9f70d1fbf5c519e67a4054280344a46e368111859f3e84dc9480e27673a603cee4caf5099238d3cefc35923fc48ab17e3666c0173ecef6e4e32821eed4734caa1fc5b7553bf3ea2a9ca30dbfe295b4df675cb55196d00143e18c871866fcc657dbe3feeca005fb75a1e3d72140c91116b8b74ebf340051dca0c6c30115b5a69bfe63be55ca164557841f417b879e36711f93ab4227490bf11eebc5d57a1d9f86c2bf883ef372842eba1ff620a5ddb0b03ceaf8ab8e144b18f4a99bd9bbc9e8d555a7d819766ed75b33d7924da654a84319754b5fdfa9f84b89c9f3125e730c905405db6bb91a2496481f40a64501084f856235706585dddd4da55d067317605d28d6ff68feacc9a4fd713b6865d83fad6faa532b118a7676baf&original=3f6d64353d6562353662326666366234346232626262626131613532613938343430326262267069643d312d73322e302d53313837373035303931353032313637352d6d61696e2e706466265f76616c636b3d31">FACIAL EXPRESSION</a></li>
            </ul>
            <ul>
                <li><a href="#"><h1>Sources</h1></a></li>
                <li><a href="https://www.w3schools.com/python/default.asp">python</a></li>
                <li><a href="https://www.w3schools.com/html/default.asp">HTML</a></li>
                <li><a href="https://www.w3schools.com/css/default.asp">CSS</a></li>
                <li><a href="https://www.w3schools.com/php/default.asp">PHP</a></li>
            </ul>
            <ul>
                <li><a href="#"><h1>Contact us</h1></a></li>
                <li>PHONE NO: 9381017897</a></li>
                <li>PHONE NO-2: 9951127858</a></li>
                <li>E-MAIL: manikantathirumalla342@gmail.com</a></li>
                <li>DETAILS:Benevolent minds is optimized for sign language detection technology<br>can improve accessibility for deaf and hard-of-hearing individuals by enabling comm<br>-unication with hearing individuals who may not understand sign language.</a></li>
                <a href="https://www.facebook.com/benevolentminds?sfnsn=wiwspwa&mibextid=2JQ9oc" target="_blank"><img src="facebook-icon.png" alt="Facebook" width="10%"height="40vh"></a>
                <a href="https://www.instagram.com/benevolentminds2024?igsh=NmRnYjQ4OHJzdTNl" target="_blank"><img src="instagram-icon.png" alt="Facebook" width="10%"height="35vh"></a>
                <a href="https://github.com/mani4769/trail0/tree/main/signdetection" target="_blank"><img src="github-icon.png" alt="Facebook" width="10%"height="35vh"></a>
                <li>
            </ul>
            
        </div>
    </div>
   </footer>

</body>
</html>
