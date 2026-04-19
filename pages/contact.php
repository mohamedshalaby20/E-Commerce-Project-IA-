<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MA Store</title>
    <link rel="icon" href="../assets/images/ma_logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="../assets/css/style.css">


</head>

<body>
   <?php include 'Layout/Navbar.php'; ?>

    <section id="page-header" class="contact-header">
        <h2>#Lets_talk</h2>
        <p>Leave a Message, We Love to Hear From You</p>
    </section>

    <section class="location">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3459.907828610807!2d31.315385699999997!3d29.866931899999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145836f34a58de69%3A0x49853855f032462a!2sHelwan%20University!5e0!3m2!1sen!2seg!4v1760359922461!5m2!1sen!2seg"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <span>
                        <h5>4 Mohamed Thakeb Street, Abu Elfeda, Zamalek</h5>
                        <p>Visit Us Anytime</p>
                        
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <span>
                        <h5>02 25569061</h5>
                        <p>Sunday to Thursday , 10AM to 3PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <span>
                        <h5>Ma-store23@gmail.com</h5>
                        <p>Email us your query</p>
                    </span>
                </div>
                
            </div>
            <div class="contact-col">
                    <form action="">
                        <input type="text" placeholder="Enter Your Name" required>
                        <input type="email" placeholder="Enter Your Email Address" required>
                        <input type="text" placeholder="Enter Subject" required>
                        <textarea rows="8" placeholder="Message"required></textarea>
                        <button type="submit" class="normal">Send Message</button>

                    </form>
            </div>
        </div>
    </section>

    <section id="footer" class="section-p1">

        <div class="container">
            <div class="row">
                <div class=" footer-box">
                    <img src="../assets/images/ma_logo.ico">
                    <p>Welcome to our online fashion store, where style meets convenience. Explore a carefully curated
                        collection of clothing for men, women, and kids, featuring the latest trends,
                        Enjoy easy browsing, secure payments, and fast shipping, making your shopping experience
                        effortless and enjoyable.</p>
                </div>
                <div class=" footer-box">
                    <p><b>CONTACT US</b></p>
                    <P><i class="fa-solid fa-map"></i> Maadi, Cairo, Egypt — Building 12, Road 9, Near Maadi Metro
                        Station</P>
                    <P><i class="fa-solid fa-phone"></i> 01116447739</P>
                    <P><i class="fa-solid fa-envelope"></i> MA-Store23@gmail.com</P>
                </div>
                <div class=" footer-box">
                    <p><b>SUBSCRIBE NEWLETTER</b></p>
                    <input type="email" class="form-control" placeholder="Your Email">
                    <button type="button" class="normal">Subscribe</button>
                    <br><br>
                    <p>Follow Us</p>
                    <div class="follow">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-x-twitter"></i>
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="../assets/js/script.js"></script>
</body>

</html>