<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([

        	'pavadinimas' => 'Harry Potter and the Sorcerer Stone',
        	'metai' => 1997,
        	'zanras' => 'jaunimui',
        	'autorius' => 'J.K. Rowling, Mary GrandPré',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1474154022l/3.jpg',
        	'apibudinimas' => 'Harry Potter life is miserable. His parents are dead and he stuck with his heartless relatives, who force him to live in a tiny closet under the stairs. But his fortune changes when he receives a letter that tells him the truth about himself: he a wizard. A mysterious visitor rescues him from his relatives and takes him to his new home, Hogwarts School of Witchcraft and Wizardry.

			After a lifetime of bottling up his magical powers, Harry finally feels like a normal kid. But even within the Wizarding community, he is special. He is the boy who lived: the only person to have ever survived a killing curse inflicted by the evil Lord Voldemort, who launched a brutal takeover of the Wizarding world, only to vanish after failing to kill Harry.

			Though Harry first year at Hogwarts is the best of his life, not everything is perfect. There is a dangerous secret object hidden within the castle walls, and Harry believes it his responsibility to prevent it from falling into evil hands. But doing so will bring him into contact with forces more terrifying than he ever could have imagined.

			Full of sympathetic characters, wildly imaginative situations, and countless exciting details, the first installment in the series assembles an unforgettable magical world and sets the stage for many high-stakes adventures to come.'


        ]);

        DB::table('books')->insert([

        	'pavadinimas' => 'The Hunger Games',
        	'metai' => 2009,
        	'zanras' => 'jaunimui',
        	'autorius' => 'Suzanne Collins',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1311332303l/12091570.jpg',
        	'apibudinimas' => 'Sometime in the future after the destruction of North America in a nation known as Panem, the 74th Hunger Games begins.

			As punishment for a previous rebellion against the Capitol, every year, one boy and one girl between the ages of 12 and 18 from each district are selected by lottery and forced to participate in the Hunger Games, a televised event in which the participants, or "tributes," must fight to the death in a dangerous, outdoor arena, controlled by the Capitol, until only one remains. The difference this year is District 12 has had it first volunteer probably in the whole history of the District... Katniss Everdeen, who volunteered to take the place of her younger sister, Prim; and she\'s already making an impression.'


       	]);

       	DB::table('books')->insert([

        	'pavadinimas' => 'To Kill a Mockingbird',
        	'metai' => 2006,
        	'zanras' => 'jaunimui',
        	'autorius' => 'Harper Lee',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1361975680l/2657.jpg',
        	'apibudinimas' => 'The unforgettable novel of a childhood in a sleepy Southern town and the crisis of conscience that rocked it, To Kill A Mockingbird became both an instant bestseller and a critical success when it was first published in 1960. It went on to win the Pulitzer Prize in 1961 and was later made into an Academy Award-winning film, also a classic.

			Compassionate, dramatic, and deeply moving, To Kill A Mockingbird takes readers to the roots of human behavior - to innocence and experience, kindness and cruelty, love and hatred, humor and pathos. Now with over 18 million copies in print and translated into forty languages, this regional story by a young Alabama woman claims universal appeal. Harper Lee always considered her book to be a simple love story. Today it is regarded as a masterpiece of American literature.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Beautiful Disaster',
        	'metai' => 2011,
        	'zanras' => 'romantika',
        	'autorius' => 'Jamie McGuire',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1358259032l/11505797.jpg',
        	'apibudinimas' => 'The new Abby Abernathy is a good girl. She doesn’t drink or swear, and she has the appropriate number of cardigans in her wardrobe. Abby believes she has enough distance from the darkness of her past, but when she arrives at college with her best friend, her path to a new beginning is quickly challenged by Eastern University\'s Walking One-Night Stand. 

			Travis Maddox, lean, cut, and covered in tattoos, is exactly what Abby needs—and wants—to avoid. He spends his nights winning money in a floating fight ring, and his days as the ultimate college campus charmer. Intrigued by Abby’s resistance to his appeal, Travis tricks her into his daily life with a simple bet. If he loses, he must remain abstinent for a month. If Abby loses, she must live in Travis’s apartment for the same amount of time. Either way, Travis has no idea that he has met his match.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Immortal Rules',
        	'metai' => 2012,
        	'zanras' => 'siaubo',
        	'autorius' => 'Julie Kagawa',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1323357921l/10215349.jpg',
        	'apibudinimas' => 'Allison Sekemoto survives in the Fringe, the outermost circle of a walled-in city. By day, she and her crew scavenge for food. By night, any one of them could be eaten. Some days, all that drives Allie is her hatred of them—the vampires who keep humans as blood cattle. Until the night Allie herself dies and becomes one of the monsters.

			Forced to flee her city, Allie must pass for human as she joins a ragged group of pilgrims seeking a legend—a place that might have a cure for the disease that killed off most of civilization and created the rabids, the bloodthirsty creatures who threaten human and vampire alike. And soon Allie will have to decide what and who is worth dying for again.

			Enter Julie Kagawa\'s dark and twisted world as an unforgettable journey begins.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'And Then There Were None',
        	'metai' => 2004,
        	'zanras' => 'trileris',
        	'autorius' => 'Agatha christie',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1391120695l/16299.jpg',
        	'apibudinimas' => 'First, there were ten - a curious assortment of strangers summoned as weekend guests to a private island off the coast of Devon. Their host, an eccentric millionaire unknown to all of them, is nowhere to be found. All that the guests have in common is a wicked past they\'re unwilling to reveal - and a secret that will seal their fate. For each has been marked for murder. One by one they fall prey. Before the weekend is out, there will be none. And only the dead are above suspicion.'

		]);
		DB::table('books')->insert([

        	'pavadinimas' => 'The Da Vinci Code',
        	'metai' => 2006,
        	'zanras' => 'trileris',
        	'autorius' => 'dan Brown',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1303252999l/968.jpg',
        	'apibudinimas' => 'An ingenious code hidden in the works of Leonardo da Vinci. A desperate race through the cathedrals and castles of Europe. An astonishing truth concealed for centuries . . . unveiled at last.

			While in Paris, Harvard symbologist Robert Langdon is awakened by a phone call in the dead of the night. The elderly curator of the Louvre has been murdered inside the museum, his body covered in baffling symbols. As Langdon and gifted French cryptologist Sophie Neveu sort through the bizarre riddles, they are stunned to discover a trail of clues hidden in the works of Leonardo da Vinci—clues visible for all to see and yet ingeniously disguised by the painter.

			Even more startling, the late curator was involved in the Priory of Sion—a secret society whose members included Sir Isaac Newton, Victor Hugo, and Da Vinci—and he guarded a breathtaking historical secret. Unless Langdon and Neveu can decipher the labyrinthine puzzle—while avoiding the faceless adversary who shadows their every move—the explosive, ancient truth will be lost forever.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Interview with the Vampire',
        	'metai' => 2004,
        	'zanras' => 'siaubo',
        	'autorius' => 'Anne Rcie',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1380631642l/43763.jpg',
        	'apibudinimas' => 'Here are the confessions of a vampire. Hypnotic, shocking, and chillingly erotic, this is a novel of mesmerizing beauty and astonishing force—a story of danger and flight, of love and loss, of suspense and resolution, and of the extraordinary power of the senses. It is a novel only Anne Rice could write.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Fifty Shades of Grey',
        	'metai' => 2011,
        	'zanras' => 'romantika',
        	'autorius' => 'E.L. James',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1385207843l/10818853.jpg',
        	'apibudinimas' => 'When literature student Anastasia Steele goes to interview young entrepreneur Christian Grey, she encounters a man who is beautiful, brilliant, and intimidating. The unworldly, innocent Ana is startled to realize she wants this man and, despite his enigmatic reserve, finds she is desperate to get close to him. Unable to resist Ana’s quiet beauty, wit, and independent spirit, Grey admits he wants her, too—but on his own terms.
 
			Shocked yet thrilled by Grey’s singular erotic tastes, Ana hesitates. For all the trappings of success—his multinational businesses, his vast wealth, his loving family—Grey is a man tormented by demons and consumed by the need to control. When the couple embarks on a daring, passionately physical affair, Ana discovers Christian Grey’s secrets and explores her own dark desires.

			Erotic, amusing, and deeply moving, the Fifty Shades Trilogy is a tale that will obsess you, possess you, and stay with you forever.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Hopeless',
        	'metai' => 2012,
        	'zanras' => 'romantika',
        	'autorius' => 'Colleen Hoover',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1353489892l/15717943.jpg',
        	'apibudinimas' => 'Sometimes discovering the truth can leave you more hopeless than believing the lies…

			That’s what seventeen-year-old Sky realizes after she meets Dean Holder. A guy with a reputation that rivals her own and an uncanny ability to invoke feelings in her she’s never had before. He terrifies her and captivates her all in the span of just one encounter, and something about the way he makes her feel sparks buried memories from a past that she wishes could just stay buried.

			Sky struggles to keep him at a distance knowing he’s nothing but trouble, but Holder insists on learning everything about her. After finally caving to his unwavering pursuit, Sky soon finds that Holder isn’t at all who he’s been claiming to be. When the secrets he’s been keeping are finally revealed, every single facet of Sky’s life will change forever.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Guns of August',
        	'metai' => 2004,
        	'zanras' => 'istorinis',
        	'autorius' => 'Barbara W. Tuchman, Robert K. Massie',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1431760956l/11366.jpg',
        	'apibudinimas' => 'The Pulitzer Prize-winning classic about the outbreak of World War I

			Historian & Pulitzer Prize-winning author Barbara Tuchman has brought to life again the people and events that led up to WWI. With attention to fascinating detail, and an intense knowledge of her subject and its characters, she reveals just how the war started, why, and why it could have been stopped but wasn\'t. A classic historical survey of a time and a people we all need to know more about, THE GUNS OF AUGUST will not be forgotten. '

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Girl with the Dragon Tattoo',
        	'metai' => 2008,
        	'zanras' => 'mistinis',
        	'autorius' => ' Stieg Larsson, Reg Keeland',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1327868566l/2429135.jpg',
        	'apibudinimas' => 'Mikael Blomkvist, a once-respected financial journalist, watches his professional life rapidly crumble around him. Prospects appear bleak until an unexpected (and unsettling) offer to resurrect his name is extended by an old-school titan of Swedish industry. The catch—and there\'s always a catch—is that Blomkvist must first spend a year researching a mysterious disappearance that has remained unsolved for nearly four decades. With few other options, he accepts and enlists the help of investigator Lisbeth Salander, a misunderstood genius with a cache of authority issues. Little is as it seems in Larsson\'s novel, but there is at least one constant: you really don\'t want to mess with the girl with the dragon tattoo.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Easy',
        	'metai' => 2012,
        	'zanras' => 'romantika',
        	'autorius' => ' Tammara Webber',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1349370267l/16056408.jpg',
        	'apibudinimas' => 'When Jacqueline follows her longtime boyfriend to the college of his choice, the last thing she expects is a breakup two months into sophomore year. After two weeks in shock, she wakes up to her new reality: she\'s single, attending a state university instead of a music conservatory, ignored by her former circle of friends, and failing a class for the first time in her life.

			Leaving a party alone, Jacqueline is assaulted by her ex\'s frat brother. Rescued by a stranger who seems to be in the right place at the right time, she wants nothing more than to forget the attack and that night - but her savior, Lucas, sits on the back row of her econ class, sketching in a notebook and staring at her. Her friends nominate him to be the perfect rebound.

			When her attacker turns stalker, Jacqueline has a choice: crumple in defeat or learn to fight back. Lucas remains protective, but he\'s hiding secrets of his own. Suddenly appearances are everything, and knowing who to trust is anything but easy.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Name of the Wind ',
        	'metai' => 2007,
        	'zanras' => 'fantastinis',
        	'autorius' => 'Patrick Rothfuss',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1472068073l/186074.jpg',
        	'apibudinimas' => 'Told in Kvothe\'s own voice, this is the tale of the magically gifted young man who grows to be the most notorious wizard his world has ever seen. 

			The intimate narrative of his childhood in a troupe of traveling players, his years spent as a near-feral orphan in a crime-ridden city, his daringly brazen yet successful bid to enter a legendary school of magic, and his life as a fugitive after the murder of a king form a gripping coming-of-age story unrivaled in recent literature. 

			A high-action story written with a poet\'s hand, The Name of the Wind is a masterpiece that will transport readers into the body and mind of a wizard.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Communist Manifesto',
        	'metai' => 2002,
        	'zanras' => 'istorinis',
        	'autorius' => ' Karl Marx, Friedrich Engels, Gareth Stedman Jones',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1420003664l/30474.jpg',
        	'apibudinimas' => 'Marx and Engels\'s revolutionary summons to the working classes, The Communist Manifesto is one of the most important political theories ever formulated. After four years of collaboration, they produced an incisive account of their idea of Communism, in which they envisage a society without classes, private property or a state, arguing that the exploitation of industrial workers will eventually lead to a revolution in which Capitalism is overthrown. This vision provided the theoretical basis of political systems in Russia, China, Cuba and Eastern Europe, affecting the lives of millions. The Communist Manifesto still remains a landmark text: a work that continues to influence and provoke debate on capitalism and class.

			Gareth Stedman Jones\'s extensive and scholarly introduction provides an unique assessment of the place of The Communist Manifesto in history, and its continuing relevance as a depiction of global capitalism. This edition reproduces Samuel Moore\'s translation of 1888 and contains a guide to further reading, notes and an index.

			Karl Marx (1818-1883) was born in Trier, Germany and studied law at Bonn and Berlin. He settled in London, where he studied economics and wrote the first volume of his major work, Das Kapital (1867, with two further volumes in 1884 and 1894). He is buried in Highgate Cemetery, London.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Art of War',
        	'metai' => 2005,
        	'zanras' => 'istorinis',
        	'autorius' => ' Sun Tzu, Thomas Cleary (Translator)',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1453417993l/10534.jpg',
        	'apibudinimas' => 'Conflict is an inevitable part of life, according to this ancient Chinese classic of strategy, but everything necessary to deal with conflict wisely, honorably, victoriously, is already present within us. Compiled more than two thousand years ago by a mysterious warrior-philosopher, The Art of War is still perhaps the most prestigious and influential book of strategy in the world, as eagerly studied in Asia by modern politicians and executives as it has been by military leaders since ancient times. As a study of the anatomy of organizations in conflict, The Art of War applies to competition and conflict in general, on every level from the interpersonal to the international. Its aim is invincibility, victory without battle, and unassailable strength through understanding the physics, politics, and psychology of conflict.

			(Original publication date was circa 500 BCE.)

			For an outstanding Kindle edition, please refer to The Art of War by Sun Tzu - Classic Collector\'s Edition (Shawn Conners, Barton Williams, Lionel Giles, Sian Kim)'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'A Game of Thrones',
        	'metai' => 2005,
        	'zanras' => 'fantastinis',
        	'autorius' => 'George R.R. Martin',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1436732693l/13496.jpg',
        	'apibudinimas' => 'Summers span decades. Winter can last a lifetime. And the struggle for the Iron Throne has begun.

			As Warden of the north, Lord Eddard Stark counts it a curse when King Robert bestows on him the office of the Hand. His honour weighs him down at court where a true man does what he will, not what he must … and a dead enemy is a thing of beauty.

			The old gods have no power in the south, Stark’s family is split and there is treachery at court. Worse, the vengeance-mad heir of the deposed Dragon King has grown to maturity in exile in the Free Cities. He claims the Iron Throne.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Hobbit',
        	'metai' => 2002,
        	'zanras' => 'jaunimui',
        	'autorius' => 'J.R.R. Tolkien',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1372847500l/5907.jpg',
        	'apibudinimas' => 'In a hole in the ground there lived a hobbit. Not a nasty, dirty, wet hole, filled with the ends of worms and an oozy smell, nor yet a dry, bare, sandy hole with nothing in it to sit down on or to eat: it was a hobbit-hole, and that means comfort.

			Written for J.R.R. Tolkien’s own children, The Hobbit met with instant critical acclaim when it was first published in 1937. Now recognized as a timeless classic, this introduction to the hobbit Bilbo Baggins, the wizard Gandalf, Gollum, and the spectacular world of Middle-earth recounts of the adventures of a reluctant hero, a powerful and dangerous ring, and the cruel dragon Smaug the Magnificent. The text in this 372-page paperback edition is based on that first published in Great Britain by Collins Modern Classics (1998), and includes a note on the text by Douglas A. Anderson (2001). Unforgettable!'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Halfway to the Grave',
        	'metai' => 2007,
        	'zanras' => 'siaubo',
        	'autorius' => 'Jeaniene Frost ',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1373855613l/1421990.jpg',
        	'apibudinimas' => 'Half-vampire Catherine Crawfield is going after the undead with a vengeance, hoping that one of these deadbeats is her father - the one responsible for ruining her mother\'s life. Then she\'s captured by Bones, a vampire bounty hunter, and is forced into an unholy partnership.

			In exchange for finding her father, Cat agrees to train with the sexy night stalker until her battle reflexes are as sharp as his fangs. She\'s amazed she doesn\'t end up as his dinner - are there actually good vampires? Pretty soon Bones will have her convinced that being half-dead doesn\t have to be all bad. But before she can enjoy her newfound status as kick-ass demon hunter, Cat and Bones are pursued by a group of killers. Now Cat will have to choose a side . . . and Bones is turning out to be as tempting as any man with a heartbeat.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Angels & Demons',
        	'metai' => 2006,
        	'zanras' => 'fantastinis',
        	'autorius' => 'Dan Brown',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1303390735l/960.jpg',
        	'apibudinimas' => 'When world-renowned Harvard symbologist Robert Langdon is summoned to a Swiss research facility to analyze a mysterious symbol—seared into the chest of a murdered physicist—he discovers evidence of the unimaginable: the resurgence of an ancient secret brotherhood known as the Illuminati ... the most powerful underground organization ever to walk the earth. The Illuminati has now surfaced to carry out the final phase of its legendary vendetta against its most hated enemy—the Catholic Church. 

			Langdon’s worst fears are confirmed on the eve of the holy conclave, when a messenger of the Illuminati announces they have hidden an unstoppable time bomb at the very heart of Vatican City. With the countdown under way, Langdon jets to Rome to join forces with Vittoria Vetra, a beautiful and mysterious Italian scientist, to assist the Vatican in a desperate bid for survival. 

			Embarking on a frantic hunt through sealed crypts, dangerous catacombs, deserted cathedrals, and even the most secretive vault on earth, Langdon and Vetra follow a 400-year-old trail of ancient symbols that snakes across Rome toward the long-forgotten Illuminati lair ... a clandestine location that contains the only hope for Vatican salvation.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Shutter Island',
        	'metai' => 2004,
        	'zanras' => 'trileris',
        	'autorius' => 'Dennis Lehane',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1329269081l/21686.jpg',
        	'apibudinimas' => 'The year is 1954. U.S. Marshal Teddy Daniels and his new -partner, Chuck Aule, have come to Shutter Island, home of Ashecliffe Hospital for the Criminally Insane, to investigate the disappearance of a patient. Multiple-murderess Rachel Solando is loose somewhere on this barren island, despite having been kept in a locked cell under constant surveillance. As a killer hurricane bears relentlessly down on them, a strange case takes on even darker, more sinister shades--with hints of radical experimentation, horrifying surgeries, and lethal countermoves made in the cause of a covert shadow war. No one is going to escape Shutter Island unscathed, because nothing at Ashecliffe Hospital is remotely what it seems'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Mystic River',
        	'metai' => 2001,
        	'zanras' => 'mistinis',
        	'autorius' => 'Dennis Lehane',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1407109549l/21671.jpg',
        	'apibudinimas' => 'When they were children, Sean Devine, Jimmy Marcus, and Dave Boyle were friends. But then a strange car pulled up to their street. One boy got into the car, two did not, and something terrible happened -- something that ended their friendship and changed all three boys forever. 

			Twenty-five years later, Sean is a homicide detective. Jimmy is an ex-con who owns a corner store. And Dave is trying to hold his marriage together and keep his demons at bay -- demons that urge him to do terrible things. When Jimmy\'s daughter is found murdered, Sean is assigned to the case. His investigation brings him into conflict with Jimmy, who finds his old criminal impulses tempt him to solve the crime with brutal justice. And then there is Dave, who came home the night Jimmy\'s daughter died covered in someone else\'s blood. 

			A tense and unnerving psychological thriller, Mystic River is also an epic novel of love and loyalty, faith and family, in which people irrevocably marked by the past find themselves on a collision course with the darkest truths of their own hidden selves.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Wealth of Nations',
        	'metai' => 2003,
        	'zanras' => 'istorinis',
        	'autorius' => 'Adam Smith',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1348433328l/25698.jpg',
        	'apibudinimas' => 'An Inquiry into the Nature & Causes of the Wealth of Nations influenced a broad range of thinkers from David Ricardo to Karl Marx. Smith stresses the importance of the division of labor to economic progress. Opposing mercantilist monopolism, he offers a theoretical & historical case for free trade. 
			Five editions appeared before his 1790 death: 1776, 1778, 1784, 1786 & 1789. Edwin Cannan\'s team collated the 1st five. The differences were published with a 6th edition in 1904. They found numerous minor differences between the 1st & 2nd editions, both of which were published in two volumes. Differences between the 2nd & 3rd editions are major. Smith annexed these 1st two editions with the 1784 publication of Additions & Corrections to the 1st & 2nd Editions of Dr Adam Smith’s Inquiry into the Nature & Causes of the Wealth of Nations. He also published a 3-volume 3rd edition, incorporating Additions & Corrections & the 1st index. Additions & Corrections included entirely new sections. A 4th edition of 1786 had only slight differences from the 3rd. Smith notes in the opening Advertisement, "I have made no alterations of any kind." Cannan notes trivial differences between the 4th & 5th editions— misprints being removed from the 4th, different misprints being introduced.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Maltese Falcon',
        	'metai' => 2005,
        	'zanras' => 'mistinis',
        	'autorius' => ' Dashiell Hammett',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1306421260l/29999.jpg',
        	'apibudinimas' => 'Sam Spade is hired by the fragrant Miss Wonderley to track down her sister, who has eloped with a louse called Floyd Thursby. But Miss Wonderley is in fact the beautiful and treacherous Brigid O\'Shaughnessy, and when Spade\'s partner Miles Archer is shot while on Thursby\'s trail, Spade finds himself both hunter and hunted: can he track down the jewel-encrusted bird, a treasure worth killing for, before the Fat Man finds him?'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'One Flew Over the Cuckoo\'s Nest',
        	'metai' => 1963,
        	'zanras' => 'fantastinis',
        	'autorius' => 'Ken Kesey',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1485308778l/332613.jpg',
        	'apibudinimas' => '"In this classic of the 1960s, Ken Kesey\'s hero is Randle Patrick McMurphy, a boisterous, brawling, fun-loving rebel who swaggers into the world of a mental hospital and takes over. A lusty, life-affirming fighter, McMurphy rallies the other patients around him by challenging the dictatorship of Nurse Ratched. He promotes gambling in the ward, smuggles in wine and women, and openly defies the rules at every turn. But this defiance, which starts as a sport, soon develops into a grim struggle, an all-out war between two relentless opponents: Nurse Ratched, back by the full power of authority, and McMurphy, who has only his own indomitable will. What happens when Nurse Ratched uses her ultimate weapon against McMurphy provides the story\'s shocking climax.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Clockwork Angel',
        	'metai' => 2010,
        	'zanras' => 'romantika',
        	'autorius' => 'Cassandra Clare',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1454962884l/7171637.jpg',
        	'apibudinimas' => 'In a time when Shadowhunters are barely winning the fight against the forces of darkness, one battle will change the course of history forever. Welcome to the Infernal Devices trilogy, a stunning and dangerous prequel to the New York Times bestselling Mortal Instruments series.

			The year is 1878. Tessa Gray descends into London’s dark supernatural underworld in search of her missing brother. She soon discovers that her only allies are the demon-slaying Shadowhunters—including Will and Jem, the mysterious boys she is attracted to. Soon they find themselves up against the Pandemonium Club, a secret organization of vampires, demons, warlocks, and humans. Equipped with a magical army of unstoppable clockwork creatures, the Club is out to rule the British Empire, and only Tessa and her allies can stop them...'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Phantom of the Opera',
        	'metai' => 1987,
        	'zanras' => 'siaubo',
        	'autorius' => ' Gaston Leroux, Alexander Teixeira de Mattos (Translator)',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1327867727l/480204.jpg',
        	'apibudinimas' => 'First published in French as a serial in 1909, "The Phantom of the Opera" is a riveting story that revolves around the young, Swedish Christine Daaé. Her father, a famous musician, dies, and she is raised in the Paris Opera House with his dying promise of a protective angel of music to guide her. After a time at the opera house, she begins hearing a voice, who eventually teaches her how to sing beautifully. All goes well until Christine\'s childhood friend Raoul comes to visit his parents, who are patrons of the opera, and he sees Christine when she begins successfully singing on the stage. The voice, who is the deformed, murderous \'ghost\' of the opera house named Erik, however, grows violent in his terrible jealousy, until Christine suddenly disappears. The phantom is in love, but it can only spell disaster. Leroux\'s work, with characters ranging from the spoiled prima donna Carlotta to the mysterious Persian from Erik\'s past, has been immortalized by memorable adaptations. Despite this, it remains a remarkable piece of Gothic horror literature in and of itself, deeper and darker than any version that follows.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Vampire Academy',
        	'metai' => 2013,
        	'zanras' => 'jaunimui',
        	'autorius' => 'Richelle Mead',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1381459853l/18660669.jpg',
        	'apibudinimas' => 'Lissa Dragomir is a Moroi princess: a mortal vampire with a rare gift for harnessing the earth\'s magic. She must be protected at all times from Strigoi; the fiercest vampires - the ones who never die. The powerful blend of human and vampire blood that flows through Rose Hathaway, Lissa\'s best friend, makes her a dhampir. Rose is dedicated to a dangerous life of protecting Lissa from the Strigoi, who are hell-bent on making Lissa one of them.

			After two years of freedom, Rose and Lissa are caught and dragged back to St. Vladimir\'s Academy, a school for vampire royalty and their guardians-to-be, hidden in the deep forests of Montana. But inside the iron gates, life is even more fraught with danger . . . and the Strigoi are always close by.

			Rose and Lissa must navigate their dangerous world, confront the temptations of forbidden love, and never once let their guard down, lest the evil undead make Lissa one of them forever . . .'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Some Girls Bite',
        	'metai' => 2009,
        	'zanras' => 'siaubo',
        	'autorius' => 'Chloe Neill',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1441402786l/4447622.jpg',
        	'apibudinimas' => 'They killed me. They healed me. They changed me.
			Sure, the life of a graduate student wasn’t exactly glamorous, but I was doing fine until Chicago’s vampires announced their existence to the world. When a rogue vampire attacked me, I was lucky he only got a sip. Another bloodsucker scared him off and decided the best way to save my life was to make me the walking undead.
			Now I’ve traded sweating over my thesis for learning to fit in at a Hyde Park mansion full of vamps loyal to Ethan “Lord o’ the Manor” Sullivan. Of course, as a tall, green-eyed,
			four-hundred-year-old vampire, he has centuries’ worth of charm, but unfortunately he expects my gratitude—and servitude. Right…
			But someone’s out to get me. Is it the rogue vampire who bit me? A vamp from a rival House? An angry mob bearing torches? 
			My initiation into Chicago’s nightlife may be the first skirmish in a war—and there will be blood.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Mein Kampf',
        	'metai' => 1971,
        	'zanras' => 'istorinis',
        	'autorius' => 'Adolf Hitler',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1395618385l/54270.jpg',
        	'apibudinimas' => 'Madman, tyrant, animal - history has given Adolf Hitler many names. In Mein Kampf (My Struggle), often called the Nazi bible, Hitler describes his life, frustrations, ideals, and dreams. Born to an impoverished couple in a small town in Austria, the young Adolf grew up with the fervent desire to become a painter. The death of his parents and outright rejection from art schools in Vienna forced him into underpaid work as a labourer. During the First World War, Hitler served in the infantry and was decorated for bravery. After the war, he became actively involved with socialist political groups and quickly rose to power, establishing himself as Chairman of the National Socialist German Worker\'s party. In 1924, Hitler led a coalition of nationalist groups in a bid to overthrow the Bavarian government in Munich. The infamous Munich "Beer-hall putsch" was unsuccessful, and Hitler was arrested. During the nine months he was in prison, an embittered and frustrated Hitler dictated a personal manifesto to his loyal follower Rudolph Hess. He vented his sentiments against communism and the Jewish people in this document, which was to become Mein Kampf, the controversial book that is seen as the blue-print for Hitler\'s political and military campaign. In Mein Kampf, Hitler describes his strategy for rebuilding Germany and conquering Europe. It is a glimpse into the mind of a man who destabilized world peace and pursued the genocide now known as the Holocaust. "... I believe today that my conduct is in accordance with the will of the Almighty Creator. In standing guard against the Jew I am defending the handiwork of the Lord"'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Thirteenth Tale',
        	'metai' => 2006,
        	'zanras' => 'mistinis',
        	'autorius' => 'Diane Setterfield',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1346267826l/40440.jpg',
        	'apibudinimas' => 'Biographer Margaret Lea returns one night to her apartment above her father’s antiquarian bookshop. On her steps she finds a letter. It is a hand-written request from one of Britain’s most prolific and well-loved novelists. Vida Winter, gravely ill, wants to recount her life story before it is too late, and she wants Margaret to be the one to capture her history. The request takes Margaret by surprise — she doesn’t know the author, nor has she read any of Miss Winter’s dozens of novels.

			Late one night while pondering whether to accept the task of recording Miss Winter’s personal story, Margaret begins to read her father’s rare copy of Miss Winter’s Thirteen Tales of Change and Desperation. She is spellbound by the stories and confused when she realizes the book only contains twelve stories. Where is the thirteenth tale? Intrigued, Margaret agrees to meet Miss Winter and act as her biographer.

			As Vida Winter unfolds her story, she shares with Margaret the dark family secrets that she has long kept hidden as she remembers her days at Angelfield, the now burnt-out estate that was her childhood home. Margaret carefully records Miss Winter’s account and finds herself more and more deeply immersed in the strange and troubling story. 

			Both women will have to confront their pasts and the weight of family secrets... and the ghosts that haunt them still.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Angel Experiment',
        	'metai' => 2006,
        	'zanras' => 'jaunimui',
        	'autorius' => 'James Patterson',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1339277875l/13152.jpg',
        	'apibudinimas' => 'Six unforgettable kids — with no families, no homes — are running for their lives. Max Ride and her best friends have the ability to fly. And that\'s just the beginning of their amazing powers. But they don\'t know where they come from, who\'s hunting them, why they are different from all other humans... and if they\'re meant to save mankind — or destroy it.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Mists of Avalon',
        	'metai' => 1984,
        	'zanras' => 'fantastinis',
        	'autorius' => 'Marion Zimmer Bradley',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1388857089l/402045.jpg',
        	'apibudinimas' => 'A Literary Guild Featured Alternate
			Here is the magical legend of King Arthur, vividly retold through the eyes and lives of the women who wielded power from behind the throne. A spellbinding novel, an extraordinary literary achievement, THE MISTS OF AVALON will stay with you for a long time to come....'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Woman in White',
        	'metai' => 2003,
        	'zanras' => 'mistinis',
        	'autorius' => 'Wilkie Collins, Matthew Sweet (Annotations)',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1295661017l/5890.jpg',
        	'apibudinimas' => '\'In one moment, every drop of blood in my body was brought to a stop... There, as if it had that moment sprung out of the earth, stood the figure of a solitary Woman, dressed from head to foot in white\'

			The Woman in White famously opens with Walter Hartright\'s eerie encounter on a moonlit London road. Engaged as a drawing master to the beautiful Laura Fairlie, Walter becomes embroiled in the sinister intrigues of Sir Percival Glyde and his \'charming\' friend Count Fosco, who has a taste for white mice, vanilla bonbons, and poison. Pursuing questions of identity and insanity along the paths and corridors of English country houses and the madhouse, The Woman in White is the first and most influential of the Victorian genre that combined Gothic horror with psychological realism.

			Matthew Sweet\'s introduction explores the phenomenon of Victorian \'sensation\' fiction, and discusses Wilkie Collins\'s biographical and societal influences. Included in this edition are appendices on theatrical adaptations of the novel and its serialisation history.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'I Am Legend and Other Stories',
        	'metai' => 1997,
        	'zanras' => 'trileris',
        	'autorius' => 'Richard Matheson',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1317791583l/547094.jpg',
        	'apibudinimas' => 'Robert Neville is the last living man on Earth...but he is not alone. Every other man, woman, and child on Earth has become a vampire, and they are all hungry for Neville\'s blood.

			By day, he is the hunter, stalking the sleeping undead through the abandoned ruins of civilization. By night, he barricades himself in his home and prays for dawn.

			How long can one man survive in a world of vampires?


			I am legend --
			Buried talents --
			The near departed --
			Prey --
			Witch war --
			Dance of the dead --
			Dress of white silk --
			Mad house --
			The funeral --
			From shadowed places --
			Person to person.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Charlotte\'s Web',
        	'metai' => 2001,
        	'zanras' => 'jaunimui',
        	'autorius' => 'E.B. White, Garth Williams (Illustrator), Rosemary Wells (Illustrations)',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1439632243l/24178.jpg',
        	'apibudinimas' => 'This beloved book by E. B. White, author of Stuart Little and The Trumpet of the Swan, is a classic of children\'s literature that is "just about perfect."
			Some Pig. Humble. Radiant. These are the words in Charlotte\'s Web, high up in Zuckerman\'s barn. Charlotte\'s spiderweb tells of her feelings for a little pig named Wilbur, who simply wants a friend. They also express the love of a girl named Fern, who saved Wilbur\'s life when he was born the runt of his litter.
			E. B. White\'s Newbery Honor Book is a tender novel of friendship, love, life, and death that will continue to be enjoyed by generations to come. This edition contains color illustrations by Garth Williams, the acclaimed illustrator of E.B. White\'s Stuart Little and Laura Ingalls Wilder\'s Little House series, among many other books.
			Supports the Common Core State Standards'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'How to Marry a Millionaire Vampire',
        	'metai' => 2005,
        	'zanras' => 'siaubo',
        	'autorius' => 'Karrelyn Sparks',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1343779854l/263179.jpg',
        	'apibudinimas' => 'Roman Draganesti is charming, handsome, rich...he\'s also a vampire. But this vampire just lost one of his fangs sinking his teeth into something he shouldn\'t have. Now he has one night to find a dentist before his natural healing abilities close the wound, leaving him a lop-sided eater for all eternity.

			Things aren\'t going well for Shanna Whelan, either. After witnessing a gruesome murder, she\'s next on the mob\'s hit list. And her career as a dentist appears to be on a downward spiral, because she\'s afraid of blood. When Roman rescues her from an assassination attempt, she wonders if she\'s found the one man who can keep her alive. Though the attraction between them is immediate and hot, can Shanna conquer her fear of blood to fix Roman\'s fang? And if she does, what will prevent Roman from using his fangs on her?'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Dark Is Rising',
        	'metai' => 2007,
        	'zanras' => 'mistinis',
        	'autorius' => 'Susan Cooper',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1349051230l/210329.jpg',
        	'apibudinimas' => '"When the Dark comes rising, six shall turn it back, three from the circle, three from the track; wood, bronze, iron; water, fire, stone; five will return, and one go alone.”

			With these mysterious words, Will Stanton discovers on his 11th birthday that he is no mere boy. He is the Sign-Seeker, last of the immortal Old Ones, destined to battle the powers of evil that trouble the land. His task is monumental: he must find and guard the six great Signs of the Light, which, when joined, will create a force strong enough to match and perhaps overcome that of the Dark. Embarking on this endeavor is dangerous as well as deeply rewarding; Will must work within a continuum of time and space much broader than he ever imagined.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Memoirs of a Geisha',
        	'metai' => 2005,
        	'zanras' => 'istorinis',
        	'autorius' => 'Arthur Golden',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1388367666l/930.jpg',
        	'apibudinimas' => 'A literary sensation and runaway bestseller, this brilliant debut novel presents with seamless authenticity and exquisite lyricism the true confessions of one of Japan\'s most celebrated geisha.

			In Memoirs of a Geisha, we enter a world where appearances are paramount; where a girl\'s virginity is auctioned to the highest bidder; where women are trained to beguile the most powerful men; and where love is scorned as illusion. It is a unique and triumphant work of fiction - at once romantic, erotic, suspenseful - and completely unforgettable.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'A Quick Bite',
        	'metai' => 2005,
        	'zanras' => 'siaubo',
        	'autorius' => 'Lynsay Sands',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1410129015l/38568.jpg',
        	'apibudinimas' => 'Lissianna has been spending her centuries pining for Mr. Right, not just a quick snack, and this sexy guy she finds in her bed looks like he might be a candidate. But there\'s another, more pressing issue: her tendency to faint at the sight of blood...an especially annoying quirk for a vampire. Of course it doesn\'t hurt that this man has a delicious-looking neck. What kind of cold-blooded vampire woman could resist a bite of that?

			Dr. Gregory Hewitt recovers from the shock of waking up in a stranger\'s bedroom pretty quickly - once he sees a gorgeous woman about to treat him to a wild night of passion. But is it possible for the good doctor to find true love with a vampire vixen, or will he be just a good meal? That\'s a question Dr. Greg might be willing to sink his teeth into...if he can just get Lissianna to bite.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Full Moon Rising',
        	'metai' => 2006,
        	'zanras' => 'siaubo',
        	'autorius' => 'Keri Arthur',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1388347803l/172764.jpg',
        	'apibudinimas' => 'In this exciting debut, author Keri Arthur explodes onto the supernatural scene with a sexy, sensuous tale of intrigue and suspense set in a world where legends walk and the shady paths of the underworld are far more sinister than anyone envisioned.

			A rare hybrid of vampire and werewolf, Riley Jenson and her twin brother, Rhoan, work for Melbourne’s Directorate of Other Races, an organization created to police the supernatural races–and protect humans from their depredations. While Rhoan is an exalted guardian, a.k.a. assassin, Riley is merely an office worker–until her brother goes missing on one of his missions. The timing couldn’t be worse. More werewolf than vampire, Riley is vulnerable to the moon heat, the weeklong period before the full moon, when her need to mate becomes all-consuming.…

			Luckily Riley has two willing partners to satisfy her every need. But she will have to control her urges if she’s going to find her brother….Easier said than done as the city pulses with frenzied desire, and Riley is confronted with a very powerful–and delectably naked–vamp who raises her temperature like never before.

			In matters carnal, Riley has met her match. But in matters criminal, she must follow her instincts not only to find her brother but to stop an unholy harvest. For someone is doing some shifty cloning in an attempt to produce the ultimate warrior–by tapping into the genome of nonhumans like Rhoan. Now Riley knows just how dangerous the world is for her kind–and just how much it needs her.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Bone Collector',
        	'metai' => 1998,
        	'zanras' => 'mistinis',
        	'autorius' => 'Jeffery Deaver',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1437538512l/2373.jpg',
        	'apibudinimas' => 'Lincoln Rhyme was once a brilliant criminologist, a genius in the field of forensics -- until an accident left him physically and emotionally shattered. But now a diabolical killer is challenging Rhyme to a terrifying and ingenious duel of wits. With police detective Amelia Sachs by his side, Rhyme must follow a labyrinth of clues that reaches back to a dark chapter in New York City\'s past -- and reach further into the darkness of the mind of a madman who won\'t stop until he has stripped life down to the bone.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Thirteen Reasons Why',
        	'metai' => 2007,
        	'zanras' => 'jaunimui',
        	'autorius' => 'Jay Asher',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1333822506l/1217100.jpg',
        	'apibudinimas' => 'Clay Jensen returns home from school to find a mysterious box with his name on it lying on his porch. Inside he discovers thirteen cassette tapes recorded by Hannah Baker, his classmate and crush who committed suicide two weeks earlier.
			On tape, Hannah explains that there are thirteen reasons why she decided to end her life. Clay is one of them. If he listens, he\'ll find out how he made the list.
			Through Hannah and Clay\'s dual narratives, debut author Jay Asher weaves an intricate and heartrending story of confusion and desperation that will deeply affect teen readers.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Kite Runner',
        	'metai' => 2004,
        	'zanras' => 'trileris',
        	'autorius' => 'Khaled Hosseini',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1484565687l/77203.jpg',
        	'apibudinimas' => '“It may be unfair, but what happens in a few days, sometimes even a single day, can change the course of a whole lifetime." 

			Amir is the son of a wealthy Kabul merchant, a member of the ruling caste of Pashtuns. Hassan, his servant and constant companion, is a Hazara, a despised and impoverished caste. Their uncommon bond is torn by Amir\'s choice to abandon his friend amidst the increasing ethnic, religious, and political tensions of the dying years of the Afghan monarchy, wrenching them far apart. But so strong is the bond between the two boys that Amir journeys back to a distant world, to try to right past wrongs against the only true friend he ever had.

			The unforgettable, heartbreaking story of the unlikely friendship between a wealthy boy and the son of his father’s servant, The Kite Runner is a beautifully crafted novel set in a country that is in the process of being destroyed. It is about the power of reading, the price of betrayal, and the possibility of redemption; and an exploration of the power of fathers over sons—their love, their sacrifices, their lies.

			A sweeping story of family, love, and friendship told against the devastating backdrop of the history of Afghanistan over the last thirty years, The Kite Runner is an unusual and powerful novel that has become a beloved, one-of-a-kind classic.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Black Prism',
        	'metai' => 2010,
        	'zanras' => 'mistinis',
        	'autorius' => 'Brent Weeks',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1327921884l/7165300.jpg',
        	'apibudinimas' => 'Gavin Guile is the Prism, the most powerful man in the world. He is high priest and emperor, a man whose power, wit, and charm are all that preserves a tenuous peace. But Prisms never last, and Guile knows exactly how long he has left to live: Five years to achieve five impossible goals. 

			But when Guile discovers he has a son, born in a far kingdom after the war that put him in power, he must decide how much he\'s willing to pay to protect a secret that could tear his world apart.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Gil\'s All Fright Diner',
        	'metai' => 2006,
        	'zanras' => 'siaubo',
        	'autorius' => 'A. Lee. Martinez',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1386921255l/225606.jpg',
        	'apibudinimas' => 'Bloodier than Fried Green Tomatoes!
			Funnier than The Texas Chainsaw Massacre!
			Welcome to Gil\'s All Night Diner, where zombie attacks are a regular occurrence and you never know what might be lurking in the freezer. . . .
			Duke and Earl are just passing through Rockwood county in their pick-up truck when they stop at the diner for a quick bite to eat. They aren\'t planning to stick around--until Loretta, the eatery\'s owner, offers them one hundred dollars to take care of her zombie problem. Given that Duke is a werewolf and Earl\'s a vampire, this looks right up their alley.
			But the shambling dead are just the tip of a particularly spiky iceberg. Seems someone\'s out to drive Loretta from the diner, and more than willing to raise a little hell on earth if that\'s what it takes. Before Duke and Earl get to the bottom of the diner\'s troubles, they\'ll run into such otherworldly complications as undead cattle, an amorous ghost, a jailbait sorceress, and the terrifying occult power of pig Latin.
			And maybe--just maybe--the End of the World, too.
			Gory, sexy, and flat-out hilarious, Gil\'s All Fright Diner will tickle your funny bone--before ripping it out of its socket!'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Count of Monte Cristo',
        	'metai' => 2003,
        	'zanras' => 'mistinis',
        	'autorius' => 'Alexandre Dumas, Robin Buss (Translator)',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1309203605l/7126.jpg',
        	'apibudinimas' => '\'On what slender threads do life and fortune hang\'

			Thrown in prison for a crime he has not committed, Edmond Dantès is confined to the grim fortress of If. There he learns of a great hoard of treasure hidden on the Isle of Monte Cristo and he becomes determined not only to escape, but also to unearth the treasure and use it to plot the destruction of the three men responsible for his incarceration. Dumas\' epic tale of suffering and retribution, inspired by a real-life case of wrongful imprisonment, was a huge popular success when it was first serialised in the 1840s.

			Robin Buss\' lively translation is complete and unabridged, and remains faithful to the style of Dumas\' original. This edition includes an introduction, explanatory notes and suggestions for further reading.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Sisterhood of the Traveling Pants',
        	'metai' => 2001,
        	'zanras' => 'jaunimui',
        	'autorius' => 'Ann Brashares',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1461611233l/452306.jpg',
        	'apibudinimas' => 'Carmen got the jeans at a thrift shop. They didn’t look all that great: they were worn, dirty, and speckled with bleach. On the night before she and her friends part for the summer, Carmen decides to toss them. But Tibby says they’re great. She\'d love to have them. Lena and Bridget also think they’re fabulous. Lena decides that they should all try them on. Whoever they fit best will get them. Nobody knows why, but the pants fit everyone perfectly. Even Carmen (who never thinks she looks good in anything) thinks she looks good in the pants. Over a few bags of cheese puffs, they decide to form a sisterhood and take the vow of the Sisterhood of the Traveling Pants . . . the next morning, they say good-bye. And then the journey of the pants — and the most memorable summer of their lives — begins.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'The Firm',
        	'metai' => 2000,
        	'zanras' => 'trileris',
        	'autorius' => 'John Grisham',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1418465200l/5358.jpg',
        	'apibudinimas' => 'Mitch McDeere is young, intelligent and ambitious. When he gets a job with the law firm of Bendini, Lambert, & Locke it seems to be the path to money and power. But soon Mitch finds that the firm is listening to all his phone calls, and the FBI wants to speak to him. Money and power has a price, and it could be Mitch\'s life.'

		]);

		DB::table('books')->insert([

        	'pavadinimas' => 'Fingersmith',
        	'metai' => 2002,
        	'zanras' => 'trileris',
        	'autorius' => 'Sarah Waters',
        	'nuotrauka' => 'https://images.gr-assets.com/books/1406506683l/8913370.jpg',
        	'apibudinimas' => 'Sue Trinder is an orphan, left as an infant in the care of Mrs. Sucksby, a "baby farmer," who raised her with unusual tenderness, as if Sue were her own. Mrs. Sucksby’s household, with its fussy babies calmed with doses of gin, also hosts a transient family of petty thieves—fingersmiths—for whom this house in the heart of a mean London slum is home.

			One day, the most beloved thief of all arrives—Gentleman, an elegant con man, who carries with him an enticing proposition for Sue: If she wins a position as the maid to Maud Lilly, a naïve gentlewoman, and aids Gentleman in her seduction, then they will all share in Maud’s vast inheritance. Once the inheritance is secured, Maud will be disposed of—passed off as mad, and made to live out the rest of her days in a lunatic asylum.

			With dreams of paying back the kindness of her adopted family, Sue agrees to the plan. Once in, however, Sue begins to pity her helpless mark and care for Maud Lilly in unexpected ways...But no one and nothing is as it seems in this Dickensian novel of thrills and reversals.'

		]);

    }
}