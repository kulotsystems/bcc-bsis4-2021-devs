<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::insert([
            [
                'name'        => 'Team ConnecTech',
                'project'     => 'Personnel Management and Attendance Monitoring System Using QR Code Technology of iConnect Global Institute, Inc.',
                'description' => 'The purposes of the study “Personnel Management and Attendance Monitoring System Using QR Code Technology of iConnect Global Institute, Inc.” mainly is to aid the institution in its process in monitoring the attendance of its faculty members with the aid of the Quick Response or QR Code technology. The study aims to use QR code for daily time in and time out of each faculty member. The study also aims to aid the personnel-in-charge regarding the overload salary computation of faculty members. It also aims for automation of the total worked hours for each of the faculty members. The proposed system offers easy to understand directions and user-friendly interface. The system also generates reports such as daily time records and overload pay slip. The system can also perform in minimal amount of time. It also handles the information and records giving the users convenience and redirecting their time into a more productive work. In relation to this, the proposed system also provides easy and fast searching and viewing of needed information given the database that relevant information is stored on.'
            ],
            [
                'name'        => 'Team Capslock',
                'project'     => 'BCC Mobile and Web-based Faculty Evaluation System',
                'description' => 'The project overview of THE BCC MOBILE AND WEB-BASED FACULTY EVALUATION SYSTEM. The uses of this system is to provide an image that can see the performance of the faculty from the feedback from multiple sources including clients, subordinates, peers, students, and more, so they accurately use of the manager or the coordinator of the school. And they can make a good decision and know how to evaluate the employee if their task is doing good. This system will be going to help the administrator to identify if their employee is making a good decision that can suite for their assigned task and can evaluate anytime. From this viewpoint, performance evaluation fulfills this important functions, the motivation and training.'
            ],
            [
                'name'        => 'Team Dynamic',
                'project'     => 'Provincial Prosecutor\'s Office Case Sorting, Status Monitoring and Scheduling System',
                'description' => 'Analyze the status of the case flow management of the incoming and disposal of cases in the provincial prosecution office in Camarines Sur starting this year 2021 and to suggest measures on how to improve the case flow management of the provincial prosecution office of Camarines Sur. Further, it determined the probable causes of the docket congestion as perceived by the prosecutors and staffs; the effects of docket congestion in the Provincial Prosecutors Office in Camarines Sur as perceived by the different groups of respondents; the problem they encountered as they strive to have a speedy disposition of cases. Likewise it determined whether there exists a significant agreement among the rank orders of the perceptions on the status of the case flow management, the probable causes, the problems encountered, and the measures suggested.'
            ],
            [
                'name'        => 'COBOL TEAM',
                'project'     => 'BCC ASSET MANAGEMENT AND TRACKING SYSTEM',
                'description' => 'The purpose of this project is to create and develop a BCC Asset Management and Tracking System for the use of Baao Community College especially for the office of Property Custodian and its personnel. to keep track and manage of the equipment and inventory vital to day-to-day operation of school. With BCC Asset Management and Tracking System a Web Page App, you have access to such data as check in/check out, maintenance and repair schedules and history. Within seconds, you can pinpoint an asset’s location, who has it and its condition. BCC Asset Management and Tracking System entitles to a Property Custodian and authorized school personnel only.'
            ],
            [
                'name'        => 'Team Internet Explorer',
                'project'     => 'E-NEXUS: BCC Online Publication System',
                'description' => 'The primary purpose of this study is to design an E-NEXUS: BCC Online Publication System. This is to ensure that the teachers and student writers can easily disseminate the published article written by the journalists of Baao Community College. This system is an entryway for the students to express and voice out their ideas easily and effectively to other students. This serves as the reliable information about the school where the events or activities and school related news will be published. This system will encourage other students to support the journalistic writing and to participate to stimulate worthwhile activities of the school.'
            ],
            [
                'name'        => 'Software chasers',
                'project'     => 'Web based voting system of Baao community college',
                'description' => 'Purpose and Description The main purposed of this capstone project is to develop a Web-Based Voting System that is user-friendly and reliable. The web based voting system will be developed by the researcher for college level .The proposed project Web-Based Voting System is a computer based software that enables voters to vote smoothly, comfortably and peacefully during student election, the voting system enables user to interactively view profiles of candidates and choose their candidates in the screen, through button, a mouse-based or by simply using an input device to make their choices. This system will focus on the schools election which allow voters to vote using a computer and will provide accurate voting results. The proposed project offers several benefits for the school and students voters which include the following: voters can easily cast their votes, voters can choose their candidates through an screen or computer monitor by a click of a mouse, speeds up the counting of votes, increase the security and reliability of elections, computer can count an unlimited number of ballots and the system can automatically generate the results to determine the winning candidates.'
            ],
            [
                'name'        => 'Team Code Warriors',
                'project'     => 'Computer Laboratory Hands-on Scheduling and monitoring system of Baao Community College',
                'description' => 'The project aimed to centralized and manage the suitable time on every student demand for their subject time. This will help the system administration to conduct a scheduling and monitoring. The admin access the monitoring service. The admin configures a default timeouts for resetting rules each computer, the admin configures the schedule for automatic resetting process.'
            ],
            [
                'name'        => ' Team Angle Bracket',
                'project'     => ' Web-Based Reservation Managaement Systems of Four Slices to Heaven of Spa and Wellness',
                'description' => 'Web-Based Reservation Systems of Four slices to heaven Spa and wellness.This project allows the users to view the available schedules and book them for a specific time slot.The booked schedule will be marked red which means that it is no longer available.Client can make payment online via credit card/Gcash.After making payment users are notified about the booking via email and text message along with a unique customer number.This system would be easier for the customers of spa to reserve the date they want, save time and efforts,inspire them to use the service again.'
            ],
            [
                'name'        => 'Team Pixel',
                'project'     => 'BCC Library Management System with SMS Notification',
                'description' => 'Library Management System is a software that is built to handle the various functions of the library. This system will help the librarians to manage and store book information automatically according to the student needs. It will also keep track of the books, their availability and their check-outs, as well as their respective due dates and fines. With this system students can easily find books, catalogs or magazines of their interests. The system will be designed to automatically send an alert SMS text message to the students about the due date of returning the book, and the availability of the book reserved. This system will reduce all the manual work and the whole process can be managed through single clicks and edits.'
            ]
        ]);
    }
}
