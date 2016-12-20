<?php if (!defined('NEOFRAG_CMS')) exit;
/**************************************************************************
Copyright © 2015 Michaël BILCOT & Jérémy VALENTIN

This file is part of NeoFrag.

NeoFrag is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

NeoFrag is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License
along with NeoFrag. If not, see <http://www.gnu.org/licenses/>.
**************************************************************************/

function user_agent($user_agent)
{
	NeoFrag::loader()->js('neofrag.user-agent');
	return '<img src="'.image('ajax-loader.gif').'" data-user-agent="'.$user_agent.'" alt="" />';
}

function is_crawler()
{
	//https://github.com/JayBizzle/Crawler-Detect
	$crawlers = [
		'007ac9 Crawler',
		'008/',
		'360Spider',
		'A6-Indexer',
		'ABACHOBot',
		'AbiLogicBot',
		'Aboundex',
		'Accoona-AI-Agent',
		'acoon',
		'AddSugarSpiderBot',
		'AddThis',
		'Adidxbot',
		'ADmantX',
		'AdvBot',
		'ahrefsbot',
		'aihitbot',
		'Airmail',
		'AISearchBot',
		'Anemone',
		'antibot',
		'AnyApexBot',
		'Applebot',
		'arabot',
		'Arachmo',
		'archive-com',
		'archive.org_bot',
		'B-l-i-t-z-B-O-T',
		'backlinkcrawler',
		'baiduspider',
		'BecomeBot',
		'BeslistBot',
		'bibnum.bnf',
		'biglotron',
		'BillyBobBot',
		'Bimbot',
		'bingbot',
		'binlar',
		'blekkobot',
		'blexbot',
		'BlitzBOT',
		'bl.uk_lddc_bot',
		'bnf.fr_bot',
		'boitho.com-dc',
		'boitho.com-robot',
		'brainobot',
		'btbot',
		'BUbiNG',
		'Butterfly/',
		'buzzbot',
		'careerbot',
		'CatchBot',
		'CC Metadata Scaper',
		'ccbot',
		'Cerberian Drtrs',
		'changedetection',
		'Charlotte',
		'CloudFlare-AlwaysOnline',
		'citeseerxbot',
		'coccoc',
		'classbot',
		'Commons-HttpClient',
		'content crawler spider',
		'Content Crawler',
		'convera',
		'ConveraCrawler',
		'CoPubbot',
		'cosmos',
		'Covario-IDS',
		'CrawlBot',
		'crawler4j',
		'CrystalSemanticsBot',
		'curl',
		'cXensebot',
		'CyberPatrol',
		'DataparkSearch',
		'dataprovider',
		'DiamondBot',
		'Digg',
		'discobot',
		'DomainAppender',
		'domaincrawler',
		'Domain Re-Animator Bot',
		'dotbot',
		'drupact',
		'DuckDuckBot',
		'EARTHCOM',
		'EasouSpider',
		'ec2linkfinder',
		'edisterbot',
		'ElectricMonk',
		'elisabot',
		'emailmarketingrobot',
		'EmeraldShield.com WebBot',
		'envolk[ITS]spider',
		'EsperanzaBot',
		'europarchive.org',
		'exabot',
		'ezooms',
		'facebookexternalhit',
		'Facebot',
		'FAST Enteprise Crawler',
		'FAST Enterprise Crawler',
		'FAST-WebCrawler',
		'FDSE robot',
		'Feedfetcher-Google',
		'FindLinks',
		'findlink',
		'findthatfile',
		'findxbot',
		'Flamingo_SearchEngine',
		'fluffy',
		'fr-crawler',
		'FRCrawler',
		'FurlBot',
		'FyberSpider',
		'g00g1e.net',
		'GigablastOpenSource',
		'grub-client',
		'g2crawler',
		'Gaisbot',
		'GalaxyBot',
		'genieBot',
		'Genieo',
		'GermCrawler',
		'gigabot',
		'GingerCrawler',
		'Girafabot',
		'Gluten Free Crawler',
		'gnam gnam spider',
		'Googlebot-Image',
		'Googlebot-Mobile',
		'Googlebot',
		'GrapeshotCrawler',
		'gslfbot',
		'GurujiBot',
		'HappyFunBot',
		'Healthbot',
		'heritrix',
		'hl_ftien_spider',
		'Holmes',
		'htdig',
		'httpunit',
		'httrack',
		'ia_archiver',
		'iaskspider',
		'iCCrawler',
		'ichiro',
		'igdeSpyder',
		'iisbot',
		'InAGist',
		'InfoWizards Reciprocal Link System PRO',
		'Insitesbot',
		'integromedb',
		'intelium_bot',
		'InterfaxScanBot',
		'IODC',
		'IOI',
		'ip-web-crawler.com',
		'ips-agent',
		'IRLbot',
		'IssueCrawler',
		'IstellaBot',
		'it2media-domain-crawler',
		'iZSearch',
		'Jaxified Bot',
		'JOC Web Spider',
		'jyxobot',
		'KoepaBot',
		'L.webis',
		'LapozzBot',
		'Larbin',
		'lb-spider',
		'LDSpider',
		'LexxeBot',
		'libwww',
		'Linguee Bot',
		'Link Valet',
		'linkdex',
		'LinkExaminer',
		'LinksManager.com_bot',
		'LinkpadBot',
		'LinksCrawler',
		'LinkWalker',
		'Lipperhey Link Explorer',
		'Lipperhey SEO Service',
		'Livelapbot',
		'lmspider',
		'lssbot',
		'lssrocketcrawler',
		'ltx71',
		'lufsbot',
		'lwp-trivial',
		'Mail.RU_Bot',
		'MegaIndex.ru',
		'mabontland',
		'magpie-crawler',
		'Mediapartners-Google',
		'memorybot',
		'MetaURI',
		'MJ12bot',
		'mlbot',
		'Mnogosearch',
		'mogimogi',
		'MojeekBot',
		'Monitive',
		'Moreoverbot',
		'Morning Paper',
		'Mrcgiguy',
		'MSIECrawler',
		'msnbot',
		'msrbot',
		'MVAClient',
		'mxbot',
		'NerdByNature.Bot',
		'NerdyBot',
		'netEstate NE Crawler',
		'netresearchserver',
		'NetSeer Crawler',
		'NewsGator',
		'NextGenSearchBot',
		'NG-Search',
		'ngbot',
		'nicebot',
		'niki-bot',
		'Notifixious',
		'noxtrumbot',
		'Nusearch Spider',
		'nutch',
		'NutchCVS',
		'Nymesis',
		'obot',
		'oegp',
		'ocrawler',
		'omgilibot',
		'OmniExplorer_Bot',
		'online link validator',
		'Online Website Link Checker',
		'OOZBOT',
		'openindexspider',
		'OpenWebSpider',
		'OrangeBot',
		'Orbiter',
		'ow.ly',
		'PaperLiBot',
		'Pingdom.com_bot',
		'Ploetz + Zeller',
		'page2rss',
		'PageBitesHyperBot',
		'panscient',
		'Peew',
		'PercolateCrawler',
		'phpcrawl',
		'Pizilla',
		'Plukkie',
		'polybot',
		'Pompos',
		'PostPost',
		'postrank',
		'proximic',
		'psbot',
		'purebot',
		'PycURL',
		'python-requests',
		'Python-urllib',
		'Qseero',
		'QuerySeekerSpider',
		'Qwantify',
		'Radian6',
		'RAMPyBot',
		'REL Link Checker',
		'RetrevoPageAnalyzer',
		'Riddler',
		'Robosourcer',
		'rogerbot',
		'RufusBot',
		'SandCrawler',
		'SBIder',
		'ScoutJet',
		'Scrapy',
		'ScreenerBot',
		'scribdbot',
		'Scrubby',
		'SearchmetricsBot',
		'SearchSight',
		'seekbot',
		'semanticdiscovery',
		'SemrushBot',
		'Sensis Web Crawler',
		'SEOChat::Bot',
		'seokicks-robot',
		'SEOstats',
		'Seznam screenshot-generator',
		'seznambot',
		'Shim-Crawler',
		'ShopWiki',
		'Shoula robot',
		'ShowyouBot',
		'SimpleCrawler',
		'sistrix crawler',
		'SiteBar',
		'sitebot',
		'siteexplorer.info',
		'SklikBot',
		'slider.com',
		'slurp',
		'smtbot',
		'Snappy',
		'sogou spider',
		'sogou',
		'Sosospider',
		'spbot',
		'Speedy Spider',
		'speedy',
		'SpiderMan',
		'Sqworm',
		'SSL-Crawler',
		'StackRambler',
		'suggybot',
		'summify',
		'SurdotlyBot',
		'SurveyBot',
		'SynooBot',
		'tagoobot',
		'teoma',
		'TerrawizBot',
		'TheSuBot',
		'Thumbnail.CZ robot',
		'TinEye',
		'toplistbot',
		'trendictionbot',
		'TrueBot',
		'truwoGPS',
		'turnitinbot',
		'TweetedTimes Bot',
		'TweetmemeBot',
		'twengabot',
		'Twitterbot',
		'uMBot',
		'UnisterBot',
		'UnwindFetchor',
		'updated',
		'urlappendbot',
		'Urlfilebot',
		'urlresolver',
		'UsineNouvelleCrawler',
		'Vagabondo',
		'Vivante Link Checker',
		'voilabot',
		'Vortex',
		'voyager/',
		'VYU2',
		'web-archive-net.com.bot',
		'Websquash.com',
		'WeSEE:Ads/PageBot',
		'wbsearchbot',
		'webcollage',
		'webcompanycrawler',
		'webcrawler',
		'webmon ',
		'WeSEE:Search',
		'wf84',
		'wget',
		'wocbot',
		'WoFindeIch Robot',
		'WomlpeFactory',
		'woriobot',
		'wotbox',
		'Xaldon_WebSpider',
		'Xenu Link Sleuth',
		'xintellibot',
		'XML Sitemaps Generator',
		'XoviBot',
		'Y!J-ASR',
		'yacy',
		'yacybot',
		'Yahoo Link Preview',
		'Yahoo! Slurp China',
		'Yahoo! Slurp',
		'YahooSeeker',
		'YahooSeeker-Testing',
		'YandexBot',
		'YandexImages',
		'YandexMetrika',
		'yandex',
		'yanga',
		'Yasaklibot',
		'yeti',
		'YioopBot',
		'YisouSpider',
		'YodaoBot',
		'yoogliFetchAgent',
		'yoozBot',
		'YoudaoBot',
		'Zao',
		'Zealbot',
		'zspider',
		'ZyBorg'
	];
	
	$headers = [
		'HTTP_USER_AGENT',
		'HTTP_X_OPERAMINI_PHONE_UA',
		'HTTP_X_DEVICE_USER_AGENT',
		'HTTP_X_ORIGINAL_USER_AGENT',
		'HTTP_X_SKYFIRE_PHONE',
		'HTTP_X_BOLT_PHONE_UA',
		'HTTP_DEVICE_STOCK_UA',
		'HTTP_X_UCBROWSER_DEVICE_UA',
	];
	
	static $pattern;

	if ($pattern === NULL)
	{
		$pattern = implode('|', array_map(function($a){
			return preg_quote($a, '#');
		}, $crawlers));
	}
	
	foreach ($headers as $header)
	{
		if (!empty($_SERVER[$header]) && preg_match('#'.$pattern.'#i', $_SERVER[$header], $match))
		{
			return $match[0];
		}
	}
	
	return FALSE;
}

/*
NeoFrag Alpha 0.1.5
./neofrag/helpers/user_agent.php
*/