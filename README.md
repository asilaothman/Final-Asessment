# WEB APPLICATION SECURITY FINAL ASSESSMENT

Group Name - **ITNAN**<br>

Title of Web Application - **Sabah & Sarawak's Tourism**<br>

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
  
</details> 

<details><summary>Database Security Principles</summary>

</details>
  
<details><summary>File Security Principles</summary>

</details>

## References
