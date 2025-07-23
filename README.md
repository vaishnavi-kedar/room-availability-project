# Room Availability Checker

A web-based application to check hotel room availability using PHP, MySQL, and a stored procedure. Designed for simple reservation systems where users can input dates and get real-time availability status for a room.

---

## Features

- Frontend form to input Room ID, Check-in and Check-out dates
- PHP backend with MySQL database connection
- Uses stored procedure to check for overlapping reservations
- Clean UI with card-based result display
- Sample data included (Users, Rooms, Reservations)

---

## Tech Stack

- Frontend: HTML, CSS
- Backend: PHP (with XAMPP)
- Database: MySQL (via phpMyAdmin)
- Tools: VS Code, Git, GitHub

---

## How to Run the Project Locally

### Prerequisites

- XAMPP installed
- MySQL running on localhost
- VS Code (optional)

---

### Setup Instructions

1. Start Apache and MySQL in XAMPP

2. Import SQL File:
   - Open phpMyAdmin
   - Create a new database named: `hotel_management`
   - Import the file: `room_availability_project.sql` (or `hotel_management.sql`)

3. Place the Project Folder:
   - Copy the folder `room_availability_project` into:
     ```
     C:\xampp\htdocs\
     ```

4. Access the App:
   - Open browser and visit:  
     ```
     http://localhost/room_availability_project/index.html
     ```

5. Test It:
   - Try Room ID `1`
   - Check-in: `2025-08-02`
   - Check-out: `2025-08-04`
   - Click "Check Availability"

---

## Sample Data

- Users: 2 test users (Vaishnavi, Ankit Sharma)
- Hotels: BlueMoon (Pune), Sunrise (Mumbai)
- Rooms: 5 types (Deluxe, Suite, Standard, Economy)
- Reservations: 6 entries with various overlapping dates


