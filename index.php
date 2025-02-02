<?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-content">
            <h1>Chiyume Chunga</h1>
            <p>Software Developer | IT Enthusiast | Problem Solver</p>
           <!--
            <a href="#about" class="btn">Learn More About Me</a>
            <a href="#projects" class="btn">View My Projects</a>
           -->
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2>About Me</h2>
        <div class="about-content">
            <p>
                Hi, I’m Chiyume Chunga, a passionate developer currently pursuing my Bachelor of Science in Information Technology at Mulungushi University.
                With a strong focus on software development and emerging technologies, I thrive on creating innovative solutions that bridge the gap between technology and everyday challenges.
            </p>
            <p>
                My academic journey has equipped me with robust knowledge in areas such as Software Engineering, Artificial Intelligence, Cloud Computing, Web Technologies, and Mobile Application Programming. I’ve had the opportunity to apply this knowledge through hands-on projects—developing intuitive Android applications and building responsive web platforms that emphasize user experience and efficiency.
            </p>
            <p>
                I believe that technology can transform lives, and I’m always excited to tackle new challenges, whether it’s streamlining processes or developing creative tech solutions. As I continue to learn and grow, I look forward to collaborating on projects that push the boundaries of what’s possible.
            </p>
            <p>Let’s connect and explore how we can innovate together!</p>
            <!--
            <a href="downloads/Resume_CHIYUME%20CHUNGA.pdf" download class="btn">
                <i class="fas fa-download"></i> Download Resume
            </a>
            -->
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <h2>Projects</h2>
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="android">Android</button>
            <!-- <button class="filter-btn" data-filter="web">Web</button> -->
        </div>
        <div class="project-grid">
            <!-- Project 1: Totally Waxed Android Application -->
            <div class="project-card" data-category="android">
                <h3>Totally Waxed Android Application</h3>
                <p>
                    A full-featured Android app for a beauty services business. The app allows users to book appointments,
                    manage their schedules, and process payments securely.
                </p>
                <p><strong>Technologies:</strong> Java, Kotlin, Android SDK, Android Studio, Firebase</p>
                <p><strong>Key Features:</strong></p>
                <ul>
                    <li>User authentication and profile management</li>
                    <li>Appointment scheduling and reminders</li>
                    <li>Secure payment integration</li>
                    <li>Real-time notifications</li>
                </ul>
                <p><strong>Skills Demonstrated:</strong></p>
                <ul>
                    <li>Mobile application development</li>
                    <li>UI/UX design following Material Design principles</li>
                    <li>Integration of third-party APIs (payment gateway)</li>
                    <li>Collaboration with clients to refine features</li>
                </ul>
            </div>


        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact Me</h2>
        <p>Feel free to reach out for collaborations, opportunities, or just to say hello!</p>

        <div class="contact-methods">
            <!-- Email -->
            <div class="contact-method">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>
                    <a href="mailto:chiyumechunga@gmail.com" aria-label="Email Chiyume Chunga" class="link">chiyumechunga@gmail.com</a>
                </p>
            </div>

            <!-- Social Links -->
            <div class="contact-method">
                <i class="fas fa-share-alt"></i>
                <h3>Find Me Online</h3>
                <p>
                    <a href="https://github.com/chiyumechunga" target="_blank" rel="noopener noreferrer" aria-label="Visit my GitHub profile">GitHub</a>
                    <span> | </span>
                    <a href="https://www.linkedin.com/in/chiyume-chunga-904784242/" target="_blank" rel="noopener noreferrer" aria-label="Visit my LinkedIn profile">LinkedIn</a>
                </p>
            </div>
        </div>
    </section>
<?php include 'includes/footer.php'; ?>