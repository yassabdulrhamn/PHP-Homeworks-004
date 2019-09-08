var Database = [
	//South Korea database:
	['Lotte Super Tower Hotel',
	'Jeju Dream Hotel Tower',
	'Mohegan Sun Gateway Entertainment Resort',
	'MorThe skyscraper will be 555 metres, 1,821 feet tall and have 112 floors. Once completed, the Lotte Super Tower will be the second highest building on the Korean peninsula and the fourth highest building in the world.The Tower and will offer Seoulians mixed-use areas such as shops, apartments, offices and a luxury hotel.',
	'The view tower and the gallery open up themselves to the public and contributes district cultural network.Greenland was one of the partners with James Packer’s Crown Resorts that narrowly lost a bid to build a multi-billion dollar casino complex at Queen’s Wharf in Brisbane, Australia.',
	'Mohegan Sun’s multi-phase development project named Project Inspire is expected to include, but not be limited to the following features: Three-tower luxury hotel complex with 1,350 five star and six star guest rooms Over 20,000 square meters of the most sought after luxury retail brands in the world and over 20 food and beverage concepts.',
	'Lotte Super Tower Hotel.jpg',
	'Jeju Dream Hotel Tower.jpg',
	'Mohegan Sun Gateway Entertainment Resort.jpg',
	'sk.jpg'],
	//England database:
	['London Crossrail Project ',
	'Sellafield Nuclear Site, England',
	'The Millennium Dome',
	' The world\'s first underground continues to grow, adding 26 miles of tunnel connecting 40 stations. The estimated cost of construction is $23 billion. The project is scheduled for completion in phases, with the first new track going into service in 2018 and all remaining tracks in service by 2020',
	'Covering over 700 acres, this is the U.K.\'s primary nuclear-fuel reprocessing facility. with construction costs exceeding $15 billion. One of its primary activities is the reprocessing of Magnox, a nuclear fuel, from UK nuclear power stations. Not surprisingly, the site has its detractors, among them New Scientist, an anti-nuclear research publication, which has claimed that "huge pools of mystery sludge" and other hazards are potentially explosive, a claim that Sellafield\'s management disputes.',
	'Millennium Dome, official name The O2, massive construction project and tourist attraction in Greenwich, London, England. It was initiated to house an exhibition for the approach of the 21st century and the 3rd millennium ce (the official start of which was January 1, 2001). The central structure is the largest dome in the world, with nearly twice the area of the former record holder, the Georgia Dome (in Atlanta, Georgia, U.S.). Its building site skirts the prime meridian (0° longitude) along the River Thames at the northern end of the Greenwich Peninsula.',
	'London Crossrail Project.jpg',
	'Sellafield Nuclear Site, England.jpg',
	'The Millennium Dome.jpg',
	'uk.jpg'],
	//China database:
	['South-to-North Water Transfer Project, China ',
	'Beijing Airport, China',
	'Three Gorges Dam, China',
	'The North of China is home to almost 50 percent of China\'s population but has only about 20 percent of the country\'s water resources. To remedy this imbalance, China has funded construction of three huge canals, each more than 600 miles long and carrying water to the North from China\'s three largest rivers. The project has a 48-year construction schedule. When completed it will supply 44 billion cubic meters of water each year.',
	'Beijing International Airport will eventually surpass Dubai\'s Al Maktoum Airport in cost, total square miles, and passenger and plane capacity. The airport\'s first phase was completed in time for the 2008 Olympiad. Further expansion is scheduled for completion by 2025. Terminal 1, designed by Zaha Hadid, incorporates a number sustainable design concepts in a futuristic building envelope.',
	'The world\'s largest dam is a mile and a half long and about 60 stories high. The $59 billion Yangtze River project was completed and put into service in 2003. Most extremely large construction projects have their detractors, but Three Gorges has been particularly criticized for displacing about 1.5 million persons and destroying hundreds of miles of viable farmland.  Its electrical generation capacity is more than eight times greater than Hoover Dam, but still supplies only two or three percent of China\'s 2016 energy needs.',
	'South-to-North Water Transfer Project, China.jpg',
	'Beijing Airport, China.jpg',
	'Three Gorges Dam, China.jpg',
	'ch.jpg'],
	//Saudi Arabia database:
	['ubail II, Saudi Arabia',
	'King Abdullah’s Economic City ',
	'King Abdullah Financial Center',
	'This 22-year long industrial city project began its second phase in 2014 with an $11 billion expansion.When completed, it will comprise at least 100 industrial plants, an 800,000 cubic meter desalination plant, miles of railways, roads and highways, and an oil refinery producing at least 350,000 barrels per day. The entire project is slated to be finished in 2024.',
	'King Abdullah’s Economic City is considered as the first city subject to the Kingdom’s free ownership system.This project is run by both EMAAR Economic City, a company subject to the Saudi government’s control and Dubai’s EMAAR which is considered the biggest real estate company in the emirate.It includes establishing a deep sea water port, a 55 sq. km logistics center, a sporting and entertainment center and more 6500 residential estates. ',
	'It is expected that King Abdullah’s financial center, perceived to be the Saudi counterpart to Dubai International Financial Center, to attract banks and financial service companies, financial auditors and lawyers, the Saudi financial market (Tadawul) and the Capital Market Authority to one place.  ',
	'ubail II, Saudi Arabia.jpg',
	'King Abdullah Economic City.jpg',
	'King Abdullah Financial Center.jpg',
	'SA.png'],
	//Dubai database:
	['Al Maktoum Airport, Dubai',
	'Dubailand, Dubai ',
	'Dubai amusement parks',
	'Other airports do not prepare you for the scale of Dubai\'s Al Maktoum International Airport, which extends over more than 21 square miles. Scheduled for completion in 2018, the facility is designed to handle 200 wide-body aircraft at a time. The airport\'s second expansion phase alone has an estimated cost of more than $32 billion.',
	'Walt Disney World can fit three times inside this complex. With 278 square kilometers, the $64 billion Dubailand will have six parts: theme parks, sports venues, eco-tourism, health facilities, science attractions, and hotels. It will also have the world\'s largest hotel with 6,500 rooms and a 10 million square foot mall. The project is scheduled for completion is 2025',
	'Dubai Parks and Resorts remains on track for an October 2016 completion date with $1.03 billion cumulative project expenditure at the end of June 2015.The resort will feature three theme parks including Motiongate Dubai, Bollywood Parks and Legoland Dubai – as well as a 60,000sq ft stage that will hold Bollywood-themed performances.',
	'dubaiairport.jpg',
	'Dubailand, Dubai.jpg',
	'Dubai amusement parks.jpg',
	'ue.gif'],
	//the elements:
	[document.getElementById('projectID1'),
	document.getElementById('projectID2'),
	document.getElementById('projectID3'),
	document.getElementById('projectP1'),
	document.getElementById('projectP2'),
	document.getElementById('projectP3'),
	document.getElementById('projectImg1'),
	document.getElementById('projectImg2'),
	document.getElementById('projectImg3'),
	document.getElementById('projectImg4')]
];
function projects(X)
{
	for (var i = 0; i < 10; i++) {
  
	if(i<6)
		{
			 Database[5][i].innerHTML=Database[X][i];
		}
	else
		{
			 Database[5][i].src=Database[X][i];
		}
} 
}
