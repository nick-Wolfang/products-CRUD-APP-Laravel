<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
    <style>
        *{
    margin: 0;
}
.body {
    display: flex;
    flex-direction: row;
}
.sidebar {
    width: 25%;
    background-color: rgb(28, 59, 88);
    color: whitesmoke;
}
.heading {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    text-align: center;
    padding: 10% 0% 10% 0%;
}
.heading_job {
    font-weight: 20px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    margin-top: 10px;
    color: rgb(199, 199, 199);
}
.underline {
    background-color: grey;
    height: 1px;
    border: none;
    margin-bottom: 10px;
}
.underline3 {
    height: 2px;
    width: 87px;
    background-color: #929292;
}
.sidebar_heading_div {
    background-color: #4a525a;
    width: 100%;
    height: 30px;
}
.sidebar_heading {
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: 400;
    margin-top: 20px;
    
}
.underline1 {
    height: 2px;
    width: 66px;
    background-color: #929292;
}
.underline2 {
    height: 2px;
    width: 45px;
    background-color: #929292;
}
.underline5 {
    height: 2px;
    width: 69px;
    background-color: #929292;
}
.sidebar_heading_content {
    flex-direction: column;
    margin: 10px;

}
.contact_element {
    margin-bottom: 15px;
}
.contact_detail {
    font-size: small;
    font-weight: 100;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.all_skills {
    padding: 10px;
}
.skill_title {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
.rectangular_box {
    width: 100%;
    height: 5px;
    background-color: #696969;
}
.percentage {
    width: 70%;
    background-color: white;
    height: 5px;
}
.percentage2 {
    width: 60%;
    background-color: white;
    height: 5px;
}
.percentage3 {
    width: 90%;
    background-color: white;
    height: 5px;
}
.percentage4 {
    width: 70%;
    background-color: white;
    height: 5px;
}
.percentage5 {
    width: 50%;
    background-color: white;
    height: 5px;
}
.percentage6 {
    width: 80%;
    background-color: white;
    height: 5px;
}
.percentage7 {
    width: 60%;
    background-color: white;
    height: 5px;
}
.percentage8 {
    width: 60%;
    background-color: white;
    height: 5px;
}
.skill_level {position: relative;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: small;
    width: 100%;
}
.skill {
    display: flex;
    flex-direction: row;
    width: 100%;
    justify-content: space-between;
}

.content {
    margin: 20px;
}
.text {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-style: oblique;
    font-weight: 500;
}
.work_heading {
    margin: 28px 0px 10px 0px;
}
.work_heading h3 {
    margin: 7px 0px 7px 0px;
    color: rgb(77, 101, 145);
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}

.each_work_spec {
    display: flex;
    flex-direction: row;

}
.year {
    color: #686868;
    font-weight: 600;
}
.job_title {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    letter-spacing: 0.1em;
    margin-bottom: 1.09%;
    font-size: larger;
}
.edu_title {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin-bottom: 1.09%;
    font-size: larger;
}
.job_title_desc {
    margin-left: 5%;

}
.job_desc_location {
    color: #8a8a8a;
    font-style: italic;
    margin-bottom: 0.59%;
}
.job_desc ul li{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin-bottom: 1.5%;
}

.accomp_list {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: 500;
    padding: 1% 0% 0% 9%;
}
.accomp_list ul li {
    margin-bottom: 1%;
}

    </style>
</head>
<body>
    <div class="body">
        <div class="sidebar">
            <div class="heading">
                <h2>Nick Brice Wolfgang</h2>
                <p class="heading_job">Front-end Developer.</p>
                <hr class="underline">
            </div>
            <div class="contact">
                <div class="sidebar_heading_div">
                    <h3 class="sidebar_heading">Contact</h3>
                    <div class="underline1"></div>
                </div>
                <div class="sidebar_heading_content">
                    <div class="contact_element">
                        <h4>Address</h4>
                        <p class="contact_detail">Douala, LT</p>
                    </div>
                    <div class="contact_element">
                        <h4>Phone</h4>
                        <p class="contact_detail">+237 655981028</p>
                    </div>
                    <div class="contact_element">
                        <h4>E-mail</h4>
                        <p class="contact_detail">nickbricewolfgang@gmail.com</p>
                    </div>
                    <div class="contact_element">
                        <h4>Github</h4>
                        <p class="contact_detail"><a href="https://github.com/nick-Wolfang">My Github</a></p>
                    </div>
                    <div class="contact_element">
                        <h4>LinkedIn</h4>
                        <p class="contact_detail">Nick Brice Wolfgang</p>
                    </div>
                </div>
            </div>
            <div class="contact">
                <div class="sidebar_heading_div">
                    <h3 class="sidebar_heading">Skills</h3>
                    <div class="underline2"></div>
                </div>
                <div class="all_skills">
                    <div class="each_skill">
                        <h5 class="skill_title">ReactJS</h5>
                        <div class="rectangular_box">
                            <div class="percentage"></div>
                        </div>
                        <div class="skill">
                            <div></div>
                            <div><span class="skill_level">Good</span></div>
                        </div>                    
                    </div>
                    <div class="each_skill">
                        <h5 class="skill_title">JavaScript</h5>
                        <div class="rectangular_box">
                            <div class="percentage2"></div>
                        </div>
                        <div class="skill">
                            <div></div>
                            <div><span class="skill_level">Medium</span></div>
                        </div>
                    </div>
                    <div class="each_skill">
                        <h5 class="skill_title">HTML5/CSS3</h5>
                        <div class="rectangular_box">
                            <div class="percentage3"></div>
                        </div>
                        <div class="skill">
                            <div></div>
                            <div><span class="skill_level">Excellent</span></div>
                        </div>
                    </div>
                    <div class="each_skill">
                        <h5 class="skill_title">Firebase Cloud Storage</h5>
                        <div class="rectangular_box">
                            <div class="percentage8"></div>
                        </div>
                        <div class="skill">
                            <div></div>
                            <div><span class="skill_level">Medium</span></div>
                        </div>
                    </div>
                    <div class="each_skill">
                        <h5 class="skill_title">Material Design <br> (MUI, Styled-Components, Tailwind CSS)</h5>
                        <div class="rectangular_box">
                            <div class="percentage4"></div>
                        </div>
                        <div class="skill">
                            <div></div>
                            <div><span class="skill_level">Good</span></div>
                        </div>
                    </div>
                    <div class="each_skill">
                        <h5 class="skill_title">Code Versioning <br> (Git/Github/Gitlab)</h5>
                        <div class="rectangular_box">
                            <div class="percentage4"></div>
                        </div>
                        <div class="skill">
                            <div></div>
                            <div><span class="skill_level">Good</span></div>
                        </div>
                    </div>
                    <div class="each_skill">
                        <h5 class="skill_title">Adobe Illustrator/Photoshop</h5>
                        <div class="rectangular_box">
                            <div class="percentage5"></div>
                        </div>
                        <div class="skill">
                            <div></div>
                            <div><span class="skill_level">Medium</span></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="contact">
                <div class="sidebar_heading_div">
                    <h3 class="sidebar_heading">Languages</h3>
                    <div class="underline3"></div>
                </div>
                <div class="all_skills">
                    <ul>
                        <li>
                            <div class="each_skill">
                                <h5 class="skill_title">French</h5>
                                <div class="rectangular_box">
                                    <div class="percentage6"></div>
                                </div>
                                <div class="skill">
                                    <div></div>
                                    <div><span class="skill_level">Excellent</span></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="each_skill">
                                <h5 class="skill_title">English</h5>
                                <div class="rectangular_box">
                                    <div class="percentage7"></div>
                                </div>
                                <div class="skill">
                                    <div></div>
                                    <div><span class="skill_level">Good</span></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contact">
                <div class="sidebar_heading_div">
                    <h3 class="sidebar_heading">Hobbies</h3>
                    <div class="underline5"></div>
                </div>
                <div class="all_skills">
                    <ul>
                        <li>
                            <div class="each_skill">
                                <h5 class="skill_title">Tourism</h5>
                            </div>
                        </li>
                        <li>
                            <div class="each_skill">
                                <h5 class="skill_title">Gaming</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="short_presentation">
                <p class="text">
                    Creative ReactJS Developer with almost 2 years designing useful, approachable user interfaces. 
                    Knowledgeable of all aspects of Facebook's design best practices and emerging UI development
                    techniques. <br> Skilled at connecting exceptional assets with users via creative UI frameworks and careful user experience optimization.
                    <br>
                    Complex problem-solver with analytical and driven mindset. Dedicated to achieving demanding 
                    development objectives according to tight schedules while producing impeccable code.
                    <br>
                    Hardworking and passionate job seeker, with strong organization skills eager to secure 
                    entry-level ReactJS Developer position. Ready to help team achieve company goals. 
                </p>
            </div>
            <div class="work">
                <div class="work_heading">
                    <hr>
                    <h3>Work History</h3>
                    <hr>
                </div>
                <div class="each_work_spec">
                    <div class="year">2022-01 - <br> 2022-03</div>
                    <div class="job_title_desc">
                        <div class="job_title"><h4>React Developer</h4></div>
                        <p class="job_desc_location">Glom Startup, Remote</p>
                        <div class="job_desc">
                            <ul>
                                <li><p class="job_desc_text">
                                    Maintained High-level expertise in React state management strategies.
                                </p></li>
                                <li><p class="job_desc_text">
                                    Updated old code bases to modern development standards, imporving functionality.
                                </p></li>
                                <li><p class="job_desc_text">
                                    Designed intuitive graphical user interfaces to improve user experience.
                                </p></li>
                                <li><p class="job_desc_text">
                                    Discussed issues with team members to provide resolution and apply best practices.
                                </p></li>
                                <li><p class="job_desc_text">
                                    Introduced agile methodologies and development best practices to enhance product development.
                                </p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="each_work_spec">
                    <div class="year">2021-11 - <br> 2021-11</div>
                    <div class="job_title_desc">
                        <div class="job_title"><h4>Freelance Front-end Developer</h4></div>
                        <p class="job_desc_location">Upwork.com, Remote</p>
                        <div class="job_desc">
                            <ul>
                                <li><p class="job_desc_text">
                                    Applied emerging technologies to update and maintain site applicability.
                                </p></li>
                                <li><p class="job_desc_text">
                                    Discussed site and app requirements with clients to produce actionable development plans.
                                </p></li>
                                <li><p class="job_desc_text">
                                    Engaged with clients to plan and optimize site issues and queries.
                                </p></li>
                                <li><p class="job_desc_text">
                                    Determined coding requirements for specialized scripts.
                                </p></li>
                                <li><p class="job_desc_text">
                                    Coded websites using HTML, CSS, JavaScript languages.
                                </p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="education">
                <div class="work_heading">
                    <hr>
                    <h3>Education</h3>
                    <hr>
                </div>
                <div class="each_work_spec">
                    <div class="year">2020-10 - <br> 2023-06</div>
                    <div class="job_title_desc">
                        <div class="edu_title"><h4>Level 2 (DEUG) Computer Science</h4></div>
                        <p class="job_desc_location">University of Douala - <br> Dla, Cameroon</p>
                    </div>
                </div>
                <div class="each_work_spec">
                    <div class="year">2017-09 - <br> 2019-08</div>
                    <div class="job_title_desc">
                        <div class="edu_title"><h4>General Certificate Of Education(GCE) <br>
                            Advanced Level : Science Education</h4></div>
                        <p class="job_desc_location">King David Comprehensive College - <br>
                            Dla, Cameroon    
                        </p>
                    </div>
                </div>
                <div class="each_work_spec">
                    <div class="year">2012-09 - <br> 2017-08</div>
                    <div class="job_title_desc">
                        <div class="edu_title"><h4>General Certificate Of Education(GCE) <br>
                            Ordinary Level : General Education</h4></div>
                        <p class="job_desc_location">GBHS Nyalla - <br>
                            Dla, Cameroon    
                        </p>
                    </div>
                </div>

            </div>
            <div class="accomplishments">
                <div class="work_heading">
                    <hr>
                    <h3>accomplishments</h3>
                    <hr>
                </div>
                <div class="accomp_list">
                    <ul>
                        <li>
                            Successfully completed a CRUD Recipe app with Firebase Realtime Database & ReactJS.
                        </li>
                        <li>
                            Successfully completed a messenger clone app with Firebase Cloud Storage.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="accomplishments">
                <div class="work_heading">
                    <hr>
                    <h3>Interests</h3>
                    <hr>
                </div>
                <div class="accomp_list">
                    <ul>
                        <li>
                            Big Data
                        </li>
                        <li>
                            Artificial Intelligence
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>