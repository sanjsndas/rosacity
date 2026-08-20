

document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', function() {
        const toTop = document.querySelector('.scrollUp');
        toTop.classList.toggle("active", window.scrollY > 500);
    });

    const accordionItems = document.querySelectorAll('.contentBox');

    accordionItems.forEach(item => {
        item.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    });

    document.querySelector('.navbar__burger').addEventListener('click', function() {
        document.querySelector('.navbar__links ul').classList.toggle('show');
    });

    let imageElements = document.querySelectorAll('.images');

    imageElements.forEach(image => {
        let imagesHei = image.naturalHeight;
        let imagesWid = image.naturalWidth;

        if (imagesHei === imagesWid) {
            if (imagesWid > 600) {
                image.style.width = '50%';
            }
        } else if (imagesHei > imagesWid) {
            if (imagesHei < 2500 && imagesHei > 700) {
                image.style.width = '25%';
            } else if (imagesHei < 700 && imagesHei > 500) {
                image.style.width = '50%';
            }
        } else if (imagesHei < imagesWid) {
            image.style.width = '100%';
            if (imagesWid < 600) {
                image.style.width = '500px';
            }
        }
    });
});
