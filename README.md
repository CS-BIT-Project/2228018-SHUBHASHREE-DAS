SMARTPrep

SMARTPrep is a web application designed to help students prepare for exams by providing access to previous year question papers and mock tests. The platform offers a user-friendly interface with features like login/signup, feedback submission, and a responsive design for seamless navigation.

Features





User Authentication: Secure login and signup functionality using PHP sessions.



Previous Year Papers: Access question papers from 2017 to 2024, organized by year in a honeycomb grid layout.



Mock Tests: Dedicated section for practicing mock tests.



Feedback System: Users can submit feedback via a dedicated page.



Responsive Design: Mobile-friendly navigation with a collapsible menu.



Social Media Integration: Links to social media platforms for community engagement.



Modern UI: Styled with Bootstrap, Font Awesome, and custom CSS for a polished look.

Tech Stack





Frontend:





HTML5, CSS3, JavaScript



Bootstrap 5



Font Awesome



GSAP (GreenSock Animation Platform) for animations



Backend:





PHP for session management and server-side logic



External Libraries:





CDN-hosted Bootstrap, Font Awesome, GSAP (TimelineMax, TweenMax)

Installation





Clone the Repository:

git clone https://github.com/your-username/SMARTPrep.git



Set Up a Local Server:





Use XAMPP, WAMP, or any PHP-supported server.



Place the project folder in the server's root directory (e.g., htdocs for XAMPP).



Configure the Environment:





Ensure PHP is installed and configured.



No database is required for the current setup (update if you add a database later).



Run the Application:





Start the server and navigate to http://localhost/SMARTPrep in your browser.

Usage





Home Page: View the main landing page with a hero section and navigation menu.



Login/Signup: Register or log in to access personalized features.



Question Papers: Click on a year in the honeycomb grid to access papers (e.g., year/2024.html).



Mock Tests: Navigate to the mock test section via the menu.



Feedback: Submit feedback through the feedback page.



Logout: Securely log out to end the session.

Folder Structure

SMARTPrep/
├── images/                 # Image assets (e.g., homep.jpg, gridblack.jpg)
├── neet_mock_test/         # Mock test-related files (e.g., mocks.html)
├── year/                   # Yearly question paper files (e.g., 2024.html)
├── style.css               # Custom CSS styles
├── grid.css                # Styles for honeycomb grid
├── main.js                 # JavaScript for animations and interactivity
├── login.php               # Login page
├── signup.php              # Signup page
├── feedback.php            # Feedback page
├── logout.php              # Logout script
├── index.php               # Main homepage

Contributing





Fork the repository.



Create a new branch (git checkout -b feature-branch).



Make your changes and commit (git commit -m "Add feature").



Push to the branch (git push origin feature-branch).



Open a Pull Request.

License

This project is licensed under the MIT License. See the LICENSE file for details.

Contact

For queries, reach out via the feedback page or connect with us on:





GitHub: Your GitHub Profile



Twitter: Your Twitter Handle



Instagram: Your Instagram Handle



📚 Learn. Practice. Succeed.
© 2025 SMARTPrep. All rights reserved
