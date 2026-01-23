<html>
 <head>
  <title>
    SLIITvote.lk
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  
  <link rel="stylesheet" href="styles.css">
</head>   

<?php include 'header.php'; ?>
    
    <section class="hero">
        <div class="hero-content">
            <h1>Empowering Your Voice at SLIIT <br> Cast Your Vote Today!</h1>
            <p>Participate in shaping the future of student leadership and celebrate the spirit of SLIIT. Check out our nominees and vote for your representatives.</p>
            <div class="hero-links">
                
                <a href="nominee2.php">Meet the Nominees</a>
                <a href="result.php">Explore SLIITvote.lk</a>
            </div>
        </div>
    </section>

   


   <div class="intro-section">
    <div class="intro-text">
     <h2>
      New to SLIITvote.lk?
     </h2>
     <p>
     Welcome to the SLIIT Online Voting System. Your platform to
      cast votes for nominees in various award categories 
     </p>
     <div class="intro-buttons">
      <a class="get-started" href="sign-up.php">
       Get Started
      </a>
      <a href="#">
       Learn more
      </a>
     </div>
    </div>
    <div class="intro-image">
     <img alt="Intro Image" height="200" src="pics/intro.png" width="270"/>
    </div>
   </div><br>
   <div class="countdown-section">
    <h2>Next Voting Starts In:</h2>
    <div id="countdown-timer">00:00:00</div>
    <script>
            // Set the date and time for the next voting event
        var countDownDate = new Date("Oct 20, 2024 15:00:00").getTime();

        // Update the countdown every 1 second
        var countdownInterval = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes, and seconds
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="countdown-timer"
            document.getElementById("countdown-timer").innerHTML = hours + ":" + minutes + ":" + seconds;

            // If the countdown is finished, display a message
            if (distance < 0) {
                clearInterval(countdownInterval);
                document.getElementById("countdown-timer").innerHTML = "Voting has started!";
            }
        }, 1000);

    </script>
   </div>

   <div class="secondary-banner">
    <img alt="Secondary Banner" height="240" src="pics/iwt1.jpg" width="900"/>
   </div>
   

    <div class="how-it-works-section">
        <h2>How It Works</h2>
        <div class="steps">
            <div class="step">
                <i class="fas fa-user-plus"></i>
                <h3>Step 1: Register</h3>
                <p>Create an account with just a few details to get started.</p>
            </div>
            <div class="step">
                <i class="fas fa-users"></i>
                <h3>Step 2: View Nominees</h3>
                <p>Explore the nominees for each category before voting.</p>
            </div>
            <div class="step">
                <i class="fas fa-vote-yea"></i>
                <h3>Step 3: Cast Your Vote</h3>
                <p>Choose your favorite nominee and submit your vote securely.</p>
            </div>
            <div class="step">
                <i class="fas fa-chart-line"></i>
                <h3>Step 4: View Results</h3>
                <p>Check the results once voting is completed.</p>
            </div>
        </div>
    </div>
    
    <div class="news-section">
    <h2>
        Latest News
    </h2>
    <p>
        Stay updated with the recent developments, announcements, and features from our platform.
    </p>

    <div class="news-items">
        <div class="news-item">
            <i class="fas fa-newspaper"></i>
            <h3>
                Voting Now Open for Annual Awards
            </h3>
            <p>
                The online voting system for this year's awards is officially live. Cast your vote for the Best Singer, Best Dancer, Best Leader, and more!
            </p>
            <a href="#">
                Learn more
            </a>
        </div>
        <div class="news-item">
            <i class="fas fa-bullhorn"></i>
            <h3>
                Deadline for Nominee Registrations Extended
            </h3>
            <p>
                Good news! The deadline to register as a nominee for the awards has been extended by one week. Don’t miss your chance to enter the competition.
            </p>
            <a href="#">
                Learn more
            </a>
        </div>
        <div class="news-item">
            <i class="fas fa-info-circle"></i>
            <h3>
                New Feature: Real-Time Voting Updates
            </h3>
            <p>
                We’ve introduced real-time voting updates. Stay informed on the progress of your favorite nominees with our new live feed!
            </p>
            <a href="#">
                Learn more
            </a>
        </div>
    </div>
</div>



   <div class="statistics-section">
    <h2>Our Impact</h2>
    <div class="statistics">
        <div class="stat">
            <i class="fas fa-users"></i>
            <h3>5,000+</h3>
            <p>Voters</p>
        </div>
        <div class="stat">
            <i class="fas fa-trophy"></i>
            <h3>50+</h3>
            <p>Awards</p>
        </div>
        <div class="stat">
            <i class="fas fa-vote-yea"></i>
            <h3>10,000+</h3>
            <p>Votes Cast</p>
        </div>
    </div>
</div>
<br><br>


  <?php include 'footer.php'; ?>
</body>