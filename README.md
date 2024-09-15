
# Iridium - A College E-Commerce Site

## Overview

Iridium is an e-commerce platform launched in 2017, designed for the Indian market with a focus on premium, ready-to-wear clothing. With its innovative use of color and product design, Iridium has quickly become the choice for trendy and sophisticated consumers across India. 

This project is a PHP-based website, providing users with a seamless online shopping experience, including user authentication, product browsing, and contact management.

## Features

- **Responsive Design**: Powered by Bootstrap, the platform is fully responsive, ensuring a consistent experience across all devices.
- **User Authentication**: Users can log in, sign up, and log out of the platform securely.
- **Product Showcase**: Information about the brand, along with its unique clothing line, is displayed prominently.
- **Dynamic Navigation**: Conditional rendering of navigation options based on whether a user is logged in.
- **Membership System**: Rewards program called Spectrum offers points and benefits for frequent buyers.

## Technology Stack

- **Front-End**: HTML5, CSS3, Bootstrap 4
- **Back-End**: PHP, session handling
- **Database**: MySQL (for user management and product catalog)
- **JavaScript**: jQuery for interactive components

## Setup Instructions

1. **Clone the Repository**  
   Run the following command in your terminal to clone the repository:
   ```bash
   git clone https://github.com/YourUsername/iridium-ecommerce.git
   ```

2. **Install Dependencies**  
   Make sure to set up a LAMP stack or use software like XAMPP/WAMP to run a PHP server. Place the project in the `htdocs` folder (or equivalent).

3. **Database Setup**  
   - Create a MySQL database.
   - Import the provided `database.sql` file to set up the required tables for users and products.
   
4. **Configure Database**  
   In the `config.php` file, update the database connection details:
   ```php
   $dbHost = 'localhost';
   $dbUser = 'root';
   $dbPass = 'yourpassword';
   $dbName = 'iridium';
   ```

5. **Run the Application**  
   Start your server and access the platform at `http://localhost/iridium-ecommerce`.

## Project Structure

```bash
.
├── index.php           # Homepage
├── about.php           # About Us page
├── contact.php         # Contact Us page
├── login.php           # User Login/Sign Up page
├── logout.php          # Logout functionality
├── config.php          # Database configuration
├── css/
│   └── shop.css        # Custom styles for the website
├── vendor/
│   ├── bootstrap/      # Bootstrap library files
│   └── jquery/         # jQuery library files
└── database.sql        # MySQL database setup script
```

## Contributing

We welcome contributions! If you'd like to improve this project, feel free to fork the repository and submit a pull request.

1. Fork it.
2. Create your feature branch (`git checkout -b feature/your-feature`).
3. Commit your changes (`git commit -m 'Add your feature'`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Create a new pull request.

## License

This project is licensed under the MIT License.

## Contact

For any inquiries or support, feel free to reach out at:
- **Email**: support@iridium.com
- **Website**: [Iridium Official](http://iridium.com)

---

© 2020 Iridium - A College E-Commerce Site. All rights reserved.
