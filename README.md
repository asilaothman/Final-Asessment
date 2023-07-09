# WEB APPLICATION SECURITY FINAL ASSESSMENT

Group Name - **ITNAN**<br>

Title of Web Application - **Sabah & Sarawak WebApp**<br>

Group Member Details and our Tasks:

NAME                          |MATRIC NO                      | TASK                    |
-------------------------------|-----------------------------|-----------------------------|
JAMA SABIRIN SAAD         |1835578          |Database Security Principles, File Security Principles |
ANIS ASILA BINTI OTHMAN          |    1914782         |Input Validation, XSS and CSRF Prevention       |
NUR ALIA BINTI MUHAMMAD   |2010884 |Introduction, Authentication  |
NURUL SHAHIRAH BINTI AHMAD FIKRI|2013890  |Objective, Authorization |

## Table of Contents
**[Introduction of Web Application](#introduction-of-web-application)**<br>
**[Objective of the Enhancements](#objective-of-the-enhancements)**<br>
**[Web Application Security Enhancements](#web-application-security-enhancements)**<br>
**[References](#references)**<br>

## Introduction of Web Application

As part of our final assessment, we need to improve our previous web application that was built during the web technologies course. Our goal is to incorporate all the security elements and components we have learned in our web security class to reinforce the web application with the necessary security measures. This includes implementing security measures such as input validation, authentication, authorization, protection against cross-site scripting (XSS) and cross-site request forgery (CSRF), as well as adhering to file security principles.

## Objective of the Enhancements

The objectives of the enhancements are as follows:
  1. To establish thorough input validation procedures to avoid attacks like SQL injection, XSS, and attempts at modifying data.
  2. Strengthen authentication by implementing multi-factor authentication and strict password policies.
  3. Implement strict authorization controls to limit user access to only the resources they are allowed to use based on  privileges  and reliable session management.
  4. Include security libraries and frameworks in place and output encoding to safeguard against Cross-Site Scripting (XSS) attacks.
  5. Employ Cross-Site Request Forgery (CSRF) prevention techniques, such as creating and validating special tokens for each user session.
  6. Use parameterized queries, enforce access controls, and encrypt sensitive data to improve database security.
  7. Implement secure file handling procedures, such as file type validation, limited file access, and secure file storage for uploaded files.

By concentrating on these objectives, the improved web application will be strengthened with security components to defend against various threats, ensuring the security and accessibility of the website for its users.

## Web Application Security Enhancements

<details><summary>Input Validation</summary>

</details>

<details><summary>Authentication</summary>
Based on the files prior to the enhancement, it is evident that the web app lacked authentication implementation. As a result, the web app was insecure and accessible to anyone without tracking or confirming the users' identities. To address this issue, we introduced an authentication function to our web app (files: registerdb.php [for register] & connect.php [for login]). This function assesses whether a subject has the authorization to perform operations on specific objects. To log in, users are required to register their personal information such as name, username, password, and residency. Initially, we designed or reviewed the authentication mechanism to ensure it accurately identifies users and validates their identity using a robust and appropriate process. Additionally, we ensured that the authentication system adheres to industry best practices by not storing the password in plaintext and using a strong hash (file: registerdb.php line 33). Furthermore, we enforce strict password policies to enhance security. This includes setting a minimum password length of 8 characters and implementing minimum password complexity requirements (file: registerlogin.php line 11-25).

</details>

<details><summary>Authorization</summary>

</details>

<details><summary>XSS and CSRF Prevention</summary>
For XSS and CSRF prevention, a couple of measures have been implemented in this web application:
  
</details> 

<details><summary>Database Security Principles</summary>
To prevent sql injection attacks, the following measures have been implemented in the context of this web application project: 
  
The first step is to avoid accepting single quotation characters and boolean conditions in web applications. This type of attack can be avoided by using input sanitization methods on both the server and client sides. The input sanitization method ensures that special characters in SQL queries are escaped by using the mysqli_real-escape_string function. Second, is modifying the administrator's permitted privileges and monitoring it based on crucial admin permissions such as edit, update, and delete the database. 

</details>
  
<details><summary>File Security Principles</summary>
Below are the security measures taken on the files of the web application
  
1. Clearing the cache : The cache holds temporary data from websites that users visits, and an attacker can access user data stored in the cache, such as login credentials. Clearing the user's browser cache prevents unauthorized users from accessing specific files when they are not logged into the system. When a user logs out of the system, the session and login credentials are deleted. These also prevent attackers from performing forceful browsing to get access to system files and modify them.
  
2. Disable error: If PHP error messages are not disabled in user's browsers, an attacker might attempt to read any sensitive information from the error messages, such as table names if those tables are not present in the database. We may prevent PHP errors from being displayed in user web browsers by altering the apache web server configuration file.

3. Disable directory listing: Listing the files in the directory can lead to a vulnerability. When enabled , it shows the contents of directories without index files. If directory listing is not disabled, attackers can read and edit certain files. One of the steps taken to prevent listing directory files is the implementation of .htaccess file. Another step is setting up the Apache configuration file so that it directs users to authpage.php when they access the web application.

</details>

## References

 *Rafael, W. (2021, May 30). Two Steps Verification with PHP and Google Authenticator. https://www.rafaelwendel.com/en/2021/05/two-step-verification-with-php-and-google-authenticator/*<br>
 
 *StudentsTutorial (n.d.). Two Factor Authentication using PHP. https://www.studentstutorial.com/php/two-factor-authentication*

 

