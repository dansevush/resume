<?php
  $data = array();
  $theID=0;
  $thisYear = date("Y");

  $data[] = array(
    'thisID' => $theID++,
    'header'=> '<h4>Well rounded, easy going full stack engineer with over 30 years in software design and development. ' .
      '<br>I gather requirements asking the right questions, then task and estimate accurately and implement just what is needed. ' .
      '<br>My communication skills are top notch and I excel in small agile teams as a lead or contributor. </h4>' . 
      '<strong>I am intrigued by the IoT, having installed SmartThings, Phillips Hue and a wifi thermostat in my home.</strong>',
/*        'Embracing new technologies and best practices, I excel with any team as a contributor or lead.</h4>', */
    'open'=> 'in',
    'title'=> '',
    'start'=> '',
    'done' => array(
      '<strong>accomplishments</strong>' . '<ul>' , 
      'Design and implement Tournaments as a micro-service for ' . 
      '<a class="clickable" href="http://www.sparcade.com/" target="_blank">Sparcade,</a> GSN\'s ambitious mobile tournament platform ' . 
      '<a class="clickable" href="http://venturebeat.com/2016/11/17/gsns-sparcade-lets-you-play-centipede-and-two-dots-soon-for-real-money/" target="_blank">released October 2016.</a>' . 
      'Deployed three major releases subsequently, using continuous integration. ', 

      'Design, implement and evangalized 	&quot;SpeedUp&quot;, the first optimal recalculation strategy for Lotus 1-2-3 (this code was still being used in the last version of 1-2-3 for' .
      ' Windows) The dramatic increase in speed allowed Lotus '. 
      '<a class="clickable" href="http://tinyurl.com/jr85u3r" target="_blank">to compete, on performance, against Excel.',
      'Named inventor on <a class="clickable" href="http://www.google.com/patents/US5136654" target="_blank">patent 5,136,654</a> for optimizing speech recognition'
       . '</ul>',

      '<strong>Innovative User Interfaces</strong>' . '<ul>',
      'Principal engineer for Lotus Agenda, the product that coined the term  	&quot;Personal Information Manager&quot;',
      'Created, spec\'d and implemented the first online gift attachments to greeting cards for Blue Mountain Arts (1999).'
       . '</ul>',
      "<strong>languages:</strong> Python, JavaScript, PHP, C, C++, C#, (anything in the key of 'C'), Perl, HTML5, JSON, XML, x86 ASM",
      "<strong>tools/technologies:</strong>  git & github, Jira, Jenkins, Bamboo, glu, Sentry, Splunk, Crucible, Apache, Celery, Promises",
      '<strong>front end:</strong>  	 jQuery, grunt, handlebars, Ajax, Qunit, backbone, Facebook API',
      '<strong>environments:</strong>  	 unix, linux, docker, vagrant, AWS, S3, OSX (Mac), Windows and PC DOS',
      '<strong>Personal:</strong> Volunteer Webmaster for The Boston Blues Society, accomplished pianist and Hammond organist, playing with Track44'
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Recommendations',
    'title'=> '',
    'start'=> 2016,
    'endYear'=> 2017,
    'done' => array(
      "view all recommendations on <a class='clickable' href='https://www.linkedin.com/in/dansevush#recommendations' target='_blank'>linkedin</a><p>",
      "<a class='clickable' href='https://www.linkedin.com/in/david-kern-318b009' target='_blank'>David Kern</a> <span class='pull-right'>Engineering Director at GSN Games </span>" . 
      "<p>When I reflect on the qualities which form an outstanding engineer, I have to think no further than Dan Sevush. " . 
      "I am honored to have had an opportunity to work with, learn from, and direct Dan while working on GSN's skill platform. " . 
      "No matter the task, Dan always had a unique perspective drawn from a deep well of experience - often his input was directly responsible for preventing critical mistakes and de-risking execution."  .
      "<p>Dan also has a very unique talent that I've found is rarely encountered in a software engineer of any level - requirement discovery. ". 
      "When a project was \"fuzzy\", Dan never failed to impress. He would go out of his way to nail down requirements - going directly to stakeholders for clarity, " . 
      " running experiments to test assumptions, and documenting his findings for the benefit of the team."  . 
      "<p>In short, working with Dan was not only a pleasure, the experience left me as a better engineer and director. Thank you sir",

      "<a class='clickable' href='https://www.linkedin.com/in/taramcgoff' target='_blank'>Tara McGoff</a><span class='pull-right'> Senior Product Manager at GSN Games</span>" . 
      "<p>Dan and I worked together on two different products over a span of several years. He is an asset to any team, asking tough questions and helping to " .  
      "keep scrum teams focused on projects that will directly impact the bigger picture goals of an organization. He is a development leader, " .  
      "who fosters cross training and efficiency, and often goes the extra mile to ensure that product management and other cross-functional staff are aware of his work progress, and his suggestions for spec modifications." . 
      "It was a pleasure working with Dan and I believe his ability to jump in and learn new things, and the fact that he embraces his roles as both team player and leader, make him especially adaptable to work at an organization",

      "<a class='clickable' href='https://www.linkedin.com/in/alexanderkishinevsky' target='_blank'>Alexander Kishinevsky</a> <span class='pull-right'>VP Engineering at GSN Games</span>" . 
      "<p>Dan's presence in the team assures experience, maturity, pragmatic thinking, and ultimately, strong and effective communication to explain highly complex technical " .
      "and architectural issues to designers, product managers, and anyone else outside technology. " . 
      "<p>Without Dan's efforts and presence, we would not have been in a position to run an important piece of a core loop technology to provide greatest " . 
      "possible distributed tournament execution experience. Moreover, his execution and decision making has proven to be solid as his components run over time in a live deployment:" .
      " a job well done. I can always count on Dan to provide feedback and advice that made a big positive difference to this business", 

      "<a class='clickable' href='https://www.linkedin.com/in/steve-santarpia-5bb4516' target='_blank'>Steve Santarpia</a><span class='pull-right'>QA Lead at GSN Games</span>" . 
      "<p>Dan is really what you want in an employee. Hard working, knowledgeable, easy to communicate with. He'll burn the midnight oil getting work completed " .
      "and still come into work with a smile. I was always able to reach out to him with a question or issue and have a great discussions on solutions.". 
      "<p>As part of a scrum team he was one of the best with communicating done criteria and areas to test for QA. This helped immensely in getting the " . 
      "feature validated properly and timely. When you have an open position for an engineer, Dan is the ideal candidate",

      "<a class='clickable' href='https://www.linkedin.com/in/rich-skorski' target='_blank'>Rich Skorski</a><span class='pull-right'> Senior Software Engineer at GSN Games</span>" . 
      "<p>Dan has an immense amount of expertise. He can develop robust, enterprise level software, and also has the gift of knowing when focused, " . 
      "small-scale solutions are the better route. I wish I had more time to learn from him both about software and about barbecue!"
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'GSN Digital',
    'location'=>'Boston, MA',
    'title'=> 'Principal Software Engineer',
    'start'=> 2014,
    'endYear'=> 2017,
    'done' => array(
      'Design/implement tournament micro-services for Sparcade, a mobile backend using Python, Django, and AWS. Distributed team in San Francisco, Ukraine, Bangalore and Boston.',
      'Initial work for Sparcade on auth and payments micro-services for mobile games using python, Django, rest-framework and AWS',
      'Design/implement RESTful JSON Web Token service for all GSN studios using python and flask', 
      'Responsive (mobile) page for GSN casino games using Less, Grunt, etc.'
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Clear Ballot Group',
    'location'=>'Boston, MA',
    'title'=> 'Senior Software Engineer',
    'start'=> 2013,
    'done' => array(
      'Working on a next generation election system using Python, Web.py, SQLalchemy, MySQL, Javascript and jQuery ',
      'Designed and implemented user backup/restore of election databases and tools for generating source code documentation ',
      'WAI-ARIA compliant “single file” offline HTML5 ballot using Javascript tools – grunt, jshint, handlebars, bootstrap and of course, jQuery'
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Nimbit Music',
    'location'=>'Framingham, MA',
    'title'=> 'Senior Software Engineer',
    'start'=> 2011,
    'endYear'=> 2013,
    'done' => array(
      "Architect/implement Nimbit's new website, using jQuery and Ajax for REST data.",
      "Facebook tool allows musicians to create rewards (free tracks, product discounts) and easily share on Facebook." .
      "PHP page to generate meta-data for Facebook's API and handle Facebook URL requests.",
      "Helped design and implement Nimbit's Fan Checkin API to capture email addresses of fans \"checking in\" using mobile devices (HTML5) at a Nimbit artist event.",
      "Photo uploader accepted popular file formats, used intelligent resizing and offered simplified cropping (combined jQuery/Ajax with a PHP script)",
      "REST data cache using localStorage (HTML5)",
      "Scaleable file uploader direct to Amazon's S3 for multiple large .WAV files with status and progress bars.",
      "Ajax wrapper for REST data, bind custom error handlers and take advantage of jQuery's Deferred feature.",
      "Helped design and test Nimbit's first public API spec to allow creating and uploading of music products from another client.",
      "Extend Apache session timeout by monitoring user input and Ajax activity.",
      "Modify production patch script to log what revisions are on production servers."
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Elysium Digital',
    'location'=>'Cambridge, MA',
    'title'=> 'Consultant',
    'start'=> 2010,
    'done' => array(
      'Adding features, refining user interface and optimizing performance for a proprietary task manager, using Django, Python and Postgres.',
      'Adding remote API for Android and other mobile apps, using Piston and JSON.'
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Telefunken',
    'title'=> 'Consultant',
    'start'=> 2009,
    'done' => array(
      "Working closely with the design team, created and deployed a " .
      "<a class='clickable' href='http://telefunkenusa.com/products/compare_mics.php' target='_blank'>" .
      "product comparison page</a> for Telenfunken microphones."
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Cambridge Systematics',
    'location'=>'Cambridge, MA',
    'title'=> 'Consultant',
    'start'=> 2008,
    'done' => array(
      "Using C#, .NET and XML designed and coded a " .
      "<a class='clickable' href='http://shrp2webtool.camsys.com/' target='_blank'>" .
      "report generator for the Strategic Highway Research Program</a>.",
      "Using C# and .NET contributed to a large ongoing website project for Georgia's Department of Transportation ",

    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Boston Blues Society Website',
    'location'=>'Cambridge, MA',
    'title'=> 'Volunteer Webmaster',
    'start'=> 2007,
    'endYear'=>'present',
    'done' => array(
      "Took over as webmaster in 2007, for " .
      "<a  class='clickable' href='http://bostonblues.com' target='_blank'>BostonBlues.com</a>",
      "Redesigned website for easier navigation, with over 500 bands, 700 venues and 200 events monthly."
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Elysium Digital',
    'location'=>'Cambridge, MA',
    'title'=> 'Computer Scientist',
    'start'=> 2002,
    'endYear'=>2008,
    'done' => array(
      "Research, analysis expert witness testimony in litigation",
      "Prepared animated flow charts for the jury, which turned out to be the key factor in winning the case"
    )
  );


  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Dan\'s Chocolates',
    'location'=>'Watertown, MA',
    'title'=> 'CTO',
    'start'=> 1999,
    'endYear'=>2001,
    'done' => array(
      "As a founder, recruited development staff",
      "Created, spec'd and implemented gift attachments to <a  class='clickable' href='http://www.bluemountain.com/eng3/thnx/indexchoc.html' target='_blank'>".
      "online greeting cards for Blue Mountain Arts </a>",
      "Launched site in four months development time using a fully" .
      "integrated ERP (Lawson) and CRM (Silknet). Designed and coded" .
      "fully dynamic site dealing with over 2400 SKUs",
      "Environment: linux, Solaris, NT, C++, Apache, PHP v3, Perl, Oracle, HTML, JavaScript"
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Cakewalk',
    'location'=>'Cambridge, MA',
    'title'=> 'Senior Software Engineer',
    'start'=> 1998,
    'done' => array(
      "Designed and spec'd two versions of an animated audio effects product for children.",
      "Designed, spec'd and prototyped an audio editor for a potential product with RealAudio.",
      "Implemented features for<strong> <a  class='clickable' href='http://cakewalk.com/Products/GuitarTracksPro/' target='_blank'> </strong>Guitar Studio.</a>",
      "Environment: NT, Win98, VC++ 6"
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Media One',
    'location'=>'Boston, MA',
    'title'=> 'Consultant',
    'start'=> 1997,
    'done' => array(
      "Designed and implemented CGI app to update weather and forecast page" .
      "for MediaOne's regional sites, using data from The Weather Channel.",
      "Script easily configued for different locations.",
      "<strong>Environment:</strong> SunOS, Perl 5"
    )
  );


  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Houghton Mifflin Interactive',
    'title'=> 'Consultant',
    'start'=> 1997,
    'done' => array(
      "Designed and implemented web site for The Tom Peters CD.",
      "<strong>Environment:</strong> HTML, JavaScript, CGI"
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Xerox',
    'location'=>'Peabody, MA',
    'title'=> 'Consultant',
    'start'=> 1996,
    'done' => array(
      "Designed and implemented three modules for Pagis, a Win95 document management system. ".
      "Modules included an appbar that emulated the 'SendTo' functionality via drag & drop.",
      "A sophisticated drag & drop handler that enabled transparent file translations".
      "(drag a bitmap file onto Word and a Xerox OCR module would format the text into a Word document)",
      "A configurable button pad to launch all Pagis modules.",
      "<strong>Environment:</strong> Win95 VC++ 5"
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'On Technology',
    'location'=>'Cambridge, MA',
    'title'=> 'Consultant',
    'start'=> 1993,
    'endYear'=> 1995,
    'done' => array(
      "Developed DayTimer&#153; version of <a  class='clickable' href='http://www.peoplecube.com/products/meetingmaker/' target='_blank'> Meeting Maker</a>, cross platform group scheduling client.",
      "Developed DOS version of Meeting Maker, cross platform group scheduling client.",
      "Developed Windows version of Instant Update, cross platform group word processor.",
      "<strong>Environment:</strong> Windows 3.1, DOS / MFC, C++, and a proprietary cross platform framework."
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Papyrus',
    'location'=>'Cambridge, MA',
    'title'=> 'Consultant',
    'start'=> 1993,
    'done' => array(
      "Designed and implemented DOS drivers for Sound Blaster FM and PCM boards.",
      "Designed and implemented DOS real time scheduler for above drivers.",
      "Designed and implemented file translators for above scheduler using standard MIDI and PCM file formats.",
      "<strong>Environment:</strong> DOS / 80386 assembler, C"
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Attitash Software',
    'location'=>'Nashua, NH',
    'title'=> 'Consultant',
    'start'=> 1992,
    'done' => array(
      "Designed and implemented Dashboard, an easy to use diagnostic troubleshooter and performance evaluator for Windows.",
      "Created proprietary controls.",
      "<strong>Environment:</strong> Windows 3.1 SDK, VC"
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Funk Software',
    'location'=>'Cambridge, MA',
    'title'=> 'Consultant',
    'start'=> 1991,
    'done' => array(
      "Designed and implemented hierarchical spreadsheet prototype",
      "<strong>Environment:</strong> Windows 3.1 SDK"
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Opcode Systems',
    'location'=>'Palo Alto, CA',
    'title'=> 'Consultant',
    'start'=> 1990,
    'done' => array(
      "Designed cross platform tools to allow porting from Macintosh to Windows.",
      "<strong>Environment:</strong> Windows 3.0 SDK, (beta) Multimedia Toolkit, Think C"
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Solution Systems',
    'location'=>'Wellesley, MA',
    'title'=> 'Development Manager',
    'start'=> 1989,
    'endYear'=> 1990,
    'done' => array(
      "Managed acquisition of BRIEF, a DOS based text editor, from Underware.",
      "Founded development staff, opened new Wellesley office.",
      "Prototyped several possible versions of BRIEF for Windows 3 (beta)",
      "Oversaw development and acquisition of C-Worthy, a DOS based C library interface package."
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Kurzweil AI',
    'location'=>'Waltham, MA',
    'title'=> 'Senior Software Engineer',
    'start'=> 1988,
    'endYear'=> 1989,
    'done' => array(
      "Reported directly to Chief Research Scientist, I optimized the speech recognition engine and was named on" .
      "<a  class='clickable' href='http://www.google.com/patents/US5136654' target='_blank'> patent #5,136,654.</a>",
      "Recently acquired by <a  class='clickable' href='http://www.lhsl.com/company/bios/raymondkurzweil.asp' target='_blank'> Lernout & Hauspie</a>, Ray Kurzweil\'s products are still very much in use"
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Lotus Development Corporation',
    'location'=>'Cambridge, MA',
    'title'=> 'Principal Software Engineer',
    'start'=> 1983,
    'endYear'=> 1988,
    'done' => array(
      "Principal Engineer - Agenda <ul>",
      "Created macro language for Agenda, a ground breaking PIM.</ul>",

      "Principal Engineer - 1-2-3 rev 3 <ul>",
      "Responsible for spreadsheet 'cell engine'.</ul>",

      "Team Lead - 1-2-3 rev 2.01<ul>",

      "As team lead, I was responsible for the largest selling version of <a  class='clickable' href='http://www.cicorp.com/courses/Lotus123.1a.htm' target='_blank'>1-2-3.</a>",
      "Created and championed <a  class='clickable' href='http://www.cbronline.com/news/lotus_development_enhances_1_2_3_with_speed_up_add_ons' target='_blank'>" .
      "\"SpeedUp\",</a> the first implementation of minimal recalculation for any Lotus spreadsheet product.</ul>",

      "Senior Engineer - Lotus Encryption Standard<ul>",
      "Worked on ADAPSO public key encryption standard</ul>",

      "Software Engineer - 1-2-3 Migrations<ul>",
      "Worked on drivers to port to 1-2-3 to various flavors of IBM compatible PCs.</ul>"
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Unidata Systems',
    'location'=>'Portsmouth, NH',
    'title'=> 'Software Engineer',
    'start'=> 1982,
    'endYear'=> 1983,
    'done' => array(
      "Developed debugger, diagnostic utilities and user interface tools for propriatary (Z80 CP/M) microcomputer database product.",
      "Modified CP/M BIOS and wrote drivers for various hard and floppy disks."
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'The small Computer Company',
    'location'=>'New York, NY',
    'title'=> 'Software Engineer',
    'start'=> 1982,
    'endYear'=> 1982,
    'done' => array(
      "Worked on Profile, a database and file manager published by Tandy (Radio Shack) for the TRS80 (Z80) model I, II and III systems.",
      "Developed enhancements for Profile allowing form creation, multiple sort criteria"
    )
  );

/*
  
  
*/


  
/*
  $data[] = array(
    'thisID' => $theID++,
    'header'=> '',
    'title'=> '',
    'start'=> ,
    'done' => array(
    )
  );
*/
  ob_start('ob_gzhandler');
  header('Content-Type: application/json');
  die(json_encode($data));
?>
