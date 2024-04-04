
  // jQuery code for toggling nested accordion
  $('.nested-accordion').find('.comment').slideUp();
  $('.nested-accordion').find('h2').click(function () {
    $(this).next('.comment').slideToggle(100);
    $(this).toggleClass('selected');
  });
  // Get the menu icon
  const menuIcon = document.querySelector('.menu-icon');
  // Get the popup
  const popup = document.getElementById('popup');

  // Function to open the popup
  function openPopup() {
    popup.classList.remove('hidden'); // Remove 'hidden' class
    popup.classList.add('animate-slide-down'); // Add animation class
  }

  // Function to close the popup
  function closePopup() {
    popup.classList.add('hidden'); // Add 'hidden' class
    popup.classList.remove('animate-slide-down'); // Remove animation class
  }

  // Add click event listener to the menu icon
  menuIcon.addEventListener('click', openPopup);