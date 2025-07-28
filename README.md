# MapGo - Delivery Management System

![MapGo Logo](assets/img/fast-delivery.png)

## Overview

MapGo is a comprehensive delivery management system designed to streamline the package delivery process. The system provides different interfaces for customers, delivery agents, and administrators, making it easy to track packages, manage deliveries, and handle customer support.

**Tagline:** "It is as Easy as it can Ever Be"

## Features

### For Customers
- **Package Tracking**: Real-time tracking of package delivery status
- **Delivery Time Management**: Change delivery time according to convenience
- **Order History**: View previous orders and delivery records
- **Issue Reporting**: Report package-related problems and issues
- **Account Management**: Update personal details and contact information
- **Customer Support**: Access to complaint and feedback system

### For Delivery Agents
- **Location Updates**: Update current location for tracking
- **Package Status**: Update delivery status and destination information
- **Customer Contact**: Direct communication with customers
- **Payment Processing**: Handle payment collection and processing
- **Delivery Reports**: Submit delivery completion reports

### For Administrators
- **Customer Management**: 
  - View customer details and registration information
  - Handle customer complaints and grievances
  - Monitor reported customers
- **Delivery Agent Management**:
  - Add new delivery agents to the system
  - View and manage agent details
  - Monitor agent performance and reports
- **Order Management**:
  - Track current orders in real-time
  - Process new order assignments
  - Access previous order history and analytics

## Technology Stack

- **Frontend**: HTML5, CSS3, Bootstrap, JavaScript, jQuery
- **Backend**: PHP
- **Database**: MySQL
- **Icons**: Font Awesome
- **Styling**: Custom CSS with Bootstrap framework

## Project Structure

```
mapgo/
├── index.php                          # Homepage
├── Login.php                          # Customer login
├── Login2.php                         # Delivery agent login  
├── Login3.php                         # Admin login
├── logout.php                         # Logout functionality
│
├── Consumer Pages/
│   ├── 2.0Consumer.php                # Customer dashboard
│   ├── 2.1Consumer(track).php         # Package tracking
│   ├── 2.2Consumer(report).php        # Issue reporting
│   ├── 2.3Consumer(Changetime).php    # Delivery time changes
│   ├── 2.4Consumer(Previous order).php # Order history
│   ├── 2.5Consumer(TROUBLE).php       # Troubleshooting
│   └── 2.6Consumer(AlterDetails).php  # Account management
│
├── Delivery Agent Pages/
│   ├── 3.0Delivery.php                # Agent dashboard
│   ├── 3.1Delivery(Destination).php   # Destination management
│   ├── 3.2Delivery(report consumer).php # Customer reporting
│   ├── 3.3Delivery(update location).php # Location updates
│   ├── 3.4Delivery(contact).php       # Customer contact
│   ├── 3.5Delivery(payment).php       # Payment processing
│   └── 3.6Delivery(Changes).php       # Delivery changes
│
├── Admin - Customer Management/
│   ├── 4.0Admin(Consumer).php         # Consumer admin dashboard
│   ├── 4.1Admin(Consumer)details.php  # Customer details
│   ├── 4.2Admin(Consumer)redressal.php # Complaint resolution
│   └── 4.3Admin(Consumer)reported.php # Reported customers
│
├── Admin - Delivery Management/
│   ├── 5.0Admin(Delivery).php         # Delivery admin dashboard
│   ├── 5.1Admin(Delivery)details.php  # Agent details
│   ├── 5.3Admin(Delivery)reports.php  # Delivery reports
│   └── 5.4Admin(Delivery)create.php   # Add new agents
│
├── Admin - Order Management/
│   ├── 6.0Admin(Order).php            # Order admin dashboard
│   ├── 6.1Admin(Order)current.php     # Current orders
│   ├── 6.2Admin(Order)new.php         # New orders
│   └── 6.3Admin(Order)previous.php    # Previous orders
│
├── include/
│   ├── connection.php                 # Database connection
│   └── functions.php                  # Utility functions
│
└── assets/
    ├── bootstrap/                     # Bootstrap framework
    ├── css/                          # Custom stylesheets
    ├── js/                           # JavaScript files
    ├── fonts/                        # Font Awesome icons
    └── img/                          # Images and icons
```

## Database Setup

1. Create a MySQL database named `mapgo`
2. Configure database connection in `include/connection.php`:
   ```php
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $dbname = "mapgo";
   ```

### Required Tables

The system requires the following database tables:
- `consumerdetails` - Customer information and login credentials
- `deliveragentdetails` - Delivery agent information and credentials
- `orders` - Order information and tracking details
- Additional tables for tracking deliveries, complaints, and reports

## Installation

1. **Clone the repository**
   ```bash
   git clone [your-repository-url]
   cd mapgo
   ```

2. **Set up the web server**
   - Place the project folder in your web server directory (htdocs for XAMPP, www for WAMP)
   - Ensure PHP and MySQL are installed and running

3. **Configure the database**
   - Create a MySQL database named `mapgo`
   - Update database credentials in `include/connection.php`
   - Import the database schema (if available)

4. **Access the application**
   - Open your web browser
   - Navigate to `http://localhost/mapgo/`

## Usage

### Getting Started

1. **Homepage**: Visit the main page to access different user portals
2. **Customer Portal**: Click "CUSTOMER" to access customer features
3. **Delivery Partner Portal**: Click "DELIVERY PARTNER" for agent features  
4. **Admin Portal**: Click "ADMIN" for administrative functions

### User Roles

- **Customers**: Can track packages, change delivery times, view order history, and report issues
- **Delivery Agents**: Can update locations, manage deliveries, and communicate with customers
- **Administrators**: Can manage users, oversee operations, and handle customer support

## Development

### File Naming Convention
- Customer pages: `2.x Consumer(feature).php`
- Delivery pages: `3.x Delivery(feature).php`
- Admin pages: `4.x Admin(Consumer).php`, `5.x Admin(Delivery).php`, `6.x Admin(Order).php`

### Key Features Implementation
- Responsive design using Bootstrap
- Modal-based navigation for better UX
- PHP session management for user authentication
- MySQL integration for data persistence

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/new-feature`)
3. Commit your changes (`git commit -am 'Add new feature'`)
4. Push to the branch (`git push origin feature/new-feature`)
5. Create a Pull Request

## Future Enhancements

- Real-time GPS tracking integration
- SMS/Email notifications
- Mobile application development
- Advanced analytics and reporting
- Multi-language support
- Payment gateway integration

## License

This project is developed as a college mini-project. Please respect academic integrity guidelines when using this code.

## Contact

**MapGo Pvt. Ltd.**
- Location: 221b Bakers Street, London, UK NW1 6XE
- Project developed in 2022

---

### Screenshots

The application features a modern, responsive design with:
- Clean navigation interface
- Professional color scheme (Primary blue theme)
- Intuitive user dashboards
- Mobile-friendly responsive layout

*For technical support or queries, please refer to the contact information provided in the application.*
# MAPGo
