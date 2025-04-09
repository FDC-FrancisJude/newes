
    function sweetAlert(title, message, icon) {
        Swal.fire({
            title: title,
            text: message,
            icon: icon,
            confirmButtonText: 'OK',
            customClass: {
                confirmButton: 'custom-btn-alert'  // Apply a custom class to the confirm button
            }
        });
    }

    function capitalizeFirstLetterInWords(input) {
        input.value = input.value
            .toLowerCase() // Convert entire input to lowercase
            .replace(/\b\w/g, char => char.toUpperCase()); // Capitalize first letter of each word
    }

    function validatePhoneNumber(input) {
        // Remove all non-numeric characters (except for hyphens)
        var phoneNumber = input.value.replace(/\D/g, ''); 

        // Automatically format the phone number
        if (phoneNumber.length > 3 && phoneNumber.length <= 6) {
            phoneNumber = phoneNumber.substring(0, 4) + '-' + phoneNumber.substring(4);
        } else if (phoneNumber.length > 6) {
            phoneNumber = phoneNumber.substring(0, 4) + '-' + phoneNumber.substring(4, 7) + '-' + phoneNumber.substring(7, 11);
        }

        // Set the formatted phone number back to the input field
        input.value = phoneNumber;

        // Validate phone number (Philippine format: 0917-123-4567)
        var phonePattern = /^09\d{2}-\d{3}-\d{4}$/; // Validate the format with hyphens
        input.classList.remove('is-invalid', 'is-valid'); // Reset validation styles

        if (phonePattern.test(phoneNumber)) {
            input.classList.add('is-valid');
            input.setCustomValidity(''); // Reset custom validity
        } else {
            input.classList.add('is-invalid');
            input.setCustomValidity('Please enter a valid Philippine phone number.');
        }
    }

    function validateZipcode(input) {
        // Get the value from the input field
        var zipCode = input.value;

        // Remove any non-numeric characters (although it's a number input, this is an extra safeguard)
        zipCode = zipCode.replace(/\D/g, '');

        // Update the value to only keep the numeric characters
        input.value = zipCode;

        // Validate that the Zipcode is a 4-digit number
        var zipPattern = /^\d{4}$/;  // Only allows exactly 4 digits

        input.classList.remove('is-invalid', 'is-valid'); // Reset validation styles

        if (zipPattern.test(zipCode)) {
            input.classList.add('is-valid'); // Mark as valid
            input.setCustomValidity(''); // Reset custom validity
        } else {
            input.classList.add('is-invalid'); // Mark as invalid
            input.setCustomValidity('Please enter a valid 4-digit Zipcode.');
        }
    }

    function validateSchoolYear(input) {
        // Get the value from the input field
        var schoolYear = input.value;

        // Remove any non-numeric characters except the hyphen
        schoolYear = schoolYear.replace(/[^0-9-]/g, '');

        // Update the value to only keep the numeric characters and hyphen
        input.value = schoolYear;

        // Validate that the school year is in the correct format (e.g., YYYY-YYYY)
        var schoolYearPattern = /^\d{4}-\d{4}$/;

        // Extract the two years from the input
        var years = schoolYear.split('-');

        input.classList.remove('is-invalid', 'is-valid'); // Reset validation styles

        // Check if it matches the pattern and if the first year is less than or equal to the second year
        if (schoolYearPattern.test(schoolYear) && parseInt(years[0]) <= parseInt(years[1])) {
            input.classList.add('is-valid'); // Mark as valid
            input.setCustomValidity(''); // Reset custom validity
        } else {
            input.classList.add('is-invalid'); // Mark as invalid
            input.setCustomValidity('Please enter a valid school year (e.g., 2012-2013).');
        }
    }
