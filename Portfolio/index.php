<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.3/esm/ionicons.min.js" ></script>
    <title>Portfolio.</title>
</head>
<body>
    <!-- Header section start -->
    <header>
        <a href="#" class="logo"><h2>Portfolio<span>.</span></h2></a>
        <div class="toggle">x</div>
        <ul class="navigation">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </header>
    <!-- Header section end -->

    <!-- Banner section start -->
    <section class="banner" id="banner">
        <div class="row">
            <div class="col50">
                <small>Hello I'm</small>
                <h2>Deeproshan Kumar</h2>
                <p>UI/UX Developer <span>|</span> Web Developer <span>|</span> Programmer <span>|</span> Youtuber</p>
                <p><a href="mailto:deeproshankumar123@gmail.com"><span><i class="fa fa-envelope" aria-hidden="true"></i></span> deeproshankumar123@gmail.com</a></p>
                <p><a href="tel:+917271053944"><span><i class="fa fa-phone" aria-hidden="true"></i>
                </span> +91 7271053944</a></p>
                <a href="#" class="button">Download CV</a>
            </div>
            <div class="col50" id="profile-pic">
                <div class="imgBx"></div>
                <ul class="social-icons">
                    <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-github"></ion-icon></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Banner section end  -->

    <!-- About Us Section Start -->
    <section id="about" class="about">
        <h2 class="title"><span>A</span>bout Me</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias in esse aspernatur explicabo. Recusandae animi nulla deleniti dolore. Recusandae, aperiam!</p>
        <div class="container">
            <div class="left"></div>
            <div class="right">
                <h2>About <span>Me</span></h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam vel neque debitis, delectus quo perspiciatis sapiente cumque accusantium in excepturi sunt eveniet, tempora, quam ad quasi molestiae adipisci dolor et culpa fugit quisquam dolore iste. Totam magnam aliquid eum quis assumenda quia commodi voluptatem. Illum perferendis, recusandae, illo ea quis eum, porro amet deserunt et voluptas voluptatum. Totam, id voluptatibus. Distinctio expedita, enim aliquid itaque iusto, culpa earum assumenda tempora suscipit necessitatibus hic voluptatem, quisquam ex tenetur veritatis. Minima dicta ullam eligendi illum cum possimus harum ipsum error pariatur nobis nisi voluptas aliquam rerum exercitationem, ipsa fuga expedita, fugiat ratione explicabo maxime eum esse? Distinctio voluptatum molestiae laborum deleniti id eveniet adipisci dolorum. Nulla veniam reiciendis temporibus natus hic, praesentium beatae provident ab voluptates quod. Quaerat est laboriosam accusantium quia qui recusandae. Cumque architecto, provident eos laborum nisi beatae veniam in impedit error laboriosam, aut eveniet velit sequi, est maiores! Ipsam adipisci voluptas a excepturi quae illum at placeat qui culpa quo sequi praesentium voluptatem expedita natus provident inventore, saepe recusandae vel eum, dolor ut. In esse accusamus ducimus labore dolorum ipsa deleniti architecto eveniet minus, blanditiis facilis consequatur ipsum quisquam beatae placeat aut vero, saepe dolores quaerat sequi eius.

                </p>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Contact section start -->
    <section class="contact" id="contact">
        <h2 class="title"><span>C</span>ontact Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias in esse aspernatur explicabo. Recusandae animi nulla deleniti dolore. Recusandae, aperiam!</p>
        <div class="container">
            <div class="left-pannel">
                <div class="contact-info">
                    <p><span><i class="fa-fa-marker"></i>Address :</span>Dharawan, Kusumhi Kalan, Nandganj<br>Ghazipur UP (India).</p>
                    <p><span><i class="fa-fa-phone"></i>Contact No. :</span>+91 7271053944</p>
                    <p><span><i class="fa-fa-envelope"></i>Email :</span> deeproshankumar123@gmail.com</p>
                </div>
            </div>
            <div class="right-pannel">
                <form>
                    <input type="text" name="" placeholder="First Name">
                    <input type="text" name="" placeholder="Last Name">
                    <input type="email" name="" id="" placeholder="example@gmail.com">
                    <textarea rows="6" cols="20" placeholder="Type your message here..."></textarea>
                    <input type="submit"  class="btns" value="Send">
                </form>
            </div>
        </div>
    </section>
    <!-- Contact section end  -->

    <!-- Copyright section start -->
    <section id="copyright">
        <p>&copy; <a href="#">Portfolio. </a>2021-22. All rights reserverd. Theme made with &hearts; by Deeproshan Kumar.</p>
    </section>
    <!-- Copyright section end -->

    <!-- Go on top button start -->
    <div id="trigger">
        <a href="#" >&uarr;</a>
    </div>
    <!-- Go on top button end -->  

    <script>
        window.addEventListener('scroll',function(){
            const header=document.querySelector('header');
            header.classList.toggle('sticky',window.scrollY>0);
        });
    </script>
</body>
</html>