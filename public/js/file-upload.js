// Get the file input and file name display elements
const fileInput = document.getElementById('File-Input');
const fileNameDisplay = document.getElementById('File-Name');

// Add an event listener to the file input
fileInput.addEventListener('change', function() {
    if (fileInput.files.length > 0) {
        // Get the name of the selected file
        const fileName = fileInput.files[0].name;
        fileNameDisplay.textContent = fileName; // Update the displayed file name
    } else {
        // Reset to default text if no file is chosen
        fileNameDisplay.textContent = 'Upload Proof';
    }
});