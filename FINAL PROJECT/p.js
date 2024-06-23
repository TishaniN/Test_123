const liItem = document.querySelectorAll('ul li');
        const imgItem = document.querySelectorAll('.album-gallery .row .pic img');

        liItem.forEach(li => {
           

            //Filter
            const value = li.textContent;
            imgItem.forEach(img => {
                img.style.display = 'none';
                if (img.getAttribute('data-filter') == value.toLowerCase() || value == "All album") {
                    img.style.display = 'block';
                }
            })
           
        });