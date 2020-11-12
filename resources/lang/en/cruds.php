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
        ]
    ]
];
