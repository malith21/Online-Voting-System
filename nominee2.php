<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    * {
      box-sizing: border-box;
    }

    body {
      background-color: #f1f1f1;
      padding: 20px;
      font-family: Arial, sans-serif;
    }

    /* Center website */
    .main {
      max-width: 1100px; /* Slightly wider for more spacing */
      margin: auto;
      padding: 20px; /* Add padding for breathing room */
      background-color: #fafafa; /* Light background to differentiate from body */
      border-radius: 10px; /* Rounded corners */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    }

    h1 {
      font-size: 48px;
      text-align: center;
      color: #333; /* Darker shade for text */
      margin-bottom: 30px;
      letter-spacing: 1.5px;
      word-break: break-word;
    }

    h2 {
      font-size: 28px;
      text-align: center;
      margin-bottom: 20px;
      color: #555;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .row {
      margin: 20px -16px;
    }

    /* Add padding BETWEEN each column */
    .row,
    .row > .column {
      padding: 10px;
    }

    /* Create three equal columns that float next to each other */
    .column {
      float: left;
      width: 33.33%;
      display: none; /* Hide all elements by default */
      transition: transform 0.3s ease-in-out; /* Smooth animation when showing elements */
    }

    /* Content */
    .content {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow to the cards */
      text-align: center; /* Center the text and image */
    }

    .content img {
      border-radius: 8px; /* Square images with rounded corners */
      width: 100%; /* Image width fits the container */
      height: auto;
      margin-bottom: 15px;
    }

    .content h4 {
      font-size: 20px;
      color: #007BFF; /* Use one of your theme's accent colors */
      margin-bottom: 10px;
    }

    .content p {
      font-size: 16px;
      color: #666; /* Slightly lighter for description text */
      margin-bottom: 10px;
    }

    /* Add some hover effects */
    .content:hover {
      transform: translateY(-10px); /* Lift effect */
    }

    /* The "show" class is added to the filtered elements */
    .show {
      display: block;
    }

    /* Clear floats after rows */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Style the buttons */
    .btn {
      border: none;
      outline: none;
      padding: 12px 16px;
      margin: 0 5px; /* Add margin between buttons */
      background-color: white;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #ddd;
    }

    .btn.active {
      background-color: #007BFF;
      color: white;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

</style>
</head>
<body>
  <?php include 'header.php'; ?>
  
  <div class="main">
  
  <h1>SLIITvote.lk</h1>
  <hr>
  
  <h2>Nominee Profiles</h2>
  
  <div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
    <button class="btn" onclick="filterSelection('singer')"> Best Singer</button>
    <button class="btn" onclick="filterSelection('dancer')"> Best Dancer</button>
    <button class="btn" onclick="filterSelection('leader')"> Best Leader</button>
  </div>
  
  <!-- Nominee Profile Gallery Grid -->
  <div class="row">
    <div class="column singer">
      <div class="content">
        <img src="pics/w3.png" alt="Nominee 1" style="width:100%">
        <h4>Nominee 1</h4>
        <p>Award Category: Best Singer</p>
        <p>Renowned for her captivating voice, Nominee 1 has performed at multiple national events, earning widespread recognition in the music industry.</p>
      </div>
    </div>
    
    <div class="column singer">
      <div class="content">
        <img src="pics/w4.png" alt="Nominee 2" style="width:100%">
        <h4>Nominee 2</h4>
        <p>Award Category: Best Singer</p>
        <p>Nominee 2 has a unique talent for blending traditional and modern music styles, making her a standout performer in her category.</p>
      </div>
    </div>
    
    <div class="column dancer">
      <div class="content">
        <img src="pics/av.jpg" alt="Nominee 3" style="width:100%">
        <h4>Nominee 3</h4>
        <p>Award Category: Best Dancer</p>
        <p>Known for his energetic performances and creativity, Nominee 3 has choreographed numerous award-winning dance routines.</p>
      </div>
    </div>
    
    <div class="column dancer">
      <div class="content">
        <img src="pics/dj.jpg" alt="Nominee 4" style="width:100%">
        <h4>Nominee 4</h4>
        <p>Award Category: Best Dancer</p>
        <p>Nominee 4 combines classical dance techniques with contemporary styles, delivering mesmerizing performances that captivate audiences.</p>
      </div>
    </div>
    
    <div class="column leader">
      <div class="content">
        <img src="pics/blk.jpg" alt="Nominee 5" style="width:100%">
        <h4>Nominee 5</h4>
        <p>Award Category: Best Leader</p>
        <p>As the head of several student initiatives, Nominee 5 has demonstrated outstanding leadership, inspiring others to follow in her footsteps.</p>
      </div>
    </div>
    
    <div class="column leader">
      <div class="content">
        <img src="pics/rat.jpg" alt="Nominee 6" style="width:100%">
        <h4>Nominee 6</h4>
        <p>Award Category: Best Leader</p>
        <p>Nominee 6 has led multiple community projects, showcasing his ability to bring people together and achieve shared goals.</p>
      </div>
    </div>
    
    <!-- New Nominees -->
    <div class="column singer">
      <div class="content">
        <img src="pics/cx2.jpg" alt="Nominee 7" style="width:100%">
        <h4>Nominee 7</h4>
        <p>Award Category: Best Singer</p>
        <p>Nominee 7's powerful and soulful voice has moved audiences across the country, making her a top contender in this category.</p>
      </div>
    </div>
    
    <div class="column dancer">
      <div class="content">
        <img src="pics/w1.png" alt="Nominee 8" style="width:100%">
        <h4>Nominee 8</h4>
        <p>Award Category: Best Dancer</p>
        <p>A dynamic and innovative performer, Nominee 8 is known for pushing the boundaries of dance with his contemporary routines.</p>
      </div>
    </div>
    
    <div class="column leader">
      <div class="content">
        <img src="pics/w2.png" alt="Nominee 9" style="width:100%">
        <h4>Nominee 9</h4>
        <p>Award Category: Best Leader</p>
        <p>Nominee 9 has played a pivotal role in organizing major university events, exemplifying excellent organizational and leadership skills.</p>
      </div>
    </div>
    
  <!-- END GRID -->
  </div>
  
  <!-- END MAIN -->
  </div>
  
  <script>
  filterSelection("all")
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }
  
  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }
  
  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);     
      }
    }
    element.className = arr1.join(" ");
  }
  
  
  // Add active class to the current button (highlight it)
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
  </script>
  <?php include 'footer.php'; ?>
  </body>
  
</html>
