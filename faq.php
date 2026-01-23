<html>
 <head>
  <title>
   VOTE.lk
  </title>
  <link rel="stylesheet" href="faq.css">
 </head>

<body> 
<?php include 'header.php'; ?>

   
<header>FAQ - Frequently Asked Questions</header>

    <div class="faq-container">
        <h2>Common Questions</h2>

        <div class="faq-item">
            <h3>What is “internet voting”?</h3>
            <p>“Internet voting” is often called “electronic ballot return” and means returning a voted ballot over the internet — including via mobile apps, email, fax, or via a website.</p>
        </div>

        <div class="faq-item">
            <h3>Is there any evidence that internet voting is secure?</h3>
            <p>Cybersecurity experts warn that internet voting is unsafe and makes U.S. elections easy targets for attackers. The National Academies of Sciences, Engineering and Medicine states that the Internet should not be used for returning marked ballots and that robust security and verifiability guarantees are needed. The Department of Homeland Security and federal agencies viewed electronic ballot return as high risk in the 2020 General Election.</p>
        </div>

        <div class="faq-item">
            <h3>Does internet voting keep a voter’s ballot private?</h3>
            <p>Current internet voting technology fails to ensure a combination of privacy and identification for all voters, as it requires them to confirm their identity, exposing them to widespread privacy violations and compromising their right to a private ballot.</p>
        </div>

        <div class="faq-item">
            <h3>Can election officials conduct an audit of an election if internet voting is the primary voting method?
            </h3>
            <p>Voter-verified paper ballots are considered secure due to their ability to be audited and recounted, while electronic ballots cannot be meaningfully audited, as voters cannot verify the accuracy of the printed copy, thereby limiting the reliability of voter intent.</p>
        </div>

        <div class="faq-item">
            <h3>What types of attacks threaten the security of votes cast over the internet?</h3>
            <pNo internet-connected system of any kind, let alone a voting system, is invulnerable to attack, whether the votes are transmitted by email, fax, a web portal, or via a mobile app. </p>
        </div>

        <div class="faq-item">
            <h3>What makes internet voting less safe than everything else I do on the internet?</h3>
            <p>Internet voting technology currently lacks verifiability and traceability for individual voters, allowing jurisdictions to track voted ballots through IP addresses, email addresses, or submitted attachments. This limitation is not a problem for services like mobile banking and e-commerce. The security of voters' devices, potentially corrupted with malware or viruses, is also unknown, potentially tampering with ballots or causing interference with transmission.</p>
        </div>

        <div class="faq-item">
            <h3>Who regulates internet voting? </h3>
            <p>Unlike physical voting equipment, there are currently no federal standards, testing, or certification procedures to regulate internet voting systems. </p>
        </div>

    </div>

    <script>
        document.querySelectorAll('.faq-item h3').forEach(item => {
            item.addEventListener('click', () => {
                const faqItem = item.parentElement;

                faqItem.classList.toggle('active');
            });
        });
    </script>



<?php include 'footer.php'; ?>
</body>
</html>