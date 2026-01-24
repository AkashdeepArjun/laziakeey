<html> 

    <head> 
        <title> 
            CoderUniverse
        </title>

    <link rel="stylesheet" href="/assets/css/style.css"> 
    <link rel="stylesheet" href="/assets/css/home.css"> 
    <link rel="stylesheet" href="/assets/css/jobs.css"> 
    <link rel="stylesheet" href="/assets/css/projects.css"> 
    <link rel="stylesheet" href="/assets/css/about.css"> 
    <link rel="stylesheet" href="/assets/css/services.css"> 
    
    
    </head>

    <body>

        <header class="header">
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

        <div class="container">


            <aside id="sidebar" class="sidebar">
                
        
                <a href="/" class="<?= $page==='home'?'active':''?>">HOME</a>
                <a href="/projects" class="<?= $page==='projects'?'active':''?>">PROJECTS</a>
                <!-- <a href="/skills" class="<?= $page==='skills'?'active':''?>">TEST OUR WORK </a> -->
                <a href="/career" class="<?= $page==='jobs'?'active':''?>">CAREER </a>
                <a href="/about" class="<?= $page==='about'?'active':''?>">ABOUT US</a>

                <a href="/services" class="<?= $page==='services'?'active':''?>">SERVICES</a>
                
            
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

            





        </div>



        <script type="text/javascript" src="/assets/js/app.js" > </script>

    </body>


</html>
