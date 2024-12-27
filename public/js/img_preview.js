// File: public/js/img_preview.js

// Get the file input and image preview elements
const inputProfileImage = document.getElementById('input_profile_image');
const imgProfileImage = document.getElementById('img_profile_image');

// Function to handle image preview
function previewImage(event) {
    const file = event.target.files[0];
    
    // Check if a file was selected
    if (file) {
        // Check if the file is an image
        if (!file.type.startsWith('image/')) {
            alert('Please select an image file');
            return;
        }

        // Create a FileReader instance
        const reader = new FileReader();

        // Set up the FileReader onload event
        reader.onload = function(e) {
            // Update the image source with the new file
            imgProfileImage.src = e.target.result;
        }

        // Read the file as a data URL
        reader.readAsDataURL(file);
    }
}

// Add event listener to the file input
inputProfileImage.addEventListener('change', previewImage);

// Optional: Add click handler to the image to trigger file input
imgProfileImage.addEventListener('click', () => {
    inputProfileImage.click();
});

// Optional: Add drag and drop support
const dropZone = document.querySelector('.w-48'); // The container div for the image

['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropZone.addEventListener(eventName, preventDefaults, false);
});

function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
}

dropZone.addEventListener('drop', handleDrop, false);

function handleDrop(e) {
    const dt = e.dataTransfer;
    const file = dt.files[0];
    
    if (file && file.type.startsWith('image/')) {
        inputProfileImage.files = dt.files;
        const changeEvent = new Event('change');
        inputProfileImage.dispatchEvent(changeEvent);
    }
}