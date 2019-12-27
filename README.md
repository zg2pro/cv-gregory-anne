[![build status](https://gitlab.com/zg2pro/cv.gregory.anne/badges/master/build.svg)](https://gitlab.com/zg2pro/cv.gregory.anne/commits/master)

consult it online at http://cv.gregory.anne.free.fr

**one of my oldest websites, first released in 2005**. At that time it was basic html/css.
In 2007, learning XML technologies, it became XML/XSP powered. It is still powered by XSL today.
It has been redesigned with fullPage.js in 2015, but still wanting to maintain version-1 design.

So what's basically interesting with this project is that it demonstrates that 2 totally different 
styles can be applied to a same website, if you visit http://cv.gregory.anne.free.fr and http://cv.gregory.anne.free.fr/version-1<br/>
you will be able to see that the contents are the same, only styles differ and this is thanks to the XSLT engine triggered in the php code.

In a near future, I should remove the php which makes no sense in this kind of website that can be serverless, I can also
integrate the fullpage.js into a react/vue framework. That will be the third generation of cv.gregory.anne.free.fr!


## continuous integration

with gitlab, automatically deployed to production by ftp

This GITHUB repository is synced with gitlab (git push commands are sent from gitlab toward github), 
means you should not clone this project, nor should you fork and ask for a merge from github, please
<b>do everything from GITLAB</b> : the git url is: https://gitlab.com/zg2pro/cv.gregory.anne.git 
and the gitlab project url is: https://gitlab.com/zg2pro/cv.gregory.anne
<br/>Thank you.