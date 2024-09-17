function initializeCarousels(currentGalleryImages, startIndex) {
    // Array to store the titles dynamically from the data-title attribute
    let carouselTitles = [];

    // Dynamically extract titles from the current gallery images
    currentGalleryImages.forEach(function(img) {
        let title = img.getAttribute('data-title');
        if (!title) {
            title = "Title"; // Default title if no data-title is found
        }
        carouselTitles.push(title);
    });

    // Initialize the main carousel
    $('.main-carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        asNavFor: '.thumbnail-carousel',
        adaptiveHeight: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 3000,
        initialSlide: startIndex,
        prevArrow: '<button type="button" class="slick-prev slick-arrow" aria-label="Previous">Previous</button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow" aria-label="Next">Next</button>',
    });

    // Initialize the thumbnail carousel
    $('.thumbnail-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        focusOnSelect: true,
        asNavFor: '.main-carousel',
        centerMode: true,
        centerPadding: '0',
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        initialSlide: startIndex,
    });

    // Update the modal title when the slide changes
    $('.main-carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        $('#carouselModalLabel').text(carouselTitles[nextSlide]);
    });

    // Ensure proper layout after the modal is shown
    $('#carouselModal').on('shown.bs.modal', function () {
        $('.main-carousel').slick('setPosition');
        $('.thumbnail-carousel').slick('setPosition');

        // Set the initial modal title when the modal is shown
        let currentSlide = $('.main-carousel').slick('slickCurrentSlide');
        $('#carouselModalLabel').text(carouselTitles[currentSlide]);
    });
}

  function showGallery() {
      const cardView = document.getElementById('card-view');
      const galleryView = document.getElementById('gallery-view');

      // Remove any existing animations
      cardView.classList.remove('fade-in', 'fade-out');
      galleryView.classList.remove('fade-in', 'fade-out');

      // Add fade-out animation to card-view
      cardView.classList.add('fade-out');

      // When the animation ends, hide the card-view and show the gallery-view
      cardView.addEventListener('animationend', function handleFadeOut() {
          cardView.style.display = 'none';  // Hide card-view
          galleryView.style.display = 'block';  // Show gallery-view

          // Add fade-in animation to gallery-view
          galleryView.classList.add('fade-in');

          // Clean up: Remove the fade-out class and event listener
          cardView.classList.remove('fade-out');
          cardView.removeEventListener('animationend', handleFadeOut);
      });
  }

  function showCards() {
      const cardView = document.getElementById('card-view');
      const galleryView = document.getElementById('gallery-view');

      // Remove any existing animations
      galleryView.classList.remove('fade-in', 'fade-out');
      cardView.classList.remove('fade-in', 'fade-out');

      // Add fade-out animation to gallery-view
      galleryView.classList.add('fade-out');

      // When the animation ends, hide the gallery-view and show the card-view
      galleryView.addEventListener('animationend', function handleFadeOut() {
          galleryView.style.display = 'none';  // Hide gallery-view
          cardView.style.display = 'block';  // Show card-view

          // Add fade-in animation to card-view
          cardView.classList.add('fade-in');

          // Clean up: Remove the fade-out class and event listener
          galleryView.classList.remove('fade-out');
          galleryView.removeEventListener('animationend', handleFadeOut);

          // Remove fade-in class after animation ends
          cardView.addEventListener('animationend', function handleFadeIn() {
              cardView.classList.remove('fade-in');
              cardView.removeEventListener('animationend', handleFadeIn);
          });
      });
  }


function showGallery2() {
   const cardView = document.getElementById('card-view');
   const galleryView = document.getElementById('gallery-view2');

   
    cardView.classList.remove('fade-in', 'fade-out');
      galleryView.classList.remove('fade-in', 'fade-out');

      cardView.classList.add('fade-out');

      cardView.addEventListener('animationend', function handleFadeOut() {
          cardView.style.display = 'none';  
          galleryView.style.display = 'block';  

          galleryView.classList.add('fade-in');

          cardView.classList.remove('fade-out');
          cardView.removeEventListener('animationend', handleFadeOut);
      });
}

function showCards2() {
    const cardView = document.getElementById('card-view');
    const galleryView = document.getElementById('gallery-view2');

      galleryView.classList.remove('fade-in', 'fade-out');
      cardView.classList.remove('fade-in', 'fade-out');

      galleryView.classList.add('fade-out');

      galleryView.addEventListener('animationend', function handleFadeOut() {
          galleryView.style.display = 'none';  
          cardView.style.display = 'block';  

          cardView.classList.add('fade-in');

          galleryView.classList.remove('fade-out');
          galleryView.removeEventListener('animationend', handleFadeOut);

          cardView.addEventListener('animationend', function handleFadeIn() {
              cardView.classList.remove('fade-in');
              cardView.removeEventListener('animationend', handleFadeIn);
          });
      });
}

function showGallery3() {
    const cardView = document.getElementById('card-view');
    const galleryView = document.getElementById('gallery-view3');
 
     cardView.classList.remove('fade-in', 'fade-out');
       galleryView.classList.remove('fade-in', 'fade-out');
 
       cardView.classList.add('fade-out');
 
       cardView.addEventListener('animationend', function handleFadeOut() {
           cardView.style.display = 'none';  
           galleryView.style.display = 'block';  
 
           galleryView.classList.add('fade-in');
 
           cardView.classList.remove('fade-out');
           cardView.removeEventListener('animationend', handleFadeOut);
       });
 }
 
 function showCards3() {
     const cardView = document.getElementById('card-view');
     const galleryView = document.getElementById('gallery-view3');
 
       galleryView.classList.remove('fade-in', 'fade-out');
       cardView.classList.remove('fade-in', 'fade-out');
 
       galleryView.classList.add('fade-out');
 
       galleryView.addEventListener('animationend', function handleFadeOut() {
           galleryView.style.display = 'none';  
           cardView.style.display = 'block';  

           cardView.classList.add('fade-in');
 
           galleryView.classList.remove('fade-out');
           galleryView.removeEventListener('animationend', handleFadeOut);
 
           cardView.addEventListener('animationend', function handleFadeIn() {
               cardView.classList.remove('fade-in');
               cardView.removeEventListener('animationend', handleFadeIn);
           });
       });
 }

 function showGallery4() {
    const cardView = document.getElementById('card-view');
    const galleryView = document.getElementById('gallery-view4');
 
     cardView.classList.remove('fade-in', 'fade-out');
       galleryView.classList.remove('fade-in', 'fade-out');
 
       cardView.classList.add('fade-out');
 
       cardView.addEventListener('animationend', function handleFadeOut() {
           cardView.style.display = 'none';  
           galleryView.style.display = 'block';  

           galleryView.classList.add('fade-in');
 
           cardView.classList.remove('fade-out');
           cardView.removeEventListener('animationend', handleFadeOut);
       });
 }
 
 function showCards4() {
     const cardView = document.getElementById('card-view');
     const galleryView = document.getElementById('gallery-view4');
 
       galleryView.classList.remove('fade-in', 'fade-out');
       cardView.classList.remove('fade-in', 'fade-out');
 
       galleryView.classList.add('fade-out');
 
       galleryView.addEventListener('animationend', function handleFadeOut() {
           galleryView.style.display = 'none';  
           cardView.style.display = 'block';  
 
           cardView.classList.add('fade-in');
 
           galleryView.classList.remove('fade-out');
           galleryView.removeEventListener('animationend', handleFadeOut);
 
           cardView.addEventListener('animationend', function handleFadeIn() {
               cardView.classList.remove('fade-in');
               cardView.removeEventListener('animationend', handleFadeIn);
           });
       });
 }

 function showGallery5() {
    const cardView = document.getElementById('card-view');
    const galleryView = document.getElementById('gallery-view5');

     cardView.classList.remove('fade-in', 'fade-out');
       galleryView.classList.remove('fade-in', 'fade-out');
 
       cardView.classList.add('fade-out');
 
       cardView.addEventListener('animationend', function handleFadeOut() {
           cardView.style.display = 'none';  
           galleryView.style.display = 'block'; 
 
           galleryView.classList.add('fade-in');
 
           cardView.classList.remove('fade-out');
           cardView.removeEventListener('animationend', handleFadeOut);
       });
 }
 
 function showCards5() {
     const cardView = document.getElementById('card-view');
     const galleryView = document.getElementById('gallery-view5');
 
       galleryView.classList.remove('fade-in', 'fade-out');
       cardView.classList.remove('fade-in', 'fade-out');
 
       galleryView.classList.add('fade-out');
 
       galleryView.addEventListener('animationend', function handleFadeOut() {
           galleryView.style.display = 'none';  
           cardView.style.display = 'block';  
 
           cardView.classList.add('fade-in');
 
           galleryView.classList.remove('fade-out');
           galleryView.removeEventListener('animationend', handleFadeOut);
 
           cardView.addEventListener('animationend', function handleFadeIn() {
               cardView.classList.remove('fade-in');
               cardView.removeEventListener('animationend', handleFadeIn);
           });
       });
 }

 function showGallery6() {
    const cardView = document.getElementById('card-view');
    const galleryView = document.getElementById('gallery-view6');
 
     cardView.classList.remove('fade-in', 'fade-out');
       galleryView.classList.remove('fade-in', 'fade-out');
 
       cardView.classList.add('fade-out');
 
       cardView.addEventListener('animationend', function handleFadeOut() {
           cardView.style.display = 'none';  
           galleryView.style.display = 'block'; 
 
           galleryView.classList.add('fade-in');
 
           cardView.classList.remove('fade-out');
           cardView.removeEventListener('animationend', handleFadeOut);
       });
 }
 
 function showCards6() {
     const cardView = document.getElementById('card-view');
     const galleryView = document.getElementById('gallery-view6');
 
       galleryView.classList.remove('fade-in', 'fade-out');
       cardView.classList.remove('fade-in', 'fade-out');
 
       galleryView.classList.add('fade-out');
 
       galleryView.addEventListener('animationend', function handleFadeOut() {
           galleryView.style.display = 'none';  
           cardView.style.display = 'block';  
 
           cardView.classList.add('fade-in');
 
           galleryView.classList.remove('fade-out');
           galleryView.removeEventListener('animationend', handleFadeOut);
 
           cardView.addEventListener('animationend', function handleFadeIn() {
               cardView.classList.remove('fade-in');
               cardView.removeEventListener('animationend', handleFadeIn);
           });
       });
 }

 function showGallery7() {
    const cardView = document.getElementById('card-view');
    const galleryView = document.getElementById('gallery-view7');
 
     cardView.classList.remove('fade-in', 'fade-out');
       galleryView.classList.remove('fade-in', 'fade-out');
 
       cardView.classList.add('fade-out');
 
       cardView.addEventListener('animationend', function handleFadeOut() {
           cardView.style.display = 'none';  
           galleryView.style.display = 'block'; 
 
           galleryView.classList.add('fade-in');
 
           cardView.classList.remove('fade-out');
           cardView.removeEventListener('animationend', handleFadeOut);
       });
 }
 
 function showCards7() {
     const cardView = document.getElementById('card-view');
     const galleryView = document.getElementById('gallery-view7');
 
       galleryView.classList.remove('fade-in', 'fade-out');
       cardView.classList.remove('fade-in', 'fade-out');
 
       galleryView.classList.add('fade-out');
 
       galleryView.addEventListener('animationend', function handleFadeOut() {
           galleryView.style.display = 'none'; 
           cardView.style.display = 'block';  
 
           cardView.classList.add('fade-in');
 
           galleryView.classList.remove('fade-out');
           galleryView.removeEventListener('animationend', handleFadeOut);
 
           cardView.addEventListener('animationend', function handleFadeIn() {
               cardView.classList.remove('fade-in');
               cardView.removeEventListener('animationend', handleFadeIn);
           });
       });
 }

 function showGallery8() {
    const cardView = document.getElementById('card-view');
    const galleryView = document.getElementById('gallery-view8');
 
     cardView.classList.remove('fade-in', 'fade-out');
       galleryView.classList.remove('fade-in', 'fade-out');
 
       cardView.classList.add('fade-out');

       cardView.addEventListener('animationend', function handleFadeOut() {
           cardView.style.display = 'none';  
           galleryView.style.display = 'block';  
 
           galleryView.classList.add('fade-in');
 
           cardView.classList.remove('fade-out');
           cardView.removeEventListener('animationend', handleFadeOut);
       });
 }
 
 function showCards8() {
     const cardView = document.getElementById('card-view');
     const galleryView = document.getElementById('gallery-view8');
 
       galleryView.classList.remove('fade-in', 'fade-out');
       cardView.classList.remove('fade-in', 'fade-out');
 
       galleryView.classList.add('fade-out');
 
       galleryView.addEventListener('animationend', function handleFadeOut() {
           galleryView.style.display = 'none';  
           cardView.style.display = 'block'; 
 
           cardView.classList.add('fade-in');
 
           galleryView.classList.remove('fade-out');
           galleryView.removeEventListener('animationend', handleFadeOut);
 
           cardView.addEventListener('animationend', function handleFadeIn() {
               cardView.classList.remove('fade-in');
               cardView.removeEventListener('animationend', handleFadeIn);
           });
       });
 }

 document.addEventListener('DOMContentLoaded', function() {
    const galleryViews = document.querySelectorAll('[id^="gallery-view"]');

    galleryViews.forEach((view) => {
        const galleryImages = view.querySelectorAll('.gallery-img');
        
        galleryImages.forEach((img, index) => {
            img.setAttribute('data-index', index);
            img.addEventListener('click', function() {
                const clickedIndex = parseInt(this.getAttribute('data-index'));
                const currentGalleryImages = Array.from(this.closest('.container').querySelectorAll('.gallery-img'));

                // Clear and destroy existing carousels before reinitializing
                if ($('.main-carousel').hasClass('slick-initialized')) {
                    $('.main-carousel').slick('unslick');
                }
                if ($('.thumbnail-carousel').hasClass('slick-initialized')) {
                    $('.thumbnail-carousel').slick('unslick');
                }

                // Clear carousel content
                $('.main-carousel').empty();
                $('.thumbnail-carousel').empty();

                // Populate carousels with new content from the current gallery only
                currentGalleryImages.forEach((image, i) => {
                    $('.main-carousel').append(`
                        <div><img src="${image.src}" alt="${image.alt}" style="max-width: 100%;" /></div>
                    `);
                    $('.thumbnail-carousel').append(`
                        <div><img src="${image.src}" alt="${image.alt}" data-slick-index="${i}" style="width: 100%;height: 200px;object-fit: cover;object-position: center;max-width: 100%;" /></div>
                    `);
                });

                // Reinitialize carousels with new content
                initializeCarousels(currentGalleryImages, clickedIndex);

                // Show the modal
                const carouselModal = new bootstrap.Modal(document.getElementById('carouselModal'));
                carouselModal.show();

                $('#carouselModal').on('shown.bs.modal', function () {
                    setTimeout(() => {
                        $('.main-carousel').slick('setPosition');
                        $('.thumbnail-carousel').slick('setPosition');
                    }, 100);
                });
            });
        });
    });
});