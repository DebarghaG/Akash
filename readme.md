# Demo Link
[Demo](http://demo.grandworks.co/digitalsky/)

# Sketch Design
[Download](https://www.dropbox.com/s/qwj2m3c9nlyfth2/DigitalSky_02.sketch?dl=0)

# General

- Its normal html/css markup, but just to use same header and footer on all pages we have used php, and included header.php & footer.php in each page.
- We are using [foundation](https://foundation.zurb.com/sites/docs/) as frontend framework and its included in header and Footer
- We are using foundation's [XY grid](https://foundation.zurb.com/sites/docs/xy-grid.html) for grid framework
- CSS is written in SASS with path: css/style.scss, compiled to same directory css/style.css
- Javascript for functionality is written in js/app.js and minified and included with path js/min/app-min.js
- Whole frontend is done modular, we just have to follow correct markup and classes

# Files

#### Home Page
_index.php_

#### Login - Register Page
_login.php_, _register.php_

#### User dashboard
_dashboard.php_

#### Admin dashboard
_admin.php_

#### Apply for Pilot or Manufacturer or as operator
_apply-for.php_

#### Form Step-1, Step-2, Step-3
_apply-for-pilot.php_, _apply-for-pilot-step-2.php_, _apply-for-pilot-step-3.php_

#### Form Success & form fail
_thanks.php_, _fail.php_

#### Drone Profile
_drone-profile.php_

#### Test Locations
_test-locations.php_

# Version history

## 1.0
- Delivered

## 1.1
- Styles for valid and error fields. add class "valid" & "error" for the same
- Mandatory fields *
- Blog page style on blog.php
- Admin navigation fix, Menu for Approved, Denied and Pending applications
- Application approve style fixes
