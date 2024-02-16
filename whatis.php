<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Protest+Riot&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Benevolent Minds</title>
    <style>

* {
    font-family: "Fredoka", sans-serif;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body {
    height: 100vh; 
    justify-content: center;
    align-items: center;
    background: #b7e3f9;
}
.slider {
    position: relative;
    width: 60%;
    overflow: hidden;
}
.images {
    display: flex;
    width: 100%;
}
.images img {
    transition: all 0.15s ease;
}
.images input {
    display: none;
}
.dots {
    display: flex;
    justify-content: center;
    margin: 5px;
}
.dots label {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    border: solid black 3px;
    cursor: pointer;
    transition: all 0.15s ease;
    margin: 5px;
}
.dots label:hover {background: #005580;}
#img1:checked ~ .m1 {
    margin-left: 0;
}
#img2:checked ~ .m2 {
    margin-left: -100%;
}
#img3:checked ~ .m3 {
    margin-left: -200%;
}
#img4:checked ~ .m4 {
    margin-left: -300%;
}
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:#005580;
    padding: 10px 20px;
    color: white;
}

.logo img {
    width: 100px;
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
.btn{
    background:#b7e3f9 ;
  border-radius: 999px;
  box-shadow: #ffffff 0 10px 20px -10px;
  box-sizing: border-box;
  color: #005580;
  cursor: pointer;
  font-family:  "Fredoka", sans-serif;
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
.btn:hover{
     transform: scale(1.05) rotate(-1deg);
}
.courses{
    text-decoration: none;
}
.box1{
  
    float: left;
    margin: 0 auto;
  padding: 4px;
  width: 40%;
  border-radius: 20px;
  height: 30vh;
  border: 2px solid black;
}
.box1 img{
    width: 240px;
    display: flex;
    float: left;
}
.box2 {color:#b7e3f9; background-color: #005580;}
.box1 {color:#b7e3f9; background-color: #005580;}
.box2{
  float: right;
  margin: 0 auto;
padding: 4px;
width: 40%;
border-radius: 20px;
height: 30vh;
border: 2px solid black;
}
.box2 img{
    width: 240px;
    display: flex;
    float: left;
}
.links{ padding: 80px; }
/* .boximg{padding: 40px;} */
.links a{
    text-decoration: none;
    color: #005580;
    transition: color 0.3s ease-in;
}
footer{
    margin: 100px 0px 12px;
    display:inline-block;
    background-color: #005580;
    color: #b7e3f9;
    width: 100%;
    height: auto;
   
}
body, html {
    margin: 0;
    padding: 0;
}

footer {
    background-color: #005580;
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
.footer-links ul li a h1 {color: aqua;}


body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.container {
    display: flex;
}

.sidebar {
    flex: 0 0 15%;
    background-color: #005580;
    padding: 100px;
    padding-bottom: 25%;
}

.sidebar ul {
    list-style-type: square;
    padding-bottom: 100%;
    color: #b7e3f9;
}

.sidebar ul li {
    margin-bottom: 10px;
    padding-left: 2%;
    white-space: nowrap;
}
.sidebar ul li a {
    color: #b7e3f9; 
    text-decoration: none;
}


.content {
    flex: 1;
    padding: 20px;
    display: none;
    
}

.content.active {
    display: block;
}
.box1{
  
  float: left;
  margin-top: 60px;
padding: 4px;
width: 80%;
border-radius: 20px;
height: 30vh;
border: 2px solid black;
}
.container1 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            padding-top: 30%;
        }

        .image-container {
            display: flex;
            justify-content: space-between; 
            margin-bottom: 20px; 
            width: 100%;
            height: auto;
        }

        .image-container img {
            width: 30%; 
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
           <button class="btn" role="button"><li><a href="whatis.php">What Is?</a></li></button>
           <button class="btn" role="button"><li><a href="motivation.php">Motivation</a></li></button>
           <button class="btn" role="button"><li><a href="signup.php">Logout</a></li></button> 

        </ul>
    </nav><br>
  <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="#content1">What is sign language?</a></li>
                <li><a href="#content2">who invented it?</a></li>
                <li><a href="#content3">why it is invented</a></li>
                <li><a href="#content4">How old it is?</a></li>
            </ul>
        </div>
        <div  class="content" id="content1">
    <div class="box1">
        <h2>What is sign language?</h2><br>
        <p>Sign languages are natural languages, just like spoken languages, with their own grammar and vocabulary. They are not universal; different countries and regions have their own sign languages.
            Sign languages primarily use manual gestures, which involve movements of the hands and arms to convey meaning. However, facial expressions, body posture, and head movements also play crucial roles in sign language communication.
            Sign languages are visual-spatial languages, meaning that they are perceived visually and conveyed through space. The movements and locations of the hands and other body parts are important aspects of sign language grammar.
            Just like spoken languages, sign languages vary across different cultures and regions. American Sign Language (ASL), British Sign Language (BSL), and French Sign Language (LSF) are examples of distinct sign languages with their own unique grammar and vocabulary.
        </p>
    </div>


<div class="container1">
    <div class="image-container">
        <img src="whatis1.jpg" alt="Image 1">
        <img src="whatis2.jpg" alt="Image 2">
        <img src="whatis3.jpg" alt="Image 3">
    </div>
</div>
    </div>
        <div class="content" id="content2">
        <div class="box1">
            <h2>who invented it?</h2><br>
            <p>Sign languages have likely existed for as long as deaf communities have existed. Historically, deaf individuals have developed and used sign languages as their primary means of communication within their communities.
            Sign languages have evolved naturally over centuries, shaped by the collective experiences and interactions of deaf individuals. The specific origins and development of sign languages vary depending on the region and the history of the deaf community in that area.
            While sign languages were not "invented" by any single individual, educators and advocates have played important roles in the recognition and development of sign languages as legitimate languages. In the 18th and 19th centuries, educators such as Thomas Hopkins Gallaudet in the United States and Abbé Charles-Michel de l'Épée in France made significant contributions to the education and recognition of sign language.
        </p>
            </div>
            <div class="container1">
    <div class="image-container">
        <img src="whatis4.jpg" alt="Image 1">
        <img src="whatis5.jpg" alt="Image 2">
        <img src="whatis6.jpg" alt="Image 3">
    </div>
</div>
        </div>
        <div class="content" id="content3">
        <div class="box1">
            <h2>why it is invented</h2><br>
            <p> Human beings have an inherent need to communicate with one another. Deaf individuals, like everyone else, needed a way to express themselves, share ideas, and interact with others.
            For individuals who are deaf or hard of hearing, spoken language may not be accessible or fully comprehensible. Sign language, which relies on visual and spatial communication through hand gestures, facial expressions, and body movements, provides a natural and accessible means of communication for deaf individuals.
            Deaf communities have historically developed their own languages and cultures, including sign languages, as a way to communicate and connect with others who share similar experiences of deafness.
            Sign languages are not just tools for communication; they also serve as a source of cultural identity and pride for deaf individuals.
            </p>
            </div>
            <div class="container1">
    <div class="image-container">
        <img src="whatis7.jpg" alt="Image 1">
        <img src="whatis8.jpg" alt="Image 2">
        <img src="whatis9.jpg" alt="Image 3">
    </div>
</div>
        </div>
        <div class="content" id="content4">
        <div class="box1">
            <h2>How old it is?</h2><br>
            <p>Some historical records and archaeological findings suggest that sign languages may have existed in ancient civilizations. For example, there are depictions of hand gestures and signs in ancient Egyptian hieroglyphics and artwork.
            In medieval and early modern Europe, there were accounts of deaf individuals using various forms of sign language to communicate within their communities. One notable figure in the history of sign language is Abbé Charles-Michel de l'Épée, a French educator who founded the first public school for deaf students in Paris in the 18th century and developed a system of manual signs for communication.
            Sign languages have evolved over time, shaped by the experiences and interactions of deaf communities. In the 19th and 20th centuries, efforts were made to standardize and formalize sign languages, leading to the establishment of sign language dictionaries, grammatical rules, and educational curricula.
            </p>
            </div>
            <div class="container1">
    <div class="image-container">
        <img src="whatis10.jpg" alt="Image 1">
        <img src="whatis11.jpg" alt="Image 2">
        <img src="whatis12.jpg" alt="Image 3">
    </div>
</div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('.sidebar a');
    const contents = document.querySelectorAll('.content');

    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetContentId = link.getAttribute('href').substring(1);
            contents.forEach(content => {
                content.classList.remove('active');
                if (content.id === targetContentId) {
                    content.classList.add('active');
                }
            });
        });
    });
});

    </script>

    <footer >
    <div class="footer-links">
        <div class="footer-links">
            <ul>
                <li><a href="#"><h1>About Us</h1></a></li>
                <li><a href="teammembers.php">TEAM MEMBERS</a></li>
                <li><a href="teamwork.php">TEAM WORK</a></li>
                <li><a href="workassigning.php">WORK ASSIGNING</a></li>
                <li><a href="ideaimplementation.jpg">IDEA IMPLEMENTATION</a></li>
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

</html>