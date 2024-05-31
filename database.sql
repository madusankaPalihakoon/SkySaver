CREATE DATABASE skysaver;

USE skysaver;

CREATE TABLE FlightDetails (
    flight_id INT AUTO_INCREMENT PRIMARY KEY,
    airline_name VARCHAR(50) NOT NULL,
    flight_number VARCHAR(10) NOT NULL,
    departure_airport_code VARCHAR(5) NOT NULL,
    arrival_airport_code VARCHAR(5) NOT NULL,
    departure_date_time DATETIME NOT NULL,
    arrival_date_time DATETIME NOT NULL,
    duration TIME NOT NULL,
    available_seats INT NOT NULL,
    class_of_service ENUM('Economy', 'Business', 'First') NOT NULL,
    currency VARCHAR(10) NOT NULL
);

INSERT INTO FlightDetails (
    airline_name, flight_number, departure_airport_code, arrival_airport_code, 
    departure_date_time, arrival_date_time, duration, available_seats, 
    class_of_service, currency
) VALUES
('SriLankan Airlines', 'UL101', 'CMB', 'LHR', '2024-06-01 08:00:00', '2024-06-01 16:00:00', '10:00:00', 150, 'Economy', 'USD'),
('SriLankan Airlines', 'UL102', 'CMB', 'DXB', '2024-06-02 09:00:00', '2024-06-02 13:00:00', '04:00:00', 180, 'Business', 'USD'),
('SriLankan Airlines', 'UL103', 'CMB', 'SIN', '2024-06-03 10:00:00', '2024-06-03 16:00:00', '06:00:00', 120, 'First', 'USD'),
('SriLankan Airlines', 'UL104', 'HRI', 'DOH', '2024-06-04 11:00:00', '2024-06-04 15:00:00', '04:00:00', 140, 'Economy', 'USD'),
('SriLankan Airlines', 'UL105', 'HRI', 'KUL', '2024-06-05 12:00:00', '2024-06-05 18:00:00', '06:00:00', 160, 'Business', 'USD'),
('SriLankan Airlines', 'UL106', 'HRI', 'BKK', '2024-06-06 13:00:00', '2024-06-06 19:00:00', '06:00:00', 130, 'First', 'USD'),
('SriLankan Airlines', 'UL107', 'JAF', 'MCT', '2024-06-07 14:00:00', '2024-06-07 18:00:00', '04:00:00', 170, 'Economy', 'USD'),
('SriLankan Airlines', 'UL108', 'JAF', 'BOM', '2024-06-08 15:00:00', '2024-06-08 19:00:00', '04:00:00', 150, 'Business', 'USD'),
('SriLankan Airlines', 'UL109', 'JAF', 'MAA', '2024-06-09 16:00:00', '2024-06-09 18:00:00', '02:00:00', 200, 'First', 'USD'),
('SriLankan Airlines', 'UL110', 'CMB', 'CDG', '2024-06-10 17:00:00', '2024-06-10 23:00:00', '06:00:00', 190, 'Economy', 'USD');


CREATE TABLE AirportDetails (
    airport_id INT AUTO_INCREMENT PRIMARY KEY,
    airport_code VARCHAR(5) NOT NULL UNIQUE,
    airport_name VARCHAR(100) NOT NULL,
    city VARCHAR(50) NOT NULL,
    country VARCHAR(50) NOT NULL,
    terminal_number VARCHAR(10),
    gate_number VARCHAR(10)
);

INSERT INTO AirportDetails (
    airport_code, airport_name, city, country, terminal_number, gate_number
) VALUES
('CMB', 'Bandaranaike International Airport', 'Colombo', 'Sri Lanka', '4', 'A1'),
('HRI', 'Mattala Rajapaksa International Airport', 'Hambantota', 'Sri Lanka', 'B', 'B2'),
('JAF', 'Jaffna International Airport', 'Jaffna', 'Sri Lanka', '1', 'C3'),
('LHR', 'Heathrow Airport', 'London', 'United Kingdom', '5', 'D4'),
('DXB', 'Dubai International Airport', 'Dubai', 'United Arab Emirates', '3', 'E5'),
('SIN', 'Changi Airport', 'Singapore', 'Singapore', '2', 'F6'),
('DOH', 'Hamad International Airport', 'Doha', 'Qatar', '1', 'G7'),
('KUL', 'Kuala Lumpur International Airport', 'Kuala Lumpur', 'Malaysia', 'M', 'H8'),
('BKK', 'Suvarnabhumi Airport', 'Bangkok', 'Thailand', 'N', 'I9'),
('CDG', 'Charles de Gaulle Airport', 'Paris', 'France', '2', 'J10');


CREATE TABLE offerDetails (
    offer_id INT AUTO_INCREMENT PRIMARY KEY,
    offer_subject VARCHAR(50),
    offer_details VARCHAR(255),
    offer_valid DATE NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO offerDetails (offer_subject, offer_details, offer_valid) VALUES
('In-flight Wi-Fi', 'Stay productive while you fly with in-flight Wi-Fi on SriLankan Airlines. Answer your emails, surf the internet or chat with your friends online - just as you would do on the ground. The in-flight Wi-Fi facility is available for purchase on our new A330-300 and A320/321 Neo fleet. Our cabin crew will let you know if your flight is equipped with our inflight Wi-Fi facility during the flight.', '2024-12-31'),
('Book Now, Pay In Cash', 'You don"t need a credit card anymore! Convenient payment option that is absolutely credit card-free SriLankan Airlines team up with Exchange Houses in the United Arab Emirates to bring you in full swing to have flamboyant travel experience. This unique offer which brings utmost convenience to air travelers through a synergy of book online and pay in cash through a wide range of touch points.', '2024-06-30'),
('Baggage Allowance', 'Pre-purchase excess baggage at discounted rates. Save time, money and avoid hassle at the airport by pre-purchasing excess baggage at a discount from airport rates on Srilankan.com. You can purchase discounted extra baggage while booking your flight or via our Manage my Booking feature on Srilankan.com even 3 hours prior to your scheduled departure! Get discounts on Pre-purchased Baggage Allowance.', '2024-09-30'),
('Early Bird Discount', 'Book your flight at least 60 days in advance and save 20% on your fare.', '2024-07-31'),
('Student Discount', 'Students can enjoy special discounted fares on all routes with a valid student ID.', '2024-11-30'),
('Weekend Getaway', 'Plan a quick weekend getaway and enjoy discounted fares on selected destinations.', '2024-08-31'),
('Family Package', 'Travel with your family and avail special package deals and discounts.', '2024-10-15'),
('Holiday Sale', 'Take advantage of our holiday sale with up to 50% off on selected flights.', '2024-12-25'),
('Business Class Upgrade', 'Book an economy class ticket and stand a chance to get a free upgrade to business class.', '2024-07-15'),
('Frequent Flyer Miles', 'Earn double frequent flyer miles on all international flights booked in the next 3 months.', '2024-09-15');

CREATE TABLE schedule (
    schedule_id INT AUTO_INCREMENT PRIMARY KEY,
    flight_id INT NOT NULL,
    from_airport_id INT NOT NULL,
    to_airport_id INT NOT NULL,
    departure_date DATE NOT NULL,
    departure_time TIME NOT NULL,
    arrival_date DATE NOT NULL,
    arrival_time TIME NOT NULL,
    base_fare DECIMAL(10, 2) NOT NULL,
    taxes_fees DECIMAL(10, 2) NOT NULL,
    currency VARCHAR(10) NOT NULL,
    FOREIGN KEY (flight_id) REFERENCES FlightDetails(flight_id),
    FOREIGN KEY (from_airport_id) REFERENCES AirportDetails(airport_id),
    FOREIGN KEY (to_airport_id) REFERENCES AirportDetails(airport_id)
);

INSERT INTO schedule (
    flight_id, from_airport_id, to_airport_id, departure_date, departure_time, arrival_date, arrival_time, base_fare, taxes_fees, currency
) VALUES
(1, 1, 2, '2024-06-01', '08:00:00', '2024-06-01', '16:00:00', 6000.00, 1000.00, 'LKR'),
(2, 1, 3, '2024-06-02', '09:00:00', '2024-06-02', '13:00:00', 10000.00, 1400.00, 'LKR'),
(3, 1, 4, '2024-06-03', '10:00:00', '2024-06-03', '16:00:00', 14000.00, 1800.00, 'LKR'),
(4, 2, 5, '2024-06-04', '11:00:00', '2024-06-04', '15:00:00', 8000.00, 1200.00, 'LKR'),
(5, 2, 6, '2024-06-05', '12:00:00', '2024-06-05', '18:00:00', 10000.00, 1600.00, 'LKR'),
(6, 2, 7, '2024-06-06', '13:00:00', '2024-06-06', '19:00:00', 12000.00, 1800.00, 'LKR'),
(7, 3, 8, '2024-06-07', '14:00:00', '2024-06-07', '18:00:00', 7000.00, 1400.00, 'LKR'),
(8, 3, 9, '2024-06-08', '15:00:00', '2024-06-08', '19:00:00', 9000.00, 1600.00, 'LKR'),
(9, 3, 10, '2024-06-09', '16:00:00', '2024-06-09', '18:00:00', 11000.00, 2000.00, 'LKR'),
(10, 1, 10, '2024-06-10', '17:00:00', '2024-06-10', '23:00:00', 9500.00, 1800.00, 'LKR');




CREATE TABLE PersonalInformation (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    middle_name VARCHAR(50),
    last_name VARCHAR(50) NOT NULL,
    date_of_birth DATE NOT NULL,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    nationality VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone_number VARCHAR(20),
    passport_number VARCHAR(20) UNIQUE,
    passport_expiry_date DATE,
    visa_information TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO PersonalInformation (
    first_name, middle_name, last_name, date_of_birth, gender, nationality, 
    email, phone_number, passport_number, passport_expiry_date, visa_information
) VALUES
('John', 'A', 'Doe', '1990-01-01', 'Male', 'USA', 'john.doe@example.com', '123-456-7890', 'X1234567', '2025-01-01', 'N/A'),
('Jane', NULL, 'Smith', '1985-05-15', 'Female', 'Canada', 'jane.smith@example.com', '234-567-8901', 'Y2345678', '2024-05-15', 'N/A'),
('Alice', 'B', 'Johnson', '1992-07-20', 'Female', 'UK', 'alice.johnson@example.com', '345-678-9012', 'Z3456789', '2026-07-20', 'Tourist Visa valid until 2024-07-20'),
('Bob', NULL, 'Brown', '1988-10-30', 'Male', 'Australia', 'bob.brown@example.com', '456-789-0123', 'A4567890', '2023-10-30', 'N/A'),
('Emily', 'C', 'Davis', '1995-12-25', 'Female', 'New Zealand', 'emily.davis@example.com', '567-890-1234', 'B5678901', '2025-12-25', 'N/A');


CREATE TABLE Pricing (
    pricing_id INT AUTO_INCREMENT PRIMARY KEY,
    flight_id INT NOT NULL,
    class_of_service ENUM('Economy', 'Business', 'First') NOT NULL,
    base_fare DECIMAL(10, 2) NOT NULL,
    taxes_fees DECIMAL(10, 2) NOT NULL,
    total_price AS (base_fare + taxes_fees) STORED,
    currency VARCHAR(10) NOT NULL,
    FOREIGN KEY (flight_id) REFERENCES FlightDetails(flight_id)
);

-- Example data
INSERT INTO Pricing (flight_id, class_of_service, base_fare, taxes_fees, currency)
VALUES
(1, 'Economy', 300.00, 50.00, 'USD'),
(2, 'Business', 500.00, 70.00, 'USD'),
(3, 'First', 700.00, 90.00, 'USD'),
(4, 'Economy', 200.00, 30.00, 'USD'),
(5, 'Economy', 250.00, 40.00, 'USD');

CREATE TABLE ReservationDetails (
    reservation_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    flight_id INT NOT NULL,
    booking_reference VARCHAR(20) NOT NULL UNIQUE,
    booking_status ENUM('Confirmed', 'Pending', 'Cancelled') NOT NULL,
    payment_status ENUM('Paid', 'Unpaid') NOT NULL,
    seat_selection VARCHAR(10),
    special_requests TEXT,
    FOREIGN KEY (user_id) REFERENCES PersonalInformation(user_id),
    FOREIGN KEY (flight_id) REFERENCES FlightDetails(flight_id)
);

-- Example data
INSERT INTO ReservationDetails (user_id, flight_id, booking_reference, booking_status, payment_status, seat_selection, special_requests)
VALUES
(1, 1, 'BR12345', 'Confirmed', 'Paid', '12A', 'Vegetarian meal'),
(2, 2, 'BR12346', 'Pending', 'Unpaid', '14B', 'Extra legroom'),
(3, 3, 'BR12347', 'Cancelled', 'Unpaid', '15C', NULL),
(4, 4, 'BR12348', 'Confirmed', 'Paid', '16D', 'Wheelchair assistance'),
(5, 5, 'BR12349', 'Confirmed', 'Paid', '17E', 'Gluten-free meal');

CREATE TABLE PaymentInformation (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    reservation_id INT NOT NULL,
    payment_method ENUM('Credit Card', 'Debit Card', 'PayPal', 'Bank Transfer') NOT NULL,
    payment_amount DECIMAL(10, 2) NOT NULL,
    payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    payment_confirmation_number VARCHAR(50) NOT NULL,
    billing_address TEXT NOT NULL,
    FOREIGN KEY (reservation_id) REFERENCES ReservationDetails(reservation_id)
);

-- Example data
INSERT INTO PaymentInformation (reservation_id, payment_method, payment_amount, payment_confirmation_number, billing_address)
VALUES
(1, 'Credit Card', 350.00, 'PC123456', '123 Main St, City, Country'),
(2, 'PayPal', 570.00, 'PC123457', '456 Elm St, City, Country'),
(3, 'Debit Card', 790.00, 'PC123458', '789 Oak St, City, Country'),
(4, 'Bank Transfer', 230.00, 'PC123459', '321 Pine St, City, Country'),
(5, 'Credit Card', 290.00, 'PC123460', '654 Cedar St, City, Country');

CREATE TABLE BaggageInformation (
    baggage_id INT AUTO_INCREMENT PRIMARY KEY,
    reservation_id INT NOT NULL,
    baggage_allowance INT NOT NULL,
    additional_baggage DECIMAL(10, 2) DEFAULT 0.00,
    FOREIGN KEY (reservation_id) REFERENCES ReservationDetails(reservation_id)
);

-- Example data
INSERT INTO BaggageInformation (reservation_id, baggage_allowance, additional_baggage)
VALUES
(1, 20, 30.00),
(2, 25, 40.00),
(3, 30, 0.00),
(4, 15, 20.00),
(5, 20, 50.00);


CREATE TABLE UserAccountManagement (
    account_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    account_creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    account_status ENUM('Active', 'Inactive', 'Banned') DEFAULT 'Active',
    preferred_language VARCHAR(20) DEFAULT 'English',
    preferred_currency VARCHAR(10) DEFAULT 'USD',
    notification_preferences ENUM('Email', 'SMS', 'None') DEFAULT 'Email',
    FOREIGN KEY (user_id) REFERENCES PersonalInformation(user_id)
);

-- Example data
INSERT INTO UserAccountManagement (user_id, username, password_hash, preferred_language, preferred_currency, notification_preferences)
VALUES
(1, 'johndoe', 'hashed_password_123', 'English', 'USD', 'Email'),
(2, 'janesmith', 'hashed_password_456', 'French', 'CAD', 'SMS'),
(3, 'alicejohnson', 'hashed_password_789', 'Spanish', 'GBP', 'None'),
(4, 'bobbrown', 'hashed_password_101', 'English', 'AUD', 'Email'),
(5, 'emilydavis', 'hashed_password_102', 'German', 'NZD', 'Email');

