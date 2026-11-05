<?php
// Search / answer-engine copy for every page, keyed by page: home, about, book-publishing, and the service slugs.
// title (about 60 characters) and description (about 155) go into the <head>.
// answer   = the short, direct answer shown under the banner ("In short"), also quoted by search and AI answers.
// glance   = four quick facts [label, value].
// faq      = questions and answers; shown as an accordion AND published as FAQ structured data, so keep them true.
// Draft copy: check it before it goes live (no prices or turnaround times are promised on purpose).
return [
    'home' => [
        'title' => 'Children’s Book Publishing, Illustration & Marketing | Fablenest Publishers',
        'description' => 'Fablenest Publishers helps authors publish children’s books: editing, cover design, illustration, book trailers, author websites and marketing, all in one place.',
        'answer' => 'Fablenest Publishers is a children’s book publishing service. We help authors turn a manuscript or an idea into a finished, professionally made book, with editing, illustration, cover design, formatting, a book trailer, an author website and marketing support.',
        'glance' => [['Best for', 'First-time and experienced children’s authors'], ['Services', 'Publishing, illustration, branding, website, marketing'], ['You provide', 'A manuscript, or just the idea'], ['You receive', 'A print- and ebook-ready book']],
        'faq' => [
            ['What does Fablenest Publishers do?', 'We help authors publish children’s books. That includes editing, cover design, illustration, formatting, and the marketing around the book, such as a trailer, an author website and social media.'],
            ['Do I need a finished manuscript to start?', 'No. You can come with a finished manuscript, a draft, or only an idea. We explain the options and help you decide the next step.'],
            ['Can I choose only the services I need?', 'Yes. Some authors want the full publishing journey, others only an illustrator, a cover, or a launch campaign. Each service can be used on its own.'],
            ['Where will my book be sold?', 'Books can be prepared for the main retailers and print-on-demand platforms, including Amazon Kindle, Barnes & Noble, IngramSpark and Lulu.'],
            ['Do I keep the rights to my book?', 'Authors stay in control of their work. We give you a clear written agreement before any work begins, so you know exactly what you own and what we are doing.'],
            ['How do I get started?', 'Send us a short message through the contact form with a few lines about your book. We will reply to talk through your goals and suggest the right services.'],
        ],
    ],

    'about' => [
        'title' => 'About Fablenest Publishers | Children’s Book Publishing Team',
        'description' => 'Learn how Fablenest Publishers helps authors turn ideas into professionally crafted children’s books through design, illustration, editing and publishing support.',
        'answer' => 'Fablenest Publishers helps authors turn their ideas into professionally made children’s books. Our team combines editorial, design, illustration and publishing knowledge, and works closely with each author from the first idea to the finished book.',
        'glance' => [['What we do', 'Children’s book publishing support'], ['How we work', 'Collaboratively, with you at every step'], ['Who we help', 'First-time and experienced authors'], ['Our aim', 'Books children enjoy and authors are proud of']],
        'faq' => [
            ['Who is Fablenest Publishers for?', 'We work with authors of children’s books, from first-time writers with a single story to experienced authors building a series.'],
            ['How does the process work?', 'It starts with a conversation about your book and goals. Then we agree the services you need, work through each stage with your feedback, and prepare the finished book for publication.'],
            ['Will I be involved in the creative decisions?', 'Yes. You approve the key steps, such as the illustration style, the cover and the final layout, so the book stays true to your vision.'],
            ['What makes a good children’s book?', 'A clear, engaging story, pictures that support the text, an age-appropriate length and language, and a professional finish in editing, layout and cover.'],
            ['How can I contact the team?', 'Use the contact form on this website. Tell us a little about your book and we will get back to you.'],
        ],
    ],

    'book-publishing' => [
        'title' => 'Book Publishing Services for Children’s Authors | Fablenest Publishers',
        'description' => 'Professional children’s book publishing: manuscript preparation, cover design, formatting and publishing support from your first draft to a finished, published book.',
        'answer' => 'Our book publishing service takes your manuscript through editing, cover design, interior formatting and publication, so you end up with a professionally made book that is ready to reach readers in print and as an ebook.',
        'glance' => [['Best for', 'Authors with a manuscript ready to publish'], ['Includes', 'Editing, cover design, formatting, publishing'], ['You provide', 'Your manuscript and your goals'], ['You receive', 'Print-ready and ebook-ready files']],
        'faq' => [
            ['What is included in your book publishing service?', 'Manuscript preparation (editing and proofreading), book cover design, interior formatting, and support with submitting your book to the publishing platform you choose.'],
            ['I have never published a book. Can you guide me?', 'Yes. We explain each stage in plain language, so you can make informed decisions without needing any publishing experience.'],
            ['Do you help with the book cover?', 'Yes. Cover design is part of the service. We create a cover that reflects your book and works well as a small thumbnail online.'],
            ['Which platforms can my book be published on?', 'We can prepare your book for the major platforms, including Amazon Kindle, Barnes & Noble, IngramSpark and Lulu, depending on your goals.'],
            ['Can I publish a book that is already written but not edited?', 'Yes. Manuscript preparation covers editing, proofreading and content refinement, so your text is polished before it is formatted.'],
        ],
    ],

    'book-illustrations' => [
        'title' => 'Children’s Book Illustration Services | Fablenest Publishers',
        'description' => 'Full-colour children’s book illustrations: character design, page spreads and cover artwork, prepared for print and ebook by experienced illustrators.',
        'answer' => 'Our book illustration service creates the characters, page illustrations and cover artwork for your children’s book. You approve the style and the sketches, then receive finished, full-colour artwork prepared for print and ebook.',
        'glance' => [['Best for', 'Authors who need pictures for their story'], ['Includes', 'Characters, spreads, cover artwork'], ['You provide', 'Your manuscript and style ideas'], ['You receive', 'Print- and web-ready artwork']],
        'faq' => [
            ['What does a children’s book illustration service include?', 'Character design, illustrations for each page or spread, cover artwork, rounds of revisions, and final files prepared for print and ebook.'],
            ['Can I choose the illustration style?', 'Yes. We show you styles that suit your story, such as watercolour or bold digital colour, and you approve one before the full artwork begins.'],
            ['How many illustrations does a picture book need?', 'It depends on the length and format of your book. We review your manuscript and recommend how many spreads or pages to illustrate.'],
            ['Will I see sketches before the final artwork?', 'Yes. You review rough sketches first and can request changes before they become finished illustrations.'],
        ],
    ],

    'author-branding' => [
        'title' => 'Author Branding for Children’s Authors | Fablenest Publishers',
        'description' => 'Build an author brand readers remember: your author story, logo and colours, bio, and a simple brand kit you can use on every book, website and social post.',
        'answer' => 'Author branding gives you a consistent look, voice and story across your books, website and social media. We help you define your author story and visual identity, and deliver a simple brand kit you can reuse everywhere.',
        'glance' => [['Best for', 'Authors who want to be recognised'], ['Includes', 'Author story, logo, colours, bio, brand kit'], ['You provide', 'Your story and your readers in mind'], ['You receive', 'A one-page brand guide and files']],
        'faq' => [
            ['What is author branding?', 'It is the look, voice and story that make you recognisable as an author, such as your colours, fonts, logo, bio and the way you talk to readers.'],
            ['Why does a children’s author need a brand?', 'Parents, teachers and librarians choose books from authors they recognise and trust. A consistent brand across your books and pages makes you easier to remember.'],
            ['What do I get at the end?', 'A brand kit with your author story, logo or mark, colour palette, fonts and bios, ready to use on your website, covers and social media.'],
            ['Can the brand match my existing books?', 'Yes. We can build on the style of your current books so everything feels like it belongs together.'],
        ],
    ],

    'author-website' => [
        'title' => 'Author Website Design for Children’s Authors | Fablenest Publishers',
        'description' => 'A custom author website with book pages, newsletter sign-up and contact forms, designed for phones and easy for you to update yourself.',
        'answer' => 'An author website is your own home on the internet, where readers can learn about you, find your books and buy them. We design and build a mobile-friendly site with a page for each book, a newsletter sign-up and a contact form.',
        'glance' => [['Best for', 'Authors who want a home for their books'], ['Includes', 'Design, book pages, forms, launch'], ['You provide', 'Book details, bio and images'], ['You receive', 'A live, mobile-friendly website']],
        'faq' => [
            ['Do I need an author website?', 'It is not required, but it is the one place online that you fully control. It helps readers, parents and schools find your books, and gives you somewhere to send people from social media.'],
            ['What pages will my website have?', 'Usually a home page, an about page, a page for each book with buy links, a news or blog page, and a contact page with a newsletter sign-up.'],
            ['Will it work on phones?', 'Yes. Most visitors use a phone, so every page is designed to work well on small screens first.'],
            ['Can I update the website myself?', 'Yes. We set it up so you can add a new book or a news post without needing a developer, and we show you how.'],
        ],
    ],

    'social-media-marketing' => [
        'title' => 'Social Media Marketing for Children’s Books | Fablenest Publishers',
        'description' => 'Reach parents, teachers and readers: profile setup, a content plan, launch campaigns and monthly reporting for your children’s book.',
        'answer' => 'Our social media marketing service helps your children’s book reach parents, teachers and readers. We set up your profiles, plan and schedule content, run a launch campaign, and report on what is working each month.',
        'glance' => [['Best for', 'Authors launching or promoting a book'], ['Includes', 'Profiles, content plan, launch push, reports'], ['You provide', 'Your book, brand and approvals'], ['You receive', 'A steady posting plan and monthly reports']],
        'faq' => [
            ['Which social platforms do you work with?', 'We choose platforms based on where your readers are, which for children’s books often means Instagram and Facebook, and sometimes others. We recommend the best fit during the audit.'],
            ['Who do children’s books need to reach on social media?', 'Mostly the adults who buy and recommend them: parents, grandparents, teachers and librarians. Content is planned with them in mind.'],
            ['Will I approve posts before they go out?', 'Yes. You see the content plan and posts first, so nothing is published without your approval.'],
            ['How do I know whether it is working?', 'You receive a plain-language monthly report that shows what was posted, how people responded and what we will adjust next.'],
        ],
    ],

    'book-trailer' => [
        'title' => 'Book Trailer Production for Children’s Books | Fablenest Publishers',
        'description' => 'A short, polished book trailer for your children’s book: script, storyboard, animation, music and versions for your website and social media.',
        'answer' => 'A book trailer is a short film, usually 30 to 60 seconds, that gives readers a quick taste of your story. We write the script, plan the storyboard, animate your artwork with music, and deliver versions for web and social media.',
        'glance' => [['Best for', 'Authors who want to promote a new book'], ['Includes', 'Script, storyboard, animation, music'], ['You provide', 'Your book and its artwork'], ['You receive', 'A finished trailer in web and social sizes']],
        'faq' => [
            ['What is a book trailer?', 'A short promotional film for a book, similar to a movie trailer. It shows the mood and the best moments of the story without giving away the ending.'],
            ['How long is a book trailer?', 'Most are between 30 and 60 seconds, which is long enough to build interest and short enough for people to watch to the end.'],
            ['Where can I use my trailer?', 'On your website and book page, on social media, in emails to schools and libraries, and on video platforms.'],
            ['Do I need illustrations to make a trailer?', 'Illustrations make a trailer much stronger. If you already have them we animate them. If you do not, our illustration service can create them first.'],
        ],
    ],

    'press-release' => [
        'title' => 'Book Launch Press Release Writing | Fablenest Publishers',
        'description' => 'Professional press release writing and distribution for your children’s book launch, with a strong headline, a media list and sending support.',
        'answer' => 'A press release is a short, formal announcement of your book sent to journalists, bloggers and librarians. We write it in the correct format, build a media list suited to children’s books, and send it at the right moment.',
        'glance' => [['Best for', 'Authors announcing a launch'], ['Includes', 'Writing, headline, media list, sending'], ['You provide', 'Book facts and a quote'], ['You receive', 'A release ready to send and share']],
        'faq' => [
            ['What is a press release for a book?', 'A news announcement about your book, written in a standard format so editors, bloggers and librarians can quickly see what the book is and why it matters.'],
            ['When should I send a press release?', 'Usually around your launch date, so coverage can appear when readers can actually buy the book. We help you choose the timing.'],
            ['Who receives the press release?', 'We build a list of outlets and contacts that cover children’s books, such as parenting sites, local media and library or school newsletters.'],
            ['Does a press release guarantee coverage?', 'No. It gives your news the best chance of being noticed and picked up, but editors decide what they publish.'],
        ],
    ],

    'copyright-registration' => [
        'title' => 'Book Copyright Registration Help | Fablenest Publishers',
        'description' => 'Step-by-step help registering your book’s copyright: eligibility, application preparation, filing and your registration record. Not legal advice.',
        'answer' => 'Copyright registration creates an official record that you are the author of your book. We guide you through the process: checking which registration applies, preparing the application, filing it and passing you the registration record. This is not legal advice.',
        'glance' => [['Best for', 'Authors protecting a book before or at launch'], ['Includes', 'Eligibility check, preparation, filing'], ['You provide', 'Authorship and publication details'], ['You receive', 'Your registration record and a file copy']],
        'faq' => [
            ['Is my book protected by copyright without registering?', 'In many countries copyright exists automatically when you create the work. Registration adds an official public record, which can be useful if you ever need to prove or enforce your rights.'],
            ['What do I need to register a book?', 'The title, your name as author, details of publication and a copy of the work. We tell you exactly what is needed for your situation.'],
            ['Is this legal advice?', 'No. We help with the administrative process only. For legal questions about your rights, please speak with a qualified lawyer.'],
            ['Which country’s office do you register with?', 'It depends on where you live and where you publish. We confirm the right office with you before filing.'],
        ],
    ],
];
