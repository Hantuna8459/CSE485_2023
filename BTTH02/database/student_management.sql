CREATE DATABASE student_management;

USE student_management;

-- Sinh viên
CREATE TABLE Students (
  StudentID INT PRIMARY KEY,
  Name VARCHAR(255),
  DateOfBirth DATE,
  Email VARCHAR(255),
  ContactInfo VARCHAR(255)
);

-- Khóa học
CREATE TABLE Courses (
  CourseID INT PRIMARY KEY,
  Title VARCHAR(255),
  Description VARCHAR(255)
);

-- Giảng viên
CREATE TABLE Instructors (
  InstructorID INT PRIMARY KEY,
  Name VARCHAR(255),
  Email VARCHAR(255),
  ContactInfo VARCHAR(255)
);

-- Lớp học phần
CREATE TABLE Classes (
  ClassID INT PRIMARY KEY,
  CourseID INT,
  InstructorID INT,
  TimeFrame VARCHAR(255),
  FOREIGN KEY (CourseID) REFERENCES Courses(CourseID),
  FOREIGN KEY (InstructorID) REFERENCES Instructors(InstructorID)
);

-- Sự tham dự
CREATE TABLE Attendance (
  AttendanceID INT PRIMARY KEY,
  ClassID INT,
  StudentID INT,
  Date DATE,
  Status VARCHAR(255),
  FOREIGN KEY (ClassID) REFERENCES Classes(ClassID),
  FOREIGN KEY (StudentID) REFERENCES Students(StudentID)
);

-- Sinh viên tham gia khóa học
CREATE TABLE StudentCourse (
  StudentID INT,
  CourseID INT,
  Semester VARCHAR(255),
  Phase VARCHAR(255),
  FOREIGN KEY (StudentID) REFERENCES Students(StudentID),
  FOREIGN KEY (CourseID) REFERENCES Courses(CourseID),
  PRIMARY KEY (StudentID, CourseID)
);

-- Báo cáo
CREATE TABLE Reports (
  ReportID INT PRIMARY KEY AUTO_INCREMENT,
  AttendanceID INT,
  FOREIGN KEY (AttendanceID) REFERENCES Attendance(AttendanceID)
);

-- Người dùng
CREATE TABLE Users (
  UserID INT PRIMARY KEY AUTO_INCREMENT,
  Role ENUM('Admin', 'Instructor', 'Student'),
  UNIQUE (Role)
);
