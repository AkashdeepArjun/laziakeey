<?php 

$home_css='/assets/css/home.css';

$home_css_version = file_exists($home_css)?filemtime($home_css):time();

$style_css = '/assets/css/style.css';

$style_css_version = file_exists($style_css)?filemtime($style_css):time();

$jobs_css = '/assets/css/jobs.css';

$jobs_css_version = file_exists($jobs_css)?filemtime($jobs_css):time();

$projects_css = '/assets/css/projects.css';

$projects_css_version = file_exists($projects_css)?filemtime($jobs_css):time();

$about_css = '/assets/css/about.css';

$about_css_version = file_exists($about_css)?filemtime($about_css):time();


$services_css = '/assets/css/services.css';

$services_css_version = file_exists($services_css)?filemtime($services_css):time();

$js_file ='/assets/js/app.js';

$js_ver=file_exists($js_file)?filemtime($js_file):time();



?>



<html> 

    <head> 
        <title> 
            CoderUniverse
        </title>

        <link rel="stylesheet" href="/assets/css/style.css?v=<?=$style_css_version?>"> 
        <link rel="stylesheet" href="/assets/css/home.css?v=<?=$home_css_version?>"> 
        <link rel="stylesheet" href="/assets/css/jobs.css?v=<?=$jobs_css_version?>"> 
        <link rel="stylesheet" href="/assets/css/projects.css?v=<?=$projects_css_version?>"> 
        <link rel="stylesheet" href="/assets/css/about.css?v=<?=$about_css_version?>"> 
        <link rel="stylesheet" href="/assets/css/services.css?v=<?=$services_css_version?>"> 
    
    
    </head>

    <body>

        <header class="header"> 

        
            <a href="/"><img src="/assets/images/lazi.png" class="logo"></a>
            <button class="menu-btn">☰</button>
           

            

            <nav class="top-nav">

                <a href="/" class="<?= $page==='home'?'active':''?>">HOME</a>
                <a href="/projects" class="<?= $page==='projects'?'active':''?>">PROJECTS</a>
                <!-- <a href="/skills" class="<?= $page==='skills'?'active':''?>">TEST OUR WORK </a> -->
                <a href="/career" class="<?= $page==='jobs'?'active':''?>">CAREER </a>
                <a href="/about" class="<?= $page==='about'?'active':''?>">ABOUT US</a>
                <a href="/services" class="<?= $page==='services'?'active':''?>">SERVICES</a>


            </nav>




            
        </header>

        <section>

          <aside id="sidebar" class="sidebar">

                <div class="side_nav_items ">   

                <a href="/" class="<?= $page==='home'?'active':''?>">HOME</a>
                <a href="/projects" class="<?= $page==='projects'?'active':''?>">PROJECTS</a>
                <!-- <a href="/skills" class="<?= $page==='skills'?'active':''?>">TEST OUR WORK </a> -->
                <a href="/career" class="<?= $page==='jobs'?'active':''?>">CAREER </a>
                <a href="/about" class="<?= $page==='about'?'active':''?>">ABOUT US</a>

                <a href="/services" class="<?= $page==='services'?'active':''?>">SERVICES</a>
                </div>

              

                <button class="cls_sidebar">X</button>

            </aside>
   

            <main class="content">

                <?php 
                    
                $view= __DIR__."/{$page}.php";
                /* echo $view; */
                if(file_exists($view)){
                    
                    require $view;

                }else {
                        
                echo "<h1> 404  invalid request </h1>";




                }            

                ?>



            </main>

            





        </section>



        <script type="text/javascript" src="/assets/js/app.js?v=<?=$js_ver?>" defer> </script>

    </body>


</html>
