<div align="center">
  <img src="./banner-locadora.png"
       alt="Banner do projeto Locadora Digital"
       width="100%">
</div>

# 🎬 Digital Video Rental Store

<div align="center">

**A nostalgic video rental store experience, now in a digital environment.**

A full-stack web platform inspired by the classic Blockbuster, developed using PHP, JavaScript, and MySQL. It features a film catalog, user authentication, and movie management based on access levels.

<br>

![PHP](https://img.shields.io/badge/PHP-8%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-ES6%2B-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

![CI Status](https://github.com/MathBrito0/Blockbuster/actions/workflows/main.yml/badge.svg)

</div>

---

### ![Section](https://img.shields.io/badge/📖_About_the_Project-1677FF?style=for-the-badge)

**Blockbuster — Digital Video Rental Store** is an academic project developed for the **Web Programming** course, as part of the Bachelor’s degree program in Cybersecurity at **PUCPR**. The proposal aims to digitally recreate the experience of a classic video rental store, utilizing a thematic interface inspired by the visual identity of Blockbuster, combined with the functionality of a modern web application.

Beyond simply presenting a film catalog, the project serves as an application of Full-Stack development concepts, including client-server communication, data persistence, authentication, and information security.

---

### ![Section](https://img.shields.io/badge/🎞️_Project_Highlights-FFD429?style=for-the-badge)

| | Feature | Description |
|:---:|---|---|
| 🍿 | **Film Catalog** | 126 films organized into 7 thematic categories. |
| 🔐 | **Authentication** | User registration, login, and session management. |
| 👥 | **Access Control** | Differentiated permissions for customers and staff. |
| 🎬 | **Film Management** | Ability for authorized users to add new titles. |
| 🛡️ | **Web Security** | Password hashing, "pepper" implementation, PDO, and session protection. |
| ⚙️ | **Auto-Seed** | Automatic creation of administrative staff accounts. |

---

## ![Section](https://img.shields.io/badge/✨_Features-1677FF?style=for-the-badge)

### ![Section](https://img.shields.io/badge/🎥_Film_Catalog-0B1F3A?style=for-the-badge)

- Browsing via shelves organized by film genre.
- Access to detailed information for individual films.
- Display of titles, directors, release years, synopses, and cover art.
- Visual layout inspired by traditional brick-and-mortar video rental stores.


### ![Section](https://img.shields.io/badge/🔑_Authentication_and_Users-0B1F3A?style=for-the-badge)

- Registration of new users.
- Login and logout with PHP session management.
- Account creation with a default customer profile.
- Authentication with secure password storage.

### ![Section](https://img.shields.io/badge/🛠️_Administrative_Management-0B1F3A?style=for-the-badge)

- Adding new movies to the catalog.
- Administrative features accessible exclusively to staff.
- Permission verification implemented in both the interface and the backend.

---

## ![Section](https://img.shields.io/badge/🎭_Film_Catalog-FFD429?style=for-the-badge)

The initial catalog features **126 movies**, organized into seven categories to facilitate navigation and provide an experience similar to that of a traditional video rental store.

| Category | Quantity |
|---|:---:|
| 🔫 Action | 23 |
| 🚀 Science Fiction | 22 |
| 🎌 Anime | 20 |
| 🎨 Animation | 15 |
| 😂 Comedy | 15 |
| 👻 Horror | 15 |
| 🎭 Drama | 16 |
| **Total** | **126** |

Each category contains a selection of films, covering a variety of genres, eras, and styles.

---

## ![Section](https://img.shields.io/badge/🧰_Technologies_Used-1677FF?style=for-the-badge)

The system was developed using technologies designed for building dynamic web applications, with a clear separation between the user interface, processing logic, and data persistence.

| Layers | Tools |
|---|---|
| **Frontend** | ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white) ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white) |
| **Interactivity** | ![JavaScript](https://img.shields.io/badge/JavaScript_ES6+-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black) ![Fetch API](https://img.shields.io/badge/Fetch_API-555555?style=for-the-badge) |
| **Backend** | ![PHP](https://img.shields.io/badge/PHP_8+-777BB4?style=for-the-badge&logo=php&logoColor=white) |
| **Comunnication** | ![REST API](https://img.shields.io/badge/API_REST-009688?style=for-the-badge) ![JSON](https://img.shields.io/badge/JSON-000000?style=for-the-badge&logo=json&logoColor=white) |
| **Database** | ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white) ![MariaDB](https://img.shields.io/badge/MariaDB-003545?style=for-the-badge&logo=mariadb&logoColor=white) |
| **Database Connection** | ![PDO](https://img.shields.io/badge/PDO-777BB4?style=for-the-badge&logo=php&logoColor=white) |
| **Dev Environment** | ![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white) ![Apache](https://img.shields.io/badge/Apache-D22128?style=for-the-badge&logo=apache&logoColor=white) |
---

## ![Section](https://img.shields.io/badge/🏗️_Architecture_and_Implementation-FFD429?style=for-the-badge)

The application employs a client-server architecture, separating the responsibilities of presentation, request processing, and data storage.

### Frontend

Responsible for the user interface and user interaction.

- HTML5 for page structure.
- CSS3 for visual identity and catalog organization.
- JavaScript for validation and dynamic interactions.
- Fetch API for asynchronous communication with the backend.

### Backend

Developed in PHP, it handles business logic and request processing.

- Authentication and session management.
- User permission validation.
- Registration processing.
- Endpoints for movie-related operations.
- Database communication using PDO.

### Database

MySQL is used for application data persistence.

The main entities are:

- `usuarios` (users): stores registration, authentication, and user profile data.
- `filmes` (movies): stores information for the film catalog.

---

## ![Section](https://img.shields.io/badge/🔐_Information_Security-1677FF?style=for-the-badge)

Security was treated as a core pillar of development, incorporating mechanisms to protect user data and restrict administrative operations.

### 1. Protection Against SQL Injection

Database operations utilize **Prepared Statements via PDO**, which separate SQL commands from data provided by users.

### 2. Secure Password Storage

Passwords are not stored in plain text.

The system uses `password_hash()` in conjunction with an additional key known as a **PEPPER_KEY**, adding an extra layer of protection to the credential storage process.

### 3. Session Protection

Following successful authentication, the system executes `session_regenerate_id(true)`, renewing the session identifier to mitigate risks associated with Session Fixation attacks.

The logout process also destroys all active session data.

### 4. Access Control — RBAC

The system implements **Role-Based Access Control (RBAC)**.

| Role | Permissions |
|---|---|
| **Visitor** | Registration and access to public features. |
| **Customer** | Browsing the catalog and viewing movie information. |
| **Employee** | Access to administrative management features. |

Permissions are verified across two layers:

- **Frontend:** Administrative elements are displayed based on the user's role.
- **Backend:** Endpoints verify the session and permissions before executing restricted operations.

This approach ensures that simply manipulating the user interface is not enough to gain access to administrative functionality.

---

## ![Section](https://img.shields.io/badge/⚙️_Auto_Seed_Automation-FFD429?style=for-the-badge)


To simplify environment setup and facilitate project demonstrations on different machines, an **Auto-Seed** mechanism has been implemented.

During system initialization:

1. The backend checks for the email addresses of pre-configured team members.
2. If an account does not yet exist, a new record is created.
3. Credentials are stored using a Hash + Pepper mechanism.
4. Team accounts are automatically assigned the `employee` (`funcionario`) profile.

The process also prevents the duplication of users who are already registered.

---



### 🚀 How to Run the Project

### Prerequisites

Before you begin, ensure you have the following:

- [XAMPP](https://www.apachefriends.org/pt_br/index.html) installed.
- PHP 8 or higher.
- MySQL or MariaDB.
- An up-to-date web browser.
- Git (optional).

### 1. Clone the repository

Open your terminal and navigate to the XAMPP `htdocs` folder:

```bash
cd C:\xampp\htdocs
```

Clone the repository:

```bash
git clone https://github.com/YOUR-USERNAME/REPOSITORY-NAME.git
```

### 2. Start the environment

Open the XAMPP Control Panel and start the following services:

- Apache
- MySQL

### 3. Configure the database

1. Access phpMyAdmin:

http://localhost/phpmyadmin

2. Import the `banco.sql` file, located in the project root directory.
3. Complete the import to create the tables and populate the initial catalog. ### 4. Configure the connection

Check the file responsible for the database connection and configure the necessary parameters:

| Parameter | Value |
|---|---|
| Host | `localhost` |
| Database | `blockbuster_db` |
| User | `root` |
| Password | As per your local MySQL configuration |

Also, configure the `PEPPER_KEY` variable, if required by the system.


### 5. Access the application

With Apache and MySQL running, open your web browser and go to:

```text
http://localhost/REPOSITORY-NAME/
```

Once initialized, the system will be ready for use.

---

## 🧪 Testing Workflow

To verify that the core features are working correctly, it is recommended to follow the steps below:

| Step | Procedure | Expected Result |
|---|---|---|
| 01 | Access the home page | The catalog is displayed. |
| 02 | Browse through categories | Movie shelves are visible. |
| 03 | Register | A customer account is created. |
| 04 | Log in | Authentication occurs, and a session is established. |
| 05 | Access as a customer | Administrative features are restricted. |
| 06 | Access as an employee | Administrative options become available. |
| 07 | Register a movie | The title is added to the catalog. |
| 08 | Log out | The active session is terminated. |

---

## 👥 Development Team

Project developed collaboratively by students from the **Pontifical Catholic University of Paraná (PUCPR)**.

| Member | GitHub |
|---|---|
| georgepscheidt29-sudo | [@georgepscheidt29-sudo](https://github.com/georgepscheidt29-sudo) |
| MathBrito0 | [@MathBrito0](https://github.com/MathBrito0) |
| Humbzto | [@Humbzto](https://github.com/Humbzto) |

---

## 🎓 Academic Context

| Information | Description |
|---|---|
| **Institution** | Pontifical Catholic University of Paraná — PUCPR |
| **Degree Program** | Bachelor’s in Cybersecurity |
| **Course** | Web Programming | ---

<div align="center">

**🎬 BLOCKBUSTER — The classic cinema experience, reimagined for the web.**

*Developed with dedication by the team.*

</div>
