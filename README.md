# Gym Management System 💪🏽

A web-based Gym Management System built to streamline and manage gym operations including memberships, trainers, payments, and more. This system interacts with a MySQL database to fetch and manage data, providing users with a smooth and efficient interface.

---

## 🔧 Technologies Used

- **Frontend**: HTML, CSS, JavaScript  
- **Backend**: PHP / Web Application Framework  
- **Database**: MySQL  
- **Architecture**: Client-Server model with REST-like interactions

---

## 📌 Features

- 🔐 **User Authentication** – Secure login and validation
- 🏋️‍♂️ **Gym Details** – View available gym facilities and infrastructure
- 📋 **Membership Management** – Access membership plans and details
- 👥 **Member Management** – Manage list of active and new gym members
- 💳 **Payment Details** – Monitor membership payment records
- 🧑‍🏫 **Trainer Management** – View and manage trainer information

---

## 📈 Sequence Workflow Overview

The project follows a clean MVC pattern where the frontend interacts with the backend to fetch or update data from the database. Here's the overall flow:

1. **Login** – User logs in; credentials validated via database.
2. **Dashboard** – User is redirected to dashboard with user-specific data.
3. **View Details** – Fetch and display gym, membership, members, payments, and trainers using database queries.

### 📊 Sequence Diagram
![Sequence Diagram](SEQ.png)

---

## 📸 Screenshots

> _Add screenshots here once uploaded_

---

## 🚀 How to Run Locally

1. **Clone the repo**
   ```bash
   git clone https://github.com/your-username/gym-management-system.git
   cd gym-management-system
