console.log("script load success!! lolwa jholwa tolwa");

document.addEventListener("DOMContentLoaded",()=>{
    console.log("page loaded");
    const hamburger_button = document.querySelector('.menu-btn');
    const cls_sidebar = document.querySelector('.cls_sidebar');
    const sidebar =document.querySelector(".sidebar");


    document.addEventListener("click",(event)=>{

        const elig_button = event.target.closest('.btn_eligib');
        if(elig_button){

            const elig_diag = document.querySelector('dialog');

            const rect = elig_button.getBoundingClientRect();
            
            elig_diag.style.top=`${rect.bottom+window.scrollY}px`;

            elig_diag.style.left=`${rect.left+window.scrollX}px`;

            elig_diag.showModal();



        }


    })


    
    // const a = null;



    const links = sidebar.querySelectorAll('a');

    if( !hamburger_button || !cls_sidebar || !sidebar || !links){
        console.log("elements are null");
    }

    hamburger_button.addEventListener("click",()=>{

        console.log("clicked");

    });

    hamburger_button.addEventListener("click",()=>{

        sidebar.classList.toggle("display_sidebar");
        console.log("bar bar click krna band kar");
        

    })

    cls_sidebar.addEventListener("click",()=>{


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


