<?php require_once("includes/header.php"); ?>

    <section class="info-group">
        <?php
            if(isset($_GET['q']) && $_GET['q']){
                echo '<p class="noteworthy">Thank you for your message!</p>';
            }
        ?>
        <p>At Quilts 4 You, we are dedicated to providing you with the best long arm quilting service in a timely manner.</p>
        <p>Your quilt will always be unique and specially made just for you. We have 16 years of free motion quilting experience and are confident in our ability to deliver beautiful, custom quilts in a reasonable amount of time.</p>
        <p>We have many patterns to choose from and are continually adding to our selection. We look forward to collaborating with you to find a pattern that will enhance and showcase your beautiful quilt.</p>
    </section>

    <nav>
        <h2 class="section-title">Get Started</h2>
        <div class="info-group started-links">
            <a href="#" title="Link to Pricing page">Pricing &gt;&gt;</a>
            <!-- expand this out when clicked -->
            <section class="dropdown-info">
                <h3 class="dropdown-title">Quilting Services</h3>
                <p><span class="quilting-size">Crib (45"x60")</span> <span class="italicize">starting at <span class="bold">$33.75</span></span></p>
                <p><span class="quilting-size">Youth (54"x72")</span> <span class="italicize">starting at <span class="bold">$48.60</span></span></p>
            </section>

            <a href="page.php" title="Link to Patterns page">Patterns &gt;&gt;</a>
            <a href="page.php" title="Link to Thread and Batting page">Thread &amp; Batting &gt;&gt;</a>
            <a href="page.php" title="Link to Preparation Checklist">Preparation Checklist &gt;&gt;</a>
            <a href="page.php" title="Link to Order Information">Order Information &gt;&gt;</a>
        </div>
    </nav>

    <nav class="second-nav">
        <a href="" title="Link to Photo Gallery">Photo Gallery &gt;&gt;</a>
        <a href="" title="Link to About Quilts 4 You">About Quilts 4 You &gt;&gt;</a>
        <a href="" title="Link to Quilt Shop">Quilt Shop &gt;&gt;</a>
    </nav>

    <section>
        <h2 class="section-title">Contact Us</h2>
        <div class="info-group contact-form">
            <h3 id="contact-title">We'd love to hear from you!</h3>
            <form action="pages/contact-us.php" method="POST">
                <div class="form-field">
                    <label for="name-field" class="text-label">Name:</label>
                    <input type="text" id="name-field" name="name-field" class="text-field" required>
                    <input type="text" id="mname" name="mname" class="mname-field">
                </div>

                <div class="form-field">
                    <label for="email-field" class="text-label">Email:</label>
                    <input type="email" id="email-field" name="email-field" class="text-field" required>
                </div>

                <div class="form-field">
                    <label for="message-field" class="message-label">Message:
                        <textarea id="message-field" name="message-field" class="message-field" required></textarea>
                    </label>
                </div>

                <div class="form-field submit-field">
                    <input type="submit" name="submit-contact" value="Send Message">
                </div>
            </form>
        </div>
    </section>

    <section>
        <h2 class="section-title">New Customer Discount</h2>
        <p class="info-group">Are you a new customer? Bring in your quilt and mention our new customer discount to receive <span class="noteworthy">10% off your first machine quilting charge!</span></p>
    </section>

    <section>
        <h2 class="section-title">Customer Reviews</h2>
        <div class="info-group">
            <q>I received my quilt on Saturday and it is beautiful, you did a great job! I have already put the binding on and it is ready to mail to the bride and groom... Again, thanks for the beautiful quilt and I look forward working with you in the future.</q>
            <cite>Jeanice S. from NC</cite>

            <br>

            <q>I was very pleased with your work. You helped me very much with my first big project. I would certainly recommend you to others! Thank you for all your help!</q>
            <cite>Linda K. from UT</cite>

            <br>
            <div id="kaleidoscope-review"></div>
            <q>As always, Ann does an impeccable job with both design and technique. The quilt required a lot of time and effort from me to piece and I appreciate her taking equal time and effort to help in creating a treasured keepsake. Thanks Ann!</q>
            <cite>Sherida P. from UT</cite>
            <p class="image-popup"><a href="#kaleidoscope" title="Click to view Sherida's finished quilt">Click to view finished quilt</a></p>
            <div class="lightbox" id="kaleidoscope">
                <figure>
                    <a href="#kaleidoscope-review" class="closemsg" title="Click to close image"></a>
                    <img src="includes/images/customer_review_quilts/kaleidoscopequilt-xs.jpeg" alt="Picture of finished kaleidoscope quilt with quilting by Ann Morgan">
                </figure>
            </div>

            <br>

            <q>I am so pleased! It is absolutely beautiful! You did just exactly what I wanted, and I can't thank you enough!</q>
            <cite>JS from NV</cite>

            <br>

            <div id="sunflower-review"></div>
            <q>Thank you soooooooo much. It is beautiful and I can not wait for my husband to come home and see it on the bed. You really did a beautiful job. I have a label and I am excited to affix it on the back. I am the proud owner of a quilt that Ann Morgan Quilted!!!!! It is wonderful. I really love the designs. Can't wait to show it off at work tomorrow!!!</q>
            <cite>Caryl J. from UT</cite>
            <p class="image-popup"><a href="#sunflower" title="Click to view Caryl's finished quilt">Click to view finished quilt</a></p>
            <div class="lightbox" id="sunflower">
                <figure>
                    <a href="#sunflower-review" class="closemsg" title="Click to close image"></a>
                    <img src="includes/images/customer_review_quilts/sunflower_quilt-xs.jpeg" alt="Picture of finished sunflower quilt with quilting by Ann Morgan">
                </figure>
            </div>
        </div>
    </section>

<?php require_once("includes/footer.php"); ?>