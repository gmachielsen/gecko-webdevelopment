(function () {
    'use strict';
        window.addEventListener("DOMContentLoaded", function() {
            const bodyNode = document.body || document.getElementsByTagName('body')[0];
            const pages = document.querySelectorAll(".page");
            const navPoint = document.querySelectorAll(".nav_point");
            let lastScrolled = 0;
            let pageIndex = 0;
            bodyNode.style.right = bodyNode.clientWidth - bodyNode.offsetWidth + "px";
            bodyNode.addEventListener("scroll", eventScroll);
            
            function showPage() {
                [].forEach.call(pages, function(el, i, p) {
            
                    if (i == pageIndex){
                        el.classList.add("active"); 
                        bodyNode.removeEventListener("scroll", eventScroll);
                        bodyNode.classList.add("hidden");
                        setTimeout(function(){
                              bodyNode.addEventListener("scroll", eventScroll);
                        }, 200);
                        setTimeout(function(){
                                bodyNode.classList.remove("hidden");
                        }, 150);
                    } else {
                        el.classList.remove("active");
                    }
                });
                const active = document.querySelector('.active'); 
                active && active.scrollIntoView(true);
                window.addEventListener("resize", myFunction);
                function myFunction() {active && active.scrollIntoView(true);}
                
                [].forEach.call(navPoint, function(el, i, p) {
                    el.onclick = function (e) {
                        if(p[0].contains(e.target) && pageIndex != 0){
                            pageIndex = 0;
                            showPage();
                        }
                        if(p[1].contains(e.target) && pageIndex != 1){
                            pageIndex = 1;
                            showPage();
                        }
                        if(p[2].contains(e.target) && pageIndex != 2){
                            pageIndex = 2;
                            showPage();
                        }
                        if(p[3].contains(e.target) && pageIndex != 3){
                            pageIndex = 3;
                            showPage();
                        }
                        let scrolled = bodyNode.pageYOffset || bodyNode.scrollTop;
                        lastScrolled = scrolled;
                        colorNav();
                    };
                    
                    colorNav();	
                    function colorNav() {
                        p[i].classList.remove("active_point");
                        if (pageIndex == 0) {
                            p[0].classList.add("active_point");
                        }
                        if (pageIndex == 1) {
                            p[1].classList.add("active_point");
                        } 
                        if (pageIndex == 2) {
                            p[2].classList.add("active_point");
                        } 
                        if (pageIndex == 3) {
                            p[3].classList.add("active_point");
                        }
                    }
                });
            }
            
            showPage();
            function eventScroll() {
                let scrolled = bodyNode.pageYOffset || bodyNode.scrollTop;
                if (scrolled < lastScrolled) {
                    --pageIndex;
                } else {
                    ++pageIndex;
                };
                pageIndex < 0 && (pageIndex = 0);
                pageIndex > pages.length - 1 && (pageIndex = pages.length - 1);
                showPage();
                setTimeout(function(){
                        let scrolled = bodyNode.pageYOffset || bodyNode.scrollTop;
                        lastScrolled = scrolled;
                }, 250);	
            }
        });
    })();



    // (function () {
    //     var id = document.getElementById("#carouselExampleControls")
    //     element = id.find(".carousel-item").first;
    //     // var x = document.getElementsByClassName("carousel-item");

    //     element.classList.add("active");

    // };

    // $(document).ready(function () {

    //     $('#myCarousel').find('.item').first().addClass('active');
    //   });