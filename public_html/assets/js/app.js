console.log("script load success!!");

document.addEventListener("DOMContentLoaded",()=>{

    const hamburger_button = document.querySelector('.menu-btn');
    const cls_sidebar = document.querySelector('.cls_sidebar');
    const sidebar =document.querySelector(".sidebar");

    const links = sidebar.querySelectorAll('a');

    hamburger_button.addEventListener("click",(e)=>{

        sidebar.classList.toggle("display_sidebar");
        

    })

    cls_sidebar.addEventListener("click",(e)=>{


        sidebar.classList.remove("display_sidebar");


    })

    links.forEach((link)=>{

        link.addEventListener("click",(e)=>{
            console.log("link clicked");
            e.stopPropagation();
            sidebar.classList.remove("display_sidebar");

        })



    });






})
