 // Initially hide profile options
 document.getElementById('profileOptions').style.display = 'none';

 // Show upload option initially
 document.getElementById('uploadLabel').style.display = 'block';

 // Toggle the visibility of the profile options
 function toggleProfileOptions() {
     const profileOptions = document.getElementById('profileOptions');
     const uploadLabel = document.getElementById('uploadLabel');
     const profilePreview = document.getElementById('profilePreview');

     if (profilePreview.src.includes('placeholder.com')) {
         // If no profile picture is uploaded, only show the upload label
         uploadLabel.style.display = 'block';
         profileOptions.style.display = 'none';
     } else {
         // Toggle profile options visibility
         profileOptions.style.display = profileOptions.style.display === 'block' ? 'none' : 'block';
     }
 }

 // Preview uploaded profile image and show the profile options
 function previewImage(event) {
     const reader = new FileReader();
     reader.onload = function () {
         const output = document.getElementById('profilePreview');
         output.src = reader.result;

         // Show profile options and hide upload label after upload
         document.getElementById('profileOptions').style.display = 'block';
         document.getElementById('uploadLabel').style.display = 'none';
     };
     reader.readAsDataURL(event.target.files[0]);
 }

 // Remove the profile picture
 function removeProfile() {
     const profilePreview = document.getElementById('profilePreview');
     profilePreview.src = 'https://via.placeholder.com/80';

     // Reset to initial state
     document.getElementById('profileOptions').style.display = 'none';
     document.getElementById('uploadLabel').style.display = 'block';
 }

 // Trigger the file input for changing the profile picture
 function changeProfile() {
     const profileImageInput = document.getElementById('profileImage');
     profileImageInput.click();
 }

 const body = document.querySelector('body'),
 sidebar = body.querySelector('.sidebar'),
 toggle = body.querySelector(".toggle"),
 searchBtn = body.querySelector(".search-box"),
 modeSwitch = body.querySelector(".toggle-switch"),
 modeText = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
 sidebar.classList.toggle("close");
});

modeSwitch.addEventListener("click", () => {
 body.classList.toggle("dark");
 
 if(body.classList.contains("dark")) {
     modeText.innerText = "Light mode";
 } else {
     modeText.innerText = "Dark mode";
 }
});

// Profile image handling
function previewImage(event) {
 const preview = document.getElementById('profilePreview');
 preview.src = URL.createObjectURL(event.target.files[0]);
}

function changeProfile() {
 document.getElementById('profileImage').click();
}

function removeProfile() {
 document.getElementById('profilePreview').src = 'https://via.placeholder.com/120';
}

document.getElementById('profileImageContainer').addEventListener('click', function(e) {
 const options = document.getElementById('profileOptions');
 options.classList.toggle('active');
 e.stopPropagation();
});

document.addEventListener('click', function() {
 document.getElementById('profileOptions').classList.remove('active');
});

// Password toggle
function togglePassword(inputId) {
 const input = document.getElementById(inputId);
 const icon = input.nextElementSibling;
 
 if (input.type === 'password') {
     input.type = 'text';
     icon.classList.replace('bx-hide', 'bx-show');
 } else {
     input.type = 'password';
     icon.classList.replace('bx-show', 'bx-hide');
 }
}