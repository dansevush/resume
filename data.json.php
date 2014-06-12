<?php
  $data = array();
  $theID=0;
  $thisYear = date("Y");

  $data[] = array(
    'thisID' => $theID++,
    'header'=> '<h4>Solving UI and performance problems for over 30 years.<br>' .
       'Embracing new technologies and best practices, I excel with any team as a contributor or lead.</h4>',
    'open'=> 'in',
    'title'=> '',
    'start'=> '',
    'done' => array(
      '<strong>Zealous Optimizer</strong>' . '<ul>',
      'Designed, implemented and championed  	&quot;SpeedUp&quot;, the first optimal recalculation strategy for Lotus 1-2-3 (this code was still being used in the last version of 1-2-3 for' .
      ' Windows) The dramatic increase in speed allowed Lotus to compete, on performance, against Excel.',
      'Named inventor on <a class="clickable" href="http://www.google.com/patents/US5136654" target="_blank">patent 5,136,654</a> for optimizing speech recognition'
       . '</ul>',

      '<strong>Innovative User Interfaces</strong>' . '<ul>',
      'Principal engineer for Lotus Agenda, the product that coined the term  	&quot;Personal Information Manager&quot;',
      'Created, spec\'d and implemented the first online gift attachments to greeting cards for Blue Mountain Arts (1999).'
       . '</ul>',
      "<strong>Skills/Environment:</strong> JavaScript (jQuery, Ajax), Python, PHP, C, C++, C#, (anything in the key of 'C'), Perl, HTML, XML, MySQL, SQLAlchemy, Apache, ASP/.NET, dozens of assembly languages, numerous cross-compilers.",
      "<strong>OS:</strong> linux, OSX, Windows/DOS.",
      '<strong>Tools/Buzzwords:</strong>  	&quot;single page app&quot;, jQuery, Ajax, Qunit, backbone, knockout, Agile, Assembla, Mercurial, Git, SVN, EC2, S3, HTML5, Facebook API/Development, Mobile Apps (HTML5 - not IOS or Android specific)',
      '<strong>Personal:</strong> Volunteer Webmaster for The Boston Blues Society, accomplished pianist and Hammond organist, playing with Track44'
    )
  );

  $data[] = array(
    'thisID' => $theID++,
    'header'=> 'Clear Ballot Group',
    'location'=>'Boston, MA',
    'title'=> 'Senior Software Engineer',
    'start'=> 2014,
    'done' => array(
      'Working on a next generation election system using Python, Javascript, jQuery, SQLalchemy and MySQL',
      'Implemented user backup/restore of election databases and tools for generating source code documentation'
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
    'start'=> 1981,
    'endYear'=> 1982,
    'done' => array(
      "Worked on Profile, a database and file manager published by Tandy (Radio Shack) for the TRS80 (Z80) model I, II and III systems.",
      "Developed enhancements for Profile allowing form creation, multiple sort criteria"
    )
  );

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
