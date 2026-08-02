# SYSTEM REQUIREMENT DESCRIPTION
## Allow users to access the system via accounts
## Allocate system resource usage based on user roles

## Login Form
- Username
- Password

### Processing Flow
+ Users must log in to access the system
+ If a user attempts to access without logging in, they will be redirected to the login page

### Checklist for Feature Implementation
+ Build database
+ Build user interface
+ Conceptualize login session storage
+ Form validation
+ Write login functionality
+ Display login information
+ Handle redirection for unauthenticated access
+ Handle logout

# 1. Building Application Database - (Two-dimensional array)
+ Store array in user format
+ Store multiple users
+ Information includes: id, username, password, fullname, email

# 2. Login Session Storage Concept
+ Post-login storage requirements:
  + Login status
  + Logged-in user
+ Storage tool: Session

```php
$_SESSION['is_login'] = true;
$_SESSION['user_login'] = 'tien'; 
# 6. Display login information
Welcome the logged-in user

Display a logout link to help users exit the login session