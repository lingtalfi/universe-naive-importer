Dev Notes
=================
2018-03-06




The uni tool uses its own classes
====================================

When you execute the uni tool, it executes its own bigbang file (in class-program), which
basically autoloads the classes from the "class-program" directory.



Using the local universe for development
======================

Here is what I recommend for myself (or you?) when extending the uni tool:

- use `uni tolink` on this project before starting (so that if you change a class
like ApplicationItemManager, you can commit ApplicationManager once and it will
commit the real ApplicationItemManager planet, and not the local version of the
ApplicationItemManager in uni tool).

Do all your dev using the symlinks.
When all is done, do the following:

- uni todir (back to dir) 
- uni clean (to get rid of those pesty .git that mess with the uni tool final commit) 