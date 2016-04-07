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
            <p class="title-link" title="Click to view Pricing info">Pricing &gt;&gt;</p>
            <section class="dropdown-info">
                <h3 class="dropdown-title">Quilting Services*</h3>
                <p><span class="quilting-size">Crib (45"x60")</span> <span class="italicize">starting at <span class="bold">$33.75</span></span></p>
                <p><span class="quilting-size">Youth (54"x72")</span> <span class="italicize">starting at <span class="bold">$48.60</span></span></p>
                <p><span class="quilting-size">Twin (72"x90")</span> <span class="italicize">starting at <span class="bold">$81.00</span></span></p>
                <p><span class="quilting-size">Full (80"x90")</span> <span class="italicize">starting at <span class="bold">$90.00</span></span></p>
                <p><span class="quilting-size">Queen (90"x108")</span> <span class="italicize">starting at <span class="bold">$121.50</span></span></p>
                <p><span class="quilting-size">King (96"x108")</span> <span class="italicize">starting at <span class="bold">$129.60</span></span></p>
                <p><span class="quilting-size">XL King (108"x108")</span> <span class="italicize">starting at <span class="bold">$145.80</span></span></p>
                <p class="comment"><span class="bold">*</span>Minimum quilting charge of $25 and minimum thread charge of $2. Additional charges and rush fees may apply. Please <a href="#contact-us-form">contact us for questions or a quote</a>.</p>
            </section>

            <p class="title-link" title="Link to Patterns page">Patterns &gt;&gt;</p>
            <section class="dropdown-info">
                <h3 class="dropdown-title">Custom Quilting Patterns</h3>
                <p>You can choose between <span class="bold italicize">Stipple</span> or <span class="bold italicize">Loops</span> for the overall quilt pattern, then choose <span class="bold italicize">one accent pattern</span>.</p>
                <p><a href="includes/files/basic-meandering-patterns.pdf" target="_blank">Basic Meandering Patterns <span class="italicize">(PDF download)</span></a></p>
                <p>For 2+ accent patterns or Semi-Custom patterns, <span class="bold italicize">additional charges apply</span>.</p>
                <p><a href="includes/files/semi-custom-patterns.pdf" target="_blank">Semi-Custom Patterns <span class="italicize">(PDF download)</span></a></p>
                <p>Please <a href="#contact-us-form">contact us</a> for questions or a quote.</p>
                <p>
                    <img src="includes/images/country-rose-and-stipple.jpg" alt="Image of Country Rose and Stipple Quilting Patterns">
                    <br>
                    <span class="comment">Example of Country Rose and Stipple patterns</span>
                </p>
            </section>

            <p class="title-link" title="Link to Thread and Batting page">Thread &gt;&gt;</p>
            <section class="dropdown-info">
                <h3 class="dropdown-title">Thread Colors:</h3>
                <ul>
                    <li>White, Cream, Black, Dark Grey, Dark Purple, Yellow Gold</li>
                    <li><span class="bold">Pastels:</span> Light Blue, Light Yellow, Light Green, Light Lavender, Light Pink</li>
                    <li><span class="bold">Blues:</span> Med Blue, Navy Blue, Royal Blue</li>
                    <li><span class="bold">Greens:</span> Light Sage, Med Sage, Olive, Dark Forest, Christmas Green</li>
                    <li><span class="bold">Reds:</span> Plum, Burgundy, Christmas Red, Rose </li>
                    <li><span class="bold">Browns:</span> Dark Brown, Med Brown, Light Tan, Tan Gold</li>
                </ul>
                <p>
                    <span class="comment">(Basic Thread: $2.00 per bobbin, double capacity)</span>
                    <br>
                    All threads are machine quilting quality. We will try to match your thread selection as close as possible.
                </p>
            </section>

            <p class="title-link" title="Link to Thread and Batting page">Batting &gt;&gt;</p>
            <p class="title-link" title="Link to Preparation Checklist">Preparation Checklist &gt;&gt;</p>
            <p class="title-link" title="Link to Order Information">Order Information &gt;&gt;</p>
        </div>
    </nav>

    <nav class="second-nav">
        <a href="" title="Link to Photo Gallery">Photo Gallery &gt;&gt;</a>
        <a href="" title="Link to About Quilts 4 You">About Quilts 4 You &gt;&gt;</a>
        <a href="" title="Link to Quilt Shop">Quilt Shop &gt;&gt;</a>
    </nav>

    <section id="contact-us-form">
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
        <p class="info-group">
            Are you a new customer? Bring in your quilt and mention our new customer discount to receive
            <br> <span class="noteworthy">10% off your first machine quilting charge!</span>
        </p>
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