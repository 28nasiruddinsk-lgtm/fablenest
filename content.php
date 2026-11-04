<?php
// All the words, links and lists on the site. Edit here; index.php draws the page from this file.
return [
    'title' => 'Creating Stories That Grow With Them',
    'description' => "Professional children's book publishing, illustration, design and marketing support, all under one roof.",
    'logo' => 'Fablenest Publishers',

    // x = horizontal position of the link in the header (1920 px design width)
    'nav' => [
        ['Home', '#top', 457],
        ['About Us', '#about', 588],
        ['Our Services', '#services', 750],
        ['Meet the Author', '#stories', 945],
        ['Portfolio', '#portfolio', 1176],
        ['Contact Us', '#contact', 1329],
    ],

    'hero' => [
        'lead' => ['Bring your children’s book to life with professional publishing,', 'illustration, design, and marketing support — all under one roof.'],
        'cta' => ['Start Your Story', 'Discuss Now'],
        'boy_alt' => 'A boy sitting on a branch reaching into a nest of books',
    ],

    'brands' => [
        ['Amazon Kindle', 'assets/logos/amazon-kindle.png', 119, 261],
        ['Barnes & Noble', 'assets/logos/barnes-noble.png', 121, 257],
        ['IngramSpark', 'assets/logos/ingramspark.png', 119, 267],
        ['Lulu', 'assets/logos/lulu.png', 104, 182],
    ],

    'about' => [
        'lines' => [
            '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud',
            'exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure',
            'dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'Excepteur sint occaecat cupidatat non voluptate velit esse cillum dolore eu fugiat',
            'nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui',
            'officia deserunt mollit anim id est laborum."proident, sunt in culpa qui',
            'officia deserunt mollit anim id est laborum."',
            '',
            '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud',
            'exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure',
            'dolor in reprehenderit in',
        ],
        'alt' => 'A boy climbing a curling ladder through the clouds',
        'heading_alt' => 'Every great story has a beginning',
    ],

    'cta' => [
        'title' => 'Let’s Bring Your Story to Life',
        'lines' => ['Have a children’s book idea or a finished manuscript?', 'Tell us a little about your project, and let’s explore how we', 'can bring it to life.'],
        'button' => 'Start Your Story',
    ],

    'services' => [
        'intro' => 'From the first draft to the final page, we provide the creative and publishing expertise behind a finished book.',
        'list' => ['Book Publishing', 'Book Cover Design', 'Book Illustration', 'Editing and Proofreading'],
    ],

    'imagination' => [
        'lines' => ['Whether you have a finished manuscript, a notebook full of ideas, or simply a story', 'you know needs to be told, we’re ready to help you take the next step.'],
        'alt' => 'A giraffe and two children racing through a colourful jungle',
    ],

    'why' => [
        'intro' => 'The right creative partner makes all the difference in bringing your children’s book to life.',
        'cards' => ['Creative Excellence', 'Quality Assured', 'Complete Support', 'Author-Focused'],
    ],

    'portfolio' => [
        'intro' => 'Explore a collection of books shaped through creativity, collaboration, and careful attention to detail.',
        // up to four books fit in the row
        'books' => [
            ['Buttercup Bunny & The Brave Beginning', 'assets/s/frame.jpg'],
            ['Buttercup Bunny & The Brave Beginning', 'assets/s/frame.jpg'],
            ['Buttercup Bunny & The Brave Beginning', 'assets/s/frame.jpg'],
            ['Buttercup Bunny & The Brave Beginning', 'assets/s/frame.jpg'],
        ],
    ],

    'stories' => [
        'intro' => 'See what authors have to say about their publishing experience with Storytime Publishers.',
        'items' => [
            [
                'name' => 'Freya Hargreaves',
                'photo' => 'assets/s/avatar.jpg',
                'stars' => 5,
                'text' => ['"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore', 'magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea', 'commodo consequat. Duis aute irure dolor in reprehenderi'],
            ],
        ],
    ],

    'contact' => [
        'lines' => ['Whether you have a completed manuscript, a new story idea,', 'or simply need guidance on where to begin, we’re here to help.', 'Our team is ready to understand your vision, answer your', 'questions, and guide you toward the right publishing solutions', 'for your project.'],
        'phone' => 'Number Here',
        'email' => 'Email Here',
        'address' => 'Address Here',
        'button' => 'Get Started',
    ],

    'footer' => [
        'lines' => ['We help authors transform their ideas into beautifully', 'crafted children’s books through professional', 'publishing, illustration, design, and marketing', 'services.'],
        'quick' => [['About Us', '#about'], ['Our Services', '#services'], ['Our Portfolio', '#portfolio'], ['How It Works', '#services'], ['Testimonials', '#stories'], ['FAQs', '#contact'], ['Blog', '#contact'], ['Contact Us', '#contact']],
        'services' => ['Book Illustrations', 'Book publishing', 'Author Branding', 'Author Website', 'Social Media Marketing', 'Book Trailer', 'Press Release', 'Copyright Registration'],
        'social' => [['Facebook', '#'], ['Instagram', '#'], ['LinkedIn', '#']],
        'copyright' => 'Copyright © 2026 Your Website . All Rights Reserved.',
    ],

    // About Us page (wireframe)
    'about_page' => [
        'title' => 'About Us',
        'subtitle' => 'Helping authors transform their ideas into meaningful children’s books that inspire young minds and create lasting memories.',
        'intro' => [
            'heading' => ['Bringing Ideas to Life Through', 'the Power', 'of Storytelling'],
            'paragraphs' => [
                'Every children’s book begins with an idea, a spark of imagination, or a story waiting to be shared. We believe those ideas deserve the opportunity to become something extraordinary.',
                'Our focus is helping authors turn their creative visions into professionally crafted children’s books. Through thoughtful design, engaging illustrations, editorial expertise, and publishing support, we help bring stories from the page to the hands of young readers.',
                'Whether you’re a first-time author or an experienced storyteller, we provide creative solutions and professional guidance to help you navigate the publishing journey with confidence.',
                'From the earliest stages of development to the final published book, we’re here to help you create stories that entertain, inspire, and stay with readers long after the last page.',
            ],
        ],
        'difference' => [
            'title' => 'The Difference We Bring',
            'intro' => 'Great children’s books are created through a thoughtful balance of storytelling, visual creativity, and professional execution.',
            'cards' => [
                ['Creative Collaboration', 'Custom artwork and storytelling turn your ideas into engaging books for young readers.'],
                ['Personalized Support', 'Your goals guide our process, with support shaped around your ideas and publishing needs.'],
                ['Full Book Solutions!', 'Editing, design, formatting, and publishing bring essential services together in one place.'],
                ['Author Collaboration', 'We listen, communicate clearly, and keep your vision at the heart of each project.'],
            ],
        ],
        'vision' => [
            'heading' => ['Your Vision Guides', 'Every Step'],
            'paragraphs' => [
                'We believe the best publishing experiences begin with listening. Understanding your story, your audience, and your goals allows us to build a process around what matters most to you.',
                'From discussing your initial ideas to refining the final details of your book, we emphasize clear communication, creative collaboration, and careful execution. Our approach is designed to help you move forward with greater clarity, make informed decisions, and bring your book closer to becoming a finished reality.',
            ],
        ],
    ],
];