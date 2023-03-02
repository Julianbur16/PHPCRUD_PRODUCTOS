count=0;
        function image() {
            images = [
                'url("Style_pricipal/background_2.jpg")',
                'url("Style_pricipal/background_3.png")',
                'url("Style_pricipal/background_pricipal.jpg")',
            ];

            const body_bg = document.querySelector("body");
            const bg = images[count];
            count++;
            if(count == images.length){
                count=0;
            }
           
            body_bg.style.backgroundImage = bg;
   

        }
        setInterval(image, 2500);