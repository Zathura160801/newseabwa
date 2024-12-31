function copyTransferTo(button) {
    // Find the closest .Transfer-To element from the clicked button
    const transferToText = button.closest('.bank-details').querySelector('.Transfer-To').textContent;

    // Create a temporary input element to copy the text
    const tempInput = document.createElement('input');
    tempInput.value = transferToText;
    document.body.appendChild(tempInput);
    
    // Select and copy the text
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); // For mobile devices
    document.execCommand('copy');
    
    // Remove the temporary input
    document.body.removeChild(tempInput);
}