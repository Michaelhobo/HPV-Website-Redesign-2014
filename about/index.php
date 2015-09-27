<?php echo file_get_contents("../header.html"); include $_SERVER['DOCUMENT_ROOT'].'/about/about_functions.php';?>
<link rel="stylesheet" href="/css/about.css">
<div class="title">About</div>
<div class="content">
        <p>The UC Berkeley Human Powered Vehicle Team is a student group that works to conceptualize and manufacture innovative forms of human powered transportation technology, culminating in participation in ASME’s Human Powered Vehicle Competition. During this process, members gain valuable experience in the engineering design process, business management skills, and hands-on building experience.</p>
<div class="section_header">What We Do</div>
<p>The UC Berkeley Human Powered Vehicle Team builds aerodynamic recumbent bicycles as an engineering project for competition in the ASME Human Powered Vehicle Competition.</p>
<div class="subsection_header">Advanced Materials</div>
<p>Extensive use of carbon fiber and expertise garnered from Cal professors gives the team an edge to do what others cannot with composite materials. The team currently employs pre-impregnated carbon fiber for in-house tube rolling used in the structural members of the frame. Dry fabric is also used in wet layups to create other components on the frame. Metal components are made of TIG welded aluminum for weight saving and for aluminum’s properties in mating with carbon fiber.</p>
<div class="subsection_header">Computer Modeling</div>
<p>The ability to design on the computer drastically reduces the time members need to spend manufacturing. Computer modeling also maximizes the team’s cost efficiency; team members plan out exactly where work time and resources will be allotted before any specific building process begins. The team currently uses standard package CAD software to design all components and run all FEA and CFD testing on the current bike. CNC software is also used to program HAAS CNC machines for tooling molds. The team uses University licensed Solidworks and Mastercam software for CAD and CNC work.</p>
<div class="subsection_header">Manufacturing and Machining</div>
<p>Currently the team completes all work in-house at the UC Berkeley machine shop and at a UC Berkeley extension in Richmond. While bringing their inventive conceptions of human powered vehicles to life, team members learn how to design parts that both meet design specification and can be manufactured in a timely and cost-effective manner.</p>
<div class="section_header">Teams</div>
<p>These sub-teams operate individually to complete different parts of the bike, and meet up with the rest of the sub-teams each week to collaborate as a cohesive team.</p>
<ul id="team_blurbs">
<?php writeTeams(); ?>
</ul>
<div class="section_header">Contact Us</div>
Email: calhpv@gmail.com<br>
<a target="_blank" href="https://www.facebook.com/CalHPV">Find us on Facebook!</a> We post a lot of cool content there.
</div>
<script src="/js/about.js"></script>
<?php echo file_get_contents("../footer.html"); ?>
