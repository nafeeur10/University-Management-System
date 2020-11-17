const Cadastro = () => import('./components/cadastro/Cadastro.vue')

import Home from './views/Home.vue';
import About from './views/About.vue';
import Contact from './views/contact-us.vue';
import Career from './views/career.vue';
import Faculties from './views/faculties.vue';
import FacultyPharmacy from './views/facultyPharmacy.vue';
import FacultyOfManagement from './views/FacultyOfManagement.vue';
import FacultyOfEngineering from './views/FacultyOfEngineering.vue';
import FacultyOral from './views/FacultyOral.vue';
import Academics from './views/Academics.vue';
import Admission from './views/admission.vue';
import Attendance from './views/Attendance.vue';
import Registration from './views/Registration.vue';
import Courses from './views/Courses.vue';
import Student_Life from './views/Student_Life.vue';
import quality_policy from './views/quality_policy.vue';
import quality from './views/quality.vue';
import tuition_and_financial_aid from './views/tuition_and_financial_aid.vue';
import Facilities from './views/Facilities.vue';
import Campus from './views/Campus.vue';
import Alumni from './views/Alumni.vue';
import E_Learning from './views/E-Learning.vue';
import login from './views/login.vue';
import EngineeringLogin from './views/EngineeringLogin.vue';
import ManagementLogin from './views/ManagementLogin.vue';
import OralLogin from './views/OralLogin.vue';
import PharmacyLogin from './views/PharmacyLogin.vue';
import Organizations from './views/Organizations.vue';
import Business from './views/Business-dep.vue';
import Accounting from './views/Accounting-dep.vue';
import Economics from './views/Economics-dep.vue';
import political from './views/political-dep.vue';
import Technology from './views/Technology-dep.vue';
import notFound from './views/404.vue';
import mida from './views/mida.vue';
import facultyPharmacyCourses from './views/facultyPharmacyCourses.vue';
import MilitaryEducation from './views/MilitaryEducation.vue';
import Biochemistry_Department from './views/Biochemistry_Department.vue';
import Oral_Dental_Biology_Pathology_Department from './views/Oral_Dental_Biology_Pathology_Department.vue';
import Prosthodontics_Department from './views/Prosthodontics_Department.vue';
import Conservative_Dentistry_Department from './views/Conservative_Dentistry_Department.vue';
import Oral_Maxillofacial_Surgery_Department from './views/Oral_Maxillofacial_Surgery_Department.vue';
import Orthodontics_and_Pediatric_Department from './views/Orthodontics_and_Pediatric_Department.vue';
import Periodontology_Department from './views/Periodontology_Department.vue';
import Basic_Medical_Sciences_Department from './views/Basic_Medical_Sciences_Department.vue';
import Architectural_Engineering_Department from './views/Architectural_Engineering_Department.vue';
import Construction_Engineering_Department from './views/Construction_Engineering_Department.vue';
import Mathematical_and_Natural_Sciences_Department from './views/Mathematical_and_Natural_Sciences_Department.vue';
import Mechatronics_and_Robotics from './views/Mechatronics_and_Robotics.vue';
import Nuclear_power_stations from './views/Nuclear_power_stations.vue';
import Telecommunication from './views/Telecommunication.vue';
import Microbiology from './views/Microbiology.vue';
import Pharmaceutical_Chemistry from './views/Pharmaceutical_Chemistry.vue';
import Pharmaceutics from './views/Pharmaceutics.vue';
import Pharmacognosy from './views/Pharmacognosy.vue';
import Pharmacology from './views/Pharmacology.vue';
import Pharmacy_Practice from './views/Pharmacy_Practice.vue';
import Events from './views/Events.vue';
import Event1 from './views/Event1.vue';
import Event from './views/Event.vue';
import Event2 from './views/Event2.vue';
import Event3 from './views/Event3.vue';
import Event4 from './views/Event4.vue';
import Event5 from './views/Event5.vue';
import Event6 from './views/Event6.vue';
import Event7 from './views/Event7.vue';
import Event8 from './views/Event8.vue';
import Event9 from './views/Event9.vue';
import Event10 from './views/Event10.vue';
import Event11 from './views/Event11.vue';
import Event12 from './views/Event12.vue';
import Research from './views/Research.vue';
import News from './views/News.vue';
import News1 from './views/News1.vue';
import News2 from './views/News2.vue';
import News3 from './views/News3.vue';
import News4 from './views/News4.vue';
import News5 from './views/News5.vue';
import News6 from './views/News6.vue';

export const routes = [
    
    { path: '', name: 'home', component: Home, titulo: 'Home', menu: true},
    { path: '/cadastro', name: 'cadastro', component: Cadastro, titulo: 'Cadastro', menu: true},
    { path: '/cadastro/:id', name: 'altera', component: Cadastro, titulo: 'Cadastro', menu: false},
    { path: '*', component: Home, menu: false},
    {
        path: "/About",
        name: "About",
        titulo: 'About',
        menu: true,
        component: About,
        meta: {
            title: "About ERU",
            breadCrumb: "About ERU"
        }
    },
    {
        path: "/Contact-us",
        name: "Contact-us",
        titulo: 'Contact Us',
        menu: true,
        component: Contact,
        meta: {
            title: "Contact us",
            breadCrumb: "Contact us"
        }
    },
    {
        path: "/Careers",
        name: "Careers",
        titulo: 'Careers',
        menu: true,
        component: Career,
        meta: {
            title: "Careers",
            breadCrumb: "Careers"
        }
    },
    {
        path: "/Faculties",
        name: "Faculties",
        titulo: 'Faculties',
        menu: true,
        component: Faculties,
        meta: {
            title: "Faculties",
            breadCrumb: "Faculties"
        }
    },
    {
        path: "/Faculty-OF-PHARMACY",
        name: "Faculty OF PHARMACY",
        titulo: 'Faculty OF PHARMACY',
        menu: true,
        component: FacultyPharmacy,
        meta: {
            title: "Faculty OF PHARMACY",
            breadCrumb: "Faculty OF PHARMACY"
        }
    },
    {
        path: "/faculty-of-management-professional-technology-and-computers",
        name: "FacultyOfManagement",
        titulo: 'Faculty of management professional technology and computers',
        menu: true,
        component: FacultyOfManagement,
        meta: {
            title: "Faculty of management professional technology and computers",
            breadCrumb: "Faculty of management professional technology and computers"
        }
    },
    {
        path: "/Faculty-of-engineering",
        name: "Faculty of engineering",
        titulo: 'Faculty of engineering',
        menu: true,
        component: FacultyOfEngineering,
        meta: {
            title: "Faculty of engineering",
            breadCrumb: "Faculty of engineering"
        }
    },
    {
        path: "/FacultyOral",
        name: "FacultyOral",
        titulo: 'FacultyOral',
        menu: true,
        component: FacultyOral,
        meta: {
            title: "FACULTY OF Oral & Dental Medicine",
            breadCrumb: "FACULTY OF Oral & Dental Medicine"
        }
    },
    {
        path: "/Academics",
        name: "Academics",
        titulo: 'Academics',
        menu: true,
        component: Academics,
        meta: {
            title: "Academics",
            breadCrumb: "Academics"
        }
    },
    {
        path: "/Admission",
        name: "Admission",
        titulo: 'Admission',
        menu: true,
        component: Admission,
        meta: {
            title: "Admission",
            breadCrumb: "Admission"
        }
    },
    {
        path: "/Attendance",
        name: "Attendance",
        titulo: 'Attendance',
        menu: true,
        component: Attendance,
        meta: {
            title: "Attendance",
            breadCrumb: "Attendance"
        }
    },
    {
        path: "/Registration",
        name: "Registration",
        titulo: 'Registration',
        menu: true,
        component: Registration,
        meta: {
            title: "Registration",
            breadCrumb: "Registration"
        }
    },
    {
        path: "/Courses",
        name: "Courses",
        titulo: 'Courses',
        menu: true,
        component: Courses,
        meta: {
            title: "Courses",
            breadCrumb: "Courses"
        }
    },
    {
        path: "/Student-Life",
        name: "Student-Life",
        titulo: 'Student Life',
        menu: true,
        component: Student_Life,
        meta: {
            title: "Student-Life",
            breadCrumb: "Student-Life"
        }
    },
    {
        path: "/quality-policy",
        name: "quality-policy",
        titulo: 'Quality policy',
        menu: true,
        component: quality_policy,
        meta: {
            title: "Quality policy",
            breadCrumb: "Quality policy"
        }
    },
    {
        path: "/Quality",
        name: "Quality",
        titulo: 'Quality',
        menu: true,
        component: quality,
        meta: {
            title: "Quality",
            breadCrumb: "Quality"
        }
    },
    {
        path: "/tuition_and_financial_aid",
        name: "tuition_and_financial_aid",
        titulo: 'Tuition and financial aid',
        menu: true,
        component: tuition_and_financial_aid,
        meta: {
            title: "Tuition and financial aid",
            breadCrumb: "Tuition and financial aid"
        }
    },
    {
        path: "/Facilities",
        name: "Facilities",
        titulo: 'Facilities',
        menu: true,
        component: Facilities,
        meta: {
            title: "Facilities",
            breadCrumb: "Facilities"
        }
    },
    {
        path: "/Campus",
        name: "Campus",
        titulo: 'Campus',
        menu: true,
        component: Campus,
        meta: {
            title: "Campus",
            breadCrumb: "Campus"
        }
    },
    {
        path: "/Alumni",
        name: "Alumni",
        titulo: 'Alumni',
        menu: true,
        component: Alumni,
        meta: {
            title: "Alumni",
            breadCrumb: "Alumni"
        }
    },
    {
        path: "/E-Learning",
        name: "E-Learning",
        component: E_Learning,
        titulo: 'E-Learning',
        menu: true,
        meta: {
            title: "E-Learning",
            breadCrumb: "E-Learning"
        }
    },
    {
        path: "/login",
        name: "login",
        titulo: 'Login',
        menu: true,
        component: login,
        meta: {
            title: "Login",
            breadCrumb: "Login"
        }
    },
    {
        path: "/EngineeringLogin",
        name: "EngineeringLogin",
        titulo: 'Engineering Login',
        menu: true,
        component: EngineeringLogin,
        meta: {
            title: "EngineeringLogin",
            breadCrumb: "Engineering Login"
        }
    },
    {
        path: "/ManagementLogin",
        name: "ManagementLogin",
        titulo: 'Management Login',
        menu: true,
        component: ManagementLogin,
        meta: {
            title: "ManagementLogin",
            breadCrumb: "Management Login"
        }
    },
    {
        path: "/OralLogin",
        name: "OralLogin",
        titulo: 'Oral and Dental Medicine login',
        menu: true,
        component: OralLogin,
        meta: {
            title: "OralLogin",
            breadCrumb: "Oral and Dental Medicine login"
        }
    },
    {
        path: "/PharmacyLogin",
        name: "PharmacyLogin",
        titulo: 'Pharmacy Login',
        menu: true,
        component: PharmacyLogin,
        meta: {
            title: "PharmacyLogin",
            breadCrumb: "Pharmacy Login"
        }
    },
    {
        path: "/Related-Organizations",
        name: "Related-Organizations",
        titulo: 'Related Organizations',
        menu: true,
        component: Organizations,
        meta: {
            title: "Related Organizations",
            breadCrumb: "Related Organizations"
        }
    },
    {
        path: "/Bachelor-of-Business-Administration",
        name: "Bachelor of Business Administration",
        titulo: 'Bachelor of Business Administration',
        menu: true,
        component: Business,
        meta: {
            title: "Bachelor of Business Administration",
            breadCrumb: "Bachelor of Business Administration"
        }
    },
    {
        path: "/Bachelor-of-Accounting",
        name: "Bachelor-of-Accounting",
        titulo: 'Bachelor of Accounting',
        menu: true,
        component: Accounting,
        meta: {
            title: "Bachelor of Accounting",
            breadCrumb: "Bachelor of Accounting"
        }
    },
    {
        path: "/Bachelor-of-Economics",
        name: "Bachelor-of-Economics",
        titulo: 'Bachelor of Economics',
        menu: true,
        component: Economics,
        meta: {
            title: "Bachelor of Economics",
            breadCrumb: "Bachelor of Economics"
        }
    },
    {
        path: "/Bachelor-of-political-science",
        name: "Bachelor-of-political-science",
        titulo: 'Bachelor of political science',
        menu: true,
        component: political,
        meta: {
            title: "Bachelor of political science",
            breadCrumb: "Bachelor of political science"
        }
    },
    {
        path: "/Business-Professional-Information-Technology-department",
        name: "Business-Professional-Information-Technology-department",
        titulo: 'Business Professional Information Technology department',
        menu: true,
        component: Technology,
        meta: {
            title: "Business Professional Information Technology department",
            breadCrumb: "Business Professional Information Technology department"
        }
    },
    {
        path: "/NotFound",
        name: "NotFound",
        titulo: 'Not Found',
        menu: true,
        component: notFound,
        meta: {
            title: "NotFound",
            breadCrumb: "NotFound"
        }
    },
    {
        path: "/Multimedia",
        name: "Multimedia",
        component: mida,
        titulo: 'Multimedia',
        menu: true,
        meta: {
            title: "Multimedia",
            breadCrumb: "Multimedia"
        }
    },
    {
        path: "/facultyPharmacyCourses",
        name: "facultyPharmacyCourses",
        component: facultyPharmacyCourses,
        titulo: 'facultyPharmacyCourses',
        menu: true,
        meta: {
            title: "facultyPharmacyCourses",
            breadCrumb: "Faculty of Pharmacy Courses"
        }
    },
    {
        path: "/MilitaryEducation",
        name: "MilitaryEducation",
        component: MilitaryEducation,
        titulo: 'MilitaryEducation',
        menu: true,
        meta: {
            title: "MilitaryEducation",
            breadCrumb: "Military Education"
        }
    },
    {
        path: "/Biochemistry_Department",
        name: "Biochemistry_Department",
        component: Biochemistry_Department,
        titulo: 'Biochemistry_Department',
        menu: true,
        meta: {
            title: "Biochemistry_Department",
            breadCrumb: "Biochemistry Department"
        }
    },
    {
        path: "/Oral_Dental_Biology_Pathology_Department",
        name: "Oral_Dental_Biology_Pathology_Department",
        component: Oral_Dental_Biology_Pathology_Department,
        titulo: 'Oral_Dental_Biology_Pathology_Department',
        menu: true,
        meta: {
            title: "Oral_Dental_Biology_Pathology_Department",
            breadCrumb: "Oral & Dental Biology & Pathology Department"
        }
    },
    {
        path: "/Prosthodontics_Department",
        name: "Prosthodontics_Department",
        component: Prosthodontics_Department,
        titulo: 'Prosthodontics_Department',
        menu: true,
        meta: {
            title: "Prosthodontics_Department",
            breadCrumb: "Prosthodontics Department"
        }
    },
    {
        path: "/Conservative_Dentistry_Department",
        name: "Conservative_Dentistry_Department",
        component: Conservative_Dentistry_Department,
        titulo: 'Conservative_Dentistry_Department',
        menu: true,
        meta: {
            title: "ConservativeDentistry_Department",
            breadCrumb: "Conservative Dentistry Department"
        }
    },
    {
        path: "/Oral_Maxillofacial_Surgery_Department",
        name: "Oral_Maxillofacial_Surgery_Department",
        component: Oral_Maxillofacial_Surgery_Department,
        titulo: 'Oral_Maxillofacial_Surgery_Department',
        menu: true,
        meta: {
            title: "Oral_Maxillofacial_Surgery_Department",
            breadCrumb: "Oral & Maxillofacial Surgery Department"
        }
    },
    {
        path: "/Orthodontics_and_Pediatric_Department",
        name: "Orthodontics_and_Pediatric_Department",
        component: Orthodontics_and_Pediatric_Department,
        titulo: 'Orthodontics_and_Pediatric_Department',
        menu: true,
        meta: {
            title: "Orthodontics_and_Pediatric_Department",
            breadCrumb: "Orthodontics and Pediatric Department"
        }
    },
    {
        path: "/Periodontology_Department",
        name: "Periodontology_Department",
        component: Periodontology_Department,
        titulo: 'Periodontology_Department',
        menu: true,
        meta: {
            title: "Periodontology_Department",
            breadCrumb: "Oral medicine, Diagnosis, Radiology, and Periodontology Department"
        }
    },
    {
        path: "/Basic_Medical_Sciences_Department",
        name: "Basic_Medical_Sciences_Department",
        component: Basic_Medical_Sciences_Department,
        titulo: 'Basic_Medical_Sciences_Department',
        menu: true,
        meta: {
            title: "Basic_Medical_Sciences_Department",
            breadCrumb: "Basic & Medical Sciences Department"
        }
    },
    {
        path: "/Architectural_Engineering_Department",
        name: "Architectural_Engineering_Department",
        component: Architectural_Engineering_Department,
        titulo: 'Architectural_Engineering_Department',
        menu: true,
        meta: {
            title: "Architectural_Engineering_Department",
            breadCrumb: "Architectural Engineering Department"
        }
    },
    {
        path: "/Construction_Engineering_Department",
        name: "Construction_Engineering_Department",
        component: Construction_Engineering_Department,
        titulo: 'Construction_Engineering_Department',
        menu: true,
        meta: {
            title: "Construction_Engineering_Department",
            breadCrumb: "Construction_Engineering_Department"
        }
    },
    {
        path: "/Mathematical_and_Natural_Sciences_Department",
        name: "Mathematical_and_Natural_Sciences_Department",
        component: Mathematical_and_Natural_Sciences_Department,
        titulo: 'Mathematical_and_Natural_Sciences_Department',
        menu: true,
        meta: {
            title: "Mathematical_and_Natural_Sciences_Department",
            breadCrumb: "Mathematical_and_Natural_Sciences_Department"
        }
    },
    {
        path: "/Mechatronics_and_Robotics",
        name: "Mechatronics_and_Robotics",
        component: Mechatronics_and_Robotics,
        titulo: 'Mechatronics_and_Robotics',
        menu: true,
        meta: {
            title: "Mechatronics_and_Robotics",
            breadCrumb: "Mechatronics and Robotics Engineering Department"
        }
    },
    {
        path: "/Nuclear_power_stations",
        name: "Nuclear_power_stations",
        component: Nuclear_power_stations,
        titulo: 'Nuclear_power_stations',
        menu: true,
        meta: {
            title: "Nuclear_power_stations",
            breadCrumb: "Nuclear power stations Engineering Department"
        }
    },
    {
        path: "/Telecommunication",
        name: "Telecommunications",
        component: Telecommunication,
        titulo: 'Telecommunication',
        menu: true,
        meta: {
            title: "Telecommunication",
            breadCrumb: "Telecommunication Engineering Department"
        }
    },
    {
        path: "/Microbiology",
        name: "Microbiology",
        component: Microbiology,
        titulo: 'Microbiology',
        menu: true,
        meta: {
            title: "Microbiology",
            breadCrumb: "Microbiology Department"
        }
    }, 
    {
        path: "/Pharmaceutical_Chemistry",
        name: "Pharmaceutical_Chemistry",
        component: Pharmaceutical_Chemistry,
        titulo: 'Pharmaceutical_Chemistry',
        menu: true,
        meta: {
            title: "Pharmaceutical_Chemistry",
            breadCrumb: "Pharmaceutical Chemistry Department"
        }
    },
    {
        path: "/Pharmaceutics",
        name: "Pharmaceutics",
        component: Pharmaceutics,
        titulo: 'Pharmaceutics',
        menu: true,
        meta: {
            title: "Pharmaceutics",
            breadCrumb: "Pharmaceutics Department"
        }
    },
    {
        path: "/Pharmacognosy",
        name: "Pharmacognosy",
        component: Pharmacognosy,
        titulo: 'Pharmacognosy',
        menu: true,
        meta: {
            title: "Pharmacognosy",
            breadCrumb: "Pharmacognosy Department"
        }
    },
    {
        path: "/Pharmacology",
        name: "Pharmacology",
        component: Pharmacology,
        titulo: 'Pharmacology',
        menu: true,
        meta: {
            title: "Pharmacology",
            breadCrumb: "Pharmacology and toxicology department"
        }
    },
    {
        path: "/Pharmacy_Practice",
        name: "Pharmacy_Practice",
        component: Pharmacy_Practice,
        titulo: 'Pharmacy_Practice',
        menu: true,
        meta: {
            title: "Pharmacy_Practice",
            breadCrumb: "Pharmacy Practice Department"
        }
    },
    {
        path: "/Events",
        name: "Events",
        component: Events,
        titulo: 'Events',
        menu: true,
        meta: {
            title: "Events",
            breadCrumb: "Events"
        }
    },
    {
        path: "/Event/:id",
        name: "Event",
        component: Event,
        titulo: 'Event',
        menu: true,
        meta: {
            title: "Event",
            breadCrumb: "Event"
        },
        props: true
    },
    {
        path: "/Event2",
        name: "Event2",
        component: Event2,
        titulo: 'Event2',
        menu: true,
        meta: {
            title: "Event2",
            breadCrumb: "Event2"
        }
    },
    {
        path: "/Event3",
        name: "Event3",
        component: Event3,
        titulo: 'Event3',
        menu: true,
        meta: {
            title: "Event3",
            breadCrumb: "Event3"
        }
    },
    {
        path: "/Event4",
        name: "Event4",
        component: Event4,
        titulo: 'Event4',
        menu: true,
        meta: {
            title: "Event4",
            breadCrumb: "Event4"
        }
    },
    {
        path: "/Event5",
        name: "Event5",
        component: Event5,
        titulo: 'Event5',
        menu: true,
        meta: {
            title: "Event5",
            breadCrumb: "Event5"
        }
    },
    {
        path: "/Event6",
        name: "Event6",
        component: Event6,
        titulo: 'Event6',
        menu: true,
        meta: {
            title: "Event6",
            breadCrumb: "Event6"
        }
    },
    {
        path: "/Event7",
        name: "Event7",
        component: Event7,
        titulo: 'Event7',
        menu: true,
        meta: {
            title: "Event7",
            breadCrumb: "Event7"
        }
    },
    {
        path: "/Event8",
        name: "Event8",
        component: Event8,
        titulo: 'Event8',
        menu: true,
        meta: {
            title: "Event8",
            breadCrumb: "Event8"
        }
    },
    {
        path: "/Event9",
        name: "Event9",
        component: Event9,
        titulo: 'Event9',
        menu: true,
        meta: {
            title: "Event9",
            breadCrumb: "Event9"
        }
    },
    {
        path: "/Event10",
        name: "Event10",
        component: Event10,
        titulo: 'Event10',
        menu: true,
        meta: {
            title: "Event10",
            breadCrumb: "Event10"
        }
    },
    {
        path: "/Event11",
        name: "Event11",
        component: Event11,
        titulo: 'Event11',
        menu: true,
        meta: {
            title: "Event11",
            breadCrumb: "Event11"
        }
    },
    {
        path: "/Event12",
        name: "Event12",
        component: Event12,
        titulo: 'Event12',
        menu: true,
        meta: {
            title: "Event12",
            breadCrumb: "Event12"
        }
    },
    {
        path: "/Research",
        name: "Research",
        component: Research,
        titulo: 'Research',
        menu: true,
        meta: {
            title: "Research",
            breadCrumb: "Research"
        }
    },
    {
        path: "/News",
        name: "News",
        component: News,
        titulo: 'News',
        menu: true,
        meta: {
            title: "News",
            breadCrumb: "News"
        }
    },
    {
        path: "/News1",
        name: "News1",
        component: News1,
        titulo: 'News1',
        menu: true,
        meta: {
            title: "News1",
            breadCrumb: "News1"
        }
    },
    {
        path: "/News2",
        name: "News2",
        component: News2,
        titulo: 'News2',
        menu: true,
        meta: {
            title: "News2",
            breadCrumb: "News2"
        }
    },
    {
        path: "/News3",
        name: "News3",
        component: News3,
        titulo: 'News3',
        menu: true,
        meta: {
            title: "News3",
            breadCrumb: "News3"
        }
    },
    {
        path: "/News4",
        name: "News4",
        component: News4,
        titulo: 'News4',
        menu: true,
        meta: {
            title: "News4",
            breadCrumb: "News4"
        }
    },
    {
        path: "/News5",
        name: "News5",
        component: News5,
        titulo: 'News5',
        menu: true,
        meta: {
            title: "News5",
            breadCrumb: "News5"
        }
    },
    {
        path: "/News6",
        name: "News6",
        component: News6,
        titulo: 'News6',
        menu: true,
        meta: {
            title: "News6",
            breadCrumb: "News6"
        }
    },
    {
        path: "*",
        redirect: "/NotFound"
    }
];