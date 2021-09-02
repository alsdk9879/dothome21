
    //Code view
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('pre code').forEach((el) => {
            hljs.highlightElement(el);
        });
    });

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
