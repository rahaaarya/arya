<?php include("header.php");
session_start();
?>
<!-- Contact Us -->


<section id="contact">
    <div class="contactus">
        <div class="title mt-5">
            <h1>Contact Us</h1>
        </div>
        <div class="box">
            <div class="contact form">
                <h3>Send a Message</h3>
                <form action="proses/h_contact.php" method="post">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input type="text" placeholder="Jhon" name="fName" autocomplete="off" required>
                            </div>
                            <div class="inputBox">
                                <span>Last Name</span>
                                <input type="text" placeholder="Doe" name="lName" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="email" placeholder="jhondhon@gmail.com" name="email" autocomplete="off" required>
                            </div>
                            <div class="inputBox ">
                                <span>Mobile</span>
                                <div class="d-flex flex-row">
                                    <input style="width: 8%;" type="text" value="+62" disabled>
                                    <input class="w-100" type="number" placeholder="8245678903" name="phone" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="row50">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea name="message" placeholder="write your message here..." autocomplete="off" required></textarea>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="send" name="submit" onclick="confirm('Anda Yakin Ingin Mengirim Data Tersebut?')">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- info box -->
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <p>Bandung, Jawa Barat, <br> Indonesia</p>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <a href="mailto:stmikindonesia@gmail.com">stmikindonesia@gmail.com</a>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-phone"></i></span>
                        <a href="tel:+6281221918120">+62 81221918120</a>

                    </div>

                </div>
                <!-- social media links -->
                <ul class="sci">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>

                </ul>


            </div>
            <!-- map -->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.88275510375!2d-118.7413800593275!3d34.02003924648305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20California%2C%20Amerika%20Serikat!5e0!3m2!1sid!2sid!4v1682464742203!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

</section>
<?php
include 'footer.php'; ?>