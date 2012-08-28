<?php include_once 'model/files.php'; if(bNewestTxt(__FILE__)) { ?>
<h3>The Idea</h3>
<p>
Asset chain in javscript and wikitext.
</p>
<p>
So I think that the idea will be all mediated with javascript include() syntax. If we have an include of a text file we will un-wikify it. If we have an include whose innermost extension is a php file we will go to php. If we have an include whose innermost extension is an html file then we will go to html. This is assuming that an html file gets displayed before a php and the index.php can be called by hand to start the ball rolling, like on a post.
</p>
<p>
If it is html then everything needs to be pulled in from all of the html files so that server side includes are unnecessary.
</p>
<p>
Then we need to allow for a social media login and an edit button over content that was produced this way.
</p>

<?php } ?>