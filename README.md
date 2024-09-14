# Registration Form

This project is a simple, responsive registration form built with HTML, CSS, JavaScript, and PHP. The form allows users to enter their personal details such as name, NIC number, email, gender, mobile number, and address, and submit them for backend processing.

## Features

- User-friendly registration form with separate fields for personal information.
- Responsive design that adapts to different screen sizes.
- JavaScript popup for a smooth and interactive user experience.
- Includes validation for required fields to ensure proper input before submission.
- Option to navigate to the user profile after registration.

## Technologies Used

- **HTML**: For structuring the registration form.
- **CSS**: For styling and layout, including responsive design.
- **JavaScript**: For handling interactions like opening and closing the registration form popup and managing form validation.
- **PHP**: For backend processing and saving user registration details in a database.

## Project Structure

- `index.html`: The main HTML file that contains the registration form structure.
- `index.css`: Contains the styles and layout for the registration form and its popup.
- `index.js`: Handles the JavaScript code for opening/closing the registration form popup and form validation.
- `registration_details.php`: This PHP file processes the form data and can be modified to save the information in a database or perform other actions.
- `profile.php`:  Redirects to the user profile page after successful registration.


## How the Form Works

- **JavaScript**: Opens the registration form in a popup when the "Open Registration Form" button is clicked. Users can submit their details, and the popup can be closed using the "×" button.
- **CSS**: Styles the form with a clean and responsive design, ensuring usability across different devices.
- **PHP**: Handles the form submission by processing the input data, validating it, and storing it in a database.

## Future Improvements

- Add password fields for user account creation.
- Implement server-side validation in `registration_details.php`.
- Add email verification and a confirmation link after registration.
- Store user data in a database and integrate a login system.

