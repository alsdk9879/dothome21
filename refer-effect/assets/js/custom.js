
    //Code view
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('pre code').forEach((el) => {
            hljs.highlightElement(el);
        });
    });

    //Code tab menu
    const viewTitle = document.querySelectorAll(".view-title ul li");
    const viewCont = document.querySelectorAll(".view-cont > div");

    viewTitle.forEach((element, index) => {
        element.addEventListener("click", function(){
            viewTitle.forEach( el => {
                el.classList.remove("active");
            });
            element.classList.add("active");

            viewCont.forEach( el => {
                el.style.display = "none";
            });
            viewCont[index].style.display = "block";
        });
    })



    //Modal
    // $(".btn-wrap button").click(function(){
        // $("#modal").removeClass().addClass("show");
        // });

        // $(".modal-cont button").click(function(){
        //     $("#modal").addClass("hide");
        // });

        document.querySelector(".btn-wrap button").addEventListener("click", function(){
            document.querySelector("#modal").classList.add("show");
            document.querySelector("#modal").classList.remove("hide");
        });

        document.querySelector(".modal-cont button").addEventListener("click", function(){
            document.querySelector("#modal").classList.add("hide");
        });
