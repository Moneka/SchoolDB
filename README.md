# SchoolDB

Files included
-----------------------------------------------------------------------------------------------------------------
README, sql dump file (SchoolDB.sql), the backed up sql dump file ("sql-backup-04-12-2016--04-58-02,sql"), PHP Files and img folder(Contains the images used).

Flow of the Code: 
-------------------------------------------------------------------------------------------------------------
connect_to_DB --> Creating connection to the DataBase.

backup.php --> Backing up and Restoring the DataBase(by Admin).

header.php and headerlogin.php --> Contains the bootstrap styling and are included in other files. 

function.php -->  All the sql queries needed for the system are implemented in this file(included in all other files).
                  Individual functions used for each page are mentioned below.

index.php --> Welcome page for the website. Contains the log-in module and contact form.
Functions: login(), contact()

Admin
---------------------
admin.php --> Viewing the Admin's Profile and navigating to respective tasks for admin.
Functions:  profile()

editProfile.php --> Editing his/her Profile.
Functions:  editProfile()

registermember.php --> To register a member(Teacher/Student/Staff) into the school system. Also system generates a secure unique user id                        and password for each memeber registered. 
Functions:  addMember(), generatePassword()

registerteacher.php --> Entering additional information about teacher. Validates if the entered department is present in the system.
Functions:  addteacherinfo(), validateDept()

registerstudent.php --> Entering additional information about student.
Functions:  addstudentinfo()

registerstaff.php --> Entering additional information about staff.
Functions:  addstaffinfo()

managecourses.php --> To view/add/edit/delete the courses by grades.
session_set_course/session_set_course1/session_set_grade/session_set_grade1 --> Setting up the global variables required (cid and gid).

viewcourse.php --> To View the Courses from the database.
Functions:  getCourse()

addnewcourse.php --> To add new Courses to the database. The teachers and department names present in the database are displayed for                          validation 
Functions:  addCourse(), getDept(), getTeacher

editCourse.php --> To Edit the Course in the database.
Functions:  editCourse()

deleteCourse.php --> To delete the Course from database.
Functions:  deleteCourse()

managesalaries.php -->  Updating the salaries of Department Head, Teachers, Part Time and Full Time Staff employees.
Functions:  changeSalary(), changeStaffSalary()

managetuitions.php -->  Updating the Club fee and the Tuition fee per course for First Graders and the Amount Increment for every                               Year(Grade).
Functions:  changeFee(), changeClubFee()

directory.php --> Viewing the Directory which contains every school member's email and contact number.
Functions:  directory()

library.php --> Viewing all the E-books available and able to download them.

notice.php -->  Static Page viewing the notice board.

logout.php -->  Logging out of the user's session.

Teacher
---------------------
teacher.php --> Viewing the respective teacher's Profile and navigating to the respective tasks.
Functions:  profile()

editProfile.php --> Editing his/her Profile.
Functions:  editProfile()

stucourses.php --> Viewing the respective teacher's's enrolled courses. 
Functions:  getTeacherCourse()

directory.php --> Viewing the Directory which contains every school member's email and contact number.
Functions:  directory()

library.php --> Viewing all the E-books available and able to download them.

notice.php -->  Static Page viewing the notice board.

logout.php -->  Logging out of the user's session.

Student
---------------------
student.php --> Viewing the respective student's Profile and navigating to the respective tasks.
Functions:  profile()

editProfile.php --> Editing his/her Profile.
Functions:  editProfile()

stucourses.php --> Viewing the respective student's enrolled courses.
Functions:  getStudentCourse()

directory.php --> Viewing the Directory which contains every school member's email and contact number.
Functions:  directory()

library.php --> Viewing all the E-books available and able to download them.

notice.php -->  Static Page viewing the notice board.

logout.php -->  Logging out of the user's session.

Staff
---------------------
staff --> Viewing the respective staff member Profile and navigating to the respective tasks.
Functions:  profile()

editProfile.php --> Editing his/her Profile.
Functions:  editProfile()

directory.php --> Viewing the Directory which contains every school member's email and contact number.
Functions:  directory()

library.php --> Viewing all the E-books available and able to download them.

notice.php -->  Static Page viewing the notice board.

logout.php -->  Logging out of the user's session.





























