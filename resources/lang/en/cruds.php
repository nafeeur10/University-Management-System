<?php

return [
    'global' => [
        'preview' => 'Preview'
    ],
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'homepagecontent' => [
        'title' => 'Homepage Content',
        'slider' => [
            'title' => 'Slider',
            'title_singular' => 'Slider',
            'fields' => [
                'name' => 'Title',
                'button_text' => 'Button Text',
                'button_link' => 'Button Link'
            ]
        ],
        'breakingnews' => [
            'title' => 'Breaking News',
            'title_singular' => 'Breaking News'
        ],
        'welcomemessage' => [
            'title_singular' => 'Welcome Title'
        ]
    ],
    'contact' => [
        'title' => 'Contact Us Content',
        'title_singular' => 'Contact',
        'info' => 'Information',
        'fields' => [
            'phone' => 'Phone',
            'contact_phone_helper' => '',
            'fax' => 'Fax',
            'contact_fax_helper' => '',
            'mobile' => 'Mobile',
            'contact_mobile_helper' => '',
            'address' => 'Address',
            'contact_address_helper' => '',
            'contact_map_image' => 'Upload Map Image',
            'previous_image_show' => 'Preview Previous Image',
            'map_address' => 'Contact Map Address URL',
            'contact_map_address_helper' => '',
            'address_qr_code' => 'Address QR Code',
            'contact_map_qr_image' => 'Upload QR Code Image',
            'arabic' => 'In Arabic',
            'contact_mobile_optional1' => 'Mobile ( Optional )',
            'contact_mobile_optional2' => 'Mobile ( Optional )',
            'title_social' => 'Social Contacts',
            'title_form' => 'Contact Form'
        ],
        'social' => [
            'title_singular' => 'Social Media',
            'fields' => [
                'id' => 'ID',
                'title' => 'Social Media Name',
                'icon' => 'Font Awesome Icon',
                'link' => 'Social Media URL'
            ]
        ],
        'map' => 'Address Image, Map and QR Code',
        'form' => [
            'title_department' => 'Department',
            'title_issue' => 'Issue',
            'department' => [
                'name' => 'Department Name',
                'email' => 'Email'
            ],
            'issue' => [
                'name' => 'Issue Title'
            ]
        ]
    ],
    'general' => [
        'title' => 'General Settings'
    ],
    'visitors' => [
        'title' => 'Visitors',
        'fields' => [
            'id' => 'ID',
            'ip' => 'IP Address',
            'country' => 'Country',
            'state' => 'City',
            'zipCode' => 'Post Code',
            'isOnline' => 'Status',
            'entry_time' => 'Entry Time',
            'exit_time' => 'Exit Time'
        ]
    ],
    'homeslider' => [
        'title' => 'Slider',
        'details' => 'Details',
        'fields' => [
            'id' => 'ID',
            'name' => 'Title',
            'main_image' => 'Main Image',
            'text_image' => 'Text Image',
            'button_text' => 'Button Text',
            'button_link' => 'Button Link',
            'name_helper' => '',
            'button_text_helper' => '',
            'button_link_helper' => ''
        ]
    ],
    'breakingnews' => [
        'fields' => [
            'id' => 'ID',
            'title' => 'News Title',
            'title_arabic' => 'News Title in Arabic',
            'name_helper' => '',
            'name_arabic_helper' => '',
            'news_link' => 'News Link',
            'news_link_helper' => '',
            'start_time' => 'Start Time',
            'start_time_helper' => '',
            'end_time' => 'End Time',
            'end_time_helper' => ''
        ]
    ],
    'welcomemessage' => [
        'fields' => [
            'id' => 'ID',
            'welcome_message_title' => 'Welcome Message Title',
            'welcome_message_title_helper' => '',
            'welcome_message_title_arabic' => 'Welcome Message Title (Arabic)',
            'welcome_message_title_arabic_helper' => '',
            'welcome_description' => 'Welcome Description',
            'welcome_description_helper' => '',
            'welcome_description_arabic' => 'Welcome Description (Arabic)',
            'welcome_description_arabic_helper' => '',
            'welcome_signature' => 'Welcome Signature',
            'welcome_signature_helper' => '',
            
        ]
    ],
    'faculty' => [
        'title' => 'Faculty',
        'fields' => [
            'id' => 'ID',
            'home_faculty_image' => 'Faculty Image',
            'home_faculty_image_helper' => '',
            'home_faculty_title' => 'Faculty Title',
            'home_faculty_title_helper' => '',
            'home_faculty_title_arabic' => 'Faculty Title (Arabic)',
            'home_faculty_title_arabic_helper' => '',
            'home_faculty_description' => 'Faculty Description',
            'home_faculty_description_helper' => '',
            'home_faculty_description_arabic' => 'Faculty Description (Arabic)',
            'home_faculty_description_arabic_helper' => '',
            'home_faculty_link' => 'Faculty Main Link',
            'home_faculty_link_helper' => '',
            'homepage_image' => 'Homepage Image',
            'slider_image' => 'Slider Images',
            'faculty_details_course' => 'Upload Faculty Course PDF',
            'faculty_details_course_helper' => '',
            'faculty_details_organizational_structure' => 'Upload Faculty Details Organizational Structure PDF',
            'faculty_details_organizational_structure_helper' => '',
            'faculty_details_student_guide' => 'Upload Faculty Details Student Guide PDF',
            'faculty_details_student_guide_helper' => '',
            'faculty_details_description' => 'Faculty Details Description',
            'faculty_details_description_helper' => '',
            'faculty_details_description_arabic' => 'Faculty Details Description (Arabic)',
            'faculty_details_description_arabic_helper' => '',
            'faculty_details_title' => 'Faculty Details Title',
            'faculty_details_title_helper' => '',
            'faculty_details_title_arabic' => 'Faculty Details Title (Arabic)',
            'faculty_details_title_arabic_helper' => '',
        ],
        'tabs' => [
            'title' => 'Faculty Tabs',
            'fields' => [
                'tab_image' => 'Tab Image',
                'faculty_selection' => 'Select Faculty',
                'faculty_tab_title' => 'Tab Title',
                'faculty_tab_title_helper' => '',
                'faculty_tab_title_arabic' => 'Tab Title (Arabic)',
                'faculty_tab_title_arabic_helper' => '',
                'faculty_tab_description' => 'Faculty Description',
                'faculty_tab_description_helper' => '',
                'faculty_tab_description_arabic' => 'Faculty Description (Arabic)',
                'faculty_tab_description_arabic_helper' => '',
            ]
            ],
        'dept' => [
            'title' => 'Faculty Departments',
            'fields' => [
                'faculty_selection' => 'Select Faculty',
                'faculty' => 'Faculty Name',
                'image_on_faculty_preview' => 'Preview Department Image on Faculty',
                'upload_dept_image_on_faculty' => 'Upload Department Image on Faculty',
                'faculty_dept_title' => 'Department Name',
                'faculty_dept_title_helper' => '',
                'faculty_dept_title_arabic' => 'Department Name (Arabic)',
                'faculty_dept_title_arabic_helper' => '',
                'faculty_dept_short_description' => 'Department Short Description (For Faculty Page)',
                'faculty_dept_short_description_helper' => '',
                'faculty_dept_short_description_arabic' => 'Department Short Description In Arabic (For Faculty Page)',
                'faculty_dept_short_description_arabic_helper' => '',
                'dept_image_upload' => 'Upload Department Image',
                'dept_image_preview' => 'Preview Department Image',
                'faculty_dept_description' => 'Department Description',
                'faculty_dept_description_helper' => '',
                'faculty_dept_description_arabic' => 'Department Description (Arabic)',
                'faculty_dept_description_arabic_helper' => '',
                'dept_url' => 'Department Link'
            ]
        ]
    ],
    'staff' => [
        'title' => 'Staff',
        'fields' => [
            'dept_name_show' => 'Department Name',
            'dept_name' => 'Select Department',
            'staff_name' => 'Staff Name',
            'staff_name_helper' => '',
            'staff_name_arabic' => 'Staff Name (Arabic)',
            'staff_name_arabic_helper' => '',
            'staff_designation' => 'Designation',
            'staff_designation_helper' => '',
            'staff_designation_arabic' => 'Designation (Arabic)',
            'staff_designation_arabic_helper' => '',
            'upload_staff_resume' => 'Upload Resume',
            'upload_staff_resume_helper' => '',
            'preview_staff_resume' => 'Staff Resume Preview',
            'staff_resume' => 'Staff Resume'
        ]
    ],
    'multimedia' => [
        'title' => 'Multimedia',
        'upload_image' => 'Upload Image',
        'image' => 'Multimedia Image'
    ],
    'newsletter' => [
        'title' => 'Newsletter',
        'email' => 'Email'
    ],
    'research' => [
        'title' => 'Research',
        'homepage_research' => 'Homepage Research',
        'research_link' => 'Research Link',
        'individual_research' => 'Individual Research',
        'basic' => 'Basic',
        'research_image_preview' => 'Research Image Preview: ',
        'upload_research_image' => 'Upload Research Main Image: ',
        'fields' => [
            'main_title' => 'Main Title',
            'main_title_helper' => '',
            'main_title_arabic' => 'Main Title (Arabic)',
            'main_title_arabic_helper' => '',
            'main_description' => 'Main Description',
            'main_description_helper' => '',
            'main_description_arabic' => 'Main Description (Arabic)',
            'main_description_arabic_helper' => '',
            'home_image' => 'Home Image',
            'home_image_preview' => 'Home Image Preview',
            'home_image_helper' => '',
            'details_page_image' => 'Details Page Image',
            'details_page_image_helper' => '',
            'upload_home_image' => 'Upload Home Image',
            'preview_home_image' => 'Preview Home Image',
            'upload_details_image' => 'Upload Research Details Image',
            'preview_details_image' => 'Preview Research Details Image',
        ],
        'link' => [
            'title' => 'Research Link',
            'fields' => [
                'research_file' => 'Research File',
                'main_title' => 'Research Link Title',
                'main_title_helper' => '',
                'research_link' => 'Research Link',
                'research_link_helper' => ''
            ]
        ],
        'individual' => [
            'title' => 'Individual Research',
            'fields' => [
                'title' => 'Research Title',
                'title_helper' => '',
                'title_arabic' => 'Research Title (Arabic)',
                'title_arabic_helper' => '',
                'description' => 'Research Description',
                'description_helper' => '',
                'description_arabic' => 'Research Description (Arabic)',
                'description_arabic_helper' => '',
                'image' => 'Research Image',
                'image_helper' => '',
                'upload_individual_image' => 'Upload Individual Image'
            ]
        ]
    ],
    'event' => [
        'title' => 'Event',
        'fields' => [
            'id' => 'ID',
            'images' => 'Images',
            'event_title' => 'Title',
            'event_title_helper' => '',
            'event_title_arabic' => 'Title (Arabic)',
            'event_title_arabic_helper' => '',
            'event_description' => 'Description',
            'event_description_helper' => '',
            'event_description_arabic' => 'Description (Arabic)',
            'event_description_arabic_helper' => '',
            'event_date' => 'Event Date',
            'event_date_helper' => '',
            'event_start_time' => 'Event Start Time',
            'event_start_time_helper' => '',
            'event_end_time' => 'Event End Time',
            'event_end_time_helper' => '',
        ]
    ],
    'latest_news' => [
        'title' => 'Latest News',
        'fields' => [
            'id' => 'ID',
            'images' => 'Images',
            'news_home_title' => 'Title for Homepage',
            'news_home_title_helper' => '',
            'news_single_title' => 'Title for Single News',
            'news_single_title_helper' => '',

            'news_home_description' => 'Description for Homepage',
            'news_home_description_helper' => '',
            'news_home_description_arabic' => 'Description for Homepage (Arabic)',
            'news_home_description_arabic_helper' => '',

            'news_single_title_arabic' => 'Title for Single News (Arabic)',
            'news_single_title_arabic_helper' => '',
            'news_home_title_arabic' => 'Title for Homepage (Arabic)',
            'news_home_title_arabic_helper' => '',
            'news_description' => 'Description',
            'news_description_helper' => '',
            'news_description_arabic' => 'Description (Arabic)',
            'news_description_arabic_helper' => '',
            'news_slider_description' => 'Description for Slider',
            'news_slider_description_helper' => '',
            'news_slider_description_arabic' => 'Description for Slider (Arabic)',
            'news_slider_description_arabic_helper' => '',
            'news_date' => 'Latest News Date',
            'news_date_helper' => '',
        ]
    ],
    'partners' => [
        'title' => 'Partners',
        'fields' => [
            'id' => 'ID',
            'images' => 'Image',
            'partner_name' => 'Partner Name',
            'partner_name_helper' => '',
            'partner_link' => 'Partner Web Link',
            'partner_link_helper' => '',
            'logo' => 'Logo'
        ]
    ],
    'campuslife' => [
        'title' => 'Campus Life',
        'fields' => [
            'id' => 'ID',
            'campus_life_icon' => 'Campus Life Icon',
            'campus_life_icon_helper' => '',
            'campus_life_title' => 'Campus Life Title',
            'campus_life_title_helper' => '',
            'campus_life_title_arabic' => 'Campus Life Title (Arabic)',
            'campus_life_title_arabic_helper' => '',
            'campus_life_description' => 'Campus Life Description for Home',
            'campus_life_description_helper' => '',
            'campus_life_description_arabic' => 'Campus Life Description for Home (Arabic)',
            'campus_life_description_arabic_helper' => '',
        ]
    ]
];
