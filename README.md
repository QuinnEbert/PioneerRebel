Quinn Ebert's "Pioneer Rebel" Home Theatre Control Toolkit
==========================================================

Homebrew control tools for the Pioneer VSX-1022-K (and possibly others) Home Theatre receiver (using the Telnet interface).

What's Currently Supported
==========================

* Doesn't really do too much yet.  Still working on getting this thing "fleshed out" so that I can use it for something interesting.

What's Currently Planned
========================

* Originally, I just wanted to see if I could manage to make something that I could use in a "home automation" sense, for lack of a better term, specifically, to mute/unmute my receiver when certain things were going on with my computer (a mid 2011 iMac by chance).
* Now, I'm considering making some sort of interface for this, probably at least a web UI.  Also have some interesting "fleeting thoughts" of things I could do with mobile apps for this as well (we'll see about that).

Software Disclaimer
===================

"Pioneer Rebel" is a software project wholly unaffiliated with Pioneer Electronics.  In no way is "Pioneer Rebel" authorized, supported, acknowledged, or endorsed by Pioneer Electronics.  FURTHERMORE, you use this software project AT YOUR OWN RISK.  The possibility indeed exists that bugs exist in this software which could lead to catastrophic failure of your Pioneer Electronics equipment.  In no event shall Quinn Ebert or Pioneer Electronics be held in any way liable for malfunction, damage, or destruction to your personal property (including but not limited to personal property created and/or manufactured by Pioneer Electronics) arising from your use of (or failure to use) this project.

Disclaimer Addendum
===================

I wish to impress that, while I feel like I risked my VSX-1022-K for my own educational benefit on this project, I have not yet bricked it or caused it any harm (to my knowledge).

This being said, I cannot stress enough, you use this software *AT YOUR OWN RISK!*  While I expect most users of my same model of receiver will have the same enjoyable experience using this that I have had while developing and using it, you *ARE* using a wholly-unsupported software product to control a piece of electronic equipment that carries a tremendous amount of electrical current through it.

In my case, I have 5 computers, a 37-inch LCD TV, and 5 game consoles (not to mention a few other pieces of networking and video-related hardware) in my combination office/theater, and between all of that, my receiver uses at least 100W more power than all of that combined at any given time.  In the event that the software were to cause the receiver to short (not that I know this is even possible mind you), you're dealing with an extreme fire hazard, among other potential safety hazards (including an electrocution hazard).

For the final time, this software is provided for your use, at your own peril.  By using this project, you agree automatically that you hold (especially) myself, not to mention Pioneer Electronics, totally non-responsible for any effects of using this project, including holding both myself and Pioneer Electronics wholly non-responsible for any damage to physical property, personal injury, or even death.

Hardware Compatibility
======================

Currently, this is only tested with, and developed against the U.S. English (American) Pioneer VSX-1022-K.  This being said, I've been told that the Telnet interface is common to many different Pioneer products; your mileage may vary.

Known Limitations
=================

I tried like heck to get the "xyzVL" direct-volume-control-set commands that I have seen described a number of different places online to work with my 1022-K and was unable to do so, so I will not be leveraging those for the time being.  I will use the ability to get the current volume, raise volume incrementally, and lower volume incrementally to achieve a similar effect for now.