<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nominee Voting - SLIITvote.lk</title>
    <link rel="stylesheet" href="styles.css">
    <style>
                body {
    font-family: Arial, sans-serif;
    background-color: #F0F0F0;
    color: #333333;
    margin: 0;
}

header {
    background-color: #003366;
    color: #FAFAFA;
    padding: 10px 0;
    text-align: center;
}

header h1 {
    margin: 0;
}

nav a {
    color: #FAFAFA;
    margin: 0 15px;
    text-decoration: none;
}

.nominee-slider {
    max-width: 900px;
    margin: 20px auto;
    background-color: #FAFAFA;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
}

.slide-container {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slide {
    min-width: 100%;
    box-sizing: border-box;
    text-align: center;
}

.nominee-photo {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-bottom: 20px;
}

.vote-button {
    background-color: #4CAF50;
    color: #FAFAFA;
    border: none;
    padding: 15px 30px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 15px;
}

.vote-button:hover {
    background-color: #45A049;
}

.controls {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
}

.prev-slide, .next-slide {
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    font-size: 18px;
    cursor: pointer;
}

footer {
    background-color: #003366;
    color: #FAFAFA;
    text-align: center;
    padding: 10px 0;
    margin-top: 50px;
}

    </style>
</head>
<body>
<?php include 'header.php'; ?>
    

    <section class="nominee-slider">
        <div class="slide-container" id="slider">
            <div class="slide nominee-profile">
                <img src="pics/w3.png" alt="Nominee 1" class="nominee-photo">
                <h4>Nominee 1</h4>
                <p><strong>Award Category:</strong> Best Singer</p>
                <p>Renowned for her captivating voice, Nominee 1 has performed at multiple national events, earning widespread recognition in the music industry.</p>
                <button class="vote-button">Vote Now</button>
            </div>
            <div class="slide nominee-profile">
                <img src="pics/w4.png" alt="Nominee 2" class="nominee-photo">
                <h4>Nominee 2</h4>
                <p><strong>Award Category:</strong> Best Singer</p>
                <p>Nominee 2 blends traditional and modern music styles, making her a standout performer in her category.</p>
                <button class="vote-button">Vote Now</button>
            </div>
            <div class="slide nominee-profile">
                <img src="pics/av.jpg" alt="Nominee 3" class="nominee-photo">
                <h4>Nominee 3</h4>
                <p><strong>Award Category:</strong> Best Dancer</p>
                <p>Known for his energetic performances, Nominee 3 has choreographed numerous award-winning dance routines.</p>
                <button class="vote-button">Vote Now</button>
            </div>
            <div class="slide nominee-profile">
                <img src="pics/dj.jpg" alt="Nominee 4" class="nominee-photo">
                <h4>Nominee 4</h4>
                <p><strong>Award Category:</strong> Best Dancer</p>
                <p>Nominee 4 combines classical techniques with contemporary styles, delivering mesmerizing performances.</p>
                <button class="vote-button">Vote Now</button>
            </div>
            <div class="slide nominee-profile">
                <img src="pics/blk.jpg" alt="Nominee 5" class="nominee-photo">
                <h4>Nominee 5</h4>
                <p><strong>Award Category:</strong> Best Leader</p>
                <p>Nominee 5 has demonstrated outstanding leadership, inspiring others through student initiatives.</p>
                <button class="vote-button">Vote Now</button>
            </div>
            <div class="slide nominee-profile">
                <img src="pics/rat.jpg" alt="Nominee 6" class="nominee-photo">
                <h4>Nominee 6</h4>
                <p><strong>Award Category:</strong> Best Leader</p>
                <p>Nominee 6 has led multiple community projects, showcasing his ability to unite people and achieve goals.</p>
                <button class="vote-button">Vote Now</button>
            </div>
            <div class="slide nominee-profile">
                <img src="pics/cx2.jpg" alt="Nominee 7" class="nominee-photo">
                <h4>Nominee 7</h4>
                <p><strong>Award Category:</strong> Best Singer</p>
                <p>Nominee 7's soulful voice has moved audiences across the country, making her a top contender.</p>
                <button class="vote-button">Vote Now</button>
            </div>
            <div class="slide nominee-profile">
                <img src="pics/w1.png" alt="Nominee 8" class="nominee-photo">
                <h4>Nominee 8</h4>
                <p><strong>Award Category:</strong> Best Dancer</p>
                <p>Nominee 8 is known for pushing the boundaries of dance with his contemporary routines.</p>
                <button class="vote-button">Vote Now</button>
            </div>
            <div class="slide nominee-profile">
                <img src="pics/w2.png" alt="Nominee 9" class="nominee-photo">
                <h4>Nominee 9</h4>
                <p><strong>Award Category:</strong> Best Leader</p>
                <p>Nominee 9 has organized major university events, showcasing excellent organizational and leadership skills.</p>
                <button class="vote-button">Vote Now</button>
            </div>
        </div>
        <div class="controls">
            <button class="prev-slide" onclick="prevSlide()">&#10094;</button>
            <button class="next-slide" onclick="nextSlide()">&#10095;</button>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
                let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.slide');
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }

    const offset = -currentSlide * 100;
    document.getElementById('slider').style.transform = `translateX(${offset}%)`;
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    // Auto-slide every 5 seconds
    setInterval(nextSlide, 5000);

    </script>>
</body>
</html>
