<?php
    $page = "Home";
    $path="";
    include($path . "inc/nav.php");
?>

    <header>
            <h1>Dessa Shapiro</h1>
    </header> 
    <main>
        <!-- Main image -->
        <img src="../assets/images/dessa_pretty.jpg" alt="Dessa Going To School" id="headshot">
        <section>
            <h2>About Me</h2>
                <section id="Bio">
                    <h3>Who am I?</h3>
                    <p class="groupedParagraghs">Hi! My name is Dessa Shapiro, I am an 19-year-old second-year student at the Rochester Institute of Technology (RIT), pursuing a major in New Media Interactive Development. Born and raised in Marin County, Northern California, I have always been deeply interested in technology and its potential to shape our world. At RIT, I am focusing on building a strong foundation in computing with the goal of establishing a career in the technology sector.</p>
                </section>

                <section id="Family">
                    <h3>Background and Family</h3>
                    <p>My family is a cornerstone of my support and inspiration. My mother, Larissa, and my father, Adam, have always encouraged my academic and personal pursuits. I have an older brother, Evan, who has been a great mentor and friend throughout my life. I also have a beloved dog, Jasmine, who brings joy and companionship to our family.</p>
                </section>
        </section>
             
        <section class="mainsec" id="second">
            <section id="hobbies">
                <h2>Passions and Hobbies</h2>
                    <div>
                        <p>Outside of my academic interests, I am passionate about a variety of activities that keep me active and creative. My hobbies include:</p>
                        <ul>
                            <li>Swimming: I enjoy the physical and mental benefits of swimming, which helps me stay fit and relaxed.</li>
                            <li>Drawing and Design: As someone who is fascinated by design, I love to draw and explore various design techniques.                        </li>
                            <li>Dancing: Dance is a way for me to express myself creatively and maintain a sense of rhythm and grace.</li>
                            <li>Reading: I have a deep love for literature and often find myself lost in books that inspire and challenge my thinking.</li>
                            <li>Aerial Arts: Practicing aerial arts combines my love for physical activity with artistic expression.</li>
                            <li>Surfing: Growing up in California, I developed a passion for surfing, which allows me to connect with nature and enjoy the ocean.</li>
                        </ul>
                    </div>
                    <div id="pictures">
                        <img src="../assets/images/aerial1.jpg" alt="Dessa Doing Aerial">
                    </div>
            </section>
            <section id="Looking Ahead">
                <h2>Looking Ahead</h2>
                <p>As I continue my studies at RIT, I am excited to explore the vast opportunities within the computing field and am eager to apply my knowledge and skills to real-world challenges. I am particularly interested in how technology can be leveraged to create innovative solutions and improve user experiences. Thank you for visiting my page. I am enthusiastic about connecting with like-minded individuals and professionals in the tech industry. Feel free to reach out to me through my <a href="contact.php">Contact</a> page</p>
            </section>
        </section>
        

        <!-- Contact section should be its own element -->
        <!-- <section id="contactme">
            <h3>Contact Me</h3>
            <nav id="contact">
                <ul>
                    <li><a href="https://www.instagram.com/dessa_lives_/">Instagram</a></li>
                    <li>Email me at: djs8926@rit.edu</li>
                </ul>
            </nav>
        </section> -->

<?php
    include($path . "inc/footer.php");
?>
    