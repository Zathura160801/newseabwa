const input = document.getElementById('phone-number');

input.addEventListener('input', function() {
    let value = input.value;

    // Ensure the value starts with +62
    if (!value.startsWith('+62')) {
        input.value = '+62';
    }

    // Remove any non-numeric characters after +62
    if (value.length > 3) {
        let numbersAfterPrefix = value.slice(3).replace(/\D/g, ''); // Keep only digits after +62

        // Prevent the first digit after +62 from being '0'
        if (numbersAfterPrefix.startsWith('0')) {
            numbersAfterPrefix = numbersAfterPrefix.slice(1); // Remove the leading '0'
        }

        // Set the input value to +62 followed by valid numbers
        input.value = '+62' + numbersAfterPrefix;
    }
});