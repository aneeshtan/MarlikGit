<?php
/**
*
* @package UNIVERSAL URL SWITCHER FOR NUKELEARN														
* @version $Id: universal.php 11:18 PM 3/19/2011 Aneeshtan $						
* @copyright (c) Nukelearn Group  http://www.nukelearn.com											
* @license http://creativecommons.org/licenses/by-nc-sa/3.0 Attribution-Noncommercial-Share Alike
*
*/

$urlin = array(
//--CALENDAR--------------------------
"\"(?<!/)modules.php\?name=jCalendar&y=([0-9]*)&m=([0-9]*)\"",
"\"(?<!/)modules.php\?name=jCalendar\"",
//News---------------------------------
"\"(?<!/)modules.php\?name=News&file=article&sid=([0-9]*)&mode=([a-z]*)&order=([0-9]*)&thold=([0-9]*)\"",
"\"(?<!/)modules.php\?name=News&new_topic=([0-9]*)&pagenum=([0-9]*)\"",
"\"(?<!/)modules.php\?name=News&file=categories&op=newindex&catid=([0-9]*)&pagenum=([0-9]*)\"",
"\"(?<!/)modules.php\?name=News&file=categories&op=newindex&catid=([0-9]*)\"",
"\"(?<!/)modules.php\?name=News&file=print&sid=([0-9]*)\"",
"\"(?<!/)modules.php\?name=News&file=print\"",
"\"(?<!/)modules.php\?name=News&file=friend&op=FriendSend&sid=([0-9]*)\"",
"\"(?<!/)modules.php\?name=News&file=friend\"",
"\"(?<!/)modules.php\?name=News&pagenum=([0-9]*)\"",
"\"(?<!/)modules.php\?name=News&file=article&op=newindex&catid=([0-9]*)\"",
"\"(?<!/)modules.php\?name=News&file=article&sid=([0-9]*)&title=(.*)\"",
"\"(?<!/)modules.php\?name=News&file=article&sid=([0-9]*)&pagenum=([0-9]*)\"",
"\"(?<!/)modules.php\?name=News&file=article&sid=([0-9]*)\"",
"\"(?<!/)modules.php\?name=News&file=pdf&sid=([0-9]*)\"",
"\"(?<!/)modules.php\?name=News&new_topic=([0-9]*)\"",
"\"(?<!/)modules.php\?name=News&file=categories&category=(.*)&pagenum=([0-9]*)\"",
"\"(?<!/)modules.php\?name=News&file=categories&category=(.*)\"",
"\"(?<!/)modules.php\?name=News&file=tags&tag=([a-zA-Z0-9]*)&pagenum=([0-9]*)\"",
"\"(?<!/)modules.php\?name=News&file=tags&tag=([a-zA-Z0-9]*)\"",
//Topics------------------------------
"\"(?<!/)modules.php\?name=Topics&pagenum=([0-9]*)\"",
"\"(?<!/)modules.php\?name=Topics\"", 
//SEARCH------------------------------
"\"(?<!/)modules.php\?name=Search&author=([a-zA-Z0-9]*)&topic=([0-9]*)&min=([0-9]*)&query=([a-zA-Z0-9]*)&type=([a-zA-Z]*)&category=([0-9]*)\"",
"\"(?<!/)modules.php\?name=Search&author=([a-zA-Z0-9]*)&topic=([0-9]*)&min=([0-9]*)&query=([a-zA-Z0-9]*)&type=([a-zA-Z]*)\"",
"\"(?<!/)modules.php\?name=Search&query=([a-zA-Z0-9]*)&author=([a-zA-Z0-9]*)\"",
"\"(?<!/)modules.php\?name=Search&query=([a-zA-Z0-9]*)\"",
"\"(?<!/)modules.php\?name=Search&author=([a-zA-Z0-9]*)\"",
"\"(?<!/)modules.php\?name=Search&topic=([0-9]*)\"",
"\"(?<!/)modules.php\?name=Search&type=users\"",
"\"(?<!/)modules.php\?name=Search\"",
//YOUR_ACCOUNT-----------------------
"\"(?<!/)modules.php\?name=Your_Account&op=userinfo&username=([a-zA-Z0-9_-]*)&blogPage=([0-9]*)\"",
"\"(?<!/)modules.php\?name=Your_Account&op=userinfo&username=([a-zA-Z0-9_-]*)\"",
"\"(?<!/)modules.php\?name=Your_Account&op=edituser\"",
"\"(?<!/)modules.php\?name=Your_Account&op=edithome\"",
"\"(?<!/)modules.php\?name=Your_Account&op=editcomm\"",
"\"(?<!/)modules.php\?name=Your_Account&op=chgtheme\"",
"\"(?<!/)modules.php\?name=Your_Account&op=logout\"",
"\"(?<!/)modules.php\?name=Your_Account&op=delete\"",
"\"(?<!/)modules.php\?name=Your_Account&op=new_user\"",
"\"(?<!/)modules.php\?name=Your_Account&op=pass_lost\"",
"\"(?<!/)modules.php\?name=Your_Account&op=ShowCookiesRedirect\"",
"\"(?<!/)modules.php\?name=Your_Account&op=memberlist&pagenum=([0-9]*)\"",
"\"(?<!/)modules.php\?name=Your_Account&op=memberlist\"",
//Blog -------------
"\"(?<!/)modules.php\?name=Your_Account&op=live_broadcast&page=([0-9]*)\"",
"\"(?<!/)modules.php\?name=Your_Account&op=live_broadcast\"",
"\"(?<!/)modules.php\?name=Your_Account&op=share_it&bid=([0-9]*)&title=([a-zA-Z0-9_-]*)\"",
"\"(?<!/)modules.php\?name=Your_Account&op=show_post&bid=([0-9]*)\"",
"\"(?<!/)modules.php\?name=Your_Account\"",
//SURVEY -------------
"\"(?<!/)modules.php\?name=Surveys&op=results&pollID=([0-9]*)\"",
"\"(?<!/)modules.php\?name=Surveys&op=([a-zA-Z0-9_-]*)\"",
"\"(?<!/)modules.php\?name=Surveys\"",
//Downloads -------------
"\"(?<!/)modules.php\?name=Downloads&cid=([0-9]*)&min=([0-9]*)&orderby=([a-zA-Z]*)\"",
"\"(?<!/)modules.php\?name=Downloads&cid=([0-9]*)&orderby=([a-zA-Z]*)\"",
"\"(?<!/)modules.php\?name=Downloads&cid=([0-9]*)\"",
"\"(?<!/)modules.php\?name=Downloads&op=MostPopular&ratenum=([0-9]*)&ratetype=(percent|num)\"",
"\"(?<!/)modules.php\?name=Downloads&op=MostPopular\"",
"\"(?<!/)modules.php\?name=Downloads&op=NewDownloadsDate&selectdate=([0-9]*)\"",
"\"(?<!/)modules.php\?name=Downloads&op=NewDownloads&newdownloadshowdays=([0-9]*)\"",
"\"(?<!/)modules.php\?name=Downloads&op=NewDownloads\"",
"\"(?<!/)modules.php\?name=Downloads&op=brokendownload&lid=([0-9]*)\"",
"\"(?<!/)modules.php\?name=Downloads&op=getit&lid=([0-9]*)&title=(.*)\"",
"\"(?<!/)modules.php\?name=Downloads&op=getit&lid=([0-9]*)\"",
"\"(?<!/)modules.php\?name=Downloads&op=modifydownloadrequest&lid=([0-9]*)\"",
"\"(?<!/)modules.php\?name=Downloads&op=search&query=([a-zA-Z0-9_-]*)&min=([0-9]*)&orderby=([a-zA-Z]*)\"",
"\"(?<!/)modules.php\?name=Downloads&op=search&query=([a-zA-Z0-9_-]*)&orderby=([a-zA-Z]*)\"",
"\"(?<!/)modules.php\?name=Downloads&op=search\"",
"\"(?<!/)modules.php\?name=Submit_Downloads\"",
"\"(?<!/)modules.php\?name=Downloads&op=tags&term=([a-zA-Z0-9_-]*)\"",

//NAVIGATION -------------
"\"(?<!/)modules.php\?app=mod&name=navigation&op=Account&value=([0-9]*)\"",
"\"(?<!/)modules.php\?app=mod&name=navigation&op=login\"",
"\"(?<!/)modules.php\?app=mod&name=navigation&op=search\"",
//PAGES -------------
"\"(?<!/)modules.php\?name=Pages&term=(.*)\"",
"\"(?<!/)modules.php\?name=Pages\"",

//--OTHERS--------------------------
"\"(?<!/)index.php\"",
"\"(?<!/)modules.php\?name=Submit_News\"",
"\"(?<!/)modules.php\?name=Stories_Archive\"",
"\"(?<!/)modules.php\?name=AvantGo\"",
"\"(?<!/)modules.php\?name=Downloads\"",
"\"(?<!/)modules.php\?name=phpBB3\"",
"\"(?<!/)modules.php\?name=Site_Map\"",
"\"(?<!/)modules.php\?name=Contact_Plus\"",
"\"(?<!/)modules.php\?name=Recommend_Us\"",
"\"(?<!/)modules.php\?name=Link_To_Us\"",
"\"(?<!/)modules.php\?name=Advertising\"",
"\"(?<!/)modules.php\?name=Top\"",
"\"(?<!/)modules.php\?name=Web_Links\"",
"\"(?<!/)modules.php\?name=Dynamic_Keywords\"",
"\"(?<!/)modules.php\?name=Statistics\"",
"\"(?<!/)modules.php\?name=News\"",
"\"(?<!/)rss.php\""
);



$urlout = array(
//--CALENDAR--------------------------
"Calendar-\\1-\\2.html",
"Calendar.html",
//News---------------------------------
"article-\\1-\\2-\\3-\\4.html",
"article-topic\\1-page\\2.html",
"article-category\\1-page\\2.html",
"article-category-\\1.html",
"article-print-\\1.html",
"article-print.html",
"article-friend-\\1.html",
"article-friend.html",
"article-page-\\1.html",
"article-cat-\\1.html",
"article/\\1/\\2",
"article/\\1/c/\\2",
"article/\\1",
"pdf/\\1",
"article-topic-\\1.html",
"category/\\1/\\2",
"category/\\1",
"article/tags/\\1/\\2",
"article/tags/\\1",
//TOPICS------------------------------
"topics/\\1",
"topics.html",
//SEARCH------------------------------
"search-\\1-\\2-\\3-\\4-\\5-\\6.html",
"search-\\1-\\2-\\3-\\4-\\5.html",
"search-\\1-\\2.html",
"search/\\1",
"search/author/\\1",
"search/topic/\\1",
"search-users.html",
"search.html",
//YOUR_ACCOUNT-----------------------
"blog/\\1/\\2",
"account/\\1",
"account-edituser.html",
"account-edithome.html",
"account-editcomm.html",
"account-chgtheme.html",
"account-logout.html",
"account-delete.html",
"account-new_user.html",
"account-pass_lost.html",
"account-cookies.html",
"memberlist-\\1.html",
"memberlist.html",
//Blog -------------
"blog/live/\\1",
"blog/live",
"blog/share/\\1/\\2",
"blog/post/\\1", 
"account.html",
//SURVEY -------------
"survey-results-\\1.html",
"survey-\\1.html",
"surveys.html",
//Downloads -------------
"downloads-cat\\1-\\2-order\\3.html",
"downloads-cat\\1-order\\2.html",
"downloads-cat\\1.html",
"downloads-rate\\1-\\2.html",
"downloads-mostpop.html",
"downloads-showdnew\\1.html",
"downloads-shownew\\1.html",
"downloads-new.html",
"downloads-broken\\1.html",
"downloads/\\1/\\2",
"downloads/\\1",
"downloads-mod\\1.html",
"downloads-search-\\1-\\2-order\\3.html",
"downloads-search-\\1-order\\2.html",
"downloads-search.html",
"submit_downloads.html",
"downloads/tags/\\1",
//NAVIGATION -------------
"navigation/user/\\1",
"navigation/login",
"navigation/search",
//PAGES -------------
"page/\\1",
"Pages.html",
"index.html",
"submit.html",
"archive.html",
"avantgo.html",
"downloads.html",
"forums.html",
"sitemap.html",
"Contact.html",
"recommend.html",
"link2us.html",
"Advertising.html",
"top.html",
"links.html",
"Keywords.html",
"Statistics.html",
"news.html",
"feed"
);
?>