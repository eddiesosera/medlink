<br />

![GitHub repo size](https://img.shields.io/github/repo-size/eddiesosera/medlink?color=%23FF4C54)
![GitHub watchers](https://img.shields.io/github/watchers/eddiesosera/medlink?color=%23FFA191)
![GitHub language count](https://img.shields.io/github/languages/count/eddiesosera/medlink?color=%231EBBBA)
![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/eddiesosera/medlink?color=%234E54AD)

<a name="readme-top"></a>
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks]][forks-url]
[![Starsgazers][stars]][stars-url]

#

![Header][header]

<div align="center">

  <h3 align="center">Medlink </h3>

  <p align="center">
    Medlink: a dashboard designed for receptionists at a therapy clinic.
    <br />
    <br />
    Eddie Sosera
    <br />
    <br />
    <a href="https://github.com/eddiesosera/medlink/blob/main/"><strong>Explore the docs</strong></a>
    <br />
    <br />
    <a href="https://drive.google.com/file/d/1xJGy-j4TskFiKSpnWFAl9HrnYCG_uiMS/view?usp=sharing">View Demo</a>
    ·
    <a href="https://github.com/eddiesosera/medlink/issues">Report Bug</a>
    ·
    <a href="https://github.com/eddiesosera/medlink/issues">Request Feature</a>
  </p>
  <br />
</div>

## About this Project

![Banner][banner]

Medlink serves as an intuitive and efficient dashboard specifically tailored for receptionists working within the dynamic environment of a therapy clinic. This comprehensive tool is meticulously crafted to book appointments.
<br />
<br />

# Table of Contents

- [Built With](#built-with)
- [Installation](#installation)
- [Features](#features)
- [Technical Functionality](#technical-functionality)
- [Development Process](#development-process)
- [Final Outcomes](#final-outcomes)
- [Reporting Issues](#reporting-issues)
- [Authors](#authors)
- [Licenses](#licenses)
- [Contact](#contact)

<br />
<br />

## Built With

- [![PHP][php]][php-url]
- [![MySQL][mysql]][mysql-url]
- [![JavaScript][javascript]][javascript-url]
- [![HTML][html]][html-url]
- [![bootstrap][bootstrap]][bootstrap-url]
<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- INSTALLATION -->

## Installation

1. Clone the repo
   ```sh
   git clone https://github.com/eddiesosera/medlink.git
   ```
2. Install NPM packages
   ```sh
   npm install
   ```
3. Start the client server in `client/term4-group2-qna`
   ```sh
   npm start
   ```
4. Start the backend server in `server` file
   ```sh
   npm run dev
   ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<br />
<br />

<!-- FEATURES -->

## Features

<!-- ### Homescreen -->

![Homescreen][home]
The home screen allows users to engage with the carousel at the top to gain more info about the project.
The home screen shows all discounted products on sale.

<br />
<!-- ### New Appointment -->

![New Appointment][newappointment]
Any receptionist who is logged in can create a new appointment using the form shown. They can only create appointment using doctors and patient that are in the database.

<br />
<!-- ### New Patient -->

![New Patient][newpatient]
Receptionist can add new patients to the database in order to book an appointment for the patient. They’ll need to fill in the form accordingly as everything is required.

<br />
<!-- ### Patients -->

![Patients][patients]
A list of all the patients in the database, the receptionist can perform CRUD functionality with each record.

<br />
<!-- ### Doctors -->

![Doctors][doctors]
A list of all the doctors in the database, the receptionist can perform CRUD functionality with each record.

<br />
<!-- ### Edit Account -->

![Edit Account][editaccount]
Receptionists’ an edit and update their information using the following form.

<br />
<!-- ### Admin -->

![Manage Access][manageaccess]
A head receptionist has the special feature to manage ordinary receptions by removing or adding a new receptionists’ access to the dashboard.

<br/>
<br/>

<br/>
<br/>

#### Technical Funtionality

- `CRUD funtionality` on receptionist.
- `CRUD functionality` on appointments booked.
- `CRUD functionality` on doctors and patients.
- `Password Validation` using custom code.
- `Admin interface` should add and remove ordinary receptionists.

<br/>

#### ERD

![ERD][erd]

<br />

#### Wireframes

![Homescreen wireframe][wf-home]
_Home screen wireframe_
<br />

![Register wireframe][wf-receptionists]
_Receptionists wireframe_

![Login wireframe][wf-login]
_Login wireframe_
<br />

<br />
<br />
<!-- DEVELOPMENT PROCESS -->

## Development Process

The `Development Process` the technical implementations and functionality done for the website.

#### Highlights

This was my first project where I was working on the backend from the ground up and it was really an insightful experience. I learnt about relationships between tables.

#### Challenges

Even though I didnt have any background on `Backend` programmming I was still familiar with `MongoDB` and I struggled a bit with primary keys and indexes when setting up the database. I was learning new concept in a programming language I was not familiar with, we wrote the backend with `PHP` and I am more familiar with `Javacript`.

<br/>
<br/>
<!-- FINAL OUTCOMES -->

## Final Outcomes

[View Demonstration](https://drive.google.com/file/d/1xJGy-j4TskFiKSpnWFAl9HrnYCG_uiMS/view?usp=sharing)

<!-- CONCLUSION -->

<br/>
<br/>

<!-- CONCLUSION -->

## Conclusion

### How to Contribute

1. **Fork the repository:**

   - Fork this repository to your GitHub account.

2. **Clone your fork:**

   - Clone the repository to your local machine using the following command:
     ```
     git clone https://github.com/eddiesosera/medlink.git
     ```

3. **Create a branch:**

   - Create a new branch for your feature or bug fix:
     ```
     git checkout -b feature-branch
     ```

4. **Make your changes:**

   - Make your desired changes in the codebase.

5. **Test your changes:**

   - Ensure that your changes do not introduce new issues.
   - Run relevant tests if available.

6. **Commit your changes:**

   - Commit your changes with a descriptive commit message:
     ```
     git commit -m "Your informative commit message"
     ```

7. **Push your changes:**

   - Push your changes to your forked repository:
     ```
     git push origin feature-branch
     ```

8. **Create a pull request:**
   - Open a pull request against the `main` branch of the original repository.
   - Provide a clear title and description for your pull request.

<br/>
<br/>
<!-- REPORTING ISSUES -->

### Reporting Isssues

If you encounter any issues or have suggestions, please [open an issue](https://github.com/eddiesosera/medlink/issues) on GitHub.

<br/>
<!-- AUTHORS -->

### Authors

<div style="display: flex; justify-content: space-between;">
  <div style="text-align: center;">
    <a href="https://github.com/eddiesosera/">
      <img src="https://github.com/eddiesosera.png" alt="eddie Sosera" width="100px">
    </a>
    <br>
    <sub>Eddie Sosera</sub>
  </div>
  <br />
</div>

<br/>
<!-- LICENSE -->

### License

Distributed under the MIT License. See [License](https://opensource.org/license/mit/) for more information.

<br/>

### Contact

**LinkedIn** - [@eddiesosera](https://www.linkedin.com/in/eddiesosera/), or
[Visit website](https://engineeredimagination.co.za).

<br/>

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- RESOURCES USED LINK -->

[php]: https://img.shields.io/badge/php-20232A?style=for-the-badge&logo=php&logoColor=#777BB4
[php-url]: https://www.php.net/
[mysql]: https://img.shields.io/badge/mysql-20232A?style=for-the-badge&mysql=php&logoColor=#777BB4
[mysql-url]: https://www.mysql.com/
[javascript]: https://img.shields.io/badge/javascript-20232A?style=for-the-badge&html=javascript&logoColor=#777BB4
[javascript-url]: https://www.javascript.com/
[html]: https://img.shields.io/badge/HTML?style=for-the-badge&mysql=html&logoColor=#777BB4
[html-url]: https://www.html.com
[bootstrap]: https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white
[bootstrap-url]: https://getbootstrap.com/
[contributors-shield]: https://img.shields.io/github/contributors/eddiesosera/medlink.svg?style=for-the-badge
[contributors-url]: https://github.com/eddiesosera/medlink/graphs/contributors
[forks]: https://img.shields.io/github/forks/eddiesosera/medlink.svg?style=for-the-badge
[forks-url]: https://github.com/eddiesosera/medlink/forks
[stars]: https://img.shields.io/github/stars/eddiesosera/medlink.svg?style=for-the-badge
[stars-url]: https://github.com/eddiesosera/medlink/stargazers
[eddie-img]: https://github.com/eddiesosera.png*-

<!-- Screens and Headers-->

[banner]: assets/readme/banner.png
[header]: assets/readme/header.png
[home]: assets/readme/features/medlink_feature_home.png
[doctors]: assets/readme/features/medlink_feature_doctors.png
[editaccount]: assets/readme/features/medlink_feature_editAccount.png
[manageaccess]: assets/readme/features/medlink_feature_manageAccess.png
[newappointment]: assets/readme/features/medlink_feature_newAppointment.png
[newpatient]: assets/readme/features/medlink_feature_newPatient.png
[patients]: assets/readme/features/medlink_feature_patients.png

<!-- Process-->

[erd]: assets/readme/process/erd.png

<!-- Wireframes-->

[wf-home]: assets/readme/wireframes/home.png
[wf-receptionists]: assets/readme/wireframes/receptionists.png
[wf-login]: assets/readme/wireframes/login.png
