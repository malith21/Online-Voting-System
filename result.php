<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <style>
                * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f9f9f9;
        }

        .services {
            padding: 50px;
        }

        h2 {
            color: red;
            font-size: 20px;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 50px;
        }

        .service-categories {
            display: flex;
            justify-content: center;
            gap: 100px;
        }

        .service {
            background-color: #fff;
            padding: 40px;
            width: 370px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 40px;
            transition: transform 0.3s ease;
        }

        .service img {
            width: 300px;
            height: 400px;
            margin-bottom: 80px;
        }

        .service h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .service p {
            font-size: 14px;
            color: #777;
        }

        .service:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .dropdown-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 16px;
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-sizing: border-box;
        }

        p {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }





        .container {
            margin-bottom: 20px;
        }

        label {
            margin-right: 10px;
            font-size: 1.2em;
        }

        select {
            padding: 10px;
            font-size: 1em;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        #section-content {
            margin-top: 20px;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            font-size: 1.2em;
        }

    </style>




</head>
<body>
<?php include 'header.php'; ?>
    <section class="services">
       
        <h1>Winners of last few years</h1>
        <div class="container">
        <label for="section-select">Choose a category:</label>
        
<select id="section-selector">
        <option value="popularW" selected>Popular Actress</option>
        <option value="popularM">Popular Actor</option>
        <option value="bestW">Best Actress</option>
        <option value="bestM">Best Actor</option>
        <option value="upcomingW">Upcoming Best Actress</option>
        <option value="upcomingM">Upcoming Best Actor</option>
</select>
       
       
</div>

        <section class="popularW active" id="popularW">
                <h2>Popular Actress</h2><br>
                 <p id="selectedValue"></p>
     
        <div class="service-categories">
            <div class="service" id="blood-donations">
                <img src="img/13 (1).jpg" alt="Blood Donations">
                <h1>2023</h1>
                <h2>Ashmika Warma</h2>
                <p>Her iconic role as a rebellious hacker in Code Red became a cultural phenomenon, establishing her as a trailblazer in action films</p>
            </div>
           
            <div class="service" id="health-checkups">
                <img src="img/13 (8).jpg" alt="Health Checkups">
                <h1>2022</h1>
                <h2>Zara Kenal</h2>
                <p>She gained recognition for her deeply emotional role in Whisper of the Heart, and continues to impress in more dramatic roles.y</p>
            </div>
           
            <div class="service" id="blood-requests">
                <img src="img/13 (2).jpg" alt="Blood Requests">
                <h1>2021</h1>
                <h2>Jerry Afenka</h2>
                <p>Request a blood donation through our organization</p>
            </div>
        </div>
        </section>


        <section class="popularM" id="popularM">
        <h2>Popular Actor</h2>
        
    <div class="service-categories">
            <div class="service" id="blood-donations">
                <img src="img/14 (1).jpg" alt="Blood Donations">
                <h1>2023</h1>
                <h2>Ethan Wilder</h2>
                <p>A rugged action star with a soft side, Ethan is known for his performances in high-octane blockbusters and emotional dramas</p>
            </div>

            <div class="service" id="health-checkups">
                <img src="img/14 (8).jpg" alt="Health Checkups">
                <h1>2022</h1>
                <h2>Liam Harrington</h2>
                <p>A charismatic actor with a sharp wit, Liam has been dubbed the "modern-day gentleman."</p>
            </div>

            <div class="service" id="blood-requests">
                <img src="img/14 (3).jpg" alt="Blood Requests">
                <h1>2021</h1>
                <h2>Noah Ramsey</h2>
                <p>A rising star with a penchant for playing morally ambiguous characters, Noah has quickly become a favorite in the indie film circuit</p>
            </div>
        </div>
        </section>

        <section class="bestW" id="bestW">
        <h2>Best Actress</h2>
        <div class="service-categories">
            <div class="service" id="blood-donations">
                <img src="img/13 (9).jpg" alt="Blood Donations">
                <h1>2023</h1>
                <h2>Emma Devine</h2>
                <p>YA fearless performer, Zara has taken on roles ranging from troubled antiheroes to comedic leads.</p>
            </div>

            <div class="service" id="health-checkups">
                <img src="img/13 (4).jpg" alt="Health Checkups">
                <h1>2022</h1>
                <h2>Zara Knight</h2>
                <p>A fearless performer, Zara has taken on roles ranging from troubled antiheroes to comedic leads.</p>
            </div>

            <div class="service" id="blood-requests">
                <img src="img/13(3).jpg" alt="Blood Requests">
                <h1>2021</h1>
                <h2>Ann Sara</h2>
                <p>Her iconic role as a rebellious hacker in Code Red became a cultural phenomenon, establishing her as a trailblazer in action films.</p>
            </div>
        </div>
        </section>

        <section class="bestM" id="bestM">
        <h2>Best Actor</h2>
        <div class="service-categories">
            <div class="service" id="blood-donations">
                <img src="img/14 (7).jpg" alt="Blood Donations">
                <h1>2023</h1>
                <h2>Sebastian Hale</h2>
                <p>Known for his magnetic presence and powerful performances, Sebastian has been a household name for over a decade</p>
            </div>

            <div class="service" id="health-checkups">
                <img src="img/14 (6).jpg" alt="Health Checkups">
                <h1>2022</h1>
                <h2>Jayden Shaw</h2>
                <p>With a laid-back charm and a love for method acting, Jayden is often described as one of the most dedicated performers of his generation.</p>
            </div>

            <div class="service" id="blood-requests">
                <img src="img/14 (4).jpg" alt="Blood Requests">
                <h1>2021</h1>
                <h2>Neve Jonsen</h2>
                <p>His role in Through the Fire earned him widespread praise for his portrayal of a war hero struggling with PTSD.</p>
            </div>
        </div>
        </section>

        <section class="upcomingW" id="upcomingW">
        <h2>Upcoming Best Actress</h2>
        <div class="service-categories">
            <div class="service" id="blood-donations">
                <img src="img/13 (5).jpg" alt="Blood Donations">
                <h1>2023</h1>
                <h2>Sophie Lennox</h2>
                <p>YSophie brings a natural elegance to the screen, with a talent for capturing complex emotions.</p>
            </div>

            <div class="service" id="health-checkups">
                <img src="img/13 (6).jpg" alt="Health Checkups">
                <h1>2022</h1>
                <h2>Lila Montgomery</h2>
                <p>A bold and adventurous actress, Lila is known for playing fierce, independent characters.</p>
            </div>

            <div class="service" id="blood-requests">
                <img src="img/13 (7).jpg" alt="Blood Requests">
                <h1>2021</h1>
                <h2>Ava Laurent</h2>
                <p>Request a blood donation through our organizationAn award-winning actress, Ava has charmed audiences with her graceful performances in both period dramas and modern films.</p>
            </div>
        </div>
    </section>



    <section class="upcomingM" id="upcomingM">
    <h2>Upcoming Best Actor</h2>
    <div class="service-categories">
            <div class="service" id="blood-donations">
                <img src="img/14 (5).jpg" alt="Blood Donations">
                <h1>2023</h1>
                <h2>David Worner</h2>
                <p>Her iconic role as a rebellious hacker in Code Red became a cultural phenomenon, establishing her as a trailblazer in action films.</p>
            </div>

            <div class="service" id="health-checkups">
                <img src="img/14 (9).jpg" alt="Health Checkups">
                <h1>2022</h1>
                <h2>Gilman Khan</h2>
                <p>Known for his work in The Velvet Crown, she’s often hailed as the queen of historical cinema.</p>
            </div>

            <div class="service" id="blood-requests">
                <img src="img/14 (2).jpg" alt="Blood Requests">
                <h1>2021</h1>
                <h2>David Smith</h2>
                <p>His portrayal of a conflicted vigilante in The Dark Edge put him on the map.</p>
            </div>
        </div>
        </section>

    
    
    <?php include 'footer.php'; ?>



    <script>
        
    // Get the select element and sections
    const sectionSelector = document.getElementById('section-selector');
    const sections = document.querySelectorAll('section');

    // Function to show the selected section and hide others
    function showSection(id) {
        sections.forEach(section => {
            if (section.id === id) {
                section.classList.add('active');
            } else {
                section.classList.remove('active');
            }
        });
    }

    // Listen for changes in the select dropdown
    sectionSelector.addEventListener('change', function () {
        const selectedSection = this.value;
        showSection(selectedSection);

      
        document.getElementById(selectedSection).scrollIntoView({ behavior: 'smooth' });
    });


    window.onload = function () {
        const selectedSection = sectionSelector.value;
        showSection(selectedSection);
    };
</script>
    
</body>
</html>
