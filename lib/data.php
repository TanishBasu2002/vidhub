<?php
// data.php
return [
    'featured' => [
        'image' => '../assets/images/tham2.avif',
        'title' => 'Atlas (2024)',
        'details' => '2024 • 2h 30min • Science Fiction, Action',
        'description' => 'A story of artificial intelligence joins a woman as she unravels a mysterious past.'
    ],
    
    'categories' => [
        ['name' => 'Podcast', 'active' => false],
        ['name' => 'Sports', 'active' => false],
        ['name' => 'Movies', 'active' => true],
        ['name' => 'Travel', 'active' => false],
        ['name' => 'Lifestyle', 'active' => false]
    ],
    
    'videos' => [
        [
            'thumbnail' => '../assets/images/v1.jpg',
            'title' => 'Amazing Travel Vlog',
            'details' => 'Channel: Travel Life | 1.2M views | 50K likes'
        ],
        [
            'thumbnail' => '../assets/images/v2.jpg',
            'title' => 'Tech Review: Latest Gadgets',
            'details' => 'Channel: Tech Guru | 800K views | 30K likes'
        ],
        [
            'thumbnail' => '../assets/images/v3.jpg',
            'title' => 'Cooking with Passion',
            'details' => 'Channel: Chef Delight | 600K views | 20K likes'
        ],
        [
            'thumbnail' => '../assets/images/v4.webp',
            'title' => 'Top 10 Movies of 2025',
            'details' => 'Channel: Movie World | 1M views | 40K likes'
        ],
        [
            'thumbnail' => '../assets/images/v5.webp',
            'title' => 'Fitness Tips for Beginners',
            'details' => 'Channel: Fit Hub | 500K views | 15K likes'
        ],
        [
            'thumbnail' => '../assets/images/v4.jpg',
            'title' => 'Gaming Highlights: Best Plays',
            'details' => 'Channel: Game Arena | 900K views | 35K likes'
        ]
    ],
    
    'shorts' => [
        '../assets/images/s1.jpg',
        '../assets/images/s2.avif',
        '../assets/images/s3.jpg',
        '../assets/images/s4.jpg',
        '../assets/images/s5.jpg'
    ],
    'your_videos' => [
        [
            'thumbnail' => '../../assets/images/v1.jpg',
            'title' => 'Amazing Travel Vlog',
            'channel' => 'Travel Life',
            'views' => '1.2M',
            'published' => '2 days ago'
        ],
        [
            'thumbnail' => '../../assets/images/v2.jpg',
            'title' => 'Tech Review: Latest Gadgets',
            'channel' => 'Tech Guru',
            'views' => '800K',
            'published' => '3 days ago'
        ],
        [
            'thumbnail' => '../../assets/images/v3.jpg',
            'title' => 'Cooking with Passion',
            'channel' => 'Chef Delight',
            'views' => '600K',
            'published' => '5 days ago'
        ]
    ],
    
    'your_shorts' => [
        [
            'thumbnail' => '../../assets/images/s1.jpg',
            'title' => 'Funny Cat Short',
            'channel' => 'Pet Clips',
            'views' => '500K',
            'published' => '1 day ago'
        ],
        [
            'thumbnail' => '../../assets/images/s3.jpg',
            'title' => 'Quick Dance Move',
            'channel' => 'Dance Vibes',
            'views' => '300K',
            'published' => '2 days ago'
        ],
        [
            'thumbnail' => '../../assets/images/s4.jpg',
            'title' => 'DIY Craft Idea',
            'channel' => 'Crafty Hub',
            'views' => '200K',
            'published' => '3 days ago'
        ]
        ],
        'watch_later' => [
        [
            'thumbnail' => '../../assets/images/v1.jpg',
            'title' => 'Amazing Travel Vlog',
            'channel' => 'Travel Life',
            'duration' => '12:34',
            'added' => '2 days ago'
        ],
        [
            'thumbnail' => '../../assets/images/v2.jpg',
            'title' => 'Tech Review: Latest Gadgets',
            'channel' => 'Tech Guru',
            'duration' => '08:15',
            'added' => '3 days ago'
        ],
        [
            'thumbnail' => '../../assets/images/v3.jpg',
            'title' => 'Cooking with Passion',
            'channel' => 'Chef Delight',
            'duration' => '15:20',
            'added' => '5 days ago'
        ]
        ],
        'trending' => [
        'shorts' => [
            [
                'thumbnail' => '../../assets/images/s1.jpg',
                'title' => 'Quick Tailwind CSS Tips',
                'views' => '500K views',
                'duration' => '0:45'
            ],
            [
                'thumbnail' => '../../assets/images/s2.avif',
                'title' => 'CSS Grid in 60 Seconds',
                'views' => '750K views',
                'duration' => '0:58'
            ],
            [
                'thumbnail' => '../../assets/images/s1.jpg',
                'title' => 'JavaScript Array Tricks',
                'views' => '1.2M views',
                'duration' => '0:32'
            ],
            [
                'thumbnail' => '../../assets/images/s3.jpg',
                'title' => 'Flexbox vs Grid',
                'views' => '900K views',
                'duration' => '0:41'
            ],
            [
                'thumbnail' => '../../assets/images/s4.jpg',
                'title' => 'React Hooks Explained',
                'views' => '1.5M views',
                'duration' => '0:37'
            ],
            [
                'thumbnail' => '../../assets/images/s5.jpg',
                'title' => 'VS Code Shortcuts',
                'views' => '600K views',
                'duration' => '0:29'
            ]
        ],
        'videos' => [
            [
                'thumbnail' => '../../assets/images/v1.jpg',
                'title' => 'How to build a YouTube clone with Tailwind CSS',
                'channel' => 'Tech Tutorials',
                'views' => '1.2M views',
                'posted' => '3 days ago',
                'duration' => '10:30'
            ],
            [
                'thumbnail' => '../../assets/images/v2.jpg',
                'title' => 'Learn Tailwind CSS in 1 Hour - Complete Tutorial',
                'channel' => 'Web Dev Simplified',
                'views' => '850K views',
                'posted' => '1 week ago',
                'duration' => '15:45'
            ],
            [
                'thumbnail' => '../../assets/images/v3.jpg',
                'title' => 'Modern Web Design Trends 2023',
                'channel' => 'Design Mastery',
                'views' => '500K views',
                'posted' => '2 days ago',
                'duration' => '8:22'
            ],
            [
                'thumbnail' => '../../assets/images/v5.webp',
                'title' => 'JavaScript Tips and Tricks You Should Know',
                'channel' => 'JS Wizard',
                'views' => '1.5M views',
                'posted' => '5 days ago',
                'duration' => '12:15'
            ]
        ]
            ],
            'terms' => [
        'last_updated' => 'April 3, 2025',
        'sections' => [
            [
                'id' => 'introduction',
                'title' => 'Introduction',
                'content' => 'Welcome to VidHub! These Terms & Conditions govern your use of our streaming platform and services. By accessing or using VidHub, you agree to be bound by these terms. If you do not agree, please refrain from using our services.'
            ],
            [
                'id' => 'services',
                'title' => 'Services',
                'content' => 'VidHub provides a platform for users to upload, watch, and share videos. We reserve the right to modify or discontinue any part of our services at our discretion without prior notice.'
            ],
            [
                'id' => 'user-conduct',
                'title' => 'User Conduct',
                'content' => 'You agree to use VidHub in a lawful and respectful manner. Prohibited activities include:',
                'list_items' => [
                    'Uploading illegal or harmful content.',
                    'Harassing or defaming other users.',
                    'Attempting to breach our security measures.'
                ],
                'additional_content' => 'Violations may result in account suspension or termination.'
            ],
            [
                'id' => 'content-ownership',
                'title' => 'Content Ownership',
                'content' => 'You retain ownership of the content you upload, but by uploading, you grant VidHub a worldwide, non-exclusive license to display and distribute it. Ensure you have the rights to upload all content.'
            ],
            [
                'id' => 'termination',
                'title' => 'Termination',
                'content' => 'We may terminate your account at any time for violating these terms or for inactivity. Upon termination, your access to VidHub will be revoked, and your content may be removed.'
            ],
            [
                'id' => 'liability',
                'title' => 'Liability',
                'content' => 'VidHub is not liable for any indirect damages arising from the use of our services. Our liability is limited to the extent permitted by law.'
            ],
            [
                'id' => 'changes',
                'title' => 'Changes to Terms',
                'content' => 'We may update these terms periodically. Changes will be effective upon posting. Continued use of VidHub after updates constitutes acceptance of the new terms.'
            ],
            [
                'id' => 'contact-us',
                'title' => 'Contact Us',
                'content' => 'For questions or concerns, contact us at:',
                'contact_info' => [
                    'Email: support@vidhub.com',
                    'Phone: +1-800-555-1234',
                    'Address: 123 VidHub Street, Tech City, TC 12345'
                ]
            ]
        ],
        'contact' => [
            'email' => 'support@vidhub.com',
            'phone' => '+1-800-555-1234',
            'address' => '123 VidHub Street, Tech City, TC 12345'
        ]
        ],
        'feedback' => [
        'title' => 'User Feedback',
        'description' => 'Provided feedback by the users below.',
        'form_fields' => [
            [
                'type' => 'text',
                'name' => 'first_name',
                'label' => 'First Name',
                'placeholder' => 'Enter your first name',
                'required' => true
            ],
            [
                'type' => 'text',
                'name' => 'last_name',
                'label' => 'Last Name',
                'placeholder' => 'Enter your last name',
                'required' => true
            ],
            [
                'type' => 'email',
                'name' => 'email',
                'label' => 'Email',
                'placeholder' => 'Enter your email address',
                'required' => true
            ],
            [
                'type' => 'tel',
                'name' => 'phone',
                'label' => 'Phone Number',
                'placeholder' => 'Enter your phone number',
                'required' => true
            ],
            [
                'type' => 'textarea',
                'name' => 'message',
                'label' => 'Message',
                'placeholder' => 'Write your feedback here...',
                'required' => true
            ]
        ],
        'modal' => [
            'title' => 'Thank You!',
            'message' => 'Your message has been submitted successfully.',
            'button_text' => 'Close'
        ]
        ],
        'privacy_policy' => [
        'last_updated' => 'April 3, 2025',
        'sections' => [
            [
                'id' => 'introduction',
                'title' => 'Introduction',
                'content' => [
                    'Welcome to VidHub! We are committed to protecting your privacy and ensuring that your personal information is handled in a safe and responsible manner. This Privacy Policy explains how we collect, use, share, and protect your information when you use our services.',
                    'By using VidHub, you agree to the terms outlined in this policy. If you do not agree, please do not use our services.'
                ]
            ],
            [
                'id' => 'information-we-collect',
                'title' => 'Information We Collect',
                'content' => 'We collect the following types of information:',
                'items' => [
                    [
                        'title' => 'Personal Information:',
                        'text' => 'When you create an account, we collect your name, email address, and other details you provide.'
                    ],
                    [
                        'title' => 'Usage Data:',
                        'text' => 'We collect information about how you interact with our platform, such as the videos you watch, your search queries, and your liked videos.'
                    ],
                    [
                        'title' => 'Device Information:',
                        'text' => 'We may collect information about the device you use to access VidHub, including your IP address, browser type, and operating system.'
                    ]
                ]
            ],
            [
                'id' => 'how-we-use',
                'title' => 'How We Use Your Information',
                'content' => 'We use your information to:',
                'items' => [
                    'Provide and improve our services, such as personalizing your video recommendations.',
                    'Communicate with you, including sending notifications and responding to your inquiries.',
                    'Analyze usage patterns to enhance user experience and platform performance.',
                    'Ensure the security of our platform and prevent fraudulent activities.'
                ]
            ],
            [
                'id' => 'sharing-information',
                'title' => 'Sharing Your Information',
                'content' => 'We may share your information in the following cases:',
                'items' => [
                    'With service providers who assist us in operating our platform (e.g., hosting services).',
                    'When required by law or to protect the rights and safety of VidHub and its users.',
                    'With your consent, such as when you share a video publicly.'
                ],
                'additional_content' => 'We do not sell your personal information to third parties.'
            ],
            [
                'id' => 'your-choices',
                'title' => 'Your Choices',
                'content' => 'You have the following choices regarding your information:',
                'items' => [
                    'You can update your account information at any time through your profile settings.',
                    'You can opt out of receiving promotional emails by following the unsubscribe link in those emails.',
                    'You can delete your account, which will remove your personal information from our systems (subject to legal obligations).'
                ]
            ],
            [
                'id' => 'security',
                'title' => 'Security',
                'content' => 'We take reasonable measures to protect your information from unauthorized access, use, or disclosure. However, no method of transmission over the internet is 100% secure, and we cannot guarantee absolute security.'
            ],
            [
                'id' => 'contact-us',
                'title' => 'Contact Us',
                'content' => 'If you have any questions about this Privacy Policy, please contact us at:',
                'contact_info' => [
                    'Email: support@vidhub.com',
                    'Phone: +1-800-555-1234',
                    'Address: 123 VidHub Street, Tech City, TC 12345'
                ]
            ]
        ],
        'contact' => [
            'email' => 'support@vidhub.com',
            'phone' => '+1-800-555-1234',
            'address' => '123 VidHub Street, Tech City, TC 12345'
        ]
        ],
        'playlists' => [
        'title' => 'Your Playlists',
        'playlists' => [
            [
                'thumbnail' => '../../assets/images/v1.jpg',
                'name' => 'Chill Vibes',
                'privacy' => 'Public',
                'videos_count' => 24,
                'last_updated' => '2 days ago'
            ],
            [
                'thumbnail' => '../../assets/images/v2.jpg',
                'name' => 'Workout Hits',
                'privacy' => 'Private',
                'videos_count' => 15,
                'last_updated' => '1 week ago'
            ],
            [
                'thumbnail' => '../../assets/images/v3.jpg',
                'name' => 'Movie Soundtracks',
                'privacy' => 'Public',
                'videos_count' => 32,
                'last_updated' => '3 days ago'
            ],
            [
                'thumbnail' => '../../assets/images/v4.jpg',
                'name' => 'Travel Adventures',
                'privacy' => 'Public',
                'videos_count' => 18,
                'last_updated' => '5 days ago'
            ],
            [
                'thumbnail' => '../../assets/images/v5.jpg',
                'name' => 'Cooking Tutorials',
                'privacy' => 'Private',
                'videos_count' => 12,
                'last_updated' => '1 day ago'
            ],
            [
                'thumbnail' => '../../assets/images/v6.jpg',
                'name' => 'Tech Reviews',
                'privacy' => 'Public',
                'videos_count' => 21,
                'last_updated' => '4 days ago'
            ]
        ]
            ],
            'liked_videos' => [
        [
            'thumbnail' => '../../assets/images/v1.jpg',
            'title' => 'Amazing Travel Vlog',
            'channel' => 'Travel Life',
            'views' => '1.2M',
            'duration' => '12:34',
            'liked_date' => '2 days ago',
            'progress' => 60
        ],
        [
            'thumbnail' => '../../assets/images/v2.jpg',
            'title' => 'Tech Review: Latest Gadgets',
            'channel' => 'Tech Guru',
            'views' => '800K',
            'duration' => '08:15',
            'liked_date' => '3 days ago',
            'progress' => 30
        ],
        [
            'thumbnail' => '../../assets/images/v3.jpg',
            'title' => 'Cooking with Passion',
            'channel' => 'Chef Delight',
            'views' => '600K',
            'duration' => '15:20',
            'liked_date' => '5 days ago',
            'progress' => 75
        ]
    ],
    'watch_history' => [
        [
            'thumbnail' => '../../assets/images/v1.jpg',
            'title' => 'Amazing Travel Vlog',
            'channel' => 'Travel Life',
            'watched_date' => '2 days ago'
        ],
        [
            'thumbnail' => '../../assets/images/v2.jpg',
            'title' => 'Tech Review: Latest Gadgets',
            'channel' => 'Tech Guru',
            'watched_date' => '3 days ago'
        ],
        [
            'thumbnail' => '../../assets/images/v3.jpg',
            'title' => 'Cooking with Passion',
            'channel' => 'Chef Delight',
            'watched_date' => '5 days ago'
        ]
    ],
    'shorts_history' => [
        [
            'thumbnail' => '../../assets/images/s1.jpg',
            'title' => 'Funny Cat Short',
            'channel' => 'Pet Clips',
            'watched_date' => '1 day ago'
        ],
        [
            'thumbnail' => '../../assets/images/s3.jpg',
            'title' => 'Quick Dance Move',
            'channel' => 'Dance Vibes',
            'watched_date' => '2 days ago'
        ],
        [
            'thumbnail' => '../../assets/images/s4.jpg',
            'title' => 'DIY Craft Idea',
            'channel' => 'Crafty Hub',
            'watched_date' => '3 days ago'
        ]
    ],
    'faqs' => [
        [
            'question' => 'How do I upload a video?',
            'answer' => 'To upload a video, click on the "Upload" button in the top bar, select your video file, fill in the required details, and click "Publish." Ensure your video meets our community guidelines.'
        ],
        [
            'question' => 'How can I delete a video from my liked list?',
            'answer' => 'Go to the "Liked Videos" page from the sidebar, find the video you want to remove, click the three-dot menu, and select "Unlike." The video will be removed from your liked list.'
        ],
        [
            'question' => 'Why is my video not playing?',
            'answer' => 'Ensure you have a stable internet connection. If the issue persists, try clearing your browser cache or contact our support team for assistance.'
        ],
        [
            'question' => 'How do I contact support?',
            'answer' => 'You can contact support by filling out the form below or using the live chat option in the bottom-right corner of this page.'
        ]
    ],
    'followers' => [
        [
            'avatar' => '../../assets/images/avatars/avatar1.jpg',
            'name' => 'Shubhrajyoti',
            'username' => '@Sj',
            'following_since' => 'Mar 2025',
            'video_count' => 45,
            'is_following' => true
        ],
        [
            'avatar' => '../../assets/images/avatars/avatar2.jpg',
            'name' => 'Lima',
            'username' => '@LimaSakar',
            'following_since' => 'Jan 2025',
            'video_count' => 23,
            'is_following' => false
        ],
        [
            'avatar' => '../../assets/images/avatars/avatar3.jpg',
            'name' => 'Priyanka',
            'username' => '@pM',
            'following_since' => 'Feb 2025',
            'video_count' => 67,
            'is_following' => true
        ],
        // Add more followers as needed
    ],
    'creators' => [
        [
            'id' => 1,
            'image' => 'https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg',
            'channel' => 'Alex Creates',
            'creation_date' => '5/15/2023, 10:30:00 AM',
            'name' => 'Alex Johnson',
            'email' => 'alex@example.com',
            'phone' => '+1 (555) 123-4567'
        ],
        [
            'id' => 2,
            'image' => 'https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg',
            'channel' => 'Creative Minds',
            'creation_date' => '6/20/2023, 02:15:00 PM',
            'name' => 'Sarah Williams',
            'email' => 'sarah@example.com',
            'phone' => '+1 (555) 987-6543'
        ],
        [
            'id' => 3,
            'image' => 'https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg',
            'channel' => 'Tech Tutorials',
            'creation_date' => '4/5/2023, 09:45:00 AM',
            'name' => 'Michael Brown',
            'email' => 'michael@example.com',
            'phone' => '+1 (555) 456-7890'
        ]
    ],
    'copyright' => [
        'title' => 'Copyright Information',
        'last_updated' => 'Last Updated: April 03, 2025',
        'commitment_title' => 'Our Commitment to Copyright',
        'commitment_text' => 'VIDHUB respects the intellectual property rights of others and expects its users to do the same. All content uploaded to our platform must comply with copyright laws and our Terms of Service.',
        'policy_title' => 'Copyright Policy',
        'policy_text' => 'The content available on VIDHUB, including videos, images, and text, is protected by copyright laws unless otherwise stated. Unauthorized use, reproduction, or distribution of this content is strictly prohibited.',
        'policy_points' => [
            'Users may not upload content they do not own or have permission to use.',
            'VIDHUB reserves the right to remove any content that violates copyright laws.',
            'Repeat infringers may have their accounts terminated.'
        ],
        'reporting_title' => 'Reporting Copyright Infringement',
        'reporting_text' => 'If you believe your copyrighted work has been used on VIDHUB without permission, please submit a takedown notice to our team. Include the following details:',
        'reporting_points' => [
            'A description of the copyrighted work.',
            'The URL or location of the infringing material on VIDHUB.',
            'Your contact information.'
        ],
        'contact_text' => 'For copyright-related inquiries, contact us at',
        'contact_email' => 'copyright@vidhub.com'
    ],
    'channel_creation' => [
        'page_title' => 'Create Your Channel',
        'form_title' => 'Create Your Channel',
        'form_subtitle' => 'Set up your VIDHUB channel to start sharing your content with the world',
        'image_upload_label' => 'Select Image',
        'channel_name_label' => 'Channel Name',
        'channel_name_placeholder' => 'Enter your channel name',
        'name_label' => 'Name',
        'name_placeholder' => 'Enter your Name',
        'email_label' => 'Email',
        'email_placeholder' => 'Enter your email',
        'dob_label' => 'Date of Birth',
        'dob_placeholder' => 'Enter your DOB',
        'phone_label' => 'Phone',
        'phone_placeholder' => 'Mobile Number',
        'cancel_button' => 'Cancel',
        'create_button' => 'Create',
        'success_title' => 'Channel Created Successfully!',
        'success_message' => 'Your channel is now live. Start uploading content and connect with your audience.',
        'continue_button' => 'Continue to Dashboard'
    ],
    'about_us' => [
        'page_title' => 'About Us',
        'title' => 'About Us',
        'subtitle' => 'Learn more about VidHub and the team behind it.',
        'mission_title' => 'Our Mission',
        'mission_content' => 'At VidHub, we are passionate about connecting people through the power of video. Our mission is to create a seamless and enjoyable streaming platform where users can share, discover, and engage with content that matters to them. We strive to foster creativity, build communities, and provide a safe and inclusive environment for everyone.',
        'team_title' => 'Meet Our Team',
        'team_members' => [
            [
                'name' => 'Shubhrajyoti',
                'role' => 'Founder & CEO'
            ],
            [
                'name' => 'Priyanka',
                'role' => 'Founder & CEO'
            ],
            [
                'name' => 'Lima',
                'role' => 'Founder & CEO'
            ],
            [
                'name' => 'Kingkor',
                'role' => 'Backend Developer'
            ],
            [
                'name' => 'Masudur',
                'role' => 'Founder & CEO'
            ],
            [
                'name' => 'Debarghya',
                'role' => 'UI/UX Designer'
            ]
        ],
        'contact_title' => 'Get in Touch',
        'contact_content' => 'We\'d love to hear from you! Whether you have questions, feedback, or just want to say hello, feel free to reach out.',
        'email_label' => 'Email:',
        'email' => 'support@vidhub.com',
        'phone_label' => 'Phone:',
        'phone' => '+1-800-555-1234',
        'address_label' => 'Address:',
        'address' => '123 VidHub Street, Tech City, TC 12345'
    ],
    'reposted_videos' => [
        'page_title' => 'Reposted Videos',
        'header_title' => 'Reposted Videos',
        'video_count_label' => 'Total Reposted Videos:',
        'creator_label' => 'Creator:',
        'views_label' => 'Views:',
        'date_label' => 'Published Date:',
        'reported_label' => 'Reported by:',
        'delete_confirmation' => 'Are you sure you want to delete',
        'confirm_button' => 'Confirm',
        'cancel_button' => 'Cancel',
        'videos' => [
            [
                'video_url' => 'video-url1.mp4',
                'thumbnail_url' => 'thumbnail-url1.jpg',
                'title' => 'Funny Cat Compilation',
                'creator' => 'Jane Smith',
                'views' => '5678',
                'published_date' => '2025-03-28',
                'reported_by' => '3 users'
            ],
            [
                'video_url' => 'video-url2.mp4',
                'thumbnail_url' => 'thumbnail-url2.jpg',
                'title' => 'Gaming Highlights',
                'creator' => 'Alex Gamer',
                'views' => '2345',
                'published_date' => '2025-04-02',
                'reported_by' => '7 users'
            ],
            [
                'video_url' => 'video-url3.mp4',
                'thumbnail_url' => 'thumbnail-url3.jpg',
                'title' => 'Cooking Tutorial',
                'creator' => 'Chef Maria',
                'views' => '890',
                'published_date' => '2025-03-30',
                'reported_by' => '2 users'
            ],
            [
                'video_url' => 'video-url4.mp4',
                'thumbnail_url' => 'thumbnail-url4.jpg',
                'title' => 'Travel Vlog: Paris',
                'creator' => 'TravelWithTom',
                'views' => '4321',
                'published_date' => '2025-04-03',
                'reported_by' => '4 users'
            ],
            [
                'video_url' => 'video-url5.mp4',
                'thumbnail_url' => 'thumbnail-url5.jpg',
                'title' => 'DIY Home Decor',
                'creator' => 'CraftyKate',
                'views' => '1678',
                'published_date' => '2025-04-01',
                'reported_by' => '6 users'
            ]
        ]
    ]
];
?>