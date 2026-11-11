<?php
// All the words, links and lists on the site. Edit here; index.php draws the page from this file.
return [
    'title' => 'Creating Stories That Grow With Them',
    'description' => "Professional children's book publishing, illustration, design and marketing support, all under one roof.",
    'logo' => 'Fablenest Publishers',

    // x = horizontal position of the link in the header (1920 px design width)
    'nav' => [
        ['Home', '#top', 457],
        ['About Us', 'about.php', 588],
        ['Our Services', '#services', 750],
        ['Meet the Author', '#stories', 945],
        ['Portfolio', '#portfolio', 1176],
        ['Contact Us', '#contact', 1329],
    ],

    'hero' => [
        'lead' => ['Bring your children’s book to life with professional', 'publishing, illustration, design, and marketing support', '— all under one roof.'],
        'cta' => ['Start Your Story', 'Discuss Now'],
        'boy_alt' => 'A chick in a blue cap sitting on a branch, reaching into a nest of books',
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
        'alt' => 'A chick in a cap and round glasses hugging a storybook',
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
        'quick' => [['About Us', 'about.php'], ['Our Services', '#services'], ['Our Portfolio', '#portfolio'], ['How It Works', '#services'], ['Testimonials', '#stories'], ['FAQs', '#contact'], ['Blog', '#contact'], ['Contact Us', '#contact']],
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
                ['Creative Collaboration', 'Custom artwork and storytelling turn your ideas into engaging books for young readers.', 'assets/s/diff_icon1.jpg', 'assets/s/diff_title1.jpg'],
                ['Personalized Support', 'Your goals guide our process, with support shaped around your ideas and publishing needs.', 'assets/s/diff_icon2.jpg', 'assets/s/diff_title2.jpg'],
                ['Full Book Solutions!', 'Editing, design, formatting, and publishing bring essential services together in one place.', 'assets/s/diff_icon3.jpg', 'assets/s/diff_title3.jpg'],
                ['Author Collaboration', 'We listen, communicate clearly, and keep your vision at the heart of each project.', 'assets/s/diff_icon4.jpg', 'assets/s/diff_title4.jpg'],
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

    // Book Publishing service page
    'book_page' => [
        'title' => 'Book Publishing',
        'subtitle' => 'Professional publishing solutions that transform your written work into a book ready to reach readers.',
        'intro' => [
            'heading' => ['Every Manuscript Deserves a', 'Professional', 'Finish'],
            'paragraphs' => [
                'Publishing a book is more than making your manuscript available to readers. It’s about presenting your work with quality, care, and attention to every detail.',
                'Our book publishing services bring together the essential elements of professional book production. Whether you’re preparing your first manuscript or publishing another title, we help you navigate the process with creative expertise and practical guidance.',
                'From refining your content to preparing your book for publication, our goal is to make your publishing experience organized, collaborative, and rewarding.',
            ],
        ],
        'solution' => [
            'text' => 'From your first manuscript to the final published edition, we bring together every essential service needed to transform your ideas into a professionally crafted book. Our team combines editorial expertise, creative design, and publishing knowledge to ensure every element of your book is thoughtfully developed and carefully prepared.',
            // [title image, description, icon image]; the first tile's pictures are reused where the design repeats them
            'tiles' => [
                ['Manuscript Preparation', 'Get your manuscript ready for publication with professional editing, proofreading, and content refinement.', 'assets/s/bk_i1.jpg', 'assets/s/bk_t1.jpg'],
                ['Book Cover Design', 'Create a compelling first impression with a professionally designed cover that reflects your book’s identity.', 'assets/s/bk_i2.jpg', 'assets/s/bk_t2.jpg'],
                ['Manuscript Preparation', 'Get your manuscript ready for publication with professional editing, proofreading, and content refinement.', 'assets/s/bk_i1.jpg', 'assets/s/bk_t1.jpg'],
                ['Manuscript Preparation', 'Get your manuscript ready for publication with professional editing, proofreading, and content refinement.', 'assets/s/bk_i2.jpg', 'assets/s/bk_t1.jpg'],
            ],
        ],
        'how' => [
            'intro' => 'Our structured process helps make every stage of publishing easier to understand and manage.',
            'steps' => [
                ['Initial Consultation', 'We discuss your manuscript, publishing goals, audience, and project requirements.', 'assets/s/bk_s1.jpg'],
                ['Manuscript Review', 'We assess your content and identify the editorial and production requirements.', 'assets/s/bk_s2.jpg'],
                ['Editing & Design', 'Your manuscript moves through the required editing, cover design, and interior formatting stages.', 'assets/s/bk_s3.jpg'],
                ['Publishing', 'Your book is submitted through the selected publishing platform, following its requirements.', 'assets/s/bk_s4.jpg'],
            ],
        ],
        'imagination_alt' => 'A startled chick runs through a colourful jungle while an eagle swoops in',
    ],

    // footer service names that have their own page
    'service_pages' => [
        'Book publishing' => 'book-publishing.php',
        'Book Illustrations' => 'service.php?s=book-illustrations',
        'Author Branding' => 'service.php?s=author-branding',
        'Author Website' => 'service.php?s=author-website',
        'Social Media Marketing' => 'service.php?s=social-media-marketing',
        'Book Trailer' => 'service.php?s=book-trailer',
        'Press Release' => 'service.php?s=press-release',
        'Copyright Registration' => 'service.php?s=copyright-registration',
    ],

    // "Our Services" mega menu in the header: [name, short line]. A service with a page listed in service_pages links there.
    'mega' => [
        'intro' => ['Everything your book needs', 'From the first draft to launch day, in one place.'],
        'items' => [
            ['Book publishing', 'Editing, cover design and formatting, ready to publish.'],
            ['Book Illustrations', 'Characters and scenes drawn for young readers.'],
            ['Author Branding', 'A look and voice readers remember.'],
            ['Author Website', 'A home online for you and your books.'],
            ['Social Media Marketing', 'Reach parents, teachers and readers.'],
            ['Book Trailer', 'A short film that sells your story.'],
            ['Press Release', 'Announce your launch to the right people.'],
            ['Copyright Registration', 'Protect your work from day one.'],
        ],
    ],

    // Portfolio section (inc/portfolio.php). Each tab: label, picture ratio, items [title, image, link or '', small caption].
    // These pictures are placeholders cut from the site's own artwork; swap in real work here.
    'work' => [
        'intro' => 'A look at books, artwork, films and websites we have made with our authors.',
        'tabs' => [
            'covers' => ['label' => 'Book Covers', 'ratio' => '1520 / 1399', 'items' => [
                ['Leo and The Moon Cat', 'assets/s/cover-leo-moon-cat.jpg', '', 'Oliver Bennett'],
                ['Bolt the Little Robot and The Rooftop Garden', 'assets/s/cover-bolt-rooftop-garden.jpg', '', 'William Carter'],
                ['Rosie the Little Pig Who Wanted to Fly', 'assets/s/cover-rosie-pig.jpg', '', 'Emma Sullivan'],
                ['Lucy the Firefly Who Lost Her Glow', 'assets/s/cover-lucy-firefly.jpg', '', 'Lucy Reynolds'],
                ['Bruno the Bear Who Couldn’t Sleep', 'assets/s/cover-bruno-bear.jpg', '', 'Hannah Wilson'],
                ['Captain Maisie and the Treasure of Giggle Island', 'assets/s/cover-giggle-island.jpg', '', 'Elizabeth Walker'],
                ['Ollie the Shy Octopus', 'assets/s/cover-ollie-octopus.jpg', '', 'Penelope James'],
                ['Pip the Little Penguin', 'assets/s/cover-pip-penguin.jpg', '', 'Stella Marshall'],
                ['The Brave Little Hedgehog’s Winter Party', 'assets/s/cover-hedgehog-winter-party.jpg', '', 'Victoria Collins'],
                ['Ember the Dragon Who Was Afraid of Fire', 'assets/s/cover-ember-dragon.jpg', '', 'Sophia Anderson'],
            ]],
            'illustrations' => ['label' => 'Illustrations', 'ratio' => '4 / 3', 'items' => [
                ['Giraffe on the run', 'assets/s/pf_ill1.jpg', '', 'Full-page spread'],
                ['The big bike race', 'assets/s/pf_ill2.jpg', '', 'Full-page spread'],
                ['The curly ladder', 'assets/s/pf_ill3.jpg', '', 'Cover art'],
            ]],
            'trailers' => ['label' => 'Book Trailer', 'ratio' => '16 / 10', 'items' => [
                ['The Curly Ladder, trailer', 'assets/s/pf_trl1.jpg', '', '0:45'],
            ]],
            'websites' => ['label' => 'Author Website', 'ratio' => '16 / 10', 'items' => [
                ['Author site, home page', 'assets/s/pf_web1.jpg', '', 'authorname.com'],
            ]],
        ],
    ],
];