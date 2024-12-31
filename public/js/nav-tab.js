// Get all tab buttons
const tabLinks = document.querySelectorAll('.tab-link');

// Add click event listener to each button
tabLinks.forEach(button => {
    button.addEventListener('click', () => {
        // Get the target tab id from the data attribute
        const targetTab = button.getAttribute('data-target-tab');

        // Hide all tab contents
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.add('hidden');
        });

        // Show the target tab content
        document.querySelector(targetTab).classList.remove('hidden');

    });
});