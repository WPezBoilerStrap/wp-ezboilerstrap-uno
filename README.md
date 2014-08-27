WordPress Theme: WPezBoilerStrap Uno
====================================

## Current status: Work In Progress - Please feel free to look but don't expect working perfection.

###In the meantime, here are some notes / thoughts that should help:

##### IMPORTANT - This is a different - and ideally better - way to think about WP theme'ing. If you're looking for just add water simplicity please move on. Actually, the 
concept here is quite simple. However, within the context of tradtional WP thinking it might be a bit much for some to want to swallow. 


- This theme is 50% working example and 50% real theme. That is, its intention is to showcase the WP ModlVueCtrlr Theme Architecture (which is a riff on but should not be confused with proper MVC).


- The WP ModlVueCtrlr theme architecture leans on WPezClasses: https://github.com/WPezClasses. Some of you might be put off by this. That's fine. This is not a mass market approach. 

The objective is to remove ongoing friction from bespoke WordPress theme (and application?) development. Specifically, to allow you to build your own (and/or shared) goto library of parent themes 
and modules / components  such that the initial build is closer to setup and configuring, with more time left for the down & dirty custom "stuff". 


- DRY is another top priority (and thus the love for WPezClasses).


- With WP ModlVueCtrlr the Vue(s) strives to be only the structure of the (traditional) theme. They are implemented via a series of (traditional) WP template parts. (Note: Currently, there can 
be some logic in a Vue. I know that's not the trending ideal but I also don't see it as - within the context of WordPress way of thinking - a deal breaker at the moment .) 


- The Modl is where the magic happens. It tells the Vue(s) what they need to know when they need to know it. For example, if the 404 page doesn't need a left and right sidebar, you can do that
via the Modl. If blog post X is heavy traffic and you want alter the layout to take advantage of that, the Modl would help make that a lot easier. 


- The (base / parent) Modl (which is also ultimately a class in WPezClasses) is also semi-independent of the theme. That is, multiple (default) Modl(s) can be developed for a given theme. You 
can then pick the Modl that is the best fit for the current project. The next choice would be to either craft an entirely new Modl (from that), or use the theme's child Modl (which extends
the parent you picked) to do any customizations.


- In addtionl, modules such as the UI controls for sorting, paging, etc. are done via classes already in WPezClasses. You'll see these reference in the Modl. Because we want to be DRY, don't we?
Yes, not to worry, you can also use your own code just as you've always have. 


- Flexibility. Did I mention flexibility is also a priority. That said, there are times, just like in real life, where having more power means having greater responsibilites as well. This is
no different. You can't have it both ways. "No pain. No gain." Correct?
Not that the pain here is great. It's really more the new learning curve and embracing your new found #BadAssary. Once you get past that, the upside is nearly infinite.


- Share-ability is also in the DNA here. If you and I both lean on the WP ModlVueCtrlr Theme Architecture, then our ability to share solutions becomes greater. DRY FTW again! But at the 
community and not just the individual level.


Enjoy!!